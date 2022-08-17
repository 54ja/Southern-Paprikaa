<script type="text/javascript">
    var password = "please";
    var x = prompt("Enter in the password "," ");
    if (x.toLowerCase() == 1234) {
     alert("Success!  \n \n Logging in");
     window.location = "../admin/registerpage.php";


    }
    else {
        alert("Incorrect password  \n \n Redirecting to homepage");
     window.location = "../pages/index.php";
    }
    </script>