<!--Hecho por Guillermo Troya Albarrán-->
<?php
session_start();
?>
<!DOCTYPE html>
<html>

<head>
    <title>Carrito</title>
    <style>
        body{
            background-color:  #76d7c4 ;
        }
        header {
            display: flex;
            justify-content: center;
            align-items: center;
            background-color: #F0E68C;
            width: 100%;
            padding: 1rem;
            box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.1);
            margin-bottom: 2pc;
            margin-top: -1pc;
        }

        header h1 {
            font-size: 2rem;
            color: #333;
            margin: 0;
        }

        ul {
            list-style-type: none;
            padding: 0;
            max-width: 600px;
            margin: 0 auto;
            background-color:  #76d7c4 ;
        }

        li {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 1rem;
            margin-bottom: 1rem;
            background-color: #FAFAFA;
            border: 1px solid #DDD;
            border-radius: 8px;
            box-shadow: 0px 2px 4px rgba(0, 0, 0, 0.1);
        }

        li p {
            margin: 0;
            font-size: 1rem;
            color: #555;
        }

        h2 {
            text-align: center;
            font-size: 1.5rem;
            color: #333;
            margin-top: 2rem;
            margin-bottom: 1.5rem;
        }

        a {
            display: block;
            text-align: center;
            max-width: 200px;
            margin: 0 auto;
            padding: 0.5rem 1rem;
            background-color: #F0E68C;
            color: #333;
            text-decoration: none;
            font-weight: bold;
            border-radius: 4px;
            box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.1);
            transition: background-color 0.3s ease;
        }

    </style>
</head>

<body>
    <header>
        <h1>Carrito de la Compra</h1>
    </header>
    <?php

$carrito = $_SESSION['carrito'];
$total = 0;
foreach ($carrito as $producto) {       //Aqui haremos el conteo del precio que hay al añadir los productos
    $total += $producto['precio'];

}
    echo "<ul>";
        foreach ($carrito as $producto){    //for each que nos devolvera los productos guardados en session
            echo "<li>";
                echo "<p>" . $producto['nombre']; "</p>";
                echo "<p>" . $producto['precio']; "€</p>";
            echo "</li>";
        } 
        echo "<ul>";
        
    echo "<h2> Total: " . $total  . "€</h2>";
    ?>
    <a href="index.php">Volver a la tienda</a>
</body>

</html>