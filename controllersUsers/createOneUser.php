<?php
session_start();
require_once('../config/loaderBooks.php');

$admin = test_input($_POST['admin']);
$login = test_input($_POST['login']);
$pswd = test_input($_POST['pswd']);

if ($admin != true)
{
    $admin = false;
}

if ($_SERVER['REQUEST_METHOD'] == 'POST' && (!empty($admin) && !empty($login) && !empty($pswd)))
    {
    $dataBase = connectDB();
    $request = $dataBase->prepare(" INSERT INTO users (admin, login, pswd) 
                                    VALUES ($admin, :login, :pswd)");
    $request->bindParam(':login', $login);
    $request->bindParam(':pswd', $pswd);
    $request->execute();
    
    }  
    else
    {
        echo('Veuillez remplir tous les champs');
    }

Header('location: ../addUser.php?create');