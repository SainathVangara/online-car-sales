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


$sql_create_table = "CREATE TABLE cart (
    id INT AUTO_INCREMENT PRIMARY KEY,
    imagePath VARCHAR(255) NOT NULL,
    productName VARCHAR(255) NOT NULL,
    price DECIMAL(10, 2) NOT NULL
);
";

if ($conn->query($sql_create_table) === TRUE) {
    echo "Table logins created successfully";
} else {
    echo "Error creating table: " . $conn->error;
}

$conn->close();
?>