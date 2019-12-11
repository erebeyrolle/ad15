<?php
session_start();
require_once('config/loaderBooks.php');
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title><?= constant("TITLE5"); ?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="styles/style.css" />
    
</head>
<body>
    <form action="controllers/updateOneBook.php" method="POST">
        <input type="hidden" name="id" value="<?php echo $book['id']?>">
        <label for="title">Titre</label>
        <input type="text" name="title" value="<?php echo $book['title']?>">

        <label for="author">Auteur</label>
        <input type="text" name="author" value="<?php echo $book['author']?>"> 

        <label for="summary">Résumé</label>
        <input type="text" name="summary" value="<?php echo $book['summary']?>">

        <input type="submit" value="Valider">
    </form>
</body>
</html>