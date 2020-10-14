<?php
include "Electeur.php";
$client = new Electeur("Nathan", "Wurtz");
$client->aVote();
echo $client->__toString();
?>