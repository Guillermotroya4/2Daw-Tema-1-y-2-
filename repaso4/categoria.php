<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <?php

    $email = $_POST['email'];
    $categoria = $_POST['categoria'];


    echo "Email: " . $email;
    echo "<br>";
    echo "Categoria preferida: " . $categoria;

?>

</body>
</html>