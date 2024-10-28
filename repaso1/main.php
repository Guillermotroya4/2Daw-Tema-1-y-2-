<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario</title>
</head>
<body>
    <form action="login.php" method="post">
        <label for="nombre">Ingrese su nombre:</label>
        <input type="text" name="nombre" id="nombre">
        <br>
        <label for="email">Ingrese su email:</label>
        <input type="text" name="email" id="email">
        <br>
        <label for="password">Ingrese su contraseña</label>
        <input type="password" name="password" id="password">
        <br>
        <input type="submit" value="Enviar Login">
    </form>

</body>
</html>