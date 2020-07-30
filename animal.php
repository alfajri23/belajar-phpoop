<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
    class Animal {
        public $name;
        public $leg=2;
        public $cold_blooded="false";

        function __construct($name){
            $this->name = $name;
            echo $this->name."<br>";   
        }
        function getleg(){       
             echo $this->leg."<br>";   
        }
        function getblood(){
            echo $this->cold_blooded."<br>";
          
        }
    }

    


?>  
</body>
</html>


