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

<link rel="stylesheet" href="aboutus.css?v=<?php echo time(); ?>">

</head>
<body>

  <!-- Navigation area-->
<div class="logo">
    <a style="padding: unset;"><img src="123.png" alt="logo"></a>
</div>

<div class="topnav" id="myTopnav">
    <a href="home.php">Home</a>
    <a href="webdev.php">WebDev</a>
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



<div class="about">
<!--<img style="width:100%;" src="about notescout.svg" alt="">-->
<h1>About Notescout</h1>
<img src="123.png" style="height:220px; width:200px;">
<p>This is a Web-development learning project website made by<br> The Students of Saraswati College of Engineering, Kharghar(Navi Mumbai)</p><br>

</div>

<div class="info">

  <div class="team">
  <p>Our amazing team</p>
  </div>
        <div class="inner">
            <span ><img src="raunak.png" alt="" class="img"></span>
            <br>
            <h1>Raunak Singh</h1>
            <p> IT Department</p>
        </div>

        <div class="inner">
          <span><img src="taabish.png" alt=""class="img"></span>
          <br>
          <h1>Taabish Sutriwala</h1>
          <p> IT Department</p>
      </div>

      <div class="inner">
        <span><img src="harshal.png" alt="" class="img"></span>
        <br>
        <h1>Harshal Sanyashi</h1>
        <p> IT Department</p>
    </div>
</div>





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
