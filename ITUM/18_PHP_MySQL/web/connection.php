<?php
$server = "localhost";
$username = "root";
// MAMP default password is root
$password = "root";
$database = "studentdb";

//create connection
$conn = new mysqli($server,$username,$password,$database);
// check connection
if ($conn->connect_error){
    die("Connection failed:" . $conn->connect_error);
}
// echo "Connected Successfully";

// create database
/* $sql = "CREATE DATABASE studentdb";
if ($conn->query($sql) === TRUE) {
    echo "Database created successfully";
} else {
    echo "Error creating database: " . $conn->error;
} */

// create table
$sql = "CREATE TABLE register (
    stdid INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    firstname VARCHAR(30) NOT NULL,
    lastname VARCHAR(30) NOT NULL,
    password VARCHAR(30) NOT NULL,
    email VARCHAR(50),
    reg_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
    )";

if ($conn->query($sql) === TRUE) {
    echo "Table register created successfully";
} else {
    echo "Error creating table: " . $conn->error;
}

?>