<?php
session_start();
require_once('config/loaderBooks.php');

function getTenBooks() {
    $dataBase = connectDB();
    $request = $dataBase->prepare('SELECT * FROM books                                                  ORDER BY id DESC
                                    LIMIT 10;');
    $request->execute();
    return $request->fetchAll(PDO::FETCH_ASSOC);

}

$books = getTenBooks();

?>