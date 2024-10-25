<!--Hecho por Guillermo Troya Albarrán-->
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <style>
        header{
            text-align: center;
            margin-top: -2pc;
            height: 5pc;
            font-size: 2pc;
            background-color: #B8860B;
        }
        html{
            align-items: center;
        }
        form{
            background-color: blanchedalmond;
            
        }
        div{
            text-align: left;
            background-color: #FFFFF0;
            align-items: left;
            height: auto;
            width: AUTO;
        }
        input , select{
            background-color: #BDB76B;
        }
       
    </style>
</head>

<body>


<header>
<h1>Alquiler de Coches</h1>

</header>
    <section>
    <form action='?' method="post">
        <label for='modeloCoches'>Indica el modelo de coche que deseas:</label>
        <select name='modeloCoches' id='modeloCoches'>
            <option value=''></option>
            <option value='Toyota Corolla'>Toyota Corolla</option>
            <option value='Ford Fiesta'>Ford Fiesta</option>
            <option value='Chevrolet Spark'>Chevrolet Spark</option>
            <option value='Honda Civic'>Honda Civic</option>
            <option value='Volkswagen Golf'>Volkswagen Golf</option>
        </select>
        <br>
        <label for="precioMax">Precio máximo a pagar al dia</label>
        <input type="number" id="precioMax" name="precioMax">
        <br>
        <input type="submit" value="Buscar Coche">
    </form>
    </section>
    <br>


    <?php
    require('clases.php');

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $modeloSeleccionado = $_POST['modeloCoches'];
        $precioMaximo = $_POST['precioMax'];

        foreach ($coches as $Coche) {
            $cumpleFiltroModelo = empty($modeloSeleccionado) || $Coche->getModelo() == $modeloSeleccionado;
            $cumpleFiltroPrecio = empty($precioMaximo) || $Coche->getPrecioDia() <= $precioMaximo;

        if ($cumpleFiltroModelo && $cumpleFiltroPrecio) {
            echo "<div>";
            echo '<form action="alquilar.php" method="post">';
            echo '<input type="hidden" name="imagen" value="' . $Coche->getImagen() . '">';
            echo '<input type="hidden" name="modelo" value="' . $Coche->getModelo() . '">';
            echo '<input type="hidden" name="color" value="' . $Coche->getColor() . '">';
            echo '<input type="hidden" name="precioDia" value="' . $Coche->getPrecioDia() . '">';
            echo '<img src="' . $Coche->getImagen() . '" alt="' . $Coche->getModelo() . '">';
            echo '<br>';
            echo "<b>Modelo: </b>" . $Coche->getModelo();
            echo '<br>';
            echo "<b>Color: </b>" . $Coche->getColor();
            echo '<br>';
            echo "<b>Precio de alquiler al día: </b>" . $Coche->getPrecioDia();
            echo '<br>';
            echo '<br>';
            echo '<br>';
            echo '<input type="submit" value="Alquilar Coche">';
            echo '<br>';
            echo '<br>';
            echo '</form>';
            echo "</div><hr>";

        }
    }

    }
    ?>


</body>

</html>