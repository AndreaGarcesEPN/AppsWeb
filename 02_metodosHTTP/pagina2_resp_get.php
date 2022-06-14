<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Parámetros enviados por Cliente</h1>
    <?php
    var_dump($_GET);
    ?>
    <h2>Información enviada por GET</h2>
    Nombre: <?php echo $_GET["nombre"]?><br>
    Correo: <?php echo $_GET["email"]?><br>
</body>
</html>