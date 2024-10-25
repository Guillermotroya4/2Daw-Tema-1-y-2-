<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
    <?php

    //Funciones para comparar arrays


    $numero1 = array(11,22,33);
    $numero2 = array(11,33,55);

    $colores1 = array("color1" => "rojo","color2" => "verde","color3" => "azul","color4" => "naranja");
    $colores2 = array("color1"=> "verde","color2" => "azul","color3" => "amarillo");
    
    
    $diferncia1 = array_diff($numero1, $numero2);
    $diferncia2 = array_diff($colores1, $colores2);
    

    var_dump($diferncia1);
    echo"<br>";
    var_dump($diferncia2);
    echo"<br>";
    
    ?>
</body>
</html>