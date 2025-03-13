<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Access Modifiers</title>
</head>
<body>
    <?php
        class Fruit{
            public $name;
            protected $color;
            private $weight; // Only accessible within the same instance of the object
        }
        $mango = new Fruit("name","color");
        $mango->name = 'Mango';
        $mango->color = "Yellow";
        // $mango->weight = '200gm';
    ?>
</body>
</html>