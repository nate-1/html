<?php
include "person.php";
class Client extends Person 
{
    private $address;
    function __construct($firstName,  $lastName) 
    {
        parent::__construct($firstName, $lastName);
    }
    function setCord($address) 
    {
        $this->address = $address;
    }
    function __toString() 
    {
        return $this->firstName . " " . $this->lastName . " habite au " . $this->address;
    }
}

?>