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
    <title><?= constant("TITLE11"); ?></title>
</head>

<body>
    <header>
            <h1><?= constant("HEADING11"); ?></h1>
            <button type="button"><a href="logout.php">Se déconnecter</a></button>
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
                    <th colspan="5">Modifier un utilisateur enregistré</th>
                </tr>
                <tr>
                    <th>Identifiant</th>
                    <th>Mot de passe</th>
                    <th>Type utilisateur</th>
                    <th>Validation</th>
                    <th>Retour</th>
                </tr>
             </thead>
    <form action="controllersUsers/updateOneUser.php" method="POST">
    <tbody>           
        <tr>  
        <td class="none"><input type="text" name="user_id" value="<?php echo $_GET['user_id']?>"></td>   
       
        <td><input type="text" name="login" value="<?php echo $_GET['login']?>"></td>
   
        <td><input type="text" name="pswd" value="<?php echo $_GET['pswd']?>"></td>
  
        <td><input type="text" name="admin" value="<?php if ($_GET['admin'] == 1)
            {echo "Administrateur";}else{echo"Utilisateur";}; ?>"></td>       

        <td><input type="submit" value="Valider"></td>

        <td><button><a href="allUsers.php">Liste utilisateurs</a></button> </td>
        
        </tr>
        </tbody>

    </table>
    
    </form>
</body>
</html>