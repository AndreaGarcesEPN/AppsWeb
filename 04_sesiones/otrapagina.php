<?php
session_start();

//Controlar el acceso cuando exista una sesion creada

if(!isset($_SESSION["nombre"]) && !isset($_SESSION["clave"])){
    header("Location: index.php");
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Otra pagina interna en mi aplicacion web (zona privada)</h1>
    <h3>Bienvenido <?php echo $_SESSION["nombre"] ?></h3>
    <p><a href="mipanel.php">Ir al Panel Principal</a></p>
    <hr>
    <p><a href="cerrarsesion.php">Cerrar sesion</a></p>
</body>
</html>