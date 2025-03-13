<?php
class Calculator {
    public function calculate() {
        $numArgs = func_num_args(); // Get the number of arguments passed
        $args = func_get_args(); // Get the arguments passed as an array

        // Check the number of arguments and perform the appropriate operation
        switch ($numArgs) {
            case 2:
                return $this->add($args[0], $args[1]);
            case 3:
                return $this->multiply($args[0], $args[1], $args[2]);
            default:
                return "Unsupported operation.";
        }
    }

    private function add($a, $b) {
        return $a + $b;
    }

    private function multiply($a, $b, $c) {
        return $a * $b * $c;
    }
}

$calculator = new Calculator();
echo "Addition: " . $calculator->calculate(5, 3) . "<br>";
echo "Multiplication: " . $calculator->calculate(2, 3, 4) . "<br>";
echo $calculator->calculate(2); // Unsupported operation
?>