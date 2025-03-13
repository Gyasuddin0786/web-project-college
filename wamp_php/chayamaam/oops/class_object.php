<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Class and object</title>
</head>
<body>
    <?php
     class friut {  //class is a blueprint of object
        // private $name;
        public $name;
        public $color;   //property or attribute
        //method
        function set_name($name) {
            $this->name = $name;
        }
        function get_name() {
            return $this->name;
        }
        function set_color($color) {
            $this->color = $color;
        }
        function get_color() {
            return $this->color;
        }
    }
    $apple =  new friut();//object creation
    $banana =  new friut();//object creation
    echo "<h3>Class And Object Creation</h3>";
    $apple->set_name('Apple');//calling method using object
    $apple->set_color('Red');//calling method using object
    $banana->set_name('Banana');
    $banana->set_color('Yellow');
    echo "Fruit name is:".$apple->get_name()."<br>";//calling the method to display data
    echo "Fruit color is:".$apple->get_color()."<br>";//calling the method to display the data
    echo "Fruit name is:".$banana->get_name()."<br>";
    echo "Fruit color is:".$banana->get_color()."<br>";
    // $banana->name ='Banana';
    // echo $banana->get_name();
    ?>
</body>
</html>