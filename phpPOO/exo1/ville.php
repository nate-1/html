<?php
class City  
{
    private $name;
    private $department;

    function __construct($name, $department) {
        $this->name = $name;
        $this->department = $department;
    }
    function __toString() {
        return "La ville ". $this->name . " est dans le département : ". $this->department;
    }

}
?>