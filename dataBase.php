<?php

$servidor = "localhost";
$database = "colstream";
$user = "root";
$password = "";

try {
    $conn = new PDO("mysql:host=$servidor;dbname=$database", $user, $password);
} catch (Exception $ex) {
    echo $ex->getMessage();
}
?>
