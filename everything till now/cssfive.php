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

<h1 style="font-size: 7vw;
          text-align: center;
          font-weight: 300;
          line-height: 1.25;
          border-bottom-style: solid;
          border-width: 1px;

          margin: 0px 0px;
          padding: 30px 0px 50px 0px;
          font-family:-apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif ;
          color: aliceblue;">CSS<br>Background</h1>

<div style="margin: 100px 0px 0px 0px;" class="sticky">
<a href="cssfour.php" class="previous round">‹ back</a>
<!--<a href="cssfive.php" class="next round">next ›</a>-->
</div>

  <div class="row">
    <div class="column-66">
      <b>CSS Background</b> property is used to define the background effects on element. There are 5 CSS background properties that affects the HTML elements:
<br><br>&nbsp;1. background-color
<br>&nbsp;2. background-image
<br>&nbsp;3. background-repeat
<br>&nbsp;4. background-attachment
<br>&nbsp;5. background-position

<br><br><b>1. Background-color:</b> The background-color property is used to specify the background color of the element.
we can set the background color like this:
<br>e.g.
<br>< head >
<br>< style >
<br>h2,p{
    <br>background-color: red;
<br>}
<br>< /style >
<br>< /head >
<br>< body >
<br>< h2 >My first CSS page.< /h2 >
<br>< p >This is an example of CSS background-color.< /p >
<br>< body >
<br>Output:
<head>
<style>
.eg{
    background-color: red;
}
</style>
</head>
<body>
  <div class="eg">
<h2>My first CSS page.</h2>
<p>This is an example of CSS background-color.</p>
</div>
<body>


<br><br><b>2. Background-image: </b> Background-image property is used to set an image as a background of an element. By default the image covers the entire element. we can set the background image for a page like this:
<br>e.g.
<br>< head >
<br>< style >
<br>body {
<br>background-image: url("paper1.gif");
<br>margin-left:100px;
<br>}
<br>< /style >
<br>< /head >
<br>< body >
<br>< h1 >Hello world!< /h1 >
<br>< /body >

<br><br>Also important thing is that background image should be chosen according to text color. The bad combination of text and background image may be a cause of poor designed and not readable webpage.

<br><br><b>3. Background-repeat: </b>By default, the background-image property repeats the background image horizontally and vertically. Some images are repeated only horizontally or vertically.
The background looks better if the image repeated horizontally only.
<br><br>Background image repeat in horizontally.
<br>e.g.
<br>< head >
<br>< style >
<br>body {
    <br>background-image: url("gradient_bg.png");
    <br>background-repeat: repeat-x;
<br>}
<br>< /style >
<br>< /head >

<br><br>Background image repeat in vertically.
<br>e.g.
<br>< head >
<br>< style >
<br>body {
    <br>background-image: url("gradient_bg.png");
    <br>background-repeat: repeat-y;
<br>}
<br>< /style >
<br>< /head >

<br><br><b>4. Background-attachment:</b> The background-attachment property is used to specify if the background image is fixed or scroll with the rest of the page in browser window. If we set fixed the background image then the image will not move during scrolling in the browser.
<br>e.g.
<br>< head >
<br>< style >
<br>{
<br>background: white url('smile.gif');
<br>background-repeat: no-repeat;
<br>background-attachment: fixed;
<br>}
<br>< style >
<br>< head >

<br><br><b>5. Background-position:</b> The background-position property is used to define the initial position of the background image. By default, the background image is placed on the top-left of the webpage.
<br>We can set the following positions:
<br><br>&nbsp;a) center
<br>&nbsp;b) top
<br>&nbsp;c) bottom
<br>&nbsp;d) left
<br>&nbsp;e) right
<br><br>We can adjust back ground image as our requirements.
<br>e.g.
<br>< head >
<br>< style >
<br>{
<br>background: white url('good-morning.jpg');
<br>background-repeat: no-repeat;
<br>background-attachment: fixed;
<br>background-position: center;
<br>}
<br>< style >
<br>< head >



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
