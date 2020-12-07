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
          color: aliceblue;">Web System<br>Architecture</h1>

<div style="margin: 100px 0px 0px 0px;" class="sticky">
<a href="one.php" class="previous round">‹ back</a>
<a href="three.php" class="next round">next ›</a>
</div>

  <div class="row">
    <div class="column-66">
    <p style="margin: 0px 0px 20px 0px;">
      <b>Web system Architecture</b> consists of One Tier, Two Tier, Three Tier and N-Tier architectures. A “tier” can also be referred to as a “layer”.
Three layers involved in the application namely Presentation Layer, Business Layer and Data Layer.
</br></br><b>One tier architecture:</b>
</br>One tier architecture has all the layers such as Presentation, Business, Data Access layers in a single software package.
Applications which handles all the three tiers such as MP3 player, MS Office are come under one tier application. The data is stored in the local system.
</br></br><b>Two tier architecture:</b>
</br>Two Tier application Client-Server application.</br>
The Two-tier architecture is divided into two parts:
</br>1. Client Application (Client Tier)
</br>2. Database (Data Tier)
</br>Client system handles both Presentation and Application layers and Server system handles Database layer. It is also known as client server application. The communication takes place between the Client and the Server. Client system sends the request to the Server system and the Server system processes the request and sends back the data to the Client System.
</br></br><b>Three tier architecture:</b>
       </br>Three Tier application Web Based application.
</br></br>1. Presentation layer (Client Tier)
</br>2. Application layer (Business Tier)
</br>3. Database layer (Data Tier)
</br><b>Presentation Layer:</b>It is also known as Client layer. This is the Top most layer of an application. This is the layer we see when we use a software. By using this layer we can access the webpages.
This layer passes the information which is given by the user in terms of keyboard actions, mouse clicks to the Application Layer.
For example, login page of Gmail where an end user could see text boxes and buttons to enter user id, password and to click on sign-in.
</br><b>Application Layer:</b> It is also known as Business Logic Layer which is also known as logical layer. As per the gmail login page example, once user clicks on the login button, Application layer interacts with Database layer and sends required information to Ithe Presentation layer.
This layer acts as a interface between the both Presentation and Database layer.
</br><b>Data Layer:</b> The data is stored in this layer. Application layer communicates with Database layer to retrieve the data. It contains methods that connects the database and performs required action e.g. insert, update, delete etc.
Another layer is N-Tier application. N-Tier application AKA Distributed application. It is similar to three tier architecture but number of application servers are increased and represented in individual tiers in order to distributed.
</br></br><b>N-tier architecture:</b></br>
     N-Tier Application program is one that is distributed among three or more separate computers in a distributed network.
The most common form of n-tier is the 3-tier Application, and it is classified into three categories:
</br>User interface programming in the user's computer
</br>Required data in a computer that manages a database.
</br>The n-tier architecture is an industry-proven software architecture model. It is suitable to support enterprise level client-server applications by providing solutions to scalability, security, fault tolerance, reusability, and maintainability.

</br></br>In web page their is also url which is important part for searching  topic as our requirements.
Every document on the Web has a unique address.This address is known as Uniform Resource Locator (URL).
A Uniform Resource Locator (URL), colloquially termed a web address, is a reference to a web resource that specifies its location on a computer network and a mechanism for retrieving it. A URL is a specific type of Uniform Resource Identifier (URI). Several HTML/XHTML tags include a URL attribute value, including hyperlinks, inline images and forms.
A URL is made of up several parts, each of which offers information to the web browser to help find the page.

</br></br>Also Domain name is another important part which is useful to identify IP addresses.
Domain names are used in URLs to identify particular Web pages.
domain name is an identification string that defines a realm of administrative autonomy, authority or control within the Internet.
Domain names are used in various networking contexts and for application specific naming and addressing purposes also.Domain names are formed by the rules and procedures of the Domain Name System (DNS).
    </p>
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
