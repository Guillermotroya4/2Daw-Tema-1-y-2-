<!--Hecho por Guillermo Troya Albarrán-->
<?php
require('clases.php');
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inicio de Sesión</title>
    <style>
        html {
            background-color: #BDB76B;
        }

        .container {
            background-color: #DEB887;
            padding: 30px;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            width: 300px;
            height: 80px;
            margin-top: 350px;
            margin-left: 800px;
            margin-bottom: 800px;
            margin-right: 200px;
            align-items: center;

        }
        .enviado{
            text-align: center;
        }
        
        

        
    </style>
</head>

<body>

    <div class="container">
        <form id="login" method="post" action="login.php">
            <div>
                <label for="nombre">Email:</label>
                <input type="text" name="email" id="email">
            </div>
            <div>
                <label for="contraseña">Contraseñadf:</label>
                <input type="password" name="password" id="password">
            </div>
            <div class="enviado">
                <br>
                <input type="submit"  value="Enviar" style="background-color: #BDB76B;" id="Enviar">
            </div>

        </form>
    </div>

    <?php


    if ($_SERVER['REQUEST_METHOD'] == "POST") {
        require_once('clases.php');

        $emailGet = $_POST['email'];

        $contraseñaGet = $_POST['password'];



        if ($emailGet == 'alumno@ies.com' && $contraseñaGet == 'alumno') {
            echo 'Login correcto';
            $_SESSION['usuario'] = new Usuario('alumno@ies.com', 'alumno');
            header('Location: sesionOK.php');
        } else if ($emailGet == 'profesor@ies.com' && $contraseñaGet == 'profesor') {
            echo 'Login correcto';
            $_SESSION['usuario'] = new Usuario('profesor@ies.com', 'profesor');
            header('Location: sesionOK.php');
        } else {
            echo 'Login incorrecto';
        }
    }

    ?>
</body>

</html>