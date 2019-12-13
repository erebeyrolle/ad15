<?php
session_start();
require_once('../config/loaderBooks.php');

$id = test_input($_POST['user_id']);
$admin = test_input($_POST['admin']);
$login = test_input($_POST['login']);
$pswd = test_input($_POST['pswd']);

if ($admin = "Utilisateur")
{
    $admin = false;
}
else
{
    $admin = true;
}
var_dump($_POST);die;
if ($_SERVER['REQUEST_METHOD'] == 'POST' && (!empty($admin) && !empty($login) && !empty($pswd)))
    {
    $dataBase = connectDB();
    $request = $dataBase->prepare(" UPDATE users 
                                    SET login = :login, pswd = :pswd, $admin
                                    WHERE user_id = :user_id ");
    $request->bindParam(':login', $login);
    $request->bindParam(':pswd', $pswd);
    $request->bindParam(':user_id', $id);
    $request->execute();
    }
    else
    {
        Header ('location: ../updateUser.php?update_err');
    }
    
Header ('location: ../allUsers.php?update');