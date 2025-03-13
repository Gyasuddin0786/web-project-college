<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Constructor</title>
</head>
<body>
    <h2>Public constructor an PHP</h2>
    <?php
    class Fruit{
        public $name;
        public $color;
        public function __construct($name, $color) {//parameterised constructor
            $this->name = $name;
            $this->color = $color;
        }
        // protected function intro(){ 
        public function intro(){ 
            echo "<br>The fruit is $this->name and the color is $this->color.";
        }
    }
    class Strawberry extends Fruit{
        public function message(){
            $this->intro();
        }
    }
    //try to call all three method from outside the class
    $strawberry = new Strawberry("Strawberry", "Red");
    $strawberry ->message();
    $strawberry->intro();//Error into() is protected is solving is by using public class
    ?>
</body>
</html>