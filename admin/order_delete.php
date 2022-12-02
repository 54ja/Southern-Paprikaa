<?php
    session_start();
    print_r($_GET);
    $orders_id= $_GET["orders_id"];

    include("../pages/setup.php"); #connect to the database
    #insert needs the field names (no quotes) and the values (variables with quotes)
    $sql = "DELETE FROM orders WHERE orders_id='$orders_id'";

if ($conn->query($sql) === TRUE) { # this executes the insert and tests if it works
  #echo "record $pageID updated successfully";
  $_SESSION['message'] = "Successfully deleted!";
    header("Location: order.php"); #redirect to the admin page if successful edit and update
die();
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;# this shows any error for debugging
}

$conn->close();# this closes the connection to database
    ?>