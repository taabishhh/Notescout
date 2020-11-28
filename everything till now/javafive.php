<!DOCTYPE html>
<?php
include('login.php');
session_start();
if (isset($_SESSION["uname"])) {
  $name=$_SESSION["uname"];
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
    <a href="#">WebForum</a>
    <a href="#about">About</a>
    <?php if (!isset($_SESSION["uname"])): ?>
	<a class="reg" onclick="document.getElementById('login').style.display='block'" style="width:auto;">Login</a>

	<?php else : ?>

	<a class="reg"><?php echo 'Welcome ';echo $name ?></a>
	<a  href="logout.php">Logout </a>
	<?php endif; ?>
    <a href="javascript:void(0);" style="font-size: 20px;" class="icon" onclick="myFunction()">☰</a>
</div>

<h1 style="font-size: 7vw;
          text-align: center;
          font-weight: 300;
          line-height: 1.25;
          border-bottom-style: solid;
          border-width: 1px;

          margin: 0px 0px;
          padding: 30px 0px 50px 0px;
          font-family:-apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif ;
          color: aliceblue;">Form Validation <br>in JavaScript</h1>

<div style="margin: 100px 0px 0px 0px;" class="sticky">
<a href="javafour.php" class="previous round">‹ back</a>
<!--<a href="javafive.php" class="next round">next ›</a>-->
</div>

  <div class="row">
    <div class="column-66">
      <b>JavaScript Form Validation</b>
<br><br>It is important to validate the form submitted by the user because it can have inappropriate values. So, validation is must to authenticate user.
<br>JavaScript provides a way to validate form's data on the client's computer before sending it to the web server.
 <br><br>Form validation generally performs two functions.

<br><br><b>1. Basic Validation −</b> First of all, the form must be checked to make sure all the mandatory fields are filled in. It would require just a loop through each field in the form and check for data.
in this validation, we are calling validate() to validate data when onsubmit event is occurring.

<br><br><b>2. Data Format Validation −</b> the data that is entered must be checked for correct form and value. our code must include appropriate logic to test correctness of data.
<br>This validation check the data which will entered  is in correct format or not .
<br>E.g email address not contain @ symbol
<br>at starting email. etc

<br>Above are validation of  form and this are mandatory for form validation m

<br><br>Most of the web developers prefer JavaScript form validation.
<br>Through JavaScript, we can validate name, password, email, date, mobile numbers and more fields.
<br>E.g
<br>< script>
<br>function validateform(){
<br>var name=document.myform.name.value;
<br>var password=document.myform.password.value;

<br>if (name==null || name==""){
  <br>alert("Name can't be blank");
  <br>return false;
<br>}else if(password.length< 6){
  <br>alert("Password must be at least 6 characters long.");
  <br>return false;
  <br>}
<br>}
<br>< /script>

<br><br>Validate email ID
<br>There are many criteria that need to be follow to validate the email id such as:

<br>email id must contain the @ and . character.
<br>There must be at least one character before and after the @.
<br>There must be at least two characters after . (dot)
<br>E.g
 <br>< script>
<br>function validateemail()
<br>{
<br>var x=document.myform.email.value;
<br>var atposition=x.indexOf("@");
<br>var dotposition=x.lastIndexOf(".");

<br>if (atposition< 1 || dotposition < atposition+2 || dotposition+2>=x.length)
<br>{
  <br>alert("Please enter a valid e-mail address \n atpostion:"+atposition+"\n dotposition:"+dotposition);
  <br>return false;
  <br>}
<br>}
<br>< /script>
<br>< body>
<br>< form name="myform"  method="post" action="#" onsubmit="return validateemail();">
<br>Email: < input type="text" name="email"><br/>

<br>< input type="submit" value="register">
<br>< /form>

<br><br>JavaScript Retype Password Validation
<br>< script type="text/javascript">
<br>function matchpass(){
<br>var firstpassword=document.f1.password.value;
<br>var secondpassword=document.f1.password2.value;

<br>if(firstpassword==secondpassword){
<br>return true;
<br>}
<br>else{
<br>alert("password must be same!");
<br>return false;
<br>}
<br>}
<br>< /script>
  <br>span id="numloc"></span><br/>
<br>< input type="submit" value="submit">
<br>< /form>

    </div>
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
      <a href="#Contact us">Contact</a>
      <a href="#about us">About us</a>
      <a href="#help">Help</a>
      <a href="#faq">FAQ</a>
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
