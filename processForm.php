<html>

<head>
    <meta charset="UTF-8">
    <title></title>
    <style>
        html {
            background-color: gray;
        }
    </style>
    <style href=knacss.css></style>
</head>

<body>
<?php
// die();
if($_POST["pseudo"] != NULL && $_POST["mdp"] != NULL && $_POST["mdpConf"] != NULL && $_POST["os"] != NULL && $_POST["owned"] != NULL && $_POST["job"] !== NULL) 
{
    if($_POST["mdp"] !== $_POST["mdpConf"])
    {
        echo "Vos mots de passe ne corresponde pas revenez en arrière et réessayez !";
    }
    else 
    {
        $pseudo = $_POST["pseudo"];
        $mdp = $_POST["mdp"];
        $os = $_POST["os"];
        $owned = implode(", ", $_POST["owned"]);
        $job = $_POST["job"];
        setcookie("pseudo", $pseudo);
        setcookie("mdp", $mdp);
        setcookie("os", $os);
        setcookie("owned", $owned);
        setcookie("job", $job);
        echo "Votre pseudo : " . $pseudo . "<br>";
        echo "Votre mot de passe : ". $_POST["mdp"] . "<br>";
        echo "Votre os préféré : " . $_POST["os"] . "<br>";
        echo "Vous possédez : " . $owned . "<br>";
        echo "Votre travil est " . $job; 
    
    }

}
else 
{
    echo "Veuillez remplit tous les champs s'il vous plait, revenez en arrière et réessayez !";
}