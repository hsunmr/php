<?php

$servername = "";
$username ="";
$password ="";
$database ="";
try{

    $conn = new PDO("mysql:host=$servername;dbname=$database",$username,$password);
    $conn->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);


   // $sql = "CREATE DATABASE MYDB_test4";  //create database

   //create table 
   $sql ="CREATE TABLE MyGuests (         
    id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY, 
    firstname VARCHAR(30) NOT NULL,
    lastname VARCHAR(30) NOT NULL,
    email VARCHAR(50),
    reg_date TIMESTAMP
    );";

    $conn->exec($sql);
        echo "create table successfully";


}catch(PDOException $e)
{
    echo $sql . "<br>" . $e->getMessage();
}

$conn = null;
?>
