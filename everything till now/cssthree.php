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
          color: aliceblue;">CSS Types</h1>

<div style="margin: 100px 0px 0px 0px;" class="sticky">
<a href="csstwo.php" class="previous round">‹ back</a>
<a href="cssfour.php" class="next round">next ›</a>
</div>

  <div class="row">
    <div class="column-66">
      <b>Add css in HTML</b>
<br><br>CSS is added to HTML pages to format the document according to information in the style sheet. There are three ways to insert CSS in HTML documents.
<br><br>Inline CSS
<br>Internal CSS
<br>External CSS

<br><br><b>1. Inline CSS:</b>
Inline CSS is used to apply CSS on a single line or element.
<br>e.g.
<br>< p style="color:blue" >Hello CSS< /p >
<br><br>Inline css have also some disadvantages :
<br>a) These styles cannot be reused anywhere else.
<br>b) These styles are tough to be edited because they are not stored at a single place.
<br>c) It is not possible to style pseudo-codes and pseudo-classes with inline CSS.
<br>d) Inline CSS does not provide browser cache advantages

<br><br><b>2. Internal CSS:</b>
Internal CSS is used to apply CSS on a single document or page. It can affect all the elements of the page. It is written inside the style tag within head section of html.
<br>e.g.
<br>< style >
<br>p
<br>{color:blue}
<br>< /style >

<br><br><b>3. External CSS:</b>
External CSS is used to apply css on multiple pages or all pages.The external style sheet is generally used when we want to make changes on multiple pages. It is ideal for this condition because it facilitates we to change the look of the entire web site by changing just one file.
we write all the css code in a css file. Its extension must be .css for example style.css.
we need to link this style.css file to your html pages like this:
<br>e.g
<br>< /head >
<br>< link rel="stylesheet" type="text/css" href="style.css">
<br>< /head >
<br>the link tag must be used inside head section of html.


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
