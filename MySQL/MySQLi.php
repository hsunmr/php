<?php

$servername = "";
$username ="";
$password ="";
$database ="";

$conn =  mysqli_connect($servername,$username,$password,$database);

if(!$conn)
    die("connection failed" . $conn->connect_error);



//$sql = "CREATE DATABASE MYDB_test2";   //create database


//create table
$sql ="CREATE TABLE MyGuests (         
    id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY, 
    firstname VARCHAR(30) NOT NULL,
    lastname VARCHAR(30) NOT NULL,
    email VARCHAR(50),
    reg_date TIMESTAMP
    );";

if(mysqli_query($conn,$sql))
    echo "create table successfully";
else
    echo mysqli_error($conn);



mysqli_close($conn);


?>
