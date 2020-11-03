<div>
    <?php
    include "view/header.php";
    ?>
</div>
<div>
    <form action=<?php echo "index.php?id=view/authenticate.php"; ?> method="POST">
        <p>Email</p>
        <input type="email" name="email">
        <p>Password</p>
        <input type="password" name="pass"><br>
        <button type="submit">Join</button><br>
        <a href=<?php echo "index.php?id=view/recoverPass.php";?>>Forgot your password?</a><br>
        <?php if(isset($_GET["error"])){
                echo "Correo o contraseña incorrecta";
                } ?>
    </form>
</div>