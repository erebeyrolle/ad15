<?php
session_start();
require_once("../config/loaderBooks.php");
// var_dump($_POST);
$id = $_POST['id'];


    $dataBase = connectDB();
    $request = $dataBase->prepare(" DELETE FROM books
                                    WHERE id='$id'");
    $request->execute();
  
    // Se replacer sur la racine du projet
    Header('location: /');