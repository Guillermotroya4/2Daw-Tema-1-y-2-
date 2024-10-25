<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>

<body>
    <?php

    //Estructura de control de flujko switch

    $dia = 30;

    switch ($dia) {
        case 1:
            echo "Lunes";
            break;
        case 2:
            echo "Martes";
            break;
        case 3:
            echo "Miercoles";
            break;
        case 4:
            echo "jueves";
            break;
        case 5:
            echo "Viernes";
            break;
        case 6:
            echo "Sabado";
            break;
        case 7:
            echo "Domingo";
            break;
        default:
        echo"Dia no válido";
    }

echo"<br>";
    $diaSemana = "MIERCOLES";
    switch ($diaSemana) {
        case "LUNES":
            echo 1;
            break;
        case "MARTES":
            echo 2;
            break;
        case "MIERCOLES":
            echo 3;
            break;
        case "JUEVES":
            echo 4;
            break;
        case "VIERNES":
            echo 5;
            break;
        case "SABADO":
            echo 6;
            break;
        case "DOMINGO":
            echo 7;
            break;
        default:
        echo "Dia no valido";
}     


    ?>
</body>

</html>