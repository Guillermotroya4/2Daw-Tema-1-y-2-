<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rectangulo</title>
</head>
<body>
    
<form id="login" method="post" action="#">
            <div>
            <label for="v">Introduce el ancho del rectangulo:</label>
            <input type="number" name="ancho" id="ancho">
            </div>
            <div>
                <label for="alto">Introduce el alto del rectangulo:</label>
                <input type="number" name="alto" id="alto">
            </div>
            <div class="enviado">
                <br>
                <input type="submit"  value="Enviar" id="Enviar">
            </div>

        </form>


        <?php

$ancho = $_POST['ancho'];
$alto = $_POST['alto'];

$area = $ancho * $alto;


echo "El area del rectangulo es: " . $area;
?>
</body>
</html>