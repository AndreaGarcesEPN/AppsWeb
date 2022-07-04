<?php
session_start();

if(!isset($_SESSION["nombre"]) && !isset($_SESSION["clave"])){
    if($_POST["nombre"] != "" && $_POST["clave"] != ""){
        $_SESSION["nombre"] = $_POST["nombre"];
        $_SESSION["clave"] = $_POST["clave"];
    }else{
        header("Location: login.php");
    }
}

$idioma = "en";
$nombre = isset($_POST["nombre"])?$_POST["nombre"]:"";
$clave = isset($_POST["clave"])?$_POST["clave"]:"";
$guardarPreferencias = isset($_POST["chkpreferencias"])?$_POST["chkpreferencias"]:"";

if($guardarPreferencias!=""){
    setcookie("c_nombre", $_SESSION["nombre"], 0);
    setcookie("c_clave", $_SESSION["clave"], 0);
    setcookie("c_preferencias", $guardarPreferencias, 0);
}

setcookie("idioma", "");
setcookie("idioma", $idioma, time()+(60*60*24));


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
    <h3>Bienvenido Usuario: <?php echo $_SESSION["nombre"]?></h3>
    <a href="panelPrincipalES.php">ES (Español)</a>
    <a href="panelPrincipalEN.php">EN (English)</a>
    <br>
    <br><a href="cerrarSesion.php">Cerrar Sesión</a>
    <br>
    <h2>Product List</h2>
    <?php
    echo nl2br(file_get_contents( "categorias\categorias_en.txt" ));
    ?>
</body>
</html>