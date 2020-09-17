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
          color: aliceblue;">Thoeory & Practical<br>HTML</h1>

<div class="row">
  <div class="column">
    <a href="pages.php"><button  class="btn">
      <h1>HTML Introduction
      <p style="font-size: 21px;">Basic Info</p>
      </h1>
    </button></a>
  </div>

  <div class="column">
    <button class="btn">
      <h1>WEB architecture
      <p style="
    font-size: 21px;
">The Tier's</p>
      </h1>
    </button>
  </div>
  
  <div class="column">
    <button class="btn">
      <h1>HTTP Overview
      <p style="
    font-size: 21px;
">Basics of web<br>network</p>
      </h1>
    </button>
  </div>
  
  <div class="column">
    <button class="btn">
      <h1>Formatting<br>in HTML
      <p style="
    font-size: 21px;
">Design</p>
      </h1>
    </button>
  </div>

  <div class="column">
    <button class="btn">
      <h1>HTML Syntax
      <p style="font-size: 21px;">Basic html syntaxes</p>
      </h1>
    </button>
  </div>

  <div class="column">
    <button class="btn">
      <h1>HTML Syntax
      <p style="font-size: 21px;">Basic html syntaxes</p>
      </h1>
    </button>
  </div>

  <div class="column">
    <button class="btn">
    <h1>HTML Syntax
      <p style="font-size: 21px;">Basic html syntaxes</p>
      </h1>
    </button>
  </div>
   
  <div class="column">
    <button class="btn">
    <h1>HTML Syntax
      <p style="font-size: 21px;">Basic html syntaxes</p>
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
