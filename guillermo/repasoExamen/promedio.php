<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Promedio</title>
</head>
<body>
    

<?php

function promedio($numeros) {
    
    $suma = array_sum($numeros);
    $promedio = $suma / count($numeros);
    return $promedio;
}

$numerosEjemplo = [10, 20, 30, 40, 500];

$promedioCalculado = promedio($numerosEjemplo);

echo "El promedio del arreglo es: " . $promedioCalculado;
echo "<br>";
?>


</body>
</html>