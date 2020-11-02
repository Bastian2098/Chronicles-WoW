<?php

class Connection{

    private $mysqli;
    private $result;

    function open(){
        $this -> mysqli = new mysqli("localhost", "root", "", "BD_CHRONICLES_WOW");
        $this -> mysqli -> set_charset("utf8");
    }

    function close(){
        $this -> mysqli -> close();
    }

    function execute($sentence){
        $this -> result = $this -> msqli -> query($sentence);
    }

    function extract(){
        return $this -> result -> fetch_row();
    }

    function count(){
        return ($this -> result != null)?$this -> result -> num_rows:0;
    }

}

?>