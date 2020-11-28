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
          color: aliceblue;">Cross-Browser<br>Compatibility in JavaScript</h1>

<div style="margin: 100px 0px 0px 0px;" class="sticky">
<a href="javatwo.php" class="previous round">‹ back</a>
<a href="javafour.php" class="next round">next ›</a>
</div>

  <div class="row">
    <div class="column-66">
<br>All the modern browsers come with built-in support for JavaScript.
<br><br>This portion  explains the procedure of enabling and disabling JavaScript support in your browsers: Internet Explorer, Firefox, chrome, and Opera.

<br><br><b>JavaScript in Internet Explorer</b>
<br><br>Here are simple steps to turn on or turn off JavaScript in our Internet Explorer −
<br><br>Follow Tools →
<br>Internet Options from the menu.
 <br>Select Security tab from the dialog box.
<br>Click the Custom Level button.
 <br>Scroll down till you find Scripting option.
<br>Select Enable radio button under Active scripting.
<br>Finally click OK and come out

<br><br>To disable JavaScript support in your Internet Explorer, we need to select Disable radio button under Active scripting.

<br><br><b>JavaScript in Firefox</b>
<br><br>Here are the steps to turn on or turn off JavaScript in Firefox −
<br><br>Open a new tab → type about: config in the address bar.
<br>Then we will find the warning dialog. Select I’ll be careful, I ppromise
<br>Then we will find the list of configure options in the browser.

<br>In the search bar, type javascript.enabled.

<br>We will find the option to enable or disable javascript by right-clicking on the value of that option → select toggle.

<br><br><b>JavaScript in Chrome</b>
<br><br>Here are the steps to turn on or turn off JavaScript in Chrome −

<br><br>Click the Chrome menu at the top right hand corner of your browser.

<br>Select Settings
<br>Click Show advanced settings at the end of the papag.
<br>Under the Privacy section, click the Content settings button.

<br>In the "Javascript" section, select "Do not allow any site to run JavaScript" or "Allow all sites to run JavaScript .

<br><br><b>JavaScript in Opera</b>
<br><br>Here are the steps to turn on or turn off JavaScript in Opera Follow Tools →
<br><br>Preferences from the menu.
<br>Select Advanced option from the dialog box.
<br>Select Content from the listed item.
<br>Select Enable JavaScript checkbox.
<br>Finally click OK and come out.

<br><br>To disable JavaScript support in our Opera, we should not select the Enable JavaScript checkbox.

<br><br><b>Warning for Non-JavaScript Browsers</b>
<br><br>If we have to do something important using JavaScript, then we can display a warning message to the user using <noscript> tags.
<br>We can add a noscript block immediately after the script block as follows −
<br><br>Syntax:
<br>< html >
   <br>< body >
      <br>< script language = "javascript" type = "text/javascript">
         <br>< !--
            <br>document.write("Hello World!")
         <br>//-->
      <br>< /script>

      <br>< noscript>
         <br>Sorry...JavaScript is needed to go ahead.
      <br>< /noscript>
   <br>< /body>
<br>< /html>

<br><br>Now, if the user's browser does not support JavaScript or JavaScript is not enabled, then the message from </noscript> will be displayed on the screen.

<br><br>We incorporate HTML files in JavaScript.
<br>ways to include JavaScript in an HTML file are as follows −
<br>Script in < head>...< /head> section.
<br>Script in < body>...< /body> section.
<br>Script in < body>...< /body> and <head>...</head> sections.

<br><br>In the following section, we will see how we can place JavaScript in an HTML file in different ways.
 <br>< head>...< /head> section
<br>If we want to have a script run on some event, such as when a user clicks somewhere, then we will place that script in the head as follows −
<br>E.g
 <br>< html>
   <br>< head>
      <br>< script type = "text/javascript">
         <br>< !--
            <br>function sayHello() {
               <br>alert("Hello World")
            <br>}
         <br>//-->
      <br>< /script>
   <br>< /head>

   <br>< body>
      <br>< input type = "button" onclick = "sayHello()" value = "Say Hello" />
   <br>< /body>
<br>< /html>

<br>< body>...< /body> section
<br><br>If we need a script to run as the page loads so that the script generates content in the page, then the script goes in the <body> portion of the document. In this case, we would not have any function defined using JavaScript.
<br>E.g
<br>< html>
   <br>< body>
      <br>< script type = "text/javascript">
         <br>< !--
            <br>document.write("Hello World")
         <br>//-->
      <br>< /script>

      <br>< p>This is web page body < /p>
   <br>< /body>
<br>< /html>



<br><br>< body> and < head> Sections
<br>We can put your JavaScript code in <head> and <body> section altogether as follows −
<br>E.g
<br>< html>
   <br>< head>
      <br>< script type = "text/javascript">
         <br>< !--
            <br>function sayHello() {
               <br>alert("Hello World")
            <br>}
         <br>//-->
      <br>< /script>
   <br>< /head>

   <br>< body>
      <br>< script type = "text/javascript">
         <br>< !--
            <br>document.write("Hello World")
         <br>//-->
      <br>< /script>

      <br>< input type = "button" onclick = "sayHello()" value = "Say Hello" />
   <br>< /body>
<br>< /html>

<br><br><b>JavaScript in External File</b>
<br><br>As we begin to work more extensively with JavaScript, we will be likely to find that there are cases where we are reusing identical JavaScript code on multiple pages of a site.
<br>Here is an example to show how we can include an external JavaScript file in your HTML code using script tag and its src attribute.
<br>E.g
<br>< html>
   <br>< head>
      <br>< script type = "text/javascript" src = "filename.js" ></script>
   <br>< /head>
<br>< /html>
<br>To use JavaScript from an external file source, we need to write all your JavaScript source code in a simple text file with the extension ".js" and then include that file as shown above.


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
