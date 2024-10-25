<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
    <?php
        //Estructura de control de flujo dowhile

        $valor = 10;

        while ($valor != 10) {
            echo"Dentro del while";
        }
    

        do{
            echo"Dentro del while";
        }while($valor != 10);
    ?>
</body>
</html>