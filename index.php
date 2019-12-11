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

    <body>
        <header>
            <h1><?= constant("HEADING"); ?></h1>
        </header>

        <div class="container   border border-dark rounded-lg ">    
            <form >
                
                <div class="form-group">
                    <label for="login" class="font-weight-bold">Entrez votre identifiant</label>
                    <input type="text" class="form-control w-25 p-3" id="login" placeholder="Votre identifiant de connexion">
                </div>
                
                <div class="form-group">
                    <label for="pswd" class="font-weight-bold">Entrez votre mot de passe</label>
                    <input type="password" class="form-control w-25 p-3" id="pswd" placeholder="Votre mot de passe de connexion">
                </div>
                <button type="submit" class="btn btn-primary">Valider</button>
            </form>
        </div>




        
        <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    </body>
</html>