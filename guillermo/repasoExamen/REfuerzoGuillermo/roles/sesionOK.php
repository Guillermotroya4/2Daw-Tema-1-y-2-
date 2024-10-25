<!--Hecho por Guillermo Troya Albarrán-->
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>

    <style>
        header {
            margin-top: -3pc;
            background-color: #DEB887;
            text-align: center;
            font-size: 2pc;
        }

        div {
            background-color: #DEB887;
            font-size: 3pc;
            margin-top: 100px;
            margin-left: 500px;
            margin-bottom: auto;
            margin-right: 200px;
            height: 25pc;
            width: 70pc;
            padding: auto;
        }

        html {
            background-color: #BDB76B;
        }
    </style>
</head>

<body>
    <header>
        <h1>Login</h1>
    </header>


    <?php
    require('clases.php');

    session_start();



    echo '<div>';

    if (isset($_SESSION['usuario'])) {

        if ($_SESSION['usuario']->getRol() == 'alumno') {
            echo "Usted se ha logeado con rol de alumno";
            $listaModulos = ['Daw', 'Dam', 'Programacion', 'Entornos Desarrollo'];
            echo '<br>';

            echo 'Módulos:';
            echo '<br>';
            foreach ($listaModulos as $listaModulos) {
                echo '<li>';
                echo $listaModulos;
                echo '<br>';
                echo '</li>';

            }
        } else if ($_SESSION['usuario']->getRol() == 'profesor') {
            echo "Usted se ha logeado con rol de profesor";
            $listaAlumnos = ['Jorge', 'Luis', 'Pepe', 'Paco'];
            echo '<br>';

            echo 'Alumnos:';
            echo '<br>';

            foreach ($listaAlumnos as $listaAlumno) {
                echo '<li>';
                echo $listaAlumno;
                echo '<br>';
                echo '</li>';
            }
        }
    } else {
        echo "no login";
    }

    echo '</div>';



    ?>

</body>

</html>