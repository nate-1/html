<html>
<head>
    <meta charset="UTF-8">
    <title></title>
</head>
<body>
<?php 
    echo date("d/m/Y H:i") . '<br>';
    echo  $_SERVER["REMOTE_ADDR"];
    $calepin = fopen('calepin', 'r') or die("Can't open it");
    while (($line = fgets($calepin))) {
        $data = explode("|", $line);
        echo "<br>Nom : ". $data[0]. "<br>Prénom : ". $data[1] . "<br>Adresse : " . $data[2] . "<br>CP : " . $data[3] . "<br>Ville : " . $data[4]."<br><br>";
    }
    $fileCpt = fopen('cpt', 'r') or die("Can't open it");
    $visiteur = (int)fgets($fileCpt) + 1;    
    echo "Vous êtes le $visiteur visiteur !";
    file_put_contents("cpt", $visiteur)
?>
</body>