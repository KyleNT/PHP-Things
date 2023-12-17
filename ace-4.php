<?php
#Mini Módulos 1
    ///Aula 1
    //if(file_exists('singe.txt')){
        //echo 'O arquivo existe';
    //}else{
        //Criação de arquivo novo
        //$content = "Son Biten est un singe dans Touhou 19 \r\n Ligne 1 \r\n Ligne 2";
        //Insere
        //file_put_contents('singe.txt', $content);
        //Lê arquivos ou links
        $content = file_get_contents('singe.txt');
        //$content = file_get_contents('https://en.wikipedia.org/wiki/Politics_of_South_Korea')
        //nl2br subsitui a quebra de linha do sistema para a tag html
        echo nl2br($content);
        //echo $content;
        //for($i = 0; $i < 5; $i++){
            //$conteudal = 'Singe '.$i;
            //file_put_contents('Singe'.$i.'.txt',$conteudal);
            //Deleta
            //unlink('Singe'.$i.'.txt');
        //}
    //}
    ///Aula 2
    //Nova pasta
    //mkdir('singe');
    //is_dir verifica a pasta
    echo '<br/>';
    if(is_dir('singe')){
        echo 'Pasta macaco';
    } else {
        echo 'Sem pasta macaco';
    }
    echo '<br/>';
    //deletar pasta
    //rmdir('singe');
    //Mostrar aquivos de pasta
    /*
    if($handle = opendir('ace-2-classes')){
        echo "Manipulador de diretório: $handle\n";
        echo "Arquivos:\n";

        // Esta é a forma correta de varrer o diretório
        while (false !== ($file = readdir($handle))) {
            if($file == '.' || $file == '..'){
                continue;
            }
            if(is_dir('ace-2-classes/'.$file) == false){
                //é arquivo
            } else {
                //é pasta
            }
            echo "$file\n";
            echo '<br />';
        }

        // Esta é a forma INCORRETA de varrer o diretório
        while ($file = readdir($handle)) {
            if($file == '.' || $file == '..'){
                continue;
            }
            echo "$file\n";
            echo '<br />';
        }

        closedir($handle);
        }
        */

### MINI-MÓDULO 2
        //Aula 1
//XML tem tags que servem para array
$xisma = simplexml_load_file('ace-4.xml');
//Printa em forma de array
//print_r($xisma);
//Retorna em objeto
echo $xisma->informações->channel->item->nome;
echo '<br />';
echo $xisma->informações2->item->nome;
echo '<br />';
//Ler arquivo XML
//Criando XML a partir d eum array
$arraes = array(
    //Conteúdo => Tag
    '2:29' => 'Canaa',
    '2:21' => 'Capitao_de_Mar_e_Guerra',
    'Festa' => array(
        '2:10' => 'Chimub',
    ),
);
//Variável que instancia o elemento pai
$xismol = new SimpleXMLElement('<root/>');
//Passa o primeiro parâmetro um array, e segundo um array com array e o addChild, para dizer XML
array_walk_recursive($arraes, array($xismol, 'addChild'));
file_put_contents('ace-4-1.xml',$xismol->asXML());

//Lê arquivo XML
$contente = simplexml_load_file('ace-4-1.xml');
echo $contente->Canaa;


//Escrita e Leitura com função
function escreverXML($arriégua, $nomeDoArquivo){
    //Variável que instancia o elemento pai
    $xismol = new SimpleXMLElement('<root/>');
    //Passa o primeiro parâmetro um array, e segundo um array com array e o addChild, para dizer XML
    array_walk_recursive($arriégua, array($xismol, 'addChild'));
    file_put_contents($nomeDoArquivo,$xismol->asXML());

}
escreverXML(array('Chimub'=>'Festa', 'Caminhão'=>'Caminhao_de_carga'), 'ace-4-2.xml');
echo '<br />';
$contentola = simplexml_load_file('ace-4-2.xml');
echo $contentola->Caminhao_de_carga;
echo '<br />';

    //Aula 2
//Declara o json
//"" Objeto: Termo
$jason_chimubense = '{"b0":"Berlinda", "a":{"0":"Chimub", "1":"Festa"}, "b":2, "c":3}';

//var_dump(json_decode($jason_chimubense, true));
//Decodificação do Json
$objetoDireto = json_decode($jason_chimubense);
$arrayOD = json_decode($jason_chimubense,true);
//Objeto
echo $objetoDireto->b0;
echo '<br />';
//Array unidimensional
echo $arrayOD['b0'];
echo '<br />';
//Array multidimensional
echo $arrayOD['a']['0'];
echo '<br />';

//$arraialDeCanudos = ['nome'=>'Chimub', 'cidade'=>'Mar de Espanha'];
//$jsonvanrroes = json_encode($arraialDeCanudos);

//echo $jsonvanrroes;
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ace 4 - Minimódulos</title>
</head>
<body>
    <script type="text/javascript" src="https://code.jquery.com/jquery-3.7.0.min.js"></script>
    <script type="text/javascript">
        $(function(){
            //alert('Ace 4');
            //Ajax para request
            $.ajax({
                url:'ace-4-request.php',
                //Vai retornar um Json que é um array, e o automaticamente o JS vai converter o json do echo, para o array do php
                //é o FORMATO DO ARQUIVO, e não o nome e nem o nome da variável json_encode()
                dataType:'json'
            }).done(function(data){
                //se deletar o dataType, só vai retornar uma string, pois não foi informado ao JS que era um json
                console.log(data.nome);
            })
        })
        //Json é mais utilizado na web do que xml, que faz comunicar com o front e back end
    </script>
</body>
</html>
