<?php include("setup.php");?> 

<?php include("head_nav.php");?>

<!-- <div class="jumbotron text-center">  -->


<?php   
    $sql = "SELECT * FROM product";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
      while($row = $result->fetch_assoc()) { 
        #debuggin print_r($row);
        $fruit=$row["fruit"];
        $color=$row["color"];
        $weight=$row["weight"];
        $product_id=$row["product_id"];
        $price=$row["price"];
        $image=$row["image"];
        ?>

    <div class="column">
      <div class="card">
        <img src=" ../images/<?php echo $image ;?>" alt="Capsicum" style="width:100%;">
        <div class="container">
        <h2><?php echo $fruit ?></h2>
        
        <h5><button type="button" onclick="location.href='capshop.php?product_id=<?php print $product_id;?>';">Buy now</button></h5> 
      </div>
    </div>
  </div>
  </div>

  
  <?php
      }
      
    }?>

  









<?php include("../pages/footer.html");?>