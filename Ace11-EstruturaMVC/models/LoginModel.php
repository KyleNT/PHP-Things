<?php
    namespace models;

    class LoginModel extends Model {
        public $login = '';
        public $password = '';

        public function validationLogin($login, $password){
            if($login == $this->login && $password = $this->password){
                return true;
            }else{
                return false;
            }
        }
    }

    ?>
