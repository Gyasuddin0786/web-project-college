<?php
class ParentClass {
    public function parentMethod() {
        return "This is a parent method.";
    }
}

class ChildClass extends ParentClass {
    public function childMethod() {
        return "This is a child method.";
    }
}

$child = new ChildClass();
echo $child->parentMethod() . "<br>";
echo $child->childMethod();
?>
