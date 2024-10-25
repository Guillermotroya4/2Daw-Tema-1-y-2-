<!--Hecho por Guillermo Troya Albarrán-->
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Juego</title>
    <style>
        html {
            background-color: aliceblue;
        }

        header {
            background-color: black;
            color: white;
            text-align: center;
            width: 100%;
            height: 4pc;
        }



        .grid-container>div {
            background-color: lavender;
            border: 1px solid black;
            text-align: center;
            font-size: 30px;
            width: 90%;
        }



        .post {
            padding: auto;
        }

        .posts-grid {
            display: flex;
            flex-direction: column;
            gap: 20px;
            padding: 20px;
        }

        .post {
            background-color: #f0f0f0;
            border: 1px solid #ccc;
            padding: 20px;
            text-align: left;
            font-size: 18px;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
            border-radius: 8px;
            margin-bottom: 20px;
        }

        .main-grid {
            display: flex;
            flex-direction: column;
            gap: 20px;
            padding: 20px;
        }

        .main {
            background-color: #eda477;
            border: 1px solid #ccc;
            padding: 20px;
            text-align: left;
            font-size: 18px;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
            border-radius: 18px;
            margin-bottom: 20px;

        }
    </style>

</head>

<body>
    <header>
        <h1>Videojuego</h1>
    </header>

    <?php


    $tituloNuevo = $_POST['titulo'];
    $fechaNueva = $_POST['fecha'];
    $nomDesarrolladoraNueva = $_POST['desarrolladoraSelec'];
    $nomCategoriaNueva = $_POST['categoriaSelect'];





    //Esto es el select que nos servirá para que el usuario seleccione la forma en la que quiere filtrar los juegos

    echo "<div class='main'>";

    echo "<br>";
    echo "Titulo: " . $tituloNuevo;
    echo "<br>";
    echo "Fecha de Lanzamiento" . $fechaNueva;
    echo "<br>";
    echo "Desarrolladora: " . $nomDesarrolladoraNueva;
    echo "<br>";
    echo "Categoria: " . $nomCategoriaNueva;

    echo "</div>";


    ?>
</body>

</html>