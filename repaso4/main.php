<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <form action="categoria.php" method="post">
        <label for="email">Ingrese su email</label>
        <input type="text" name="email" id="email">
        <br>
        <label for="categoria">Elige una categoria:</label>
        <select name="categoria" id="categoria">
            <option name="furbo" id="furbo">Furbo</option>
            <option name="ciclismo" id="ciclismo">Ciclismo</option>
            <option name="basket" id="basket">Basket</option>
            <option name="tennis" id="tennis">Tennis</option>
        </select>
        <br>
        <input type="submit" value="Enviar Login">
    </form>

</body>

</html>