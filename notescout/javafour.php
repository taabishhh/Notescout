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
          color: aliceblue;">Event Handling <br>in JavaScript</h1>

<div style="margin: 100px 0px 0px 0px;" class="sticky">
<a href="javathree.php" class="previous round">‹ back</a>
<a href="javafive.php" class="next round">next ›</a>
</div>

  <div class="row">
    <div class="column-66">
      <b>Event handling</b>
<br><br>When an event occurs, we can create an event handler which is a piece of code that will execute to respond to that event.
An event handler is also known as an event listener.
It listens to the event and responds accordingly to the event fires.
An event listener is a function with an explicit name if it is resuable or an anonymous function in case it is used one time.
An event can be handled by one or multiple event handlers.
If an event has multiple event handlers, all the event handlers will be executed when the event is fired.

<br><br><b>There are three ways to assign event handlers.</b>

<br><br><b>HTML event handler attributes</b>
<br><br>Event handlers typically have names that begin with on,
 <br>To assign an event handler to an event associated with an HTML element, you can use an HTML attribute with the name of the event handler.
<br>example,
<br>< input type="button" value="Save" onclick="alert('Clicked!')">
<br><br>In this case, when the button is clicked, the alert box is shown.
<br>When we assign JavaScript code as the value of the onclick attribute, we need to escape the HTML characters such as ampersand ( & ), double quotes ("), less than (<), etc., or we will get a syntax error.

<br><br>An event handler defined in the HTML can call a function defined in a script.
  <br>example:

<br>< script >
    <br>function showAlert() {
        <br>alert('Clicked!');
    <br>}
<br>< /script >
<br>< input type="button" value="Save" onclick="showAlert()">

<br><br>In this example, the button calls the showAlert() function when it is clicked.
<br>The showAlert() is a function defined in a separate < script> element, and could be placed in an external JavaScript file.

<br><br>First, the code in the event handler can access the event object without explicitly defining it:
<br>E.g.
<br>< input type="button" value="Save" onclick="alert(event.type)">

<br><br>Second, the this value inside the event handler is equivalent to the event’s target element:
<br>E.g
<br>< input type="button" value="Save" onclick="alert(this.value)">

<br><br>Third, the event handler can access the element’s properties, for example:

<br>< input type="button" value="Save" onclick="alert(value )">

<br><br><b>Disadvantages of using HTML event handler attributes</b>
<br><br>1. Assigning event handlers using HTML event handler attributes are considered as bad practices .
<br>2. The event handler code is mixed with the HTML code, which will make the code more difficult to maintain and extend.
<br>3. it is a timing issue.

<br><br>In  case, the anonymous function becomes the method of the button element. Therefore, the this value is equivalent to the element. And we can access the element’s properties inside the event handler
<br>E.g
<br>let btn = document.querySelector('#btn');
<br>btn.onclick = function() {
    <br>alert(this.id);
<br>};


<br><br>By using the this value inside the event handler, we can access the element’s properties and methods.

<br><br><b>Remove event</b>
<br><br>To remove the event handler, you set the value of the event handler property to null.
<br>E.g
<br>btn.onclick = null;


 <br><br>Event Handlers provide two main methods for dealing with the registering/deregistering event listeners:
<br><br>1. addEventListener() – register an event handler
<br>2. removeEventListener() – remove an event handler
<br><br>These methods are available in all DOM nodes.

<br><br><b>addEventListener() method</b>
<br><br>The addEventListener() method accepts three arguments: an event name, an event handler function, and a Boolean value that instructs the method to call the event handler during the capture phase (true) or during the bubble phase (false).
<br>E.g:
<br>let btn = document.querySelector('#btn');
<br>btn.addEventListener('click',function(event) {
    <br>alert(event.type); // click
<br>});

<br><br><b>RemoveEventListener() method</b>
<br><br>The removeEventListener() removes an event listener that was added via the addEventListener().
<br>example:
<br>Syntax:
<br>let btn = document.querySelector('#btn');
<br>let showAlert = function() {
    <br>alert('Clicked!');
<br>};
<br>btn.addEventListener('click', showAlert);

<br>btn.removeEventListener('click', showAlert)

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
