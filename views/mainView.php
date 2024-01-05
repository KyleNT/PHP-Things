<?php
    namespace views;

    class mainView
    {
        public static function render($file, $white = null){
            include('pages/'.$file.'.php');
        }
    }

?>