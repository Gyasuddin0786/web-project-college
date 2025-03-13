<?php
class Example {
    public $message;

    public function __construct($message) {
        $this->message = $message;
    }
}

$example = new Example("Hii,  I am a Constructor!");
echo $example->message;
?>
