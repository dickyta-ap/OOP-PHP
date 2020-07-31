<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    
    class Ape{
        public $suara = "Auooo";

        public function yell() {
            echo $this -> suara;
        } 
    }
    
    $sungokong = new Ape("kera sakti");
    $sungokong->yell() // "Auooo"
    ?>
</body>
</html>
