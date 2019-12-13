<?php
session_start();
require_once("../config/loaderBooks.php");
// var_dump($_POST);
$id = test_input($_POST['user_id']);


    $dataBase = connectDB();
    $request = $dataBase->prepare(" DELETE FROM users
                                    WHERE user_id = '$id'");
    $request->execute();
  
    Header('location: ../allUsers.php?delete');