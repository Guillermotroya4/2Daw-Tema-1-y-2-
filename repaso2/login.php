<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
    
<?php
$nombre= $_POST['nombre'];
$contraseña = $_POST['password'];
$contraseñaRepe = $_POST['passwordrepe'];



if ($contraseña == $contraseñaRepe) {
    echo "Las contraseñas son validas";
    echo "<br>";

    echo "Nombre: " . $nombre;
    echo "<br>";
    echo "Contraseña: " . $contraseña;
}else{
    echo "Las copntraseñas deben ser igual";
}


?>

</body>
</html>