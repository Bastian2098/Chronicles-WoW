<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>

<body>
    <?php
        require "logic/user.php";
        
        $id = null;
        if(isset($_GET["id"])){
            $id = $_GET["id"];
        }
        if(isset($id)){
            include $id;
        }else{
            include "view/login.php";
        }
        
    ?>
</body>

</html>