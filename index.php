<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>

<body>
    <?php
        session_start();
        require "logic/user.php";

        $pgWithoutSession = array("view/recoverPass.php", "view/authenticate.php",);

        if(isset($_GET["sesion"]) && $_GET["sesion"] == 0){
            $_SESSION["id"] = null;
        }
        
        $id = null;
        if(isset($_GET["id"])){
            $id = $_GET["id"];
        }
        if(isset($id)){
            if(isset($_SESSION["id"]) || in_array($id, $pgWithoutSession)){
                include $id;
            }else{
                header("Location: index.php");
            }
        }else{
            include "view/login.php";
        }
        
    ?>
</body>

</html>