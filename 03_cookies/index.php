<?php
    $nombre = "";
    $clave = "";
    $sexo = "";
    $preferencias = "";
    $esHombre = false;
    $esMujer = false;

    if(isset($_COOKIE["c_preferencias"]) && $_COOKIE["c_preferencias"]!=""){
        $preferencias = true;
        $nombre = $_COOKIE["c_nombre"];
        $clave = $_COOKIE["c_clave"];
        $sexo = $_COOKIE["c_sexo"];
        if($sexo!=""){
            $esHombre = ($sexo == "h")?true:false;
            $esMujer = ($sexo == "m")?true:false;
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
    <h1>Login Ejemplo</h1>
    <form method="POST" action="configurarCookies.php">
        <fieldset>
            Usuario:<br>
            <input type="text" name="nombre" value="<?php echo $nombre ?>"/><br>
            Clave:<br>
            <input type="password" name="clave" value="<?php echo $clave ?>"/><br>
            Sexo:<br>
            <input type="radio" name="hm" value="h" <?php echo ($esHombre)?"checked":""?>> Hombre
            <input type="radio" name="hm" value="m" <?php echo ($esMujer)?"checked":""?>> Mujer
            <br>
            <br>
            <input type="checkbox" name="chkpreferencias" <?php echo ($preferencias)?"checked":""?>> Recordar mis datos
            <br>
            <br>
            <input type="submit" value="Enviar">
        </fieldset>
    </form>
</body>
</html>