<?php
namespace Controllers;
class ContatoController extends Controller
{


    /*
    public function __construct(){
        
    }
    */
    public function executar(){
        if(isset($_POST['acao'])){
            \Models\ContatoModel::enviarFormulario();
            echo '<script>location.href="'.INCLUDE_PATH.'contato/sucesso"</script>';
            die();
        }

        /*
            \Router::rota('contato/?', function($par){
            echo $par[1];
            echo '<br />
            echo $par[2];
            $this->view = new \Views\MainView('contato-sucesso');
            $this->view->render(array('titulo'=>'Página de Contato'));
        });
         */
        
        \Router::rota('contato/sucesso', function(){
            include('tradutor.php');
            $this->view = new \Views\MainView('contato-sucesso');
            $this->view->render(array('titulo'=>$trad['pagina_de_contato']));
        });
        
        \Router::rota('contato', function(){
            include('tradutor.php');
            $this->view = new \Views\MainView('contato');
            $this->view->render(array('titulo'=>$trad['pagina_de_contato']));
        });
        
    }
}
?>