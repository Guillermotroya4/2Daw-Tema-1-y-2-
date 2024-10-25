<!--Hecho por Guillermo Troya Albarrán-->
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Alquiler de coche</title>


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
            background-color: #FFFFF0;
        }
        section{
            align-items: center;
            text-align: center;
            background-color: #FFFFF0;
            padding: auto;
            
        }
        img{
            height: 30pc;
            width: 30pc;
        }
    </style>

</head>

<body>

<header>
    <h1>Alquiler de Coches</h1>
</header>
    <section>
    <?php
    require('clases.php');

    
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $imagen = $_POST['imagen'];
            $modelo = $_POST['modelo'];
            $color = $_POST['color'];
            $precioDia = $_POST['precioDia'];


            echo '<br>';
            echo '<br>';
            echo '<img src="' . $imagen . '" alt="' . $modelo . '">';
            echo '<br>';
            echo "<b>Modelo: </b>" . $modelo;
            echo '<br>';
            echo "<b>Color: </b>" . $color;
            echo '<br>';
            echo "<b>Precio de alquiler al día: </b>" . $precioDia;
            echo '<br>';
            echo '<form action="" method="post">';
            



            //Esto lo que hace que el post este escondido y no se vea, pero que podamos encontrar las variables más facilmente
            
            echo '<form action="" method="post">';
            echo '<input type="hidden" name="imagen" value="' . $imagen . '">';
            echo '<input type="hidden" name="modelo" value="' . $modelo . '">';
            echo '<input type="hidden" name="color" value="' . $color . '">';
            echo '<input type="hidden" name="precioDia" value="' . $precioDia . '">';
            echo '<label for="dias">Introduzca la cantidad de días que deseas alquilar el coche</label>';
            echo '<input type="number" id="dias" name="dias">';
            echo '<br>';
            echo '<button type="submit">Confirmar reserva</button>';
            echo '</form>';

            if (isset($_POST['dias'])) {
                $dias = $_POST['dias'];
                $total = $dias * $precioDia;
                echo '<br>';
                echo "<b>Total a pagar: </b>" . $total . " €";
                echo '<br>';
            }
        }




    ?>
    




    <?php

$dias = $_POST['dias'];
         function calculoDiasEuros($dias,$precioDia){

            return $dias * $precioDia;
        }

?>
    </section>
</body>

</html>




