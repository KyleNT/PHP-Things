<?php
    
    namespace Controllers;
    
    class HomeController extends Controller
    {
        
        public function __construct(){
            $this->view = new \Views\MainView('home');
        }

        public function executar(){
            include('tradutor.php');
            $this->view->render(array('titulo'=>$trad['homepage']));
        }
    }

?>