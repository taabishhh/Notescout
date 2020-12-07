<!DOCTYPE html>
<?php
include('login.php');
session_start();
if (isset($_SESSION["uname"])) {
  $name=$_SESSION["uname"];
}





// Include config file
//require_once "config.php";
//include_once("config.php");

	if (isset($_POST['submit'])){
	// retrieve the form data by using the element's name attributes value as key
	$name = $_POST['fname'];
	$email = $_POST['emailid'];
  $country = $_POST['country'];
  $msg = $_POST['subject'];

	/*$sql_u = "SELECT * FROM reg_users WHERE username='$uname'";
  	$sql_e = "SELECT * FROM reg_users WHERE email='$email'";
  	$res_u = mysqli_query($conn, $sql_u);
  	$res_e = mysqli_query($conn, $sql_e);

  	if (mysqli_num_rows($res_u) > 0) {
		$name_error = "This Username is already taken";
  	}
	else if(mysqli_num_rows($res_e) > 0) {
		$email_error = "This email is already registered";
	}
	else{*/
	// display the results
		$sql = "INSERT INTO contactus(name, emailid, country, message) VALUES('$name', '$email', '$country', '$msg')";
    mysqli_query($conn, $sql);
    mysqli_close($conn);
	}

?>
<html>
<head>
  <meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=yes">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
<link href="css/business-frontpage.css" rel="stylesheet">

<link rel="stylesheet" href="one.css?v=<?php echo time(); ?>">
</head>
<body>

  <!-- Navigation area-->
<div class="logo">
    <a style="padding: unset;"><img src="123.png" alt="logo"></a>
</div>

<div class="topnav" id="myTopnav">
    <a href="home.php">Home</a>
    <a href="webdev.php" class="active">WebDev</a>
    <a href="webforum.php">WebForum</a>
    <a href="aboutus.php">About</a>
    <?php if (!isset($_SESSION["uname"])): ?>
	<a class="reg" onclick="document.getElementById('login').style.display='block'" style="width:auto;">Login</a>

	<?php else : ?>

	<a class="reg"><?php echo 'Welcome ';echo $name ?></a>
	<a  href="logout.php">Logout </a>
	<?php endif; ?>
    <a href="javascript:void(0);" style="font-size: 20px;" class="icon" onclick="myFunction()">☰</a>
</div>

<h1 style="font-size: 70px;
          text-align: center;
          font-weight: 300;
            line-height: 1.25;

          margin: 0px 0px;
          padding: 30px 0px 0px 0px;
          font-family:-apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif ;
          color: aliceblue;">Let's make something awesome together.</h1>
<p style="font-size: 20px;
          text-align: center;
          font-weight: 300;
          line-height: 1.25;
          border-bottom-style: solid;
          border-width: 1px;

          margin: 0px 0px;
          padding: 30px 0px 50px 0px;
          font-family:-apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif ;
          color: aliceblue;">Drop us a line, or give us a heads up if you're interested in visiting us.</p>


<div style="margin: 100px 0px 0px 0px;" class="contact">
  <h1 style="font-size: 40px;
            text-align: center;
            font-weight: 350;
          /*  line-height: 1.25;*/
            margin: 0px 0px;
            padding: 0px 0px 50px 0px;
            font-family:-apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif ;
            color: aliceblue;">Get in touch</h1>
  <div class="contact">
    <form method="POST" action="contact.php">
      <label class="fname">Name</label><br>
      <input type="text" class="textt" name="fname" placeholder="Enter full name" required><br>
      <label class="fname">E-mail ID</label><br>
      <input type="text" class="textt" name="emailid" placeholder="Enter a valid emailid" required><br>
      <label class="fname" >Country</label><br>
      <select style="font-family:-apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif ;
      width:20%;
      height:35px;
      border: 2px solid rgb(24,142,142);
      box-sizing: border-box;
      opacity: 0.8;
      " name="country" required>
        <option value="India">India</option>
        <option value="Canada">Canada</option>
        <option value="United States of America<">United States of America</option>
        <option value="Australia">Australia</option>
        <option value="England">England</option>
        <option value="Germany">Germany</option>
        <option value="Japan">Japan</option>
        <option value="New Zealand">New Zealand</option>
        <option value="Switzerland">Switzerland</option>
        <option value="Pakistan">Pakistan</option>
        <option value="United Arab Emirates">United Arab Emirates</option>
        <option value="China">China</option>
        <option value="Korea">Korea</option>

      </select><br>
      <label class="fname">Subject</label><br>
      <textarea  style="font-family:-apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif ;
       width:70%;
       height:150px;
       font-size:20px;
       border: 2px solid rgb(24,142,142);
       box-sizing: border-box;
       opacity: 0.8;
       padding: 12px 20px;
       margin: 8px ;
       "name="subject" placeholder="Your message..." style="height:200px" required></textarea><br>
      <input class="subm" type="submit" value="Submit" name="submit">
    </form>
  </div>
  <h1 style="font-size: 40px;
            text-align: center;
            font-weight: 350;
          /*  line-height: 1.25;*/
            margin: 0px 0px;
            padding: 0px 0px 50px 0px;
            font-family:-apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif ;
            color: aliceblue;">OR<br>You can contact us directly via email:<br></h1>
            <p style="font-size: 20px;
                      text-align: center;
                      font-weight: 350;
                    /*  line-height: 1.25;*/
                      margin: 0px 0px;
                      padding: 0px 0px 50px 0px;
                      font-family:-apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif ;
                      color: aliceblue;">taabishsutriwala@gmail.com<br>raunaks068@gmail.com </p>
</div>

  <div class="row1">
    <div class="col-a">
    <h3>Follow</h3>
      <i class="fa fa-envelope" aria-hidden="true"></i>
      <i class="fa fa-facebook" aria-hidden="true"></i>
      <i class="fa fa-instagram" aria-hidden="true"></i>
      <i class="fa fa-whatsapp" aria-hidden="true"></i>
    </div>
    <div class="col-b">
      <h3>NoteScout</h3>
      <img src="123.png" alt="logo">
    </div>
    <div class="col-c">
      <h3>MORE</h3>
      <a href="contact.php">Contact</a>
      <a href="aboutus.php">About us</a>
      <!--<a href="#help">Help</a>
      <a href="#faq">FAQ</a>-->
    </div>

<!--__________________________________________-->
<script>
function myFunction() {
  var x = document.getElementById("myTopnav");
  if (x.className === "topnav") {
    x.className += " responsive";
  } else {
    x.className = "topnav";
  }
}

// Get the modal
var modal = document.getElementById('login');

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}

</script>

</body>
</html>
