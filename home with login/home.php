<!DOCTYPE html>
<?php 
session_start();
include('login.php');

?>
<html>
<head>
  <meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=yes">
<!--<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
<link href="css/business-frontpage.css" rel="stylesheet">
-->
<link rel="stylesheet" href="home.css?v=<?php echo time(); ?>">
</head>
<body>
<!--header-->

  <!-- Navigation area-->
<div class="logo">
    <a style="padding: unset;"><img src="123.png" alt="logo"></a>
</div>
  
<div class="topnav" id="myTopnav"> 
    <a href="home.php" class="active">Home</a>
    <a href="C:\Users\rauna\Desktop\ip\Webdev\Webdev.html">WebDev</a>
      <div class="dropdown">
        <button onclick="" class="dropbtn">WebForum</button> 
      </div> 
    <a href="#about">About</a>
   <?php if (!isset($_SESSION["uname"])): ?>
	<a class="login" onclick="document.getElementById('login').style.display='block'" style="width:auto;">Login</a>
	
	<?php else : ?>
	
	<a class="login"><?php echo 'Welcome ';echo $name ?></a>
	<a  href="logout.php">Logout </a>
	<?php endif; ?><br>
    <a href="javascript:void(0);" style="font-size: 20px;" class="icon" onclick="myFunction()">☰</a>
</div>

<div class="banner">
  <div class="apptext">
      <h1>Learn Web Developement &amp; Communicate using Forum</h1>
      <p>Learn Wedpage developement from Basic level to intermidiate level
      <br>Exploring HTML - CSS - JavaScript in simplest ways, 
      <br>Including examples and online Text Editor to practice your Skills 
      <br>Use our Forum to Ask &amp;Solve Question asked by students
      </p>
  </div>
  <div class="picture">
      <img src="_Pngtree_web_development_illustration_modern_4461019-removebg-preview.png" alt="">
  </div>
</div>

<div class="text-resp">
  <h2>NoteScout</h2>
  <h1>Master Web Developement/Design<br>
  with us</h1>
  <p>Learn Wedpage developement from Intermediate level to Advanced level</p>
    <img src="Capture-removebg-preview.png" alt="web">
    <div><p>Explore HTML - CSS - JavaScript in esiest manner, 
    Including examples and online Text Editor to practice your Skills, 
    Use our Forum to Ask &amp;Solve Question asked by students
    </p></div>
    <img src="qw.png" alt="">
</div>

<div class="social-icon">
  <ul>    
      <li><i class="fa fa-envelope" aria-hidden="true"></i></li>
      <li><i class="fa fa-facebook" aria-hidden="true"></i></li>
      <li><i class="fa fa-instagram" aria-hidden="true"></i></li>
      <li><i class="fa fa-whatsapp" aria-hidden="true"></i></li>              
  </ul>    
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

if (logerr!=null)
{
	alert(logerr);
}
</script>

</body>
</html>
