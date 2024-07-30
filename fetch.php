<?php
$server = "localhost";
$username = "root";
$pass = "";
$database = "carsales";

$conn = new mysqli($server, $username, $pass, $database);

if ($conn->connect_error) {
    die('connection error :' . $conn->connect_error);
} else {
    
        
        
        $stmt = "SELECT * FROM cart";
        $result = mysqli_query($conn, $stmt);

       

       
    }

$conn->close();
?>
