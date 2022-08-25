<?php
// We need to use sessions, so you should always start sessions using the below code.
session_start();
// If the user is not logged in redirect to the login page...
if (!isset($_SESSION['loggedin'])) {
	header('Location: login.php');
	$_SESSION['message'] = "Please login to access this page!";
	exit;
}
?>

<?php include("../pages/setup.php");?> 
<?php include("admin_nav.html");?> 




			<div class="content">
			<h2>Edit Page</h2>
			
			
			<?php   
    $sql = "SELECT * FROM pages where id=1";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        // output data of each row
        $row = $result->fetch_assoc(); 
        #debugging print_r($row);
		$id=$row["id"];
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


			<table id="customers">
  <tr>
	<th>Page number</th>
    <th>Title</th>
    <th>Paragraph</th>
    <th>Image</th>
  </tr>
	<td><?php echo "$id"; ?><a href='edit_page.php?id=<?php print $id; ?>'>Edit</a></td>
    <td><?php echo "$title1"; ?> </td>
    <td><?php echo "$para1"; ?></td>
    <td><?php echo "$image1"; ?></td>

  </tr>
</table>
		</div>
	</body>
</html>

