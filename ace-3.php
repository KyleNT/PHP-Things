<?php
#### BANCO DE DADOS
date_default_timezone_set('America/Recife');
//Aula 1
    //ERA A PORRA DA PORTA
    $pdo19 = new PDO('mysql:host=localhost;port=3307;dbname=touhou19','root','', array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"));
    $pdo19->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
//Aula 2
    //Pega geral
    //$sql = $pdo19->prepare("INSERT INTO `clientes` VALUES (null, 'Hisami', 'Yomotsu', '2023-08-15 11:56:00')");
    //Pega de formulário
    //$sql = $pdo19->prepare("INSERT INTO `clientes` VALUES (null, ?, ?, ?)");

    if(isset($_POST['ação'])){ 
        $nome = $_POST['nome'];
        $sobrenome = $_POST['sobrenome'];
        $momentoRegistro = date('Y-m-d H:i:s');

        //Pega de formulário
        $sql = $pdo19->prepare("INSERT INTO `clientes` VALUES (null,?,?,?)");
        $sql->execute(array($nome, $sobrenome, $momentoRegistro));
        echo 'Cliente inserido com sucesso';
    }

//Aula 3 - UPDATE
$id = 2;
$nome_1 = 'Son';
$nome_2 = 'Bitensis';
//Query Insegura
//$sql_1 = $pdo19->prepare("UPDATE `clientes` SET nomeCliente='Son', sobrenomeCliente='Biten' WHERE idCliente = $id");
//Query Segura
$sql_1 = $pdo19->prepare("UPDATE `clientes` SET nomeCliente=?, sobrenomeCliente=? WHERE idCliente = $id");
//AND = Funciona como E
//OR = Funciona como OU
//$sql_1 = $pdo19->prepare("UPDATE `clientes` SET nomeCliente='Son', sobrenomeCliente='Biten' WHERE nomeCliente='Marisa' OR nomeCliente'Sanae'");
//if($sql_1->execute(array($nome_1, $nome_2))){
    //echo $nome_1 . ' ' . $nome_2 . ' atualizado';
//}

//Aula 4 - Delete
echo '<br/>';
$id_2 = 3;
//Query Inseguro
//$sql_2 = $pdo19->prepare("DELETE FROM `clientes` WHERE idCliente = 3");
//Query Seguro contra SQL Injection
$sql_2 = $pdo19->prepare("DELETE FROM `clientes` WHERE idCliente = ?");
//if($sql_2->execute(array($id))){
    //echo 'Cliente deletado';
    //alter table clientes AUTO_INCREMENT = 1

//}

//Aula 5
echo '<br/>';
/*
$sql_3 = $pdo19->prepare("SELECT * FROM blog_th19 WHERE categoria_id = ?");
$sql_3->execute(array($_GET['categoria_id']));

$info = $sql_3->fetchAll();

//Visualizar de forma menos canônica, mas técnica
//echo '<pre>';
//print_r($info);
//echo '</pre>';

foreach($info as $key => $value){
    echo 'Título: ' . $value['titulo'];
    echo '<br />';
    echo 'Post: ' . $value['conteudo'];
    echo '<hr>';
}
*/

/*
for($i = 0; $i < count($info); $i++){
    echo 'Título: ' . $info[$i]['titulo'];
    echo '<br />';
    echo 'Post: ' . $info[$i]['conteudo'];
    echo '<hr>';    
}
*/

$sql_3 = $pdo19->prepare("SELECT * FROM blog_categorias");
$sql_3->execute();

$info = $sql_3->fetchAll();

//Visualizar de forma menos canônica, mas técnica
//echo '<pre>';
//print_r($info);
//echo '</pre>';

/*
foreach($info as $key => $value){
    $categoria_id = $value['id'];
    echo 'Exibindo posts de ' . $value['nome'];
    echo '<br />';
    $sql_4 = $pdo19->prepare("SELECT * FROM blog_th19 WHERE categoria_id = $categoria_id");
    $sql_4->execute();
    $infoPosts = $sql_4->fetchAll();
    foreach ($infoPosts as $key => $value) {
        echo 'Título: ' . $value['titulo'];
        echo '<br />';
        echo 'Post: ' . $value['conteudo'];
        echo '<hr>';
    }
}
*/

//Inner Join junta, ON Filtra excultados específicos
$sql_4 = $pdo19->prepare("SELECT `blog_th19`.*,`blog_categorias`.*,`blog_th19`.`idPost` AS `th19_id` FROM `blog_th19`
 INNER JOIN `blog_categorias` ON `blog_th19`.`categoria_id` = `blog_categorias`.`id`");
$sql_4->execute();
$infoPostal = $sql_4->fetchAll(PDO::FETCH_ASSOC);

echo '<pre>';
//print_r($infoPostal);
echo '</pre>';


//Aula 6
//GROUP BY agrupa o que tem o mesmo no que foi selecionado
//LIMIT limitar o banco de dados
//$sql_5 = $pdo19->prepare("SELECT * FROM `clientela` GROUP BY cargo LIMIT 3");
//Order By: ordena na base do quê, da ordem crescente, ou ordem alfabética
//Desc: Ordem decrescente
//Asc: Ordem Ascendente
//$sql_5 = $pdo19->prepare("SELECT * FROM `clientela` GROUP BY cargo ORDER BY cargo ASC LIMIT 3");
//0,3: começa do índice 0 e conta até 3
$sql_5 = $pdo19->prepare("SELECT * FROM `clientela` ORDER BY cargo ASC LIMIT 0,3");
$sql_5->execute();
$clientela = $sql_5->fetchAll();
foreach($clientela as $key => $value){
    echo $value['nome'];
    echo '<hr>';
}
echo '<br />';

//Aula 7
//Left Join: Quando junta os dois, quando o cargo bata com o id. Mesmo que não encontre o cargo, retorne o valor
//Right Join: é o contrário de Left Join. Retorna os não vazios.
//Left retorna dos clientes independente quando os cargos estiver vazio
//Right vem dos cargos independente se o cliente estiver vazio
//Se fosse o inner join só retornaria os dados previstos, sem os extras.
//$sql_6 = $pdo19->prepare("SELECT * FROM `clientela` LEFT JOIN `cargos` ON `clientela`.`cargo` = `cargos`.`id`");
$sql_6 = $pdo19->prepare("SELECT * FROM `clientela` RIGHT JOIN `cargos` ON `clientela`.`cargo` = `cargos`.`id`");
$sql_6->execute();
$clientela = $sql_6->fetchAll();
foreach($clientela as $key => $value){
    echo $value['nome'];
    echo ' | ';
    echo $value['nome_cargo'];
    echo '<hr>';
}

//Aula 8
echo '<br />';
define('HOST','localhost');
define('PORT','3307');
define('DB','touhou19');
define('USER','root');
define('PASS','');
echo '<br />';

//Try catch tenta executar o código, e se der exceção põe na variável $e, e criar um próprio erro.
try{
    $pdos = new PDO('mysql:host='.HOST.';port='.PORT.';dbname='.DB, USER, PASS, array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"));
    $pdos->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo 'O mesmo banco conectado';
}catch(Exception $e){
    echo 'Erro ao conectar';
}

$sql_7 = $pdos->prepare("SELECT * FROM posts9");
//$sql_7->execute();

//Aula 9
echo '<br />';
//Com este comando, não vai ter o risco, nunca vai ter conflito de informação
//$pdo19->exec("LOCK TABLES `clientela` WRITE");
//sleep(10);

//Aula 10
//Like: Pode começar com qualquer coisa, mas que tenha um caractere
$sql_8 = $pdo19->prepare("SELECT * FROM `clientela` WHERE email LIKE '%reimu%'");
$sql_8->execute();

$emails = $sql_8->fetchAll();

print_r($emails);
//Só retorna 1
//echo $sql_8->fetch()['email'];
echo '<br />';
//Aula 11
//in seleciona específicos índices
//$sql_9 = $pdo19->prepare("SELECT * FROM `clientela` WHERE id IN (1,2,3)");
//between seleciona o que está entre
$sql_9 = $pdo19->prepare("SELECT * FROM `clientela` WHERE data BETWEEN '2023-06-06' AND '2023-12-31'");
$sql_9->execute();

$emailsE = $sql_9->fetchAll();

print_r($emailsE);

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ace de Banco de Dados</title>
</head>
<body>
<form method="post">
    <!--<input type="text" name="nome" required /> -->
    <!-- <input type="text" name="sobrenome" required /> -->
    <!-- <input type="datetime-local" name="momentoRegistro" required /> -->
    <!-- <input type="submit" name="ação" value="Enviar!" /> -->

</form>
</body>
</html>

