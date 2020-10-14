<?php
abstract class Person  
{
    protected $firstName;
    protected $lastName;
    function __construct($firstName, $lastName) {
        $this->firstName = $firstName;
        $this->lastName = $lastName;
    }
}

?>