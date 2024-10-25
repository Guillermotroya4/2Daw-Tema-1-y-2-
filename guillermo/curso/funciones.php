<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
    <?php

    //funciones
    $num1 = 5;
    $num2 = 10;


    function sumar(){
        echo "Soy una funcion para suma";
        echo "<br>";
    }


    sumar();

    function sumarNumeros($num1,$num2){
        return $num1 + $num2;
        echo "<br>";
    }

echo sumarNumeros($num1,1);


function sumarnumerosRetornos($num1,$num2){
    return $num1 + $num2;

}
$resultado = sumarnumerosRetornos($num1,$num2);
echo "<br>";
echo $resultado;

    ?>
</body>
</html>