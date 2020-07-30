<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    require 'animal.php';
    require 'Frog.php';
    require 'Ape.php';

        $mangga = new Animal("kucing");
        $mangga->getleg();
        $mangga->getblood();

        $kodok = new Frog("buduk");
        $kodok->jump() ;
         // "hop hop"

        $sungokong = new Ape("kera sakti");
        $sungokong->yell() // "Auooo"

        

    ?>
</body>
</html>