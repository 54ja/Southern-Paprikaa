
<?php 
session_start();
include("../pages/head_nav.php"); ?>


<style>
 /* Style inputs with type="text", select elements and textareas */
input[type=text], select, textarea {
  width: 100%; /* Full width */
  padding: 12px; /* Some padding */ 
  border: 1px solid #ccc; /* Gray border */
  border-radius: 4px; /* Rounded borders */
  box-sizing: border-box; /* Make sure that padding and width stays in place */
  margin-top: 6px; /* Add a top margin */
  margin-bottom: 16px; /* Bottom margin */
  resize: vertical /* Allow the user to vertically resize the textarea (not horizontally) */
}

/* Style the submit button with a specific background color etc */
input[type=submit] {
  background-color: #04AA6D;
  color: white;
  padding: 12px 20px;
  border: none;
  border-radius: 4px;
  cursor: pointer;
}


/* When moving the mouse over the submit button, add a darker green color */
input[type=submit]:hover {
  background-color: #45a049;
}

/* Add a background color and some padding around the form */
.container {
  border-radius: 5px;
  background-color: #f2f2f2;
  padding: 15px;
}

form {
  width: 50%;
  margin-left: 100px;
  margin-top: 50px;
  padding: 10px;
  border: 1px solid #B0C4DE;
  border-radius: 2px;
  background: #f4f4f4;
  float: left;
}

iframe {
  margin-left: 100px;
  margin-top: 50px;
  margin-bottom: 150px;
  padding: 10px;
  border: 1px solid #B0C4DE;
  border-radius: 2px;
  background: #f4f4f4;
  float : inherit;
}

@media (max-width:767px) {
  iframe , form {
    width: 75%;
    padding-bottom:5px;
    margin: none !important;
    float: center;
    margin-left: 50px;

    
  }
}


</style>
<div class="bg">
<div style="background-color: #f2f2f2;">
<?php if(isset($_SESSION['messages'])){ 
					?><h1><?php echo $_SESSION['messages']; ?></h1> <?php
					unset($_SESSION['messages']); }?>
  <form action="action_page.php" method="post">
    

    <label for="name">Name</label>
    <input type="text" id="name" name="name" placeholder="Your name..">

    <label for="email">Email</label>
    <input type="text" id="email" name="email" placeholder="Your email..">

    <label for="subject">Subject</label>
    <input type="text" id="subject" name="subject" placeholder="Subject..">
    
    <label for="message">Message</label>
    <textarea id="message" name="message" placeholder="Write something.." style="height:100px"></textarea>

    <input type="submit" value="Submit">

  </form>

<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d12844.17349144028!2d174.6068876981735!3d-36.40814590662162!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6d0cde0f62b19b8b%3A0xd35375d999ab338d!2sSouthern%20Paprika%20Limited!5e0!3m2!1sen!2snz!4v1662329849823!5m2!1sen!2snz" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
</div>
</div>

<?php include("../pages/footer.html"); ?>

        