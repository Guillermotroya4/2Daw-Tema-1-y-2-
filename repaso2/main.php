<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<form action="login.php" method="post">
        <label for="nombre">Ingrese su nombre:</label>
        <input type="text" name="nombre" id="nombre">
        <br>
        <label for="password">Ingrese su contraseña</label>
        <input type="password" name="password" id="password">
        <br>
        <label for="passwordrepe">Repita contraseña</label>
        <input type="password" name="passwordrepe" id="passwordrepe">
        <br>
        <input type="submit" value="Enviar Login">
    </form>

</body>
</html>