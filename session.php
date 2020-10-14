<html>
<head>
    <style>
        html {
            background-color: gray;
        }
        form {
            text-align: center;
        }
        input {
            margin-top: 20px;
        }
    </style>
</head>
<body> 
    <?php 
    session_start();
    function displayForm() {
        echo "<form action=session.php method=POST>";
        echo "<label for=login>Votre login :</label><input type=text name=login id=login><br>";
        echo "<label for=password>Votre mot de passe :</label><input type=password name=password id=password><br>";
        echo "<label for=lastName>Votre prénom :</label><input type=text name=lastName id=lastName><br>";
        echo "<label for=email>Votre email :</label><input type=text name=email id=email><br>";
        echo "<label for=firstName> Votre nom :</label><input type=text name=firstName id=firstName><br>";
        echo "<input type=submit></form>";
    }
    if(isset($_GET["disconnect"])) {
        session_unset();
        session_destroy();
    }
    else if(!isset($_SESSION) && empty($_POST)) {
        displayForm();
    }
    else if(!empty($_POST)) {
        if($_POST["login"] != NULL && $_POST["password"] != NULL && $_POST["firstName"] != NULL && $_POST["lastName"] != NULL && $_POST["email"] != NULL) {
            $_SESSION["login"] = $_POST["login"];
            $_SESSION["password"] = $_POST["password"];
            $_SESSION["firstName"] = $_POST["firstName"];
            $_SESSION["lastName"] = $_POST["lastName"];
            $_SESSION["email"] = $_POST["email"];
            echo "<strong>Vous êtes maintenant connecté</strong><br>";
            echo "<p>Votre login : <em>" . $_SESSION["login"] . "</em></p>";
            echo "<p>Votre mot de passe : <em>*****</em></p>";
            echo "<p>Votre mot de nom : <em>" . $_SESSION["firstName"] . "</em></p>";
            echo "<p>Votre mot de prénom : <em>" . $_SESSION["lastName"] . "</em></p>";
            echo "<p>Votre mot de nom : <em>" . $_SESSION["email"] . "</em></p>";
            echo "<a href='session.php?disconnect'>Se déconnecter</a>";
        }
        else {
            echo "<p>Remplissez toutes les cases s'il vous plait<p>";
            displayForm();
        }
    }
    else if(!empty($_SESSION) && empty($_POST)) {
        echo "<p>Votre login : <em>" . $_SESSION["login"] . "</em></p>";
        echo "<p>Votre mot de passe : <em>*****</em></p>";
        echo "<p>Votre mot de nom : <em>" . $_SESSION["firstName"] . "</em></p>";
        echo "<p>Votre mot de prénom : <em>" . $_SESSION["lastName"] . "</em></p>";
        echo "<p>Votre mot de nom : <em>" . $_SESSION["email"] . "</em></p>";
        echo "<input type=submit value=\"Se déconnecté\" onclick=location.href='session.php?desconnect'\">";
    }
    else {
        displayForm();
    }
    ?>
</body>