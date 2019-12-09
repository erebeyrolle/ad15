<?php

define('DSN','mysql:host=localhost;dbname=library');
define('USER','root');
define('PASSWORD','1604');
define('CHARSET','charset=utf-8');

function ConnectDB()
{
    $DataBase = new PDO(DSN,USER,PASSWORD);
    $DataBase->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    return $DataBase;
}
?>