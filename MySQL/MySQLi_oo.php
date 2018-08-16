<?php

$servername = "10.10.85.189";
$username ="Hsun";
$password ="ww311752";
$database ="MYDB_test";

//create connection
$conn = new mysqli($servername,$username,$password,$database);

//check connect
if($conn->connect_error)
    die("connection failed" . $conn->connect_error);


//$sql = "CREATE DATABASE MYDB_test";   //create database
//create table
$sql ="CREATE TABLE MyGuests (         
    id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY, 
    firstname VARCHAR(30) NOT NULL,
    lastname VARCHAR(30) NOT NULL,
    email VARCHAR(50),
    reg_date TIMESTAMP
    );";
if($conn->query($sql) == true)
    echo "create table  successfully";
else
    echo $conn->error;


$conn->close();
?>