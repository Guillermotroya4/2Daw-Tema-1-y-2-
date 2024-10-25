<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edades</title>
</head>
<body>

<form id="edad" method="post" action="#">
            <div>
                <label for="edad">Introduzca su edad:</label>
                <input type="number" name="edad" id="edad">
                <br>
                <input type="submit"  value="Enviar" id="Enviar">

            </div>

</form>
<?php

$edad = $_POST['edad'];


if ($edad >= 18 && $edad <100) {
    echo "Usted es mayor de edad";
}else if($edad >= 100){
    echo "Usted es una persona de hierro";
}else{
    echo "Usted es menor de edad";
}

?>
</body>
</html>