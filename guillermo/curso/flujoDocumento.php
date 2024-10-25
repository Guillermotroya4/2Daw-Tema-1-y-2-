<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
    <?php
    //estructura de control if

    $nota1 = 7;
    $nota2 = 8;
    $nota3 = 5;
    if ($nota1 >= 5) {
        echo "nota1 aprobada ";
    }

    echo"<br>";

    if ($nota2 != 5):
        echo "La nota 2 es distyinta que cero";
    endif;


    if ($nota3 == 5){
        echo "Dentro del primer if";
        if ( $nota2 > 9){
            echo "Dentro del segundo if";
        }
    }

    echo"<br>";

    if ($nota1 >= 5 && $nota2 >= 5){
        echo "Curso aprobado";
    }
    
    ?>
</body>
</html>