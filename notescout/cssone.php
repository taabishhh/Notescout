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
          color: aliceblue;">Introduction to<br>CSS</h1>

<div style="margin: 100px 0px 0px 0px;" class="sticky">
<a href="css.php" class="previous round">‹ back</a>
<a href="csstwo.php" class="next round">next ›</a>
</div>

  <div class="row">
    <div class="column-66">
      <b>CSS</b>  is the acronym for <b>C</b>ascading <b>S</b>tyle <b>S</b>heet.
<br><br>CSS is used to design HTML tags.
CSS is a widely used language on the web.
HTML, CSS and JavaScript are used for web designing. It helps the web designers to apply a style on HTML tags.

Cascading Style Sheets, fondly referred to as CSS, is a simple design language intended to simplify the process of making web pages presentable.
CSS is a must for students and working professionals to become a great Software Engineer specially when they are working in Web Development Domain.

<br><br><b>CSS have many advantages are as follows:</b>
<br><br><b>1. Create Stunning Web site-</b><br>CSS handles the look and feel part of a web page. Using CSS, we can control the color of the text, the style of fonts, the spacing between paragraphs, how columns are sized and laid out, what background images or colors are used, layout designs,variations in display for different devices and screen sizes as well as a variety of other effects.

<br><br><b>2. Become a web designer-</b> <br>If we want to start a carrer as a professional web designer, HTML and CSS designing is a must skill.

<br><br><b>3. Control web-</b> <br>CSS is easy to learn and understand but it provides powerful control over the presentation of an HTML document. Most commonly, CSS is combined with the markup languages HTML or XHTML.

<br><br><b>CSS have lots of applications which will help us to doing webpages more attractive and
easy to make. Applications of CSS:</b>
<br><br><b>1. CSS is one of the most widely used style language over the web.</b>
<br><br><b>2. CSS saves time-</b> we can write CSS once and then reuse same sheet in multiple HTML pages. we can define a style for each HTML element and apply it to as many Web pages as we want.

<br><br><b>3. Pages load faster</b> write one CSS rule of a tag and apply it to all the occurrences of that tag. So less code means faster download times.

<br><br><b>4. Easy maintenance-</b> To make a global change, simply change the style, and all elements in all the web pages will be updated automatically.

<br><br><b>5. Superior styles to HTML-</b> CSS has a much wider array of attributes than HTML. we can give a far better look to your HTML page in comparison to HTML attributes.

<br><br><b>6. Multiple Device Compatibility</b> Style sheets allow content to be optimized for more than one type of device. by using the same HTML document, different versions of a website can be presented for handheld devices such as PDAs and cell phones or for printing.

<br><br><b>7. Global web standards-</b>  HTML attributes are being deprecated and it is being recommended to use CSS. So its a good idea to start using CSS in all the HTML pages to make them compatible to future browsers.

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
      <a href="contact.php">Contact</a>
      <a href="aboutus.php">About us</a>
      <!--<a href="#help">Help</a>
      <a href="#faq">FAQ</a>-->
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
