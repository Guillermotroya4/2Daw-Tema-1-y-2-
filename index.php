<!--Hecho por Guillermo Troya Albarrán-->
<?php
session_start();
require('producto.php');


?>
<!DOCTYPE html>
<html>

<head>
    <title>Supermercado Manolo</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            display: flex;
            flex-direction: column;
            align-items: center;
            background-color: #008080;
        }

        header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            background-color: #F0E68C;
            width: 100%;
            padding: 1rem;
            box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.1);
        }

        header h1 {
            font-size: 24px;
            color: #333;
            margin: 0;
            margin-left: 40pc;
            font-size: 5pc;
        }

        header img {
            height: 40px;
            width: 40px;
            cursor: pointer;
            margin-right: 15pc;
        }

        .menu {
            display: flex;
            flex-wrap: wrap;
            gap: 20px;
            padding: 20px;
            max-width: 1200px;
            justify-content: center;
        }

        .producto {
            display: flex;
            flex-direction: column;
            align-items: center;
            width: 200px;
            padding: 15px;
            border: 1px solid #ddd;
            border-radius: 8px;
            box-shadow: 0px 4px 6px rgba(0, 0, 0, 0.1);
            background-color: #FFEBCD;
        }

        .producto img {
            width: 100%;
            height: auto;
            border-radius: 5px;
            margin-bottom: 10px;
        }

        .producto h2 {
            font-size: 18px;
            color: #555;
            margin: 10px 0 5px;
            text-align: center;
        }

        .producto p {
            font-size: 16px;
            color: #888;
            margin: 0;
            text-align: center;
        }

        .producto form {
            margin-top: 10px;
            width: 100%;
            display: flex;
            justify-content: center;
        }

        .producto form input[type="submit"] {
            background-color: #28a745;
            color: white;
            border: none;
            padding: 8px 12px;
            border-radius: 5px;
            cursor: pointer;
        }

        .producto form input[type="submit"]:hover {
            background-color: #218838;
        }


    </style>
</head>

<body>

    <header>
        <h1>Mi Tienda</h1>
        <a href="carrito.php"><img src="img/cart.png"></a>

    </header>
    <?php

if (!isset($_SESSION['carrito'])) {
    $_SESSION['carrito'] = [];
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $producto = ["nombre" => $_POST['nombre'], "precio" => $_POST['precio']];
    $_SESSION['carrito'][] = $producto;
}
    echo "<div class='menu'>";
    

    foreach ($productos as $Producto) {
        echo "<br>";
        echo "<div class='producto'>";
        echo "<img src=" . $Producto->getImagen() . " alt=" . $Producto->getNombre() . ">";
        echo "<br>";
        echo "Nombre : " . $Producto->getNombre();
        echo "<br>";
        echo "Precio : " . $Producto->getPrecio();
        echo "<br>";
        echo "Categoria: " . $Producto->getCategoria();
        echo "<form method='POST'>";
        echo "<input type='hidden' name='nombre' value=" . $Producto->getNombre() . ">";
        echo "<input type='hidden' name='precio' value=" . $Producto->getPrecio() . ">";
        echo "<input type='submit' value='Añadir al carrito'>";
        echo "</form>";
        echo "</div>";

    }


    ?>
</div>
</body>

</html>

