<?php
session_start();
require_once("config/loaderBooks.php");
require_once('controllersBooks/getAllBooks.php');
;
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
            <button type="button"><a href="logout.php">Se déconnecter</a></button>
        </header>
        <div class="success">
        <?php if (isset($_GET['update']))
        {
            echo "Modification effectuée";
        }
        else if (isset($_GET['delete']))
        {
            echo "Suppression effectuée";
        }?>
        </div>
        <table>
            <thead>
                <tr>
                    <th colspan="8">Ma Bibliothèque Personnelle</th>
                </tr>
    <?php if (isset($_SESSION['login']) && ($_SESSION['login']) == 1){ ?>
                <tr>
                    <th>Titre</th>
                    <th>Auteur</th>
                    <th>Résumé</th>
                    <th>Prix</th>
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
                    <th>Prix</th>
                    <th>Date achat</th>
                    <th>Voir ce livre</th> 
        </tr>
    <?php }; ?>
             </thead>

    <?php foreach ($books as $key => $book): ?>
        <tbody> 
        <?php if (isset($_SESSION['login']) && ($_SESSION['login']) == 1){ ?>          
        <tr>              
            <td><?php echo $book['title']; ?></td>
            <td><?php echo $book['author']; ?></td>
            <td><?php echo $book['summary']; ?></td>
            <td><?php echo $book['price']; ?></td>
            <td><?php echo $book['entry_date']; ?></td>
            <td>
                <form action="oneBook.php" method="POST">
                    <input type="hidden" name="book_id" value=<?php echo $book['book_id'] ?> >
                    <input type="submit" value="Voir" >
                </form> 
            </td>
            <td>
                <button><a href="updateBook.php?book_id=<?php echo $book['book_id']?>&title=<?php echo $book['title']?>&author=<?php echo $book['author']?>&summary=<?php echo $book['summary']?>&price=<?php echo $book['price']?>&entry_date=<?php echo $book['entry_date']?>">Update</a></button>
            </td>  

            <td>
                <form action="controllersBooks/deleteOneBook.php" method="POST">
                    <input type="hidden" name="book_id" value=<?php echo $book['book_id'] ?> >
                    <input type="submit" value="Delete">
                </form> 
            </td>    
        </tr>
        <?php } else {?>
            <tr>              
            <td><?php echo $book['title']; ?></td>
            <td><?php echo $book['author']; ?></td>
            <td><?php echo $book['summary']; ?></td>
            <td><?php echo $book['price']; ?></td>
            <td><?php echo $book['entry_date']; ?></td>
            <td>
                <form action="oneBook.php" method="POST">
                    <input type="hidden" name="book_id" value=<?php echo $book['book_id'] ?> >
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
