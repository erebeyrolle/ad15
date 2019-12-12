<?php
session_start();
require_once('../config/loaderBooks.php');

$title = test_input($_POST['title']);
$author = test_input($_POST['author']);
$summary = test_input($_POST['summary']);
$price = test_input($_POST['price']);

if ($_SERVER['REQUEST_METHOD'] == 'POST' && (!empty($title) && !empty($author) && !empty($summary) && !empty(is_numeric($price))))
    {
    $dataBase = connectDB();
    $request = $dataBase->prepare(" INSERT INTO books (title, author, summary, price) 
                                    VALUES (:title, :author, :summary, :price)");
    $request->bindParam(':title', $title);
    $request->bindParam(':author', $author);
    $request->bindParam(':summary', $summary);
    $request->bindParam(':price', $price);
    $request->execute();
    }  
     else
    {
        echo('Veuillez remplir tous les champs');
    }
  
    // Se replacer sur la racine du projet
    Header('location: /');