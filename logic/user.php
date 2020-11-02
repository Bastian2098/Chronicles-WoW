<?php
require "persistence/connection.php";
require "persistence/userDAO.php";

class User{
    private $idUser;
    private $email;
    private $password;
    private $connection;
    private $userDAO;

    function User($_idUser, $_email, $_password){
        $this -> idUser = $_idUser;
        $this -> email = $_email;
        $this -> idUser = $_password;
        $this -> connection = new Connection();
        $this -> userDAO = new UserDAO($_idUser, $_email, $_password);
    }

    public function getIdUser(){
        return $this -> idUser;
    }

    public function getEmail(){
        return $this -> email;
    }

    public function getPass(){
        return $this -> password;
    }

    function authenticate(){
        $this -> connection -> open();
        $this -> connection -> execute($this -> userDAO -> authenticate());
        if($this -> connection -> count() == 1){
            $this -> idUser = $this -> connection -> extract()[0];
            return true;
        }else{
            return false;
        }
        $this -> connection -> close();
    }
}

?>