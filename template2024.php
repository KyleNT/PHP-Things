<?php
    class Template2024
    {
        public function render($arr, $file){
            $arquivo = file_get_contents('arquivos/'.$file);
            foreach($arr as $key=>$val){
                $arquivo = str_replace('{'.$key.'}',$val, $arquivo);
            }
            echo $arquivo;
        }
    }
    
?>