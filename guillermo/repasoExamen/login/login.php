<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .container {
            background-color: #DEB887;
            padding: 30px;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            width: 300px;
            height: 80px;
            margin: auto;
            align-items: center;

        }
    </style>
</head>

<body>


<div class="container">
    <form id="login" method="post" action="#">
            <label for="nombre">Introduzca su nombre:</label>
            <input type="text" name="nombre" id="nombre">

            <label for="contraseña">Introduzca su contraseña</label>
            <input type="password" name="contraseña" id="contraseña">
            <br>
            <input type="submit" value="Enviar" id="Enviar">
    </form>
</div>

<?php

$nombre = $_POST['nombre'];
$contraseña = $_POST['contraseña'];


echo $nombre;
echo "<br>";
echo $contraseña;

?>


</body>

</html>