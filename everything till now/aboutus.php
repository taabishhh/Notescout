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


<div class="aboutnotescout">
<img style="width:100%;" src="about notescout111.svg" alt="">
</div>

<div class="info">
        <div class="inner">
            <span><img src="raunak1.svg" alt=""></span>
            <br>
            <h1>Hey, I'm Raunak</h1>
            <p>from IT Department, and this is our project</p>
        </div>

        <div class="inner">
          <span><img src="taabish 1.svg" alt=""></span>
          <br>
          <h1>Hey, I'm Taabish</h1>
          <p>from IT Department, and this is our project</p>
      </div>

      <div class="inner">
        <span><img src="harshal.svg" alt=""></span>
        <br>
        <h1>Hey, I'm Harshal</h1>
        <p>from IT Department, and this is our project</p>
    </div>
</div>

<div class="after">

<img style="" src="after pic.svg" alt="">
<a style="
    margin: -179px 0px 0px 640px;
    position: absolute; cursor:pointer;
" href="home.php"><img src="goto.svg" alt=""></a>
</div>

<img id="about_mob" style="width:100%;margin: 10px 0px;padding: 0px 35px;" src="about nsmob.svg" alt="">

<div class="MOB">
<img style="width:100%; margin:10px 0px;" src="raunak_card.svg" alt="">
<img style="width:100%; margin:10px 0px;" src="taabish_card.svg" alt="">
<img style="width:100%; margin:10px 0px;" src="harshal_card.svg" alt="">
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