<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
    <?php

    //Estrcutura de control de flujo for each

    $array1 = array(1,2,3,4);
    $valores = array("uno" => 1,"dos"=> 2,"tres"=> 3,"cuatro"=> 4);

    foreach($array1 as $valor){
        echo $valor;
        echo"<br>";
    }

    foreach($valores as $k => $v){
        echo "Valores[$k] =>$v";
        echo"<br>";
    }

    ?>
</body>
</html>