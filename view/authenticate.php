<?php
    $email = $_POST["email"];
    $pass = $_POST["pass"];

    $user = new User("", $email, $pass);
    if($user -> authenticate()){
        echo "autenticado";
    }else{
        echo "No se autentico";
    }
?>