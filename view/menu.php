<?php
    $user = new User($_SESSION["id"]);
    $user -> query();
?>
<h1>
    Bienvenido
</h1><br>
Usuario: <?php echo $user -> getEmail(); ?><br>
<a href="index.php?sesion=0">Cerrar sesion</a>
