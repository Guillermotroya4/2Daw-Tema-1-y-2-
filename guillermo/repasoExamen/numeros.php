<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Numeros del 1 al 100</title>
</head>
<body>
    
<?php

for($i=1; $i<100; $i++){
    if($i % 3 == 0 && $i % 5 == 0) {
        echo "FizzBuzz";
    }else if($i % 3 == 0){
        echo "Fizz";
    }else if($i % 5 == 0){
        echo "Buzz";
    }else{
        echo $i;
    }
    echo "<br>";

}





?>
</body>
</html>