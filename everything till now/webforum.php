<!DOCTYPE html>
<?php
session_start();
include('login.php');
?>
<html>
<head>
  <meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=yes">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
<link href="css/business-frontpage.css" rel="stylesheet">

<link rel="stylesheet" href="webforum.css?v=<?php echo time(); ?>">
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
	<!--<a class="reg" onclick="document.getElementById('login').style.display='block'" style="width:auto;">Login</a>-->
  <?php echo('<script> alert("Please login to get access to the forums") </script>');
   ?><meta http-equiv="Refresh" content="0; url=home.php" />
	<?php else : ?>

	<a class="reg"><?php echo 'Welcome ';echo $name ?></a>
	<a  href="logout.php">Logout </a>
	<?php endif; ?>
    <a href="javascript:void(0);" style="font-size: 20px;" class="icon" onclick="myFunction()">☰</a>
</div>

<div>
 <!--<a href="alltopic.php"><img id="askquestion" src="Ask question.svg" alt=""></a>
<a href="alltopic.php"><img id="startnewthread" src="new thread.svg" alt=""></a>
  <img id="welcome" src="forum.svg" alt="">-->


  <!--<?php if (!isset($_SESSION["uname"])): ?>
	<a class="reg" onclick="document.getElementById('login').style.display='block'" style="width:auto;">Login</a>
	<?php else : ?>

	  <h1 style="    font-size: xxx-large;
    margin-left: 23rem;
    margin-top: -57rem;
    position: absolute;
    color: white;
    font-family: Segoe UI,Arial,sans-serif;
}"><?php echo $name ?></h1>
<?php endif; ?>




  <img id="allquestions" src="all question.svg" alt="">
  <img id="loginalert" src="login alert.svg" alt="">-->
<div class="container">
  <div class="row">
    <div class="column-66">
      <div style="color: aliceblue;">
        <h1>
        Welcome <br>to  the <br>Web Forums</h1>
    <p style="font-size: 22px;">
    Ask and answer questions<br> the way you want
    <!--<img src="Capture-removebg-preview.png" alt="web">-->
  </div>
  </div>

  <div class="column-33">
      <!--<a href=""><button type="button" class="block">Block Button</button></a>-->
      <a href="alltopic.php"><div class="button button-3">Ask Questions</div></a><br>
      <a href="alltopic.php"><div class="button button-3">New Thread</div></a>
  </div>
  </div>
  <div class>
  </div>
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
