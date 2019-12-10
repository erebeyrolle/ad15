<?php

define('DSN','mysql:host=localhost;dbname=library');
define('USER','root');
define('PASSWORD','1604');
define('CHARSET','charset=utf-8');

function connectDB()
{
    $dataBase = new PDO(DSN,USER,PASSWORD);
    $dataBase->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    return $dataBase;
}
?>