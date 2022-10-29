<?php
// We need to use sessions, so you should always start sessions using the below code.
session_start();
// If the user is not logged in redirect to the login page...
if (!isset($_SESSION['loggedin'])) {
	header('Location: login.php');
	$_SESSION['message'] = "Please login to access this page!";
	exit;
}
if (!isset($_SESSION['admin'])) {
	header('Location: login.php');
	$_SESSION['message'] = "Use an admin account to access this page!";
	exit;
}
?>
<?php 
    print_r($_GET);
    $pageID= $_GET["id"]; ?>
<?php include("../pages/setup.php");?> 
<?php include("admin_nav.php");?> 

<style>
 /* Style inputs, select elements and textareas */
input[type=text], select, textarea{
  width: 100%;
  padding: 12px;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
  resize: vertical;
}

/* Style the label to display next to the inputs */
label {
  padding: 12px 12px 12px 0;
  display: inline-block;
}

/* Style the submit button */
input[type=submit] {
  background-color: #4CAF50;
  color: white;
  padding: 12px 20px;
  border: none;
  border-radius: 4px;
  cursor: pointer;
  float: right;
}

/* Style the container */
.container {
  border-radius: 5px;
  /*background-color: #f2f2f2;*/
  padding: 20px;
}

/* Floating column for labels: 25% width */
.col-25 {
  float: left;
  width: 25%;
  margin-top: 6px;
}

/* Floating column for inputs: 75% width */
.col-75 {
  float: left;
  width: 75%;
  margin-top: 6px;
}

/* Clear floats after the columns */
.row:after {
  content: "";
  display: table;
  clear: both;
}

/* Responsive layout - when the screen is less than 600px wide, make the two columns stack on top of each other instead of next to each other */
@media screen and (max-width: 600px) {
  .col-25, .col-75, input[type=submit] {
    width: 100%;
    margin-top: 0;
  }
} </style>



			<div class="content">
			<h2>Edit page</h2>
	
			
			<?php   
    $sql = "SELECT * FROM pages where id= $pageID";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        // output data of each row
        $row = $result->fetch_assoc(); 
        #debugging print_r($row);
		    $pageID=$row["id"];
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


	

    <!--new stuff -->

    <form action="edit_action_page.php" method="post" >
    <div class="row">
      <div class="col-25">
        <label for="pagenum">Page Number</label>
      </div>
      <div class="col-75">
    <?php print $pageID ?>
          <input type="hidden" id="pageID" name="pageID" value= "<?php print $pageID ?>">
      </div>
    </div>
    <div class="row">
      <div class="col-25">
        <label for="title1">Title One</label>
      </div>
      <div class="col-75">
        <input type="text" id="title1" name="title1" value="<?php print $title1 ?>">
      </div>
    </div>

<div class="row">
      <div class="col-25">
        <label for="country">Country</label>
      </div>
      <div class="col-75">
        <select id="country" name="country">
          <option value="australia">Australia</option>
          <option value="canada">Canada</option>
          <option value="usa">New Zealand</option>
        </select>
      </div>
    </div>
    <div class="row">
      <div class="col-25">
        <label for="para1">Paragraph 1</label>
      </div>
      <div class="col-75">
        <textarea id="para1" name="para1" style="height:200px"><?php print $para1 ?></textarea>
      </div>
    </div>
    <div class="row">
      <div class="col-25">
        <label for="image1">Image One</label>
      </div>
      <div class="col-75">
        <input type="text" id="image1" name="image1" value="<?php print $image1 ?>">
      </div>
    </div>
    
    <!-- second paragraph -->
    <div class="row">
      <div class="col-25">
        <label for="title2">Title 2</label>
      </div>
      <div class="col-75">
        <input type="text" id="title2" name="title2" value="<?php print $title2 ?>">
      </div>
    </div>
    <div class="row">
      <div class="col-25">
      </div>
      <div class="col-75">
    </div>

    </div>
    <div class="row">
      <div class="col-25">
        <label for="para2">Paragraph 2</label>
      </div>
      <div class="col-75">
        <textarea id="para2" name="para2" style="height:200px"><?php print $para2 ?></textarea>
      </div>
    </div>
    <div class="row">
      <div class="col-25">
        <label for="image2">Image 2</label>
      </div>
      <div class="col-75">
        <input type="text" id="image2" name="image2" value="<?php print $image2 ?>">
      </div>
    </div>

<!-- third paragraph -->

<div class="row">
      <div class="col-25">
        <label for="title2">Title 3</label>
      </div>
      <div class="col-75">
        <input type="text" id="title3" name="title3" value="<?php print $title3 ?>">
      </div>
    </div>
    <div class="row">
      <div class="col-25">
      </div>
      <div class="col-75">
    </div>

    </div>
    <div class="row">
      <div class="col-25">
        <label for="para1">Paragraph 3</label>
      </div>
      <div class="col-75">
        <textarea id="para3" name="para3" style="height:200px"><?php print $para3 ?></textarea>
      </div>
    </div>
    <div class="row">
      <div class="col-25">
        <label for="image3">Image 3</label>
      </div>
      <div class="col-75">
        <input type="text" id="image3" name="image3" value="<?php print $image3 ?>">
      </div>
    </div>



    <div class="row">
      <input type="submit" value="Submit">
    </div>
  </form>

	</body>
</html>

