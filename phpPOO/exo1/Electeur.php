<?php
include "person.php";
class Electeur extends Person 
{
    private $bureauDeVote;
    private $vote;

    function __contruct($firstName, $lastName) 
    {
        parent::__contruct($firstName, $lastName);
    }
    function aVote() 
    {
        $this->vote = true;
    }
    function __toString() 
    {
        return $this->firstName . " " . $this->lastName . " " . ($this->vote ? "a voté" : "n'a pas voté");
    }
}
?>