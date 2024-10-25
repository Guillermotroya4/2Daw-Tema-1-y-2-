<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
    <?php
    for( $i = 1; $i <= 10; $i++ ){
        echo"Valor de i: " . $i;
        echo"<br>";
    if($i == 3){
        break;
    }
    }

echo"<br>";
echo"<br>";
echo"<br>";
    for($j =1; $j <= 10; $j++ ){
        echo "Valor de la j: ". $j;
        echo "<br>";
    }for($k =1; $k <= 10; $k++ ){
        echo "Valor de la k: ". $k;
        echo "<br>";
        if($k == 3){
            break;
    }
}
    ?>
</body>
</html>