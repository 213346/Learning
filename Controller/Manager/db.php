<?php

$user = "root";
$password = "root";
$hostname = "localhost";
$dbname = "learning";
$db = null;
try {
    $db = new PDO('mysql:host=' . $hostname . ';dbname=' . $dbname, $user, $password);
}
catch (Exception $e)
{
    echo $e->getMessage();
}

?>