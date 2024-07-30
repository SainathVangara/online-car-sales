<?php
 include("fetch.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Skonda</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="./css/product.css">
    
    

</head>
<body>
  <div class="nav">
    <div class="buttons" style="width: 85%;">
        <button onclick="window.location.href = 'index.html'">Back</button>
    </div>
    <div class="cart">
        <img src="./image/download.png" alt="" width="55px;" style="cursor: pointer;" onclick="openModal()">
        <p>Add to Cart</p>
    </div>
</div>

<div id="myModal" class="modal">
  <div class="modal-content">
      <span class="close" onclick="closeModal()">&times;</span>
      <table>
          <tr>
              <th>Image</th>
              <th>Name</th>
              <th>Price</th>
              <th>Action</th>
          </tr>
          <tr>
              
              <?php
            

      if (mysqli_num_rows($result) > 0) {
      
        while ($row = mysqli_fetch_assoc($result)) {
            echo "<tr>";
            echo "<td><img src='" . $row['imagePath'] . "' alt=''></td>";
            echo "<td class='product-name'>" . $row['productName'] . "</td>";
            echo "<td class='product-price'>" . $row['price'] . "</td>";
            echo "<td>
                    <form method='POST' action='delete.php'>
                        <input type='hidden' name='productId' value='" . $row['id'] . "'>
                        <button type='submit' name='delete'>Delete</button>
                    </form>
                  </td>";
            echo "</tr>";
        }
      } else {
        
        echo "No products found";
      }

?>
         </tr>
      </table>
  </div>
</div>
    <div class="first">
        <div class="img">
            <img src="./image/product/10.jpg" alt="">
            
        </div>
        <div class="info">
            <h1>AUDI</h1>
            <h3 style="color: orange; text-align:center;">19000$</h3>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Labore consequatur temporibus incidunt! Reprehenderit perspiciatis, excepturi sapiente sit ab explicabo consequatur laborum dolorum officiis asperiores illo quidem soluta sunt fugiat magnam!
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Molestiae similique architecto iste ipsam! Maiores omnis optio quis, voluptas nesciunt obcaecati eius quos accusamus in veniam illum molestiae? Accusantium, accusamus recusandae!
            </p>
            <form id="addToCartForm" method="post" action="cart.php">
              <input type="hidden" name="imagePath" value="./image/product/10.jpg">
              <input type="hidden" name="productName" value="AUDI">
              <input type="hidden" name="price" value="19000">
              <button type="submit" name="submit">Add to Cart</button>
          </form>
        </div>
    </div>

    <div class="other">
        <h1>Similar Products</h1>
        <div class="cards">
            <div class="card" style="width: 18rem;">
                <img src="./image/product/2.jpg" class="card-img-top" alt="..."  onclick="window.location.href = 'porsche.html'">
                <div class="card-body">
                  <h5 class="card-title">Card title</h5>
                  <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                  
                </div>
              </div><div class="card" style="width: 18rem;">
                <img src="./image/product/1.jpg" class="card-img-top" alt="..." onclick="window.location.href = 'porsche.html'">
                <div class="card-body">
                  <h5 class="card-title">Card title</h5>
                  <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                  
                </div>
              </div><div class="card" style="width: 18rem;">
                <img src="./image/product/10.jpg" class="card-img-top" alt="..." onclick="window.location.href = 'porsche.html'">
                <div class="card-body">
                  <h5 class="card-title">Card title</h5>
                  <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                  
                </div>
              </div>
              <div class="card" style="width: 18rem;">
                <img src="./image/product/5.jpeg" class="card-img-top" alt="..." onclick="window.location.href = 'porsche.html'">
                <div class="card-body">
                  <h5 class="card-title">Card title</h5>
                  <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                  
                </div>
              </div>
        </div>
    </div>


    <script src="script.js"></script>
</body>
</html>