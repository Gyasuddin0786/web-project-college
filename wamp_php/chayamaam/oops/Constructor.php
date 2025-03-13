<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Constructor</title>
</head>
<body>
    <?php
    class Fruit{
        public $name;
        public $color;
        public function __construct($name, $color) {//parameterised constructor
            $this->name = $name;
            $this->color = $color;
        }
        function get_name(){
            return $this->name;
        }
        function get_color(){
            return $this->color;
        }
        }
        $Jakfruit =  new Fruit("Jakfruit","red");//parameterised constuctor calling with arguments
        echo "Fruit name is:".$Jakfruit->get_name()."<br>";//calling the method to display data
        echo "Fruit color is:".$Jakfruit->get_color();//calling the method to display the data
    
    ?>
</body>
</html>