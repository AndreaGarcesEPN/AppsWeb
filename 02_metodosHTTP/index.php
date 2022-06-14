<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Petición con GET</h1>
    <form method="GET" action="pagina2_resp_get.php">
        <fieldset>
            <legend>Información de pago virtual</legend>
            Nombre: <input type="text" name="nombre"/><br>
            Email: <input type="text" name="email"/><br>
            Num Tarjeta: <input type="text" name="numtarjeta"/><br>
            CVV: <input type="text" name="CVV"/><br>
            <input type="submit" value="Enviar"/>
        </fieldset>
    </form>
    <h1>Petición con POST</h1>
    <form method="POST" action="pagina2_resp_post.php">
        <fieldset>
            <legend>Información de pago virtual</legend>
            Nombre: <input type="text" name="nombre"/><br>
            Email: <input type="text" name="email"/><br>
            Num Tarjeta: <input type="text" name="numtarjeta"/><br>
            CVV: <input type="text" name="CVV"/><br>
            <input type="submit" value="Enviar"/>
        </fieldset>
    </form>
</body>
</html>