<?php
session_start();
require_once("../config/loaderBooks.php");
// var_dump($_POST);
$id = $_POST['id'];


$connec = new PDO('mysql:dbname=biblio','root','0000');
    $connec->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $request = $connec->prepare("DELETE FROM books
                               WHERE id='$id'");
    $request->execute();
  
    // Se replacer sur la racine du projet
    Header('location: /');