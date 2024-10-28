<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<?php

$nombre= $_POST['nombre'];
$precio = $_POST['precio'];
$cantidad = $_POST['cantidad'];
$totalCompra = $cantidad * $precio;


echo "Nombre del producto: " . $nombre;
echo "<br>";
echo "cantidad del producto: " . $cantidad;
echo "<br>";
echo "Precio del producto: " . $precio;
echo "<br>";
echo "Total a pagar: " . $totalCompra . "€";
echo "<br>";

?>

</body>
</html>