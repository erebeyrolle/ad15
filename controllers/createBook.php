<?php
session_start();
require_once("../config/loaderBooks.php");

$title = test_input($_POST['title']);
$author = test_input($_POST['author']);
$summary = test_input($_POST['summary']);

if ($_SERVER['REQUEST_METHOD'] == 'POST' && (!empty($title) && !empty($author) && !empty($summary)))
    {
    $dataBase = connectDB();
    $request = $dataBase->prepare(" INSERT INTO books (title, author, summary) 
                                    VALUES (:title, :author, :summary)");
    $request->bindParam(':title', $title);
    $request->bindParam(':author', $author);
    $request->bindParam(':summary', $summary);
    $request->execute();
    }   else
    {
        echo('Veuillez remplir tous les champs');
    }
  
    // Se replacer sur la racine du projet
    Header('location: /');