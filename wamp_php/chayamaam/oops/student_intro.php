<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Introduction</title>
</head>
<body>
    <?php
         class studentIntro {  //class is a blue
            public $name;
            public $roll;   //property or attribute
            //method
            public $sem;   //property or attribute
            //method
            public $div;   //property or attribute
            //method

            function set_name($name) {
                $this->name = $name;
            }
            function set_roll($roll) {
                $this->roll = $roll;
            }
            function set_semester($div) {
                $this->div = $div;
            }
            function set_division($div) {
                $this->div = $div;
            }

            function get_name() {
                return $this->name;
            }
            function get_roll() {
                return $this->roll;
            }
            function get_semester() {
                return $this->sem;
            }
            function get_division() {
                return $this->div;
            }

        }
        $name =  new studentIntro();//object creation
        $roll =  new studentIntro();//object creation
        echo "<h3>Student Introduction</h3>";
        $name->set_name('Gyasuddin');//calling method using object
        $roll->set_roll('4');//calling method using object
        $roll->set_semester('4th');//calling method using object
        $roll->set_division('4CED');//calling method using object
        echo "Student name is:".$name->get_name()."<br>";//calling the method to display data
        echo "Student roll is:".$roll->get_roll()."<br>";//calling the method to display the data
        echo "Student sem is:".$roll->get_semester()."<br>";//calling the method to display the data
        echo "Student div is:".$roll->get_division()."<br>";//calling the method to display the data

    
    ?>
</body>
</html>