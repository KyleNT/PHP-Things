<?php
namespace Controllers;
class SobreController extends Controller
{


    public function __construct(){
        $this->view = new \Views\MainView('sobre');
    }
    public function executar(){
        include('tradutor.php');
        $this->view->render(array('titulo'=>$trad['sobre']));
    }
}
?>