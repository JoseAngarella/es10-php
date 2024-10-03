<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>


    <?php
        $size=10; //dimensione paragrafo
        $num=10; //numero paragrafi
        $paragrafo = "ecco un nuovo paragrafo";
        for( $i = 0; $i < $num ; $i++){
            echo "<p style='font-size:{$size}px'> $paragrafo </p>";
            $size+=2;
        }
    ?>
    
</body>
</html>