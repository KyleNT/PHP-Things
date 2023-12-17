<?php
function myAutoLoad($class){
    $class = str_replace('\\','/',$class);
    //echo $class;
        if(file_exists('ace-2-classes/'.$class.'.php')){
            include('ace-2-classes/'.$class.'.php');
        } else {
            echo 'erro na classe';
        }
    }
    spl_autoload_register('myAutoLoad');
?>