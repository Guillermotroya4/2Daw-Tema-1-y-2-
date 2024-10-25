<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
    <?php

    //estruyctura de controol while

    $num = 0;
    $respuesta = "Olvera";
    $intentos = 1;
    while ($num <= 10) {
        echo $num;
        $num ++;
        echo"<br>";
    }


    while ($respuesta != "Olvera") {
        echo "Intento" . $intentos;
        if ($intentos == 3) {
            $respuesta = "Olvera";
        }
        $respuesta ++;
    }
    ?>
</body>
</html>