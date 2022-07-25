<?php include "setup.php";

//$sql = "SELECT results_id, standardnum, title, core_id, result, date FROM results";
$sql= "SELECT `title`,`content`,`image`
FROM pages
INNER JOIN Core ON results.core_id = core.core_id
WHERE core.core_id = 1";

$result = $conn->query($sql);
if ($result->num_rows > 0) {
  // output data of each row
    
  while($row = $result->fetch_assoc()) {
      //print_r ($row);
    echo "<br>"."id: " . " - Name: " . $row["title"]. " " . $row["content"]." ".$row["image"];
  }
} else {
  echo "0 results";
}
$conn->close();
?>
<?php include("head_nav.html");?>
  
<?php include("full-carousel-cover.html");?>




<header><h1>Our Team</h1></header>
<?php include("gallery.html");?>




<div class="h1">Southern Paprika</div>
<p></p>
<h8>Fresh capsicums straight from the crops with fresh delivery. Feel the aroma of chilled capsicums, the crunch of a ripe sweet paprika.</h8>
<P></P>
<h2>Bringing fresh food to our locals</h2> 

<div class="about-section">
  <h2><u>Southern paprika</u></h2>
  

<div class="main text-center">

  

</div>
</div>


        
<?php include("footer.html");?>




