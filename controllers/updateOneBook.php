<?php

$id = $_POST['id'];
$title = $_POST['title'];
$parution_date = $_POST['parution_date'];
$author = $_POST['author'];
$excerpt = $_POST['excerpt'];

$connec = new PDO('mysql:dbname=biblio','root','0000');
    $connec->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $request = $connec->prepare("UPDATE books 
                                SET title = '$title', parution_date = '$parution_date', author = '$author', excerpt = '$excerpt' 
                               WHERE id = '$id'");
    $request->execute();

// Positionnement à la racine du projet
Header ('location: /');