<?php


$server = "localhost";
$username = "root";
$pass = "";
$database = "carsales";

$conn = new mysqli($server, $username, $pass, $database);

if ($conn->connect_error) {
    die('connection error :' . $conn->connect_error);
} else {
    if (isset($_POST['submit'])) {
        $imagePath = $_POST['imagePath'];
        $productName = $_POST['productName'];
        $price = $_POST['price'];
        
        // Prepare SQL statement to insert data into the database
        $sql = "INSERT INTO cart (imagePath, productName, price) VALUES ('$imagePath', '$productName', '$price')";
        
        if ($conn->query($sql) === TRUE) {
            echo "<script>
            
            alert('Successfully add to cart');
            window.location.href = 'index.html';
            </script>
            ";
            
        } else {
            echo "<script>
            
            alert('error adding to cart');
            window.location.href = 'index.html';
            </script>
            ";
        }
    }

}
// Retrieve data from the form

$conn->close();
?>
