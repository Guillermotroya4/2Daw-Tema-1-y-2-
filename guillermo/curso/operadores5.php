<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
    <?php

//operadores lógicos
    $num1 = 5;
    $num2 = 10;
    $num3 = 5;
    $activo1 = true;
    $activo2 = false;

    if ($num1 == 5 && $num1 == $num3) {
        echo"Dentro del if";
    }

    echo"<br>";

    if ($num1 == 5 || $num1 == $num3) {
        echo"Dentro del segundo if";
    }

    echo "<br>";

    if ($num1 == 5 xor $num1 == $num2) {
        echo"Dentro del tercer if";
    }


    echo "<br>";

    if ($activo1) {
        echo"Dentro del cuarto if";
    }

    echo "<br>";

    if ($activo2) {
        echo"Dentro del quinto if";
    }
    
    ?>
</body>
</html>