

 <link href="css/style.css" rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i&display=swap"/>

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


<div class="row">
<div class="column">
<div class="card">
<img src="imagers/flower.jpg" alt="Painting of pink flowers" style="width:100%">
      <div class="container">
        <h2>Pink flowers</h2>
        <h4 class="title">By Robin Turner</h4>
        <h5>Robin Turner, a student in year 13 has a large passion for drawing and doing paintings. For this year's portfolio, she came up with the idea to paint her grandmothers favourite flowers and then give it to her for her 94 birthday.</h5>
        
      </div>
    </div>
  </div>

  <div class="column">
    <div class="card">
      <img src="imagers/highway.jpg" alt="Picture with low shutter speed" style="width:100%">
      <div class="container">
        <h2>Highway</h2>
        <h4 class="title">By Rihanna Downs</h4>
        <h5>Rihanna Downs, is a student in year 12 who has a love for photography and will take any opportunity to take a photo. This photo was taken in the busy streets of Auckland, where Rihanna tested different shutter speeds until she got the perfect shot.
 </h5>
        
      </div>
    </div>
  </div>

  <div class="column">
    <div class="card">
      <img src="imagers/moon.jpg" alt="Painting of the moon" style="width:100%">
      <div class="container">
        <h2>Moon and stars</h2>
        <h4 class="title">Erik Harding</h4>
        <h5>Erik Harding, is a student in year 11 who has a passion for art. Even since he was 8 he has been painting and has spent all of his spear time focusing his skills. This piece won the school's painting of the year award and even got second in nationals.</h5>
       
      </div>
    </div>
  </div>
</div>

</div>

  







