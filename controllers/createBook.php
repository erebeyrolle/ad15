<?php
// var_dump($_POST);
$title = $_POST['title'];
$parution_date = $_POST['parution_date'];
$author = $_POST['author'];
$excerpt = $_POST['excerpt'];

$connec = new PDO('mysql:dbname=biblio','root','0000');
    $connec->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $request = $connec->prepare("INSERT INTO books (title, parution_date, author, excerpt) 
                               VALUES ('$title', '$parution_date', '$author', '$excerpt')");
    $request->execute();
  
    // Se replacer sur la racine du projet
    Header('location: /');