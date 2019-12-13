<?php
session_start();
require_once('config/loaderBooks.php');

?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title><?= constant("TITLE"); ?></title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
        <link rel="stylesheet" type="text/css" media="screen" href="styles/style.css" />
    </head>

    <body class="users">
        <header>
            <h1><?= constant("HEADING"); ?></h1>
        </header>

        <div class="container my-auto bg-light border border-dark border-lg rounded-lg">    
            <form class="" action="login.php" method="POST">
                <div class="form-group row">
                    <label for="login" class="col-sm-3 col-form-label mx-auto font-weight-bold">Entrez votre identifiant</label>
                    <div class="col-sm-12">
                    <input type="text" class="form-control w-25 p-3 mx-auto" name="login" placeholder="Votre identifiant de connexion">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="pswd" class="col-sm-3 col-form-label mx-auto font-weight-bold">Entrez votre mot de passe</label>
                    <div class="col-sm-12">
                    <input type="password" class="form-control w-25 p-3 mx-auto" name="pswd" placeholder="Votre mot de passe de connexion">
                    </div>
                </div>
                <div class="form-group row">
                    <div class="col-sm-20 mx-auto">
                    <button type="submit" class="btn btn-primary mx-auto">Valider</button>
                </div>
                </div>
            </form>
        </div>
        <div class="success">
        <?php if (isset($_GET['bye']))
        {
            echo "Au revoir";
        }?>
    </div>




        
        <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    </body>
</html>