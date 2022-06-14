<?php
session_start();
//Se crean las sesiones

if(!isset($_SESSION["nombre"]) && !isset($_SESSION["clave"])){
    if($_POST["nombre"] != "" && $_POST["clave"] != ""){
        $_SESSION["nombre"] = $_POST["nombre"];
        $_SESSION["clave"] = $_POST["clave"];
    }else{
        header("Location: index.php");
    }
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
    <h1>PANEL PRINCIPAL</h1>
    <h3>Bienvenido <?php echo $_SESSION["nombre"] ?></h3>
    <p><a href="otrapagina.php">Navegar a otra pagina dentro de la zona privada</a></p>
    <hr>
    <p><a href="cerrarsesion.php">Cerrar sesion</a></p>
</body>
</html>