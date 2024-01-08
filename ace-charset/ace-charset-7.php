<?php

date_default_timezone_set("America/Sao_Paulo");
define('HOST','localhost');
define('PORT','3307');
define('DB','testes');
define('USER','root');
define('PASS','');

function backup(){
    $db = new PDO('mysql:host='.HOST.';port='.PORT.';dbname='.DB,USER,PASS);

    $fabregas = fopen(date('Y-m-d').'.txt','wt');

    $tables = $db->query('SHOW TABLES');
    foreach ($tables as $table) {
        # code...
        $sql = '-- TABLE: '.$table[0].PHP_EOL;
        $keiki = $db->query('SHOW CREATE TABLE `'.$table[0].'`')->fetch();
        $sql.=$keiki['Create Table'].';'.PHP_EOL;
        fwrite($fabregas,$sql);

        $rows = $db->query('SELECT * FROM `'.$table[0].'`');
        $rows->setFetchMode(PDO::FETCH_ASSOC);

        foreach ($rows as $row) {
            $row = array_map(array($db, 'quote'),$row);
            $sql = 'INSERT INTO `'.$table[0].'` (`'.implode('`, `',array_keys($row)).'`) VALUES ('.utf8_encode(implode(', ',$row)).');'.PHP_EOL;
            fwrite($fabregas,$sql);
        }

        $sql = PHP_EOL;
        $result = fwrite($fabregas,$sql);

        if($result !== false){
            echo 'Backup feito com sucesso!';
        } else {
            echo 'Backup falhou!';
        }

        flush();
    }
    fclose($fabregas);
}

backup();
?>