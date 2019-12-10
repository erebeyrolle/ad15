<?php
session_start();
require_once("../config/loaderBooks.php");
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Nouveau Livre</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="style.css" />
    <script src="main.js"></script>
</head>
<body>
    <form action="controllers/createBook.php" method="POST">
        <label for="title">Titre</label>
        <input type="text" name="title" placeholder="Titre">

        <label for="author">Auteur</label>
        <input type="text" name="author" placeholder="Auteur"> 

        <label for="summary">Résumé</label>
        <input type="text" name="summary" placeholder="Résumé">

        <input type="submit" value="Valider"> 
    </form>
</body>
</html>