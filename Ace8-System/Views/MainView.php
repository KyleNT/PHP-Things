<?php
    namespace Views;

    class MainView{

        
        
        private $filename;
        private $header;
        private $footer;

        const titulo = 'Projeto Ace 8';
        
        public $menuItems = array('Home' , 'Sobre', 'Contato');
        public $menuItemsR = array('Home' , 'Sobre', 'Contato');

        public function __construct($filename,$header = 'header',$footer = 'footer'){
            $this->filename = $filename;
            $this->header = $header;
            $this->footer = $footer;

            include('tradutor.php');
            $this->menuItemsR[0] = $trad['home'];
            $this->menuItemsR[1] = $trad['sobre2'];
            $this->menuItemsR[2] = $trad['contato'];
        }
        public function render($arr = []){
            include('pages/templates/'.$this->header.'.php');
            include('pages/'. $this->filename.'.php');
            include('pages/templates/'.$this->footer.'.php');
        }
    }
?>