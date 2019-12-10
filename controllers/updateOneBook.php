<?php
session_start();
require_once("../loaderBooks.php");

$id = test_input($_POST['id']);
$title = test_input($_POST['title']);
$author = test_input($_POST['author']);
$summary = test_input($_POST['summary']);

    $dataBase = connectDB();
    $request = $dataBase->prepare(" UPDATE books 
                                    SET title = :title, author = :author, summary = :summary' 
                                    WHERE id = '$id'");
    $request->bindParam(':title', $title);
    $request->bindParam(':author', $author);
    $request->bindParam(':summary', $summary);
    $request->execute();

// Positionnement à la racine du projet
Header ('location: /');