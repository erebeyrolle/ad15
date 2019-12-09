<?php
include_once('./controllers/getAllGuests.php');
// var_dump($guests); die;
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Test Tableau de PHP vers HTML</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
    <script src="main.js"></script>
</head>
<body>
    <header>
        <nav>
            <a href="./addGuest.php" target="_blank">Ajouter un invité =><br /><a>
            <br />
        </nav>
    </header>
    <table>
    <thead>
    <tr>
    <th colspan="4">Liste des Invités</th>
    </tr>
    <tr>
            <th>Nom</th>
            <th>Prénom</th>
            <th>Age</th>
            <th>Commentaire</th>
            
    </tr>
    </thead>

    <?php foreach ($guests as $key => $guest): ?>
        <tbody>           
        <tr>              
            <td>
            <?php echo $guest['lastName']; ?>
            </td>
            <td>
            <?php echo $guest['firstName']; ?>
            </td>
            <td>
            <?php echo $guest['age']; ?>
            </td>
            <td>
            <?php echo $guest['comment']; ?>
            </td>
            <td>
                <form action="./updateGuest.php" method="POST">
                    <input type="hidden" name="id" value=<?php echo $guest['id'] ?> >
                    <input type="submit" value="Up">
                </form> 
            </td>   
        </tr>
        </tbody>
<?php endforeach; ?>
    </table>
</body>
</html>