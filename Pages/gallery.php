

 <link href="../css/style.css" rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i&display=swap"/>

 <?php   
    $sql = "SELECT * FROM pages where id=1";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        // output data of each row
        $row = $result->fetch_assoc(); 
        #debugging print_r($row);
        $title1=$row["title1"];
        $para1=$row["para1"];
        $image1=$row["image1"];

        $title2=$row["title2"];
        $para2=$row["para2"];
        $image2=$row["image2"];

        $title3=$row["title3"];
        $para3=$row["para3"];
        $image3=$row["image3"];
       
      
    } else {
        echo "0 results";
    }
$conn->close();
      
    ?>

<div class="jumbotron text-center">


<div class="row">
<div class="column">
<div class="card">
<img src="<?php echo "$image1"; ?>" alt="picking team" style="width:100%">
      <div class="container">
        <?php echo "<h2>$title1</h2>"; ?>
        <?php echo "<h5>$para1</h5>"; ?>
      </div>
    </div>
  </div>

  <div class="column">
    <div class="card">
      <img src="<?php echo "$image2"; ?>" alt="packing team" style="width:100%">
      <div class="container">
        <?php echo "<h2>$title2</h2>"; ?>
        
        <?php echo "<h5>$para2</h5>"; ?>
      </div>
    </div>
  </div>

  <div class="column">
    <div class="card">
      <img src="<?php echo "$image3"; ?>" alt="dispatch team" style="width:100%">
      <div class="container">
        <?php echo "<h2>$title3</h2>"; ?>
       
        <?php echo "<h5>$para3</h5>"; ?>
      </div>
    </div>
  </div>
</div>
</div>

  







