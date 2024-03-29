<?php
session_start();
require_once('config/loaderBooks.php');
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title><?= constant("TITLE4"); ?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="styles/style.css" />
    
</head>
<body>
    <header>
            <h1><?= constant("HEADING4"); ?></h1>
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
                    <th colspan="5">Ajouter un livre</th>
                </tr>
                <tr>
                    <th>Titre</th>
                    <th>Auteur</th>
                    <th>Résumé</th>
                    <th>Prix</th>
                    <th>Validation</th>
                </tr>
    <form action="controllersBooks/createOneBook.php" method="POST">
        
        <tbody>
            <tr>
                <td><input type="text" name="title" placeholder="Titre"></td>
        
                <td><input type="text" name="author" placeholder="Auteur"></td>

        
                <td><textarea name="summary" placeholder="Résumé"></textarea></td>
                              
                <td><input type="number" name="price" placeholder="Prix"></td>

                <td><input type="submit" value="Valider"></td>
            </tr>
        </tbody>
    </form>
</body>
</html>