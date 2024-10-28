<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <form action="producto.php" method="post">
        <label for="nombre">Ingrese el nombre del producto:</label>
        <input type="text" name="nombre" id="nombre">
        <br>        
        <label for="cantidad">Ingrese cantidad del producto:</label>
        <input type="number" name="cantidad" id="cantidad">
        <br>
        <label for="precio">Ingrese el precio del producto:</label>
        <input type="number" name="precio" id="precio">
        <br>
        <input type="submit" value="Enviar Login">
    </form>

</body>

</html>