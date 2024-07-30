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
        // Fetch and display all rows
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
            <img src="./image/product/1.jpg" alt="">
            
        </div>
        <div class="info">
            <h1>SKODA</h1>
            <h3 style="color: orange; text-align:center;">2000$</h3>
            <p>Škoda Auto a.s. (Czech pronunciation: [ˈʃkoda]), often shortened to Škoda, is a Czech automobile manufacturer established in 1925 as the successor to Laurin & Klement and headquartered in Mladá Boleslav, Czech Republic. Škoda Works became state owned in 1948.
            </p>
            <form id="addToCartForm" method="post" action="cart.php">
              <input type="hidden" name="imagePath" value="./image/product/1.jpg">
              <input type="hidden" name="productName" value="SKODA">
              <input type="hidden" name="price" value="2000">
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
                  <h5 class="card-title">PORSCHE</h5>
                  <p class="card-text">There is a reason why Porsche, as a company, is known as one of the most reliable and trustworthy vehicle brands in the world. As a brand, it is synonymous with performance and greatness. Drivers admire Porsches for their updated technologies, impeccable ride quality, and impressive driving dynamics..</p>
                  
                </div>
              </div><div class="card" style="width: 18rem;">
                <img src="./image/product/3.jpg" class="card-img-top" alt="..." onclick="window.location.href = 'bmw.html'">
                <div class="card-body">
                  <h5 class="card-title">BMW</h5>
                  <p class="card-text">The acronym BMW stands for Bayerische Motoren Werke GmbH, which roughly translates to the Bavarian Engine Works Company. The name harks back to the company's origin in the German state of Bavaria. It also indicates BMW's original product range: engines for various applications.</p>
                  
                </div>
              </div><div class="card" style="width: 18rem;">
                <img src="./image/product/4.jpg" class="card-img-top" alt="..." onclick="window.location.href = 'dodge.html'">
                <div class="card-body">
                  <h5 class="card-title">DODGE RAM</h5>
                  <p class="card-text">Ram is an American truck company that used to be a model name for Dodge trucks. Today, Ram is its own brand, exclusively making light- and heavy-duty trucks, while Dodge produces cars and SUVs. Vehicles from Ford, GMC, and Chevrolet all compete with Ram trucks.</p>
                  
                </div>
              </div>
              <div class="card" style="width: 18rem;">
                <img src="./image/product/5.jpeg" class="card-img-top" alt="..." onclick="window.location.href = 'buggati.html'">
                <div class="card-body">
                  <h5 class="card-title">BENZ</h5>
                  <p class="card-text">The Mercedes-Benz Group AG is a German multinational automotive corporation headquartered in Stuttgart, Baden-Württemberg, Germany. It is one of the world's leading car manufacturers. Daimler-Benz was formed with the merger of Benz & Cie., the world's oldest car company, and Daimler Motoren Gesellschaft in 1926. </p>
                  
                </div>
              </div>
        </div>
    </div>


    <script src="script.js"></script>
</body>
</html>