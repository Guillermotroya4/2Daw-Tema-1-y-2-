<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadenas</title>
</head>
<body>
    
<?php
function es_palindromo($cadena) {
    $cadena = strtolower(str_replace(' ', '', $cadena));

    $invertida = strrev($cadena);

    return $cadena === $invertida;
}

$texto1 = "Anita lava la tina";
$texto2 = "Hola mundo";

if (es_palindromo($texto1)) {
    echo "'$texto1' es un palíndromo.<br>";
} else {
    echo "'$texto1' no es un palíndromo.<br>";
}

if (es_palindromo($texto2)) {
    echo "'$texto2' es un palíndromo.<br>";
} else {
    echo "'$texto2' no es un palíndromo.<br>";
}
?>

</body>
</html>