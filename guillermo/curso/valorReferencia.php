<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
    <?php

    //Paso por valor y por referencia

    function mifuncion($num1){
        $num1 = $num1 + 2;
    }

    function otraFuncion(&$num1){
        $num1 = $num1 + 2;
    }

    $num1 = 4;


    mifuncion($num1);
    echo $num1;

    echo "<br>";

    otraFuncion($num1);
    echo $num1;

    


    ?>
</body>
</html>