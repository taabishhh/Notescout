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
          color: aliceblue;">HTTP<br>Overview</h1>

<div style="margin: 100px 0px 0px 0px;" class="sticky">
<a href="two.php" class="previous round">‹ back</a>
<a href="four.php" class="next round">next ›</a>
</div>

  <div class="row">
    <div class="column-66">
    <p style="margin: 0px 0px 20px 0px;">
    <br><b>Overview of Http:</b>
<br><br>The HTTP protocol can be used to transfer the data in the form of plain text, hypertext, audio, video, and so on.
This protocol is known as HyperText Transfer Protocol because of its efficiency that allows us to use in a hypertext environment where there are rapid jumps from one document to another document.
HTTP is a connectionless protocol. HTTP client initiates a request and waits for a response from the server. When the server receives the request, the server processes the request and sends back the response to the HTTP client after which the client disconnects the connection. The connection between client and server exist only during the current request and response time only.
HTTP protocol is a media independent as data can be sent as long as both the client and server know how to handle the data content. It is required for both the client and server to specify the content type.
HTTP have also used in  transaction between client and server. The client initiates a transaction by sending a request message to the server. The server replies to the request message by sending a response message. Http sends message between client and server.
<br><br>HTTP messages are of two types:
<br>1. Request Message
<br>2. Response message.
<br><br><b>Request Message:</b> The request message is sent by the client that consists of a request line, headers, and sometimes a body.
<br><br><b>Response Message:</b> The response message is sent by the server to the client that consists of a status line, headers, and sometimes a body.
<br><br>HTTP is similar to the FTP as it also transfers the files from one host to another host. But, HTTP is simpler than FTP as HTTP uses only one connection, i.e., no control connection to transfer the files.
Another part is FTP which is standard internet protocol . FTP is using in transmission between computers and internet.
<br><br><b>File Transfer Protocol (FTP)</b> is a standard Internet protocol for transmitting files between computers on the Internet over TCP/IP connections. FTP is a client-server protocol where a client will ask for a file, and a local or remote server will provide it.
The end-users machine is typically called the local host machine, which is connected via the internet to the remote host—which is the second machine running the FTP software . FTP is a client-server protocol that relies on two communications channels between client and server: a command channel for controlling the conversation and a data channel for transmitting file content. Clients initiate conversations with servers by requesting to download a file. Using FTP, a client can upload, download, delete, rename, move and copy files on a server. A user typically needs to log on to the FTP server, although some servers make some or all of their content available without login, known as anonymous FTP.
<br><br>  FTP sessions work in passive or active modes. In active mode, after a client initiates a session via a command channel request, the server initiates a data connection back to the client and begins transferring data. In passive mode, the server instead uses the command channel to send the client the information it needs to open a data channel. Because passive mode has the client initiating all connections, it works well across firewalls and Network Address Translation (NAT) gateways.
<br><br>The Markup Validation Service is a validator by the World Wide Web Consortium (W3C) that allows Internet users to check HTML and XHTML documents for well-formed markup. The World Wide Web Consortium (W3C) is the main international standards organization for the World Wide Web. Founded in 1994 and currently led by Tim Berners-Lee, the consortium is made up of member organizations that maintain full-time staff working together in the development of standards for the World Wide Web.
<br><br>The Markup Validator is a free service by W3C that helps check the validity of Web documents. Most Web documents are written using markup languages, such as HTML or XHTML . These languages are defined by technical specifications, which usually include a machine-readable formal grammar. Markup validation is an important step towards ensuring the technical quality of web pages. However, it is not a complete measure of web standards conformance.[1] Though W3C validation is important for browser compatibility and site usability, it has not been confirmed what effect it has on search engine optimization.It’s important that your site is W3C valid to ensure the site works properly on your browser as well as the other major browsers such as Internet Explorer, FireFox, Chrome, etc. A website that contains many errors can suffer from many ill-effects.
<br><br>W3C also offers validation tools for web technologies other than HTML/XHTML, such as CSS, XML schemas, and MathML.


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
