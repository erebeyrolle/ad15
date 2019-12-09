<?php

$id = $_POST['id'];

function getOneBook($id) {
    $connec = new PDO('mysql:dbname=biblio','root','0000');
    $connec->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $request = $connec->prepare("SELECT * FROM books WHERE id='$id';");
    $request->execute();
    return $request->fetchAll(PDO::FETCH_ASSOC);
}

$response = getOneBook($id);
$book = $response[0];
//var_dump($book); die;
?>