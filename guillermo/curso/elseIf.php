<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
    <?php
    //estuctura control de flujo else

    $edad = 12;

    if ($edad >= 18) {
        echo"Mayor de edad";
    }else{
        echo "Menor de edad";
    }

    //operador ternario
    $nota1 = 7;

    $final = $nota1 >= 5 ? "aprobado" : "suspenso";
    echo"<br>";
    echo $final;

echo"<br>";

    //estructura contro, flujo elseif

    $valor1 = 2;
    $valor2 = 6;
    $dia = 2;

    if ($valor1 > $valor2) {
        echo"Valor1 es mayor que el valor2";
        echo"<br>";
    }elseif($valor1 == $valor2){
        echo "El valor1 es igual que el valor2";
        echo"<br>";
    }else{
        echo "El valor 2 es mayor que el valor1";
        echo"<br>";
    }

    if ($dia == 1) {
        echo "Lunes";
    }elseif($dia == 2){
        echo "Martes";
    }elseif($dia == 2){
        echo "Miercoles";
    }
    ?>
</body>
</html>