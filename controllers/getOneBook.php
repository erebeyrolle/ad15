<?php
session_start();
require_once('config/loaderBooks.php');

$id = test_input($_POST['id']);

function getOneBook($id) {
    $dataBase = connectDB();
    $request = $dataBase->prepare(" SELECT * FROM books
                                    WHERE id='$id';");
    $request->execute();
    return $request->fetchAll(PDO::FETCH_ASSOC);
}

$response = getOneBook($id);
$book = $response[0];
//var_dump($book); die;
?>