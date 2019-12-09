<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Nouveau Livre</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main1.css" />
    <script src="main.js"></script>
</head>
<body>
    <form action="./controllers/createBook.php" method="POST">
        <label for="title">Titre</label>
        <input type="text" name="title" value="Titre">

        <label for="parution_date">Date Parution</label>
        <input type="number" name="parution_date" value="Date">

        <label for="author">Auteur</label>
        <input type="text" name="author" value="Auteur"> 

        <label for="excerpt">Résumé</label>
        <input type="text" name="excerpt" value="Résumé">

        <input type="submit" value="Valider"> 
</body>
</html>