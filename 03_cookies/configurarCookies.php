<?php
    var_dump($_POST);
    $nombre = isset($_POST["nombre"])?$_POST["nombre"]:"";
    $clave = isset($_POST["clave"])?$_POST["clave"]:"";
    $sexo = isset($_POST["hm"])?$_POST["hm"]:"";
    $guardarPreferencias = isset($_POST["chkpreferencias"])?$_POST["chkpreferencias"]:"";

    //SETEO DE COOKIES

    if($guardarPreferencias!=""){
        setcookie("c_nombre", $nombre, 0);
        setcookie("c_clave", $clave, 0);
        setcookie("c_sexo", $sexo, 0);
        setcookie("c_preferencias", $guardarPreferencias, 0);
    }

    header("Location: mipanel.php");
?>