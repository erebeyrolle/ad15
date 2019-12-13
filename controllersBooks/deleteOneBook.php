<?php
session_start();
require_once("../config/loaderBooks.php");
// var_dump($_POST);
$id = $_POST['book_id'];


    $dataBase = connectDB();
    $request = $dataBase->prepare(" DELETE FROM books
                                    WHERE book_id='$id'");
    $request->execute();
  
    Header('location: ../allBooks.php?delete');