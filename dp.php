<?php

$servername = "localhost"; 
$username = "root"; 
$password = ""; 
$dbname = "carsales"; 

$conn = new mysqli($servername, $username, $password);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql_create_db = "CREATE DATABASE IF NOT EXISTS $dbname";

if ($conn->query($sql_create_db) === TRUE) {
    echo "Database created successfully";
} else {
    echo "Error creating database: " . $conn->error;
}

$conn->select_db($dbname);

$sql_create_table = "CREATE TABLE IF NOT EXISTS logins (
    id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    username VARCHAR(50) NOT NULL UNIQUE,
    password VARCHAR(20) NOT NULL,
    email VARCHAR(50) NOT NULL,
    phone BIGINT(15) NOT NULL,
    gender ENUM('m', 'f', 'o') NOT NULL
)";

if ($conn->query($sql_create_table) === TRUE) {
    echo "Table logins created successfully";
} else {
    echo "Error creating table: " . $conn->error;
}

$conn->close(); 
?>