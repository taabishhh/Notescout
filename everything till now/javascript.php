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

<link rel="stylesheet" href="html.css?v=<?php echo time(); ?>">
</head>
<body>
<!--header-->

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
          color: aliceblue;">Thoeory & Practical<br>JavaScript</h1>

<div class="row">
  <div class="column">
    <a href="javaone.php">
      <button class="btn" style="cursor:pointer;">
        <h1>JavaScript <br>Introduction</h1>
          <p style="font-size: 18px;">Basic Info</p>

      </button></a>
  </div>

  <div class="column">
    <a href="javatwo.php">
      <button class="btn" style="cursor:pointer;">
        <h1>Objects in <br>JavaScript  </h1>
          <p style="font-size: 18px;">JavaScript objects and its properties</p>

      </button></a>
  </div>

  <div class="column">
    <a href="javathree.php">
    <button class="btn"style="cursor:pointer;">
      <h1 style="font-size: 25px;">Cross-Browser<br> Compatibility</h1>
      <p style="font-size: 18px;">JavaScript on different browsers</p>
    </button></a>
  </div>

  <div class="column">
    <a href="javafour.php">
    <button class="btn"style="cursor:pointer;">
      <h1>Event<br>Handling</h1>
      <p style="font-size: 18px;">event handling in JavaScript</p>

    </button></a>
  </div>

  <div class="column">
    <a href="javafive.php">
    <button class="btn"style="cursor:pointer;">
      <h1>Form Validation  </h1>
      <p style="font-size: 18px;">Creating a form using javascript</p>

    </button></a>
  </div>

  <div class="column" style="opacity:0;">
    <button class="btn">
      <h1>
      <p style="font-size: 21px;"></p>
      </h1>
    </button>
  </div>

  <div class="column" style="opacity:0;">
    <button class="btn">
    <h1>
      <p style="font-size: 21px;"></p>
      </h1>
    </button>
  </div>

  <div class="column" style="opacity:0;">
    <button class="btn">
    <h1>
      <p style="font-size: 21px;"></p>
      </h1>
    </button>
  </div>
</div>

<div class="row1">
    <img src="123.png" alt="logo">
    <br>
    <a href="html.php"><i class="fa fa-globe"> About us</i></a>
    <a href="html.php"><i class="fa fa-asterisk"> Terms of use</i></a>
    <a href="html.php"><i class="fa fa-question-circle"> FAQ's</i></a>
    <a href="html.php"><i class="fa fa-user header-icons"> Contact</i></a>
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
