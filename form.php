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
    <form action=processForm.php method="POST">
        <label for="pseudo">Votre pseudo</label>
        <?php
        if(isset($_COOKIE["pseudo"]) && !empty($_COOKIE["pseudo"])) {
            $pseudo = $_COOKIE["pseudo"];
            echo "<input type=text id=pseudo name=pseudo value=\"$pseudo\"><br>";
        }
        else {
            echo "<input type=text id=pseudo name=pseudo><br>";
        }
        echo"<label for=mpd>Votre mot de passe</label>";
        if(isset($_COOKIE["mdp"]) && !empty($_COOKIE["mdp"])) {
            $mdp = $_COOKIE["mdp"];
            echo "<input type=password id=mdp name=mdp value=\"$mdp\"><br><label for=mdpConf>Votre mot de passe</label>";
            echo "<input type=password id=mdpConf name=mdpConf value=\"$mdp\">";
        }
        else {
            echo "<input type=password id=mdp name=mdp><br><label for=mdpConf>Votre mot de passe</label>";
            echo "<input type=password id=mdpCon name=mdpConf>";
        }
        ?>
        <p>
            OS préféré :<br>
            <input type="radio" id="windows" name="os" value=windows <?php echo (isset($_COOKIE["os"]) && $_COOKIE["os"] == "windows") ? "checked" : ''; ?>>
            <label for=windows>Windows</label><br>
            <input type="radio" id="windows10" name="os" value=windows10 <?php echo (isset($_COOKIE["os"]) && $_COOKIE["os"] == "windows10") ? "checked": ''; ?>>
            <label for=windows10>Windows &lt; 10</label><br>
            <input type="radio" id="mac" name="os" value=mac <?php echo (isset($_COOKIE["os"]) && $_COOKIE["os"] == "mac") ? "checked" : ""; ?>>
            <label for=mac>Mac OS X</label><br>
            <input type="radio" id="linux" name="os" value=linux <?php echo (isset($_COOKIE["os"]) && $_COOKIE["os"] == "linux") ? "checked" : ""; ?>>
            <label for=linux>Linux</label><br>
            <input type="radio" id="autre" name="os" value=autre <?php echo (isset($_COOKIE["os"]) && $_COOKIE["os"] == "autre") ? "checked" : ""; ?>>
            <label for=autre>Autre</label><br>
        </p>
        <p>
            Vous possédez :<br>
            <input type="checkbox" id=bureau name=owned[0] value=bureau <?php echo (isset($_COOKIE["owned"]) && strpos($_COOKIE["owned"], "bureau") !==false) ? "checked" : ''; ?>>
            <label for=bureau>Un ordinateur de bureau</label><br>
            <input type="checkbox" id=portable name=owned[1] value=portable <?php echo (isset($_COOKIE["owned"]) && strpos($_COOKIE["owned"], "portable") !==false) ? "checked" : ''; ?>>
            <label for=portable>Un portable</label><br>
            <input type="checkbox" id=netbook name=owned[2] value=netbook <?php echo (isset($_COOKIE["owned"]) && strpos($_COOKIE["owned"], "netbook") !==false) ? "checked" : ''; ?>>
            <label for=netbook>Un netbook</label><br>
            <input type="checkbox" id=tab name=owned[3] value=tab <?php echo (isset($_COOKIE["owned"]) && strpos($_COOKIE["owned"], "tab") !==false) ? "checked" : ''; ?>>
            <label for=tab>Une tablette</label>
        </p>
        <p>
            Votre profession :<br>
            <select size="5" name=job>
                <option value="chomeur" <?php echo (isset($_COOKIE["job"]) && strpos($_COOKIE["job"], "chomeur") !==false) ? "selected" : ''; ?>>Chômeur</option>
                <option value="etudiant" <?php echo (isset($_COOKIE["job"]) && strpos($_COOKIE["job"], "etudiant") !==false) ? "selected" : ''; ?> >Etudiant</option>
                <option value="fonctionnaire" <?php echo (isset($_COOKIE["job"]) && strpos($_COOKIE["job"], "fonctionnaire") !==false) ? "selected" : ''; ?>>Fonctionnaire</option>
                <option value="prive" <?php echo (isset($_COOKIE["job"]) && strpos($_COOKIE["job"], "prive") !==false) ? "selected" : ''; ?>>Privé</option>
                <option value="retraite" <?php echo (isset($_COOKIE["job"]) && strpos($_COOKIE["job"], "retraite") !==false) ? "selected" : ''; ?> >Retraité</option>
            </select>
        </p>
        <input type="submit">
    </form>
</body>