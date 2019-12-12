<?php
session_start();
require_once('config/loaderBooks.php');
require_once('controllers/getOneBook.php');
?>

<!DOCTYPE html>
<html lang="fr">
    <head>
    <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" 
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" 
        crossorigin="anonymous">
        <link rel="stylesheet" href="styles/style.css">
    <title><?= constant("TITLE3"); ?></title>
    </head>
    
    <body>
        <header>
            <h1><?= constant("HEADING3"); ?></h1>
        </header>
        <table>
            <thead>
                <tr>
                    <th colspan="6">Ma Bibliothèque Personnelle</th>
                </tr>
                <tr>
                    <th>Titre</th>
                    <th>Auteur</th>
                    <th>Résumé</th>
                    <th>Prix</th>
                    <th>Date achat</th>
                    <th>Retour</th>
                </tr>
             </thead>

    
        <tbody>           
        <tr>              
            <td><?php echo $book['title']; ?></td>
            <td><?php echo $book['author']; ?></td>
            <td><?php echo $book['summary']; ?></td>
            <td><?php echo $book['price']; ?></td>
            <td><?php echo $book['entry_date']; ?></td>
            <td><button><a href="allBooks.php">Bibliothèque</a></button> </td>
                

            
        </tr>
        </tbody>

    </table>


        
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" 
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" 
        crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" 
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" 
        crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" 
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" 
        crossorigin="anonymous"></script>
    </body>
</html>
