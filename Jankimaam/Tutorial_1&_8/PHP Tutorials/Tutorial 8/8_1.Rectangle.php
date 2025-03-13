<?php
class Rectangle {
    public $length;
    public $width;

    public function __construct($length, $width) {
        $this->length = $length;
        $this->width = $width;
    }

    public function calculateArea() {
        return $this->length * $this->width;
    }

    public function calculatePerimeter() {
        return 2 * ($this->length + $this->width);
    }
}

$rectangle = new Rectangle(8, 5);
echo "Area: " . $rectangle->calculateArea() . "<br>";
echo "Perimeter: " . $rectangle->calculatePerimeter();
?>