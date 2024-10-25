<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
    <?php

        //obtener y mopdificar zona horaria

        echo "Zona horaria " . date_default_timezone_get();
        echo "<br>";

        date_default_timezone_set("America/Los_Angeles");
        echo "Zona horaria " . date_default_timezone_get();
        echo "<br>";


    ?>
</body>
</html>