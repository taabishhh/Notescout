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
          color: aliceblue;">CSS Syntax<br>And Selectors</h1>

<div style="margin: 100px 0px 0px 0px;" class="sticky">
<a href="cssone.php" class="previous round">‹ back</a>
<a href="cssthree.php" class="next round">next ›</a>
</div>

  <div class="row">
    <div class="column-66">
      <b>CSS syntax</b>
<br><br>A CSS rule set contains a selector and a declaration block.
<br><br><b>Selector:</b> Selector indicates the HTML element we want to style. It could be any tag like < h1 >, < title > etc.

<br><br><b>Declaration Block:</b> The declaration block can contain one or more declarations separated by a semicolon. For the above example, there are two declarations:
<br>e.g.
    <br>color: yellow;
    <br>font-size: 11 px;
<br>Each declaration contains a property name and value, separated by a colon.
<br><br><b>Property:</b> A Property is a type of attribute of HTML element. It could be color, border etc.

<br><br><b>Value:</b> Values are assigned to CSS properties. In the above example, value "yellow" is assigned to color property.

<br><br><b>CSS Selector</b>
<br><br>CSS selectors are used to select the content we want to style. Selectors are the part of CSS rule set. CSS selectors select HTML elements according to its id, class, type, attribute etc.

<br><br>There are several different types of selectors in CSS.
 <br><br>Element Selector
 <br>Id Selector
 <br>Class Selector
 <br>Universal Selector
 <br>Group Selector

<br><br><b>1. Element Selector:</b>
The element selector selects the HTML element by name.
<br>e.g.
<br>< style >
<br>p{
    <br>text-align: center;
    <br>color: blue;
<br>}
<br>< body >
<br>< /style >
<br>< p>This style will be applied on every paragraph.< /p >
<br>< p id="para1">Hello world !< /p >
<br>< /body >

<br><br><b>2. Id Selector:</b>
The id selector selects the id attribute of an HTML element to select a specific element. An id is always unique within the page so it is chosen to select a single, unique element.
It is written with the hash character (#), followed by the id of the element.
<br>e.g.

<br>< style >
<br>#para1 {
    <br>text-align: center;
    <br>color: blue;
<br>}
<br>< /style >
<br>< body >
<br>< p id="para1">Hello Javatpoint.com< /p >
<br>< p>This paragraph will not be affected.< /p >
<br>< /body >

<br><br><b>3. Class Selector:</b>
The class selector selects HTML elements with a specific class attribute. It is used with a period character . (full stop symbol) followed by the class name.
class name should not be started with a number.
<br>e.g.
<br>< head >
<br>< style >
<br>.center {
    <br>text-align: center;
    <br>color: blue;
<br>}
<br>< /style >
<br>< /head >
<br>< body >
<br>< h1 class="center">Hello world !.< /h1 >
<br>< p class="center">< /p >
<br>< /body >


<br><br><b>4. Class Selector for specific element:</b>
if we want to specify that only one specific HTML element should be affected then you should use the element name with class selector.
<br>e.g.
<br>< head >
<br>< style >
<br>p.center {
    <br>text-align: center;
    <br>color: blue;
<br>}
<br>< /style >
<br>< /head >
<br>< body >
<br>< h1 class="center"> heading is not affected< /h1 >
<br>< p class="center">paragraph is blue and center-aligned.< /p >
<br>< /body>

<br><br><b>5. Universal Selector: </b>
The universal selector is used as a wildcard character. It selects all the elements on the pages.
<br>e.g.
<br>< head >
<br>< style >
<br>* {
   <br>color: green;
   <br>text-align: center;
<br>}
<br>< /style>
<br>< /head>
<br>< body>
<br>< h2>This is heading< /h2 >
<br>< p>This style will be applied on every paragraph.< /p >
<br>< p id="para1">Me too!< /p >
<br>< p>And me!< /p>
<br>< /body >
<br>Output:
<html>
<head >
<style >
h2,p{
   color: green;
}
</style>
</head>
<body>
<h2>This is heading</h2>
<p>This style will be applied on every paragraph.</p>
<p id="para1">Me too!</p>
<p>And me!</p>
</body>
</html>
<br><br><b>6. Group Selector:</b>
The grouping selector is used to select all the elements with the same style definitions.
grouping selector is used to minimize the code. Commas are used to separate each selector in grouping.
<br>e.g.
<br>h1 {
    <br>text-align: center;
    <br>color: blue;
<br>}
<br>p {
    <br>text-align: center;
    <br>color: blue;
<br>}
<br>if we need to define CSS properties for all the elements. It can be grouped in following ways:
<br>e.g.

<br>< head >
<br>< style >
<br>h1, h2, p {
    <br>text-align: center;
    <br>color: ;
<br>}
<br>< /style >
<br>< /head >
<br>< body >
<br>< h1 >Hello< /h1 >
<br>< h2 >Hello world!(In smaller font)< /h2 >
<br>< p >This is a paragraph.< /p >
<br>< /body >

<br>Output:
<head >
<style >
h1, h2, p {
    text-align: center;
    color: ;
}
</style >
</head >
<body >
<h1 >Hello< /h1 >
<h2 >Hello world!(In smaller font)< /h2 >
<p >This is a paragraph.< /p >
</body>

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
