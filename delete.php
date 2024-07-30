<?php

$server = "localhost";
$username = "root";
$pass = "";
$database = "carsales";

$conn = new mysqli($server, $username, $pass, $database);

if ($conn->connect_error) {
    die('connection error :' . $conn->connect_error);
}
else{

   
    if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['delete'])) {
        
        if (isset($_POST['productId']) && filter_var($_POST['productId'], FILTER_VALIDATE_INT)) {
            
            
    
            $productId = mysqli_real_escape_string($conn, $_POST['productId']);
    
            $sql = "DELETE FROM cart WHERE id = $productId";
    
            if (mysqli_query($conn, $sql)) {
                
                echo "<script>
            
                alert('Deleted Successfuly from cart');
                window.location.href = 'index.html';
                </script>
                ";
                exit();
            } else {
                
                echo "Error: " . mysqli_error($conn);
            }
    
       
            mysqli_close($conn);
        } else {
           
            echo "Invalid product ID";
        }
    } else {

        echo "<script>
            
            alert('Deleted Successfuly from cart');
            window.location.href = 'index.html';
            </script>
            ";
        exit();
    }
}
?>
