<?php
    $email = $_POST["email"];
    $password = $_POST["pass"];

    $user = new User("", $email, $password);
    if($user -> authenticate()){
        echo "autenticado";
    }else{
        echo "No se autentico";
    }
?>