<?php

$servidor = "localhost";
$DataBase="app";
$user="root";
$password="";

try {
    $conexion=new PDO("mysql:host=$servidor,dbname=$DataBase",$user,$password);
} catch (Exception $ex){
    echo  $ex->getMessage();
}