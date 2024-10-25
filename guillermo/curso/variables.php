<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Variables</title>
</head>
<body>
    <?php
    $edad = 19;
    $estatura = 1.82;
    $nombre = "Guillermo";
    $frase = "$nombre tiene $edad años ";
    $profesor = false;

    echo"$edad";
    echo "<br>";
    echo "$estatura";
    echo "<br>";
    echo "Tu nombre es " . $nombre;
    echo "<br>";
    echo "$profesor";
    echo json_encode($profesor);

?>
</body>
</html>