<?php
$dbserver = 'localhost';
$dbname = 'kuliahdila';
$dbuser = 'root';
$dbpassword = '';
$dbn = "mysql:host={$dbserver};dbname={$dbname}";

$connection = null;
try {
    $connection = new PDO($dbn, $dbuser, $dbpassword);
}catch (Exception $exception){
    die("Terjadi error: ".$exception->getMessage());
}