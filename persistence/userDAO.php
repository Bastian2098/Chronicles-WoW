<?php

class UserDAO{
    private $idUser;
    private $email;
    private $password;

    function UserDAO($_idUser, $_email, $_password){
        $this -> idUser = $_idUser;
        $this -> email = $_email;
        $this -> idUser = $_password;
    }

    function authenticate(){
        return "select ID_USER from User where email = '".$this->email."' and password = '".$this->password."'";
    }
}


?>