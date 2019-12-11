<?php
session_start();
require_once('config/loaderBooks.php');
/* On crée une fonction qui va récupérer notre DB : library avec pour arguments:
Le nom de la DB, le User Name 'root' et le mot de passe '1604'*/

function getAllBooks() {
    $dataBase = connectDB();
    $request = $dataBase->prepare('SELECT * FROM books;');
    $request->execute();
    return $request->fetchAll(PDO::FETCH_ASSOC);
}

$books = getAllBooks();
// var_dump($books); die;
?>