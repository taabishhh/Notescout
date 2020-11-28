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
          color: aliceblue;">Introduction to<br>JavaScript</h1>

<div style="margin: 100px 0px 0px 0px;" class="sticky">
<a href="javascript.php" class="previous round">‹ back</a>
<a href="javatwo.php" class="next round">next ›</a>
</div>

  <div class="row">
    <div class="column-66">

<b>JavaScript</b> is a lightweight, interpreted programming language. It is designed for creating network-centric applications. It is complimentary to and integrated with Java. JavaScript is very easy to implement because it is integrated with HTML. It is open and cross-platform.

<br><br>Javascript is a must for students and working professionals to become a great Software Engineer specially when they are working in Web Development Domain.

<br><br>Javascript is the most popular programming language in the world and that makes it a programmer’s great choice.

<br><br>Javascript, it helps us to  developing great front-end as well as back-end softwares using different Javascript based frameworks like jQuery, Node.JS etc.

<br>For example Chrome, Mozilla Firefox , Safari and every browser  know as of today, supports Javascript.

<br><br>Javascript helps us to create really beautiful and crazy fast websites. We can develop our website with a console like look and feel and give our users the best Graphical User Experience.

<br><br>JavaScript usage has now extended to mobile app development, desktop app development, and game development. This opens many opportunities for you as Javascript Programmer.

<br><br>Great thing about Javascript is that you will find tons of frameworks and Libraries already developed which can be used directly in your software development to reduce your time to market.

<br><br>There are many useful Javascript frameworks and libraries available:

<br><br>Angular
React<br>
jQuery<br>
Vue.js<br>
Ext.js<br>
Ember.js<br>
Meteor<br>
Mithril<br>
Node.js<br>
Polymer<br>
Aurelia<br>
Backbone.js<br>

<br><b>Applications of Javascript Programming</b>

<br><br>Javascript is one of the most widely used programming languages (Front-end as well as Back-end). It has it's presence in almost every area of software development.
Here we are going to see, list few of them :

<br><br><b>1. Client side validation:</b> This is really important to verify any user input before submitting it to the server and Javascript plays an important role in validting those inputs at front-end itself.

<br><b>2. Manipulating HTML Pages:</b> Javascript helps in manipulating HTML page on the fly. This helps in adding and deleting any HTML tag very easily using javascript and modify your HTML to change its look and feel based on different devices and requirements.

<br><b>3. User Notifications:</b> we can use Javascript to raise dynamic pop-ups on the webpages to give different types of notifications to your website visitors.

<br><b>4. Back-end Data Loading:</b> Javascript provides Ajax library which helps in loading back-end data while we  are doing some other processing. This really gives an amazing experience to your website visitors.

<br><b>5. Presentations:</b> JavaScript also provides the facility of creating presentations which gives website look and feel. JavaScript provides RevealJS and BespokeJS libraries to build a web-based slide presentations.

<br><b>6. Server Applications:</b> Node JS is built on Chrome's Javascript runtime for building fast and scalable network applications. This is an event based library which helps in developing very sophisticated server applications including Web Servers.

<br><br><b>Advantages of JavaScript</b>

<br><br>1. Less server interaction
<br>2. Immediate feedback to the visitors
<br>3. Increased interactivity
<br>4. Richer interfaces

<br><br><b>Limitations of JavaScript</b>
<br><br> We cannot treat JavaScript as a full-fledged programming language. It lacks the following important features:

<br><br>1. Client-side JavaScript does not allow the reading or writing of files. This has been kept for security reason.

<br>2. JavaScript cannot be used for networking applications because there is no such support available.

<br>3. JavaScript doesn't have any multi-threading or multiprocessor capabilities.

<br><br><b>JavaScript Development Tools</b>
<br><br>One of major strengths of JavaScript is that it does not require expensive development tools. We can start with a simple text editor such as Notepad.
Some of them are listed here:

<br><br><b>1. Microsoft FrontPage:</b> Microsoft has developed a popular HTML editor called FrontPage. FrontPage also provides web developers with a number of JavaScript tools to assist in the creation of interactive websites.

<br><b>2. Macromedia Dreamweaver MX:</b> Macromedia Dreamweaver MX is a very popular HTML and JavaScript editor in the professional web development crowd. It provides several handy prebuilt JavaScript components, integrates well with databases, and conforms to new standards such as XHTML and XML.

<br><b>3. Macromedia HomeSite 5:</b> HomeSite 5 is a well-liked HTML and JavaScript editor from Macromedia that can be used to manage personal websites effectively.

<br><b>4. JavaScript can be used to trap user:</b> Initiated events such as button clicks, link navigation, and other actions that the user initiates explicitly or implicitly.

<br><br>JavaScript can be implemented using JavaScript statements that are placed within the < script >... < /script > HTML tags in a web page.

<br>We can place the < script > tags, containing our JavaScript, anywhere within our web page, but it is normally recommended that you should keep it within the < head > tags.

<br><br>The < script > tag alerts the browser program to start interpreting all the text between these tags as a script.
<br>syntax of your JavaScript
<br>< script ... >
<br>JavaScript code
<br>< /script >
<br><br>The script tag takes two important attributes −

<br><br><b>1. Language:</b> This attribute specifies what scripting language we are using. Typically, its value will be javascript. Although recent versions of HTML (and XHTML, its successor) have phased out the use of this attribute.

<br><b>2. Type</b> This attribute is ki recommended to indicate the scripting language in use and its value should be set to "text/javascript".

<br><br>So your JavaScript segment will look like:
<br>< script language = "javascript" type = "text/javascript">
<br>JavaScript code
<br>< /script >

<br><br><b>First JavaScript Code</b>

<br><br>Let us take a sample example to print out "Hello World". We added an optional HTML comment that surrounds our JavaScript code. This is to save our code from a browser that does not support JavaScript.
<br>This function can be used to write text, HTML, or both.
<br>E.g
<br>< html >
<br>< body >
<br>< script language = "javascript" type = "text/javascript">
<br>< !--
document.write("Hello World!")
//-->
<br>< /script >
<br>< /body >
<br>< /html >

<br>Output
<br>Hello World!

<br><br><b>Whitespace and Line Breaks</b>
<br><br>JavaScript ignores spaces, tabs, and newlines that appear in JavaScript programs.
Semicolons are Optional
Simple statements in JavaScript are generally followed by a semicolon character, just as they are in C, C++, and Java.
JavaScript, however, allows you to omit this semicolon if each of your statements are placed on a separate line.
<br>Example
<br>< script language = "javascript" type = "text/javascript">
<br>< !--
<br>var1 = 10
<br>var2 = 20
<br>//-->
<br>< /script>
<br>But when formatted in a single line as follows, we must use semicolons −
<br>E.g.
<br>< script language = "javascript" type = "text/javascript">
<br>< !--
<br>var1 = 10; var2 = 20;
<br>//-->
<br>< /script>
<br>It is a good programming practice to use semicolons.

<br><br><b>Case Sensitivity</b>
<br><br>JavaScript is a case-sensitive language. This means that the language keywords, variables, function names, and any other identifiers must always be typed with a consistent capitalization of letters.

<br>So the identifiers Time and TIME will convey different meanings in JavaScript.

<br><br><b>Comments in JavaScript</b>
<br><br>JavaScript supports both C-style and C++-style comments, Thus −

<br>Any text between a // and the end of a line is treated as a comment and is ignored by JavaScript.

<br>Any text between the characters /* and */ is treated as a comment. This may span multiple lines.

<br>JavaScript also recognizes the HTML comment opening sequence < !--. JavaScript treats this as a single-line comment, just as it does the // comment.

<br>The HTML comment closing sequence --> is not recognized by JavaScript so it should be written as //-->.
<br>Example-
<br>< script language = "javascript" type = "text/javascript" >
<br>< /script >

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
