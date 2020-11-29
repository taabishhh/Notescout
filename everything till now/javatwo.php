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
          color: aliceblue;">Objects in<br>JavaScript</h1>

<div style="margin: 100px 0px 0px 0px;" class="sticky">
<a href="javaone.php" class="previous round">‹ back</a>
<a href="javathree.php" class="next round">next ›</a>
</div>

  <div class="row">
    <div class="column-66">
JavaScript is designed on a simple object-based paradigm. An object is a collection of properties, and a property is an association between a name (or key) and a value.
<br>A property's value can be a function, in which case the property is known as a method. In addition to objects that are predefined in the browser, we can define our own objects.

<br><br><b>Overview</b>
<br><br>Objects in JavaScript, just as in many other programming languages, can be compared to objects in real life. The concept of objects in JavaScript can be understood with real life, tangible objects.

<br><br><b>Objects and properties</b>
<br><br>A JavaScript object has properties associated with it. A property of an object can be explained as a variable that is attached to the object.
Object properties are basically the same as ordinary JavaScript variables, except for the attachment to objects.
<br><br>We can access the properties of an object with a simple dot-notation:
<br>objectName.propertyName

<br><br>All JavaScript variables, both the object name and property name are case sensitive.
<br>E.g
<br>var myCar = new Object();
<br>myCar.make = 'Ford';
<br>The above example could also be written using an object initializer.
<br>E.g
<br>var myCar = {
    <br>make: 'Ford',
    <br>model: 'Mustang',
    <br>year: 1969
<br>};
<br>myCar.color;
<br>Above is undefined object.

<br><br>Properties of JavaScript objects can also be accessed or set using a bracket notation (for more details see property accessors).
<br>Objects are sometimes called associative arrays.
<br>myCar['make'] = 'Ford';
<br>myCar['year'] = 1969;
<br>An object property name can be any valid JavaScript string, or anything that can be converted to a string, including the empty string.
<br>However, any property name that is not a valid JavaScript identifier (for example, a property name that has a space or a hyphen, or that starts with a number) can only be accessed using the square bracket notation.
<br>E.g
<br>var myObj = new Object(),
    <br>str = 'myString',
    <br>rand = Math.random(),
    <br>obj = new Object();

<br><br>Different way of object
<br>myObj.type = 'Dot syntax';
<br>myObj['date created']  = 'String with space';
<br>myObj[str] = 'String value';
<br>myObj[rand] = 'Random Number';
<br>myObj[obj] = 'Object';
<br>myObj[''] = 'Even an empty string';

<br>console.log(myObj);

 <br><br>All keys in the square bracket notation are converted to string unless they're Symbols.

since JavaScript object property names (keys) can only be strings or Symbols (at some point, private names will also be added as the class fields proposal .

We can also access properties by using a string value that is stored in a variable:

<br><br><b>Creating new objects</b>
<br><br>JavaScript has a number of predefined objects. In addition, we can create your own objects. We can create an object using an object initializer.
Alternatively, we can first create a constructor function and then instantiate an object invoking that function in conjunction with the new operator.

<br><br><b>Using object initializers</b>
<br><br>In addition to creating objects using a constructor function, we can create objects using an object initializer. Using object initializers is sometimes referred to as creating objects with literal notation. "Object initializer" is consistent with the terminology used by C++.

<br><br>The syntax for an object using an object initializer is:
<br>E.g
<br>var obj = { property_1:   value_1,    'property n': value_n };

<br>Object initializers are expressions, and each object initializer results in a new object being created whenever the statement in which it appears is executed.

<br>Objects are created as if a call to new Object() were made; that is, objects made from object literal expressions are instances of Object.

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
