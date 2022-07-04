<?php
    $nombre = "";
    $clave = "";
    $preferencias = "";

    if(isset($_COOKIE["c_preferencias"]) && $_COOKIE["c_preferencias"]!=""){
        $preferencias = true;
        $nombre = $_COOKIE["c_nombre"];
        $clave = $_COOKIE["c_clave"];
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
    <h1>LOGIN</h1>
    <form method="POST" action= 
        <?php 
        if(isset($_COOKIE["idioma"]) && $_COOKIE["idioma"]=="es"){
            echo "panelPrincipalES.php";
        }elseif(isset($_COOKIE["idioma"]) && $_COOKIE["idioma"]=="en"){
            echo "panelPrincipalEN.php";
        }else{
            echo "panelPrincipalES.php";
        }
        ?>>
        <fieldset>
            Usuario:<br>
            <input type="text" name="nombre" value="<?php echo $nombre ?>"/><br>
            Clave:<br>
            <input type="password" name="clave" value="<?php echo $clave ?>"/><br>
            <br>
            <input type="checkbox" name="chkpreferencias" <?php echo ($preferencias)?"checked":""?>> Recordarme
            <br>
            <br>
            <input type="submit" value="Enviar">
        </fieldset>
    </form>
</body>
</html>