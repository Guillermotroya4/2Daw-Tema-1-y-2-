<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Comentarios</title>
</head>
<body>
    
<?php

$calificacion = $_POST['calificacion'];
$comentario = $_POST['comentario'];


if ($calificacion <=5 && $calificacion >=1 ) {
    echo "Calificacion: " . $calificacion;
    echo "<br>";
    echo "Comentario: " . $comentario;

}else{
    header('Location: main.php');

}

?>

</body>
</html>