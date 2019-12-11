<?php
session_start();
require_once("config/loaderBooks.php");
require_once('controllers/getAllBooks.php');
$admin = 1;
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
    <title><?= constant("TITLE1"); ?></title>
    </head>
    
    <body>
        <header>
            <h1><?= constant("HEADING1"); ?></h1>
        </header>
        <table>
            <thead>
                <tr>
                    <th colspan="7">Ma Bibliothèque Personnelle</th>
                </tr>
    <?php if ($admin){ ?>
                <tr>
                    <th>Titre</th>
                    <th>Auteur</th>
                    <th>Résumé</th>
                    <th>Date achat</th>
                    <th>Voir ce livre</th>             
                    <th>Update</th>
                    <th>Delete</th>
                </tr>
    <?php } else {?>
        <tr>
                    <th>Titre</th>
                    <th>Auteur</th>
                    <th>Résumé</th>
                    <th>Date achat</th>
                    <th>Voir ce livre</th> 
        </tr>
    <?php }; ?>
             </thead>

    <?php foreach ($books as $key => $book): ?>
        <tbody> 
        <?php if ($admin){ ?>          
        <tr>              
            <td><?php echo $book['title']; ?></td>
            <td><?php echo $book['author']; ?></td>
            <td><?php echo $book['summary']; ?></td>
            <td><?php echo $book['entry_date']; ?></td>
            <td>
                <form action="oneBook.php" method="POST">
                    <input type="hidden" name="id" value=<?php echo $book['id'] ?> >
                    <input type="submit" value="Voir" >
                </form> 
            </td>
            <td>
                <form action="updateBook.php" method="POST">
                    <input type="hidden" name="id" value=<?php echo $book['id'] ?> >
                    <input type="submit" value="Update" >
                </form> 
            </td>  

            <td>
                <form action="controllers/deleteOneBook.php" method="POST">
                    <input type="hidden" name="id" value=<?php echo $book['id'] ?> >
                    <input type="submit" value="Delete">
                </form> 
            </td>    
        </tr>
        <?php } else {?>
            <tr>              
            <td><?php echo $book['title']; ?></td>
            <td><?php echo $book['author']; ?></td>
            <td><?php echo $book['summary']; ?></td>
            <td><?php echo $book['entry_date']; ?></td>
            <td>
                <form action="oneBook.php" method="POST">
                    <input type="hidden" name="id" value=<?php echo $book['id'] ?> >
                    <input type="submit" value="Voir" >
                </form> 
            </td>
            <?php }; ?>
        </tbody>
<?php endforeach; ?>
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
