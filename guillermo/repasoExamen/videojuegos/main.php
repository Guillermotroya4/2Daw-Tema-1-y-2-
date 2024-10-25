<!--Hecho por Guillermo Troya Albarrán-->
<?php
require("videojuegos.php");
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width='device-width', initial-scale=1.0">
    <title>Videojuegos</title>



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

        input {
            padding: auto;
            height: 10%;
            width: 10%;
            background-color: #7cbbc2;
            color: #e74e3f;
            font-size: 18px;


        }

        select {
            padding: auto;
            height: 10%;
            width: 10%;
            background-color: #7cbbc2;
            font-size: 18px;
            color: #e74e3f;
        }

        #enviar {
            background-color: #7cbbc2;
            font-size: 18px;
            color: #e74e3f;
        }
    </style>
</head>

<body>

    <header>
        <h1>Videojuegos</h1>
    </header>



    <?php
    echo "<nav>";

    //Esto es el select que nos servirá para que el usuario seleccione la forma en la que quiere filtrar los juegos

    echo "<div class='main'>";
    echo "<form action='?'>";
    echo "  <label for='desarrolladoraSelec'>Indica como quiere filtrar:</label>";
    echo "  <select name='desarrolladoraSelec' id='desarrolladoraSelec'>";
    echo "    <option value=''></option>";
    echo "    <option value='Epic Games'>Epic Games</option>";
    echo "    <option value='Mojang'>Mojang</option>";
    echo "    <option value='Psyonix'>Psyonix</option>";
    echo "    <option value='Riot Games'>Riot Games</option>";
    echo "    <option value='Naughty Dog'>Naughty Dog</option>";
    echo "    <option value='CD Projekt Red'>CD Projekt Red</option>";
    echo "    <option value='Ubisoft'>Ubisoft</option>";
    echo "    <option value='Infinity Ward'>Infinity Ward</option>";
    echo "    <option value='Supergiant Games'>Supergiant Games</option>";
    echo "    <option value='InnerSloth'>InnerSloth</option>";
    echo "  </select>";
    echo "<form action='?'>";
    echo "  <label for='categoriaSelect'></label>";
    echo "  <select name='categoriaSelect' id='categoriaSelect'>";
    echo "    <option value=''></option>";
    echo "    <option value='Ciencia Ficción'>Ciencia Ficción</option>";
    echo "    <option value='Aventura'>Aventura</option>";
    echo "    <option value='Deportes'>Deportes</option>";
    echo "    <option value='Tiro en Primera Persona'>Tiro en Primera Persona</option>";
    echo "    <option value='Acción RPG'>Acción RPG</option>";
    echo "    <option value='Acción Aventura'>Acción Aventura</option>";
    echo "    <option value='Roguelike'>Roguelike</option>";
    echo "    <option value='Multijugador'>Multijugador</option>";
    echo "  </select>";

    echo "<label for='texto'> </label><br>";
    echo "<input type='text' id='textoFiltrar' name='textoFiltrar'><br>";
    echo "  <br><br>";
    echo "  <input type='submit' value='Buscar' id='enviar'> ";
    echo "</form>";
    echo "</div>";

    echo "</nav>";




    //for each para imprimmir todos los vieojuegos con sus respectivos parametros




    $categoriaSeleccionado = $_GET['categoriaSelect'];
    $desarrolladoraSeleccionado = $_GET['desarrolladoraSelec'];
    $textoFiltrar = $_GET['textoFiltrar'];



    foreach ($videojuegos as $videojuego) {



        $cumpleFiltrotitulo = empty($textoFiltrar) || (str_contains($videojuego->getTitulo(), $textoFiltrar));
        $cumpleFlitroCategoria = empty($categoriaSeleccionado) || ($categoriaSeleccionado === $videojuego->getCategoria()->getNombre());
        $cumpleFlitroDesarrolladora = empty($desarrolladoraSeleccionado) || ($desarrolladoraSeleccionado === $videojuego->getDesarrolladora()->getNombre());

        if ($cumpleFlitroCategoria && $cumpleFlitroDesarrolladora && $cumpleFiltrotitulo) {


            echo "<div class='post'>";
            echo "<h4>Título:</h4> " . $videojuego->getTitulo() . "<br>";
            echo "<b>Fecha de publicación:</b> " . $videojuego->getFechaPublicacion()  . "<br>";
            echo "<b>Desarrolladora:</b> " . $videojuego->getDesarrolladora()->getNombre()  . " <b>Id:</b> " . $videojuego->getDesarrolladora()->getId() . "<br>";
            echo "<b>Categoría:</b> " . $videojuego->getCategoria()->getNombre()  . " <b>Id:</b> " . $videojuego->getCategoria()->getId() . "<br>";
            echo "<br>";
            echo "</div>";
        }
    }












    echo "</div>";

    echo "<a href='http://localhost/guillermo/videojuegos/nuevoJuego.php'>" . "Nuevo Juevo" . "</a>";

    ?>
</body>

</html>