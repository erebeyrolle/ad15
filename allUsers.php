<?php
session_start();
require_once("config/loaderBooks.php");
require_once('controllersUsers/getAllUsers.php');
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
        <title><?= constant("TITLE7"); ?></title>
    </head>
    
    <body>
        
        <header>
            <h1><?= constant("HEADING7"); ?></h1>
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
                    <th colspan="5">Liste des utilisateurs enregistrés</th>
                </tr>
    
                <tr>
                    <th>Identifiant</th>
                    <th>Mot de passe</th>
                    <th>Type utilisateur</th>
                    <th>Update</th>
                    <th>Delete</th>
                </tr>
             </thead>

    <?php foreach ($users as $key => $user): ?>
        <tbody> 
            
        <tr>              
            <td><?php echo $user['login']; ?></td>
            <td><?php echo $user['pswd']; ?></td>
            <td><?php if ( $user['admin'] == 1)
            {echo "Administrateur";}else{echo"Utilisateur";}; ?></td>
            
           
            <td>
                <button><a href="updateUser.php?user_id=<?php echo $user['user_id']?>&login=<?php echo $user['login']?>&pswd=<?php echo $user['pswd']?>&admin=<?php echo $user['admin']?>">Update</a></button>
            </td>  

            <td>
                <form action="controllersUsers/deleteOneUser.php" method="POST">
                    <input type="hidden" name="user_id" value=<?php echo $user['user_id'] ?> >
                    <input type="submit" value="Delete">
                </form> 
            </td>    
        </tr>
    
    <?php endforeach; ?>  
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
