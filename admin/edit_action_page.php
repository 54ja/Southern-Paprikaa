<?php
    #print_r($_POST);
    $pageID= $_POST["pageID"];
    $title1= $_POST["title1"];
    $para1 = addslashes($_POST["para1"]);
    $image1 = $_POST["image1"];
    $title2= $_POST["title2"];
    $para2 = addslashes($_POST["para2"]);
    $image2 = $_POST["image2"];
     $title3= $_POST["title3"];
    $para3 = addslashes($_POST["para3"]);
    $image3 = $_POST["image3"];
 #   print"This is page $pagenum. on this page will be this title <b>$title1</b>";
    
    include"../pages/setup.php"; #connect to the database
    #insert needs the field names (no quotes) and the values (variables with quotes)
    $sql = "UPDATE pages set title1='$title1', para1='$para1',image1='$image1',title2='$title2',para2='$title2',image2='$image2',title3='$title3',para3='$para3',image3='$image3' where id= '$pageID'";
#print $sql;

if ($conn->query($sql) === TRUE) { # this executes the insert and tests if it works
  #echo "record $pageID updated successfully";
    header("Location: home.php"); #redirect to the admin page if succesful edit and update
die();
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;# this shows any error for debugging
}

$conn->close();# this closes the connectionto database
?>