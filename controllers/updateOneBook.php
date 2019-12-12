<?php
session_start();
require_once('../config/loaderBooks.php');

$id = test_input($_POST['id']);
$title = test_input($_POST['title']);
$author = test_input($_POST['author']);
$summary = test_input($_POST['summary']);
$price = floatval($_POST['price']);

if ($_SERVER['REQUEST_METHOD'] == 'POST' && (!empty($title) && !empty($author) && !empty($summary) && !empty(is_numeric($price))))
    {
    $dataBase = connectDB();
    $request = $dataBase->prepare(" UPDATE books 
                                    SET title = :title, author = :author, summary = :summary, price = :price
                                    WHERE id = :id ");
    $request->bindParam(':title', $title);
    $request->bindParam(':author', $author);
    $request->bindParam(':summary', $summary);
    $request->bindParam(':price', $price);
    $request->bindParam(':id', $id);
    $request->execute();
    }
    else
    {
        Header ('location: ../updateBook.php?update_err');
    }
    
// Positionnement à l'accueil du site
Header ('location: ../allBooks.php?update');