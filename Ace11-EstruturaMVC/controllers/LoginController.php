<?php
    namespace controllers;

    class LoginController extends Controller{
        public function __construct($view, $model){
            parent::__construct($view, $model);
        }

        public function index(){
            if(isset($_POST['acao'])){
                if($this->model->validationLogin($_POST['login'],$_POST['senha'])){
                    die('Logado!');
                } else {
                    die('Falhou!');
                }
            }
            $this->view->render('login.php');
        }
    }
?>