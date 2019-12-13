<?php
session_start();
require_once('config/loaderBooks.php');
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title><?= constant("TITLE10"); ?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="styles/style.css" />
    
</head>
<body>
    <header>
            <h1><?= constant("HEADING10"); ?></h1>
            <button type="button"><a href="logout.php">Se déconnecter</a></button>
    </header>
    <div class="success">
        <?php if (isset($_GET['create']))
        {
            echo "Intégration effectuée";
        }?>
    </div>
    <table>
            <thead>
                <tr>
                    <th colspan="5">Créer un utilisateur</th>
                </tr>
                <tr>
                    <th>Identifiant</th>
                    <th>Mot de passe</th>
                    <th>Type utilisateur</th>
                    <th>Validation</th>
                </tr>
    <form action="controllersUsers/createOneUser.php" method="POST">
        
        <tbody>
            <tr>
                <td><input type="text" name="login" placeholder="Identifiant"></td>
        
                <td><input type="password" name="pswd" placeholder="Mot de passe"></td>
      
                <td><select type="text" name="admin" placeholder="Type utilisateur">
                    <option value="true">Administrateur</option>
                    <option value="false">Utilisateur</option>
                </select></td>

                <td><input type="submit" value="Valider"></td>
            </tr>
        </tbody>
    </form>
</body>
</html>