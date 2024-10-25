<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
    <?php

    //Funciones variadas de array

    $frutas = array("Naranaja","Platano","Manzana","Frambuesa");

    $elemento = count($frutas);
    echo $elemento;
    echo"<br>";

    $actual = current($frutas);
    echo $actual;
    echo "<br>";


    end($frutas);
    $actual = current($frutas);
    echo $actual;
    echo "<br>";


    reset($frutas);

    $meses = array(0 =>"Enero",1 =>"Febrero",2 =>"Marzo",3 =>"Abril");


    $clave = array_search("Febrero", $meses);
    if ($clave) {
        echo $clave . " " . $meses[$clave];
    }else{
        echo "Elemento no encontrado";
    }


    ?>
</body>
</html>