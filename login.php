<?php 
session_start();
require_once("config/loaderBooks.php"); 

$login = test_input($_POST['login']);
$pswd = test_input($_POST['pswd']);

function checkIdentity($login,$pswd)
{
    $dataBase = connectDB();
    $request = $dataBase->prepare(' SELECT * FROM users
                                    WHERE login = :login && pswd = :pswd;');
    $request->bindParam(':login', $login);
    $request->bindParam(':pswd', $pswd);
    $request->execute();
    return $request->fetchAll(PDO::FETCH_ASSOC);
}
$identity = checkIdentity($login,$pswd);

If (empty($identity))
{
    echo "Vous n'êtes pas inscrit à la bibliothèque";
    
    Header ('location: index.php?bye');
}
elseif (($identity[0]['admin'] !== "1"))
{
    $_SESSION['login'] = $identity[0]['admin'];
    $_SESSION['id'] = $identity[0]['id'];
    Header ('location: allBooks.php');
}
else
{
    $_SESSION['login'] = $identity[0]['admin'];
    $_SESSION['id'] = $identity[0]['id'];
    Header ('location: allBooks.php');
};