
<?php
session_start();

if (!isset($_SESSION['loggedin'])) {
	header('Location: login.php');
	$_SESSION['message'] = "Please login to access this page!";
	exit;
}
?>

<?php
    print_r($_POST); die();
    $product_id = $_POST["product_id"];
    $account_id = $_POST["acounts_id"];
 #   print"This is page $pagenum. on this page will be this title <b>$title1</b>";
    

    include("setup.php"); #connect to the database
    #insert needs the field names (no quotes) and the values (variables with quotes)

    $sql = "INSERT INTO orders (account_id, product_id) VALUES ('$account_id', '$prints_id')";
   

    if (mysqli_query($conn, $sql)) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}





         $_SESSION['message'] = "Oder succsesful!";
			header('Location: ../pages/capshop.php');
   
