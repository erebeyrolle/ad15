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
    <form action="controllers/createOneBook.php" method="POST">
        <label for="title">Titre</label>
        <input type="text" name="title" placeholder="Titre">

        <label for="author">Auteur</label>
        <input type="text" name="author" placeholder="Auteur"> 

        <!--<label for="summary">Résumé</label>
        <textarea name="summary" placeholder="Résumé"></textarea>-->

        <label for="summary">Résumé</label>
        <input type="text" name="summary" placeholder="Résumé">

        <label for="price">Prix</label>
        <input type="number" name="price" placeholder="Prix"> 


        <input type="submit" value="Valider"> 
    </form>
</body>
</html>