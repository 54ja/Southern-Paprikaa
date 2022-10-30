<?php
session_start();
    #print_r($_POST);
    $product_id=$_POST["product_id"]; 
    $fruit=$_POST["fruit"];
    $image=$_POST["image"];
    $color=$_POST["color"];
    $price=$_POST["price"];
 #   print"This is page $pagenum. on this page will be this title <b>$title1</b>";
    
    include('../pages/setup.php'); #connect to the database
    #insert needs the field names (no quotes) and the values (variables with quotes)
    $sql = "UPDATE product set fruit='$fruit', image='$image', color='$color', price='$price' where product_id= '$product_id'";
#print $sql;

if ($conn->query($sql) === TRUE) { # this executes the insert and tests if it works
  #echo "record $pageID updated successfully";
  $_SESSION['message'] = "Record has been updated!";
    header("Location: product.php"); #redirect to the admin page if succesful edit and update
die();
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;# this shows any error for debugging
  $_SESSION['message'] = "ERROR: Record has not been updated!";
}

$conn->close();# this closes the connectionto database
?>