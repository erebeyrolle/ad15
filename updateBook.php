<?php
session_start();
require_once('config/loaderBooks.php');
?>

<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" 
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" 
        crossorigin="anonymous">
        <link rel="stylesheet" href="styles/style.css">
    <title><?= constant("TITLE5"); ?></title>
</head>

<body>
    <header>
            <h1><?= constant("HEADING5"); ?></h1>
        </header>
        <div class="error">
        <?php if (isset($_GET['update_err']))
        {
            echo "Il y a un champ vide !!!";
        }?>
        </div>
        <table>
            <thead>
                <tr>
                    <th colspan="7">Ma Bibliothèque Personnelle</th>
                </tr>
                <tr>
                    <th>Titre</th>
                    <th>Auteur</th>
                    <th>Résumé</th>
                    <th>Prix</th>
                    <th>Date achat</th>
                    <th>Validation</th>
                    <th>Retour</th>
                </tr>
             </thead>
    <form action="controllers/updateOneBook.php" method="POST">
    <tbody>           
        <tr>  
        <td class="none"><input type="text" name="id" value="<?php echo $_GET['id']?>"></td>   
       

        <!--<label for="title">Titre</label>-->
        <td><input type="text" name="title" value="<?php echo $_GET['title']?>"></td>

        <!--<label for="author">Auteur</label>-->
        <td><input type="text" name="author" value="<?php echo $_GET['author']?>"></td>

        <!--<label for="summary">Résumé</label>-->
        <td><input type="text" name="summary" value="<?php echo $_GET['summary']?>"></td>

        <td><input type="number" name="price" value="<?php echo $_GET['price']?>"></td>        

        <td><?php echo $_GET['entry_date']?>"</td>

        <td><input type="submit" value="Valider"></td>

        <td><button><a href="allBooks.php">Bibliothèque</a></button> </td>
        
        </tr>
        </tbody>

    </table>
    
    </form>
</body>
</html>