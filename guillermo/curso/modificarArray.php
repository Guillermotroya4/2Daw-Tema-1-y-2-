<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
    <?php

    //funciones para modificar array

    $frutas = array("Naranja","Platano","Manzana","Frambuesa");

    var_dump($frutas);
    echo"<br>";

    $eliminado = array_pop($frutas);
    echo"<br>";

    var_dump($frutas);
    echo"<br>";


    array_push($frutas,"Pera");
    var_dump($frutas);
    echo"<br>";



    ?>
</body>
</html>