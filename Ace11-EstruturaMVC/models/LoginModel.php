<?php
    namespace models;

    class LoginModel extends Model {
        public $login = 'kraus';
        public $password = 'kraus';

        public function validationLogin($login, $password){
            if($login == $this->login && $password = $this->password){
                return true;
            }else{
                return false;
            }
        }
    }

    ?>