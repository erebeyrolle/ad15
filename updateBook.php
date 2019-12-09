<?php
// var_dump('test'); die;
include_once('./controllers/getOneBook.php');

?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Update Book</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
    <script src="main.js"></script>
</head>
<body>
<!--<form action="./controllers/getOneBook.php" method="POST">-->
    <form action="./controllers/updateOneBook.php" method="POST">
        <input type="hidden" name="id" value="<?php echo $book['id']?>">
        <label for="title">Titre</label>
        <input type="text" name="title" value="<?php echo $book['title']?>">

        <label for="parution_date">Date Parution</label>
        <input type="number" name="parution_date" value="<?php echo $book['parution_date']?>">

        <label for="author">Auteur</label>
        <input type="text" name="author" value="<?php echo $book['author']?>"> 

        <label for="excerpt">Résumé</label>
        <input type="text" name="excerpt" value="<?php echo $book['excerpt']?>">

        <input type="submit" value="Valider">
</form>
</body>
</html>