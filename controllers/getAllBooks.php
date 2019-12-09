<?php

/* On crée une fonction qui va récupérer notre DB : biblio avec pour arguments:
Le nom de la DB, le User Name 'root' et le mot de passe '0000'*/

function getAllBooks() {
    $connec = new PDO('mysql:dbname=biblio','root','0000');
    $connec->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $request = $connec->prepare('SELECT * FROM books;');
    $request->execute();
    return $request->fetchAll(PDO::FETCH_ASSOC);
}

$books = getAllBooks();
// var_dump($books); die;
?>