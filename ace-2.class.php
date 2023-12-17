<?php
/**
 * Classe Exemplar
 */

    //Public, em qualquer lugar funciona
    //Private, só dentro da classe
    class PolPot
    {
        private $communistov1;
        public $communistov2;
        public static $communistov3 = 'Comunostatic';

        public function métodoPT(){
            echo 'Método da ideologia do PT';
        }

        private function métodoPSOL(){
            echo 'Métdo da ideologia do PSOL';
        }

        public static function métodoMarxistaLeninista(){
            echo 'Método estatista da ideologia Marxista-Leninista';
        }

        public function setCommunistov($communistov1){
            //this = Private
            //outro = Referente ao da função
            $this->communistov1 = $communistov1;
            
        }

        public function getCommunistov(){
            return $this->communistov1;
        }

    }
    

?>