<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
    
    <?php
    $nombre = $_POST['nombre'];
    $email = $_POST['email'];
    $password = $_POST['password'];




    echo "<b>Nombre: </b>" . $nombre;
    echo "<br>";
    echo "<b>Email: </b>" . $email;
    echo "<br>";
    echo "<b>Contraseña: </b>" . $password;

?>

</body>
</html>