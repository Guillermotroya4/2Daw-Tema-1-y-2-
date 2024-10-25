<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
    <?php

    //funcion getdate

    $hoy = getdate();
    var_dump($hoy);

    if ($hoy["month"] == "October") {
        echo "<br>";
        echo "Mayo";
    }

    ?>
</body>
</html>