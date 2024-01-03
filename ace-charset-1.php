<?php

##AULA 1
#Redirect #header('Location: http://127.0.0.1::3307');

#Imagem
#header('Content-type: image/png');
#readfile('SeloIacomus.png');

#PDF
//header("Content-type:application/pdf");
// It will be called downloaded.pdf
//header("Content-Disposition:attachment;filename=\"AAdG.pdf\"");
// The PDF source is in original.pdf
//readfile("AArtedaGuerra.pdf");
//die();

##AULA 2
/*
function tonsila(){
    static $belinda = 0;
    // Quando inicia a variável, tudo bem, mas quando ela já existe, ela incrementa 
    $belinda++;
    return $belinda;
}


echo tonsila();
echo '<br />';
echo tonsila();

class AceK1 {
    function __construct(){

    }

    public function black_bird(){
        static $mid = 0;
        $mid++;
        return $mid;
    }
}

$thiago = new AceK1();
echo $thiago->black_bird();
echo ', ';
echo $thiago->black_bird();
*/

##AULA 3 - BUFFER
//ob_start();
//Não mande nada, até que eu mande.
//Envia, assim que tudo estiver pronto, manda a resposta toda de uma vez
/*
$bufa = ob_get_contents(); //guarda tudo no bufa
ob_end_clean(); //apaga a bufa
echo $bufa; //está na bufa
//ob_end_flush();
*/

##AULA 4 - Variável de Variável
/*
$A_Monocotiledônea = "suzu";
$Flowaris = "A_Monocotiledônea";
$O_Dicotiledônea = "Flowaris";
$Suzuran = "O_Dicotiledônea";
$suzu = "Suzuran";


$suzu; //Suzuran
$$suzu; //O_Dicotiledônea
$$$suzu; //Flowaris
$$$$suzu; //A_Monocotiledônea
$$$$$suzu; //suzu

echo $suzu;
*/
##AULA 5 - Recursividade

/*
tablatura();
function tablatura(){
    static $i = 0;
    echo 'Tabla, chamando tablas!';
    echo '<br />';
    $i++;
    if($i < 3){
        tablatura();
    }
}
*/

##AULA 6 - Variáveis como funções
/*
$darada = function($nome){
    echo $nome;
};

//$darada('Karitê');
function macadamia(){
    $crowphilis = function(){
        echo '☠';
    };
    $crowphilis();
}

$funçãoMacadâmica = 'macadamia';
//call_user_func($funçãoMacadâmica);

//Se for função
if(is_callable($darada)){
    echo 'Cimba';
}
*/

##AULA 7 - Callbacks e Instanceof
/*
class Esu
{
    
}

class Desu
{
    
}

$esu = new Esu();
$desu = new Desu();
//verificar se esu faz referência a desu

if($esu instanceof Esu){
    echo 'A variável "esu" faz referência a classe Esu';
}

function ille($b, $a = "Hilota"){
    if($b instanceof Closure)
        $b($a);
}

ille(function($nome){
    echo "Olá ".$nome;
});
*/

##AULA 8 - Expressões Regulares I
//$keikoot = "Keiki boot";

//if(preg_match('/ki/', $keikoot)){
//    echo "true";
//};

//preg_match('/(.*?)ki(.*)/', $keikoot,$retornoot);
//print_r($retornoot);
//echo $retornoot[0];
/*
function cpmiValido($cpmi){
    $expression = '/[0-9]{3}\.[0-9]{3}\.[0-9]{3}-[0-9]{2}/';
    return preg_match($expression, $cpmi);
}

if(isset($_POST['dação'])){
    $cpmi = $_POST['cpmi'];

    if(cpmiValido($cpmi)){
        echo 'O CPMI é Válido';
    } else {
        echo 'O CPMI não é Válido';
    }
}
*/

##AULA 9 - Expressões Regulares II
/*
$str= '<div class="velbs">
<h2> Olá mundo! </h2>
</div>
<div class="velbs2">
<h2> Frase II </h2>
</div>';

preg_match_all('/<div class="(.*?)">(.*?)<\/div>/s', $str, $matches);


echo htmlentities($matches[2][0]);

$strong = 'Guilhotina
padrão';
if(preg_match('/guilhotina\\r\\npadrão/is',$strong)){
    echo 'ok';
}
*/

###AULA 10 - Variáveis externas
/*
$mandro = "Mandrila";
$mandral = "Mandrão";

$mandril = function() use ($mandro, $mandral){
    echo $mandro;
};

$mandril();
*/

##Aula 11 - Cache
//include('Cache.php');
//$cache = new Cache;
//echo $cache->readCache()->conteudo;

##AULA 12 - Variáveis Globais
/*
$thiago = "Thiago";
function tostão(){
    global $thiago;
    echo $thiago;
}

tostão();

class Tostália
{
    function __construct(){
        global $thiago;
        echo $thiago;
    }
}

new Tostália();

*/
###2024 Programming
##AULA 13 - Template
/*
include('template2024.php');
$template24 = new Template2024();
$template24->render(['titulo'=>'ISC', 'nome'=>'Íbis Sport Clube', 'ano'=>'2024'], 'sobre.phtml');
*/
##AULA 14 - INI SET
//mudar set de tempo de execução
//ini_set('max_execution_time', 11);
//Limite de memória
//ini_set('memory_limit','-1');
//sleep(12);
//echo '<h3>Hikárico</h3>'
##AULA 15
#Github



##AULA 16 Data e Hora avançados
//Converte uma data e outra
//$date = DateTime::createFromFormat("d/m/Y","23/03/2001");
//echo $date->format("Y-m-d");
//date_default_timezone_set("America/Sao_Paulo");
//echo date('d/m/Y H:i:s',time());
//echo date('d/m/Y H:i:s',strtotime('2001-03-23 14:17:25'));
//echo date('d/m/Y H:i:s',time()+60*60*24);

##AULA 17
//Spaceship operatior
/*
function unhal(){ 
    return 'a'<=>'z';
}
echo unhal();
*/

##AULA 18 - Array em constantes
//define('Lançamento_de_base_de_dados',array('host'=>'localhost', 'dbname'=>'devweb', 'user'=>'root', 'password'=>'nadeshiko'));
//print_r(Lançamento_de_base_de_dados);

##AULA 19
/* Closures
class Dab
{
    public function sendMessage($n){
        if($n instanceof Closure){
            //closure, callback
            //$n();
            //chamar outra função
            $n = $n->bindTo($this);
            $n();
        } else {
            //
        }
    }

    public function alg(){
        echo 'Chamando a ALG';
    }
}
$dab = new Dab();
$dab->sendMessage(function() use ($dab){
    //echo 'Olá Dab!';
    $dab->alg();
});
*/
##AULA 20
/* Variável como referência

$nomália = "Shovel";
//o & altera globalmente
function testália(&$nomália){
    #global $nomália;
    $nomália = "Hikarii";
}

testália($nomália);
echo $nomália;
*/

##AULA 21
/* Variável como referência 2
$nomália = "Shovel";
$testola = &$nomália; #testola é uma referência a variável nomália

$testola = "Hikarii";
echo $nomália;
*/

##AULA 22
/* Operador Ternário
$nomol = "Shnitzel";
//$mensagem = "Olá ".(isset($nomol) ? $nomol : "Visitante");
$mensagem = "Olá ".($nomol == 'Shnitzel' ? $nomol : "Visitante");
echo $mensagem;
echo '<br/>';

$postRequest = (isset($_POST["algo"])) ? $_POST["algo"] :"Não existe o post";
echo $postRequest;
*/

##AULA 23 - Null coalescing operator
/*
//Ao invés de verificar um if, pega o post nome, se for false, pega outro, se der errado, dá outro
//se for null, não retorna nada, mas se for false, retorna false
$valor = $_POST['alembique'] ?? $_POST['alembique_2'] ?? 'Erro crítico sistemático Dom Hakurei Vascaíno';
//Interrogação com dois pontos se for false, null neste caso, só aceita verdadeiros, não irá retornar nada.
$valor2 = false ?: 'Erro crítico sistemático Dom Hakurei Vascaíno';
echo $valor2;
*/

##AULA 24 - Variáveis externas em funções
/*
class ISR
{
    public function index(){
        echo "Chamando ISR";
    }
}

class PLT
{
    public function index(){
        echo "Chamando PLT";
    }

    public function callBack($func){
        $func();
    }
}

$isr = new ISR;
$plt = new PLT;

//use chama o objeto fora da função
$plt->callBack(function() use ($isr){
    //echo "Olá PLT";
    $isr->index();
});
*/
##AULA 25 - Nullable types
/*
//Retorna String
function nulla() :? string{
    return 3;
}
function nullol(?string $numerio){
    return $numerio;
}
$numerol = nulla();
$numberol = nullol(12);

var_dump($numberol);
*/

##AULA 26 - Múltiplas variáveis em uma linha
/*
$hikarii_1 = $hikarii_2 = $hikarii_3 = function(){
    echo "Dreissig";
};

$hikarii_1();
*/

##AULA 27 - Cast
/*
//$numbol = intval('19');
//Cast
//$numbol = (int) '18';
$numbol = (string) 19;
//$numbol = (float) 19;  funciona
var_dump( $numbol );
*/

##AULA 28 - Classes Anônimas
/*
class Utils
{
    public function printMsg($msg){
        $msg->showMessage();
    }
}

$utils = new Utils();
//Classe anônima, pode criar na hora, e descarta no sistema
$utils->printMsg(new Class{
    public function showMessage(){
        echo 'Sein';
    }
});
*/

##AULA 29 - Log de Eventos
/*
date_default_timezone_set("America/Sao_Paulo");
$variaço = 'Will';
if ($variaço == 'Will'){
    echo 'Registrando o arquivo de log em: '.date('d/m/Y H:i:s');
    error_log(date('d/m/Y H:i:s').' Hikarificação de Erro concluída'."\n",3,'will_error_log.log');
}
*/

##AULA 30 - BitWise
/*
$xil = 13;
$yil = 22;

echo $xil & $yil;
*/

##AULA 31 - Operadores lógicos avançados
$nomul = 'Draglet';
//Verdadeiro T e T em AND e OR
//Verdadeiro T e F em XOR
if($nomul == 'Draglet' xor $nomul == ''){
    echo 'verdade';
}
?>
