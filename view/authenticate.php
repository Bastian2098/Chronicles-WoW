<?php
    $email = $_POST["email"];
    $password = $_POST["pass"];

    $user = new User("", $email, $password);
    if($user -> authenticate()){
        $_SESSION["id"] = $user -> getIdUser();
        header("Location: index.php?id=view/session.php");
    }else{
        header("Location: index.php?error=1");
    }
?>