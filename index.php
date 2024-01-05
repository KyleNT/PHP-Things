<?php
define('HOST','localhost');
define('PORT','3307');
define('DATABASE','suporte_personalizado');
define('USER','root');
define('PASSWORD','');
define('BASED','http://localhost/ace9-sistemadesuporte/');



//Load Composer's autoloader
require 'vendor/autoload.php';

$autoload = function($class){
    include($class.'.php');
};

spl_autoload_register($autoload);

$pds = \MySql::conectar();

/*
Router::get('/home/?',function($par){
    echo $par[2].' Estou na home!';
});
*/
$homeController = new \controllers\HomeController();
$chamadoController = new \controllers\ChamadoController();
$adminController = new \controllers\adminController();

Router::get('/',function() use ($homeController){
    $homeController->index();
});

Router::get('/chamado',function() use ($chamadoController){
    if(isset($_GET['token'])){
        if($chamadoController->existeToken()){
            //O Tokelau existe, vamos renderizar o chamado
            //echo '<h2>Visualizando chamado: '.$_GET['token'].'</h2>';
            $white = $chamadoController->getPergunta($_GET['token']);
            $chamadoController->index($white);
        } else {
            die('Yuuka Alert 2: O token está setado, porém não existe!');
        }
        //echo '<h2>Visualizando chamado: 00000 </h2>';
    } else {
        die('Yuuka Alert 1: Apenas com o token do chamado para você conseguir interagir!');
    }
    
});

Router::get('/admin', function() use ($adminController){
    $adminController->index();
});

?>