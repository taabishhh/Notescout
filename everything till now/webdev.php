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

<link rel="stylesheet" href="webdevcss.css?v=<?php echo time(); ?>">
</head>
<body>

  <!-- Navigation area-->
<div class="logo">
    <a style="padding: unset;"><img src="123.png" alt="logo"></a>
</div>

<div class="topnav" id="myTopnav">
    <a href="home.php">Home</a>
    <a href="#" class="active">WebDev</a>
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
          background-color: #00000040;
          margin: 0px 0px;
          padding: 30px 0px 50px 0px;
          font-family:-apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif ;
          color: aliceblue;">Starting with basics of<br>HTML, CSS, JS</h1>

<div class="container">
  <div class="row" style="
  padding: 14px 0px;
  background-color: #00000040;
">
    <div class="column-66">
      <h1 style="color: aliceblue;
      text-align: center;
      margin:auto;
      font-size: xxx-large;"><b>HTML</b></h1>

      <p style="color: white;
      font-size: 2rem;
      text-align: center;">Think of it as Skeleton of<br>Website<p>

<div style="text-align:center">
  <a href="html.php"><button style="font-size: 1rem;
  font-family: sans-serif;
  color: black;
  width: 10rem;
  height: 3rem;
  cursor: pointer;">Click Here</button>
</div></a>
    </div>

    <div class="column-33">
      <img class="img1" src="htmlcode1.png" width="335" height="471">
  </div>
  </div>
  </div>

  <div class="container">
    <div class="row" style="
    padding: 14px 0px;
    background-color: #00000040;">
          <div class="column-66">
            <h1 style="color: aliceblue;
                        text-align: center;
                        margin-bottom: -25px;
                        font-size: xxx-large;"><b>CSS</b></h1>

            <p style="color: white;
                      font-size: 2rem;
                      text-align: center;">Think of it as Dressing Style of<br>Website<p>

            <div style="text-align:center">
                <a href="css.php"><button style=" font-size: 1rem;
                                font-family: sans-serif;
                                color: black;
                                width: 10rem;
                                height: 3rem;
                                cursor: pointer;">Click Here</button></a>
            </div>
          </div>

          <div class="column-33">
            <img class="img1" style="margin: 80px 0px;" src="csscode1.png" width="335" height="471">
          </div>
    </div>
  </div>

  <divclass="container">

    <div class="row" style="
    padding: 14px 0px;
    background-color: #00000040;">
          <div class="column-66">
            <h1 style="color: aliceblue;
                        text-align: center;
                        margin-bottom: -25px;
                        font-size: xxx-large;"><b>JavaScript</b></h1>

            <p style="color: white;
                      font-size: 2rem;
                      text-align: center;">Think of it as Muscles of<br>Website<p>

            <div style="text-align:center">
                <a href="javascript.php"><button style=" font-size: 1rem;
                                font-family: sans-serif;
                                color: black;
                                width: 10rem;
                                height: 3rem;
                                cursor: pointer;">Click Here</button></a>
            </div>
          </div>

          <div class="column-33">
            <img class="img1" style="margin: 80px 0px;" src="jscode2.png" width="335" height="471">
          </div>
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
