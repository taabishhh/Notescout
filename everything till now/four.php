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
          color: aliceblue;">HTML<br>Formatting</h1>

<div style="margin: 100px 0px 0px 0px;" class="sticky">
<a href="three.php" class="previous round">‹ back</a>
<a href="five.php" class="next round">next ›</a>
</div>

  <div class="row">
    <div class="column-66">
    <p style="margin: 0px 0px 20px 0px;">
      <b>HTML Formatting</b> is a process of formatting text for better look and feel. HTML provides us ability to format text without using CSS. There are many formatting tags in HTML. These tags are used to make text bold, italicized, or underlined. There are almost 14 options available that how text appears in HTML and XHTML.
<br><br>In HTML the formatting tags are divided into two categories:
<br><br><b>Physical tag:</b> These tags are used to provide the visual appearance to the text.
<br><b>Logical tag:</b> These tags are used to add some logical or semantic value to the text.
<br><br>Here, we are going to learn 12 HTML formatting tags. Following is the list of HTML formatting text.
<br><br><b>1) Bold Text</b>
<br><br>HTML &lt;b> and &lt;strong> formatting elements
<br><br>The HTML &lt;b> element is a physical tag which display text in bold font, without any logical importance. If you write anything within &lt;b>............&lt;/b> element, is shown in bold letters.
<br>See this example:
<br>&lt;p&gt;
&lt;b>
Write Your First Paragraph in bold text.
&lt;/b>
&lt;/p&gt;
<br>Output:
<br><p><b>Write Your First Paragraph in bold text.</b></p>

<br><br>The HTML &lt;strong> tag is a logical tag, which displays the content in bold font and informs the browser about its logical importance.
<br>See this example:
<br>&lt;p>
&lt;strong>
This is an important content
&lt;/strong>
 and this is normal content
&lt;/p>
<br>Output:
<br><p><strong>This is an important content</strong> and this is normal content.</p>

<br><br><b>2) Italic Text</b>
<br><br>HTML &lt;i> and &lt;em> formatting elements
<br>The HTML &lt;i> element is physical element, which display the enclosed content in italic font, without any added importance. If you write anything within <i>............</i> element, is shown in italic letters.
<br>See this example:
<br>&lt;p>
 &lt;i>
Write Your First Paragraph in italic text.
&lt;/i>
&lt;/p>
<br>Output:
<br><p><i>Write Your First Paragraph in italic text.</i></p>
<br><br>The HTML &lt;em> tag is a logical element, which will display the enclosed content in italic font, with added semantics importance.
<br>See this example:
<br>&lt;p>
&lt;em>
This is an important content
&lt;/em>
which displayed in italic font.
&lt;/p>
<br>Output:
<br><p><em>This is an important content</em> which displayed in italic font.</p>
<br><b>3) HTML Marked formatting</b>
<br><br>If we want to mark or highlight a text, you should write the content within < mark >.........< /mark >.
<br>See this example:
<br>&lt;h2>
 I want to put a &lt;mark> Mark&lt;/mark> on your face.
&lt;/h2>
<br>Output:
<h3>I want to put a <mark>Mark</mark> on your face.</h3>

<br><br><b>4) Underlined Text</b>
<br><br>If we write anything within &lt;u>.........&lt;/u> element, is shown in underlined text.
<br>See this example:
<br>&lt;p>
&lt;u>
Write Your First Paragraph in underlined text.
&lt;/u>
&lt;/p>
<br>Output:
<br><p>
<u>
Write Your First Paragraph in underlined text.
</u>
</p>
<br>
<br><br><b>5) Strike Text</b>
<br><br>Anything written within < strike >.......................< /strike > element is displayed with strikethrough. It is a thin line which cross the statement.
<br>See this example:
<br>&lt;p>
&lt;strike>
Write Your First Paragraph with strike through.
&lt;/strike>
&lt;/p>
<br>Output:
<br>
<p><strike>Write Your First Paragraph with strike through.</p></strike>
<br><br><b>6) Monospaced Font</b>
<br><br>If we want that each letter has the same width then you should write the content within < tt >.............< /tt > element.
<br>See this example:
<br>&lt;p>
Hello
 &lt;tt>
Write Your First Paragraph in monospaced font.
&lt;/tt>
&lt;/p>
<br>Output:
<br>
<p>Hello<tt> Write Your First Paragraph in monospaced font.</tt></p>
<br><br><b>7) Superscript Text</b>
<br><br>If we put the content within < sup >..............< /sup > element, is shown in superscript; means it is displayed half a character's height above the other characters.
<br>See this example:
<br>&lt;p>
Hello
 &lt;sup>
Write Your First Paragraph in superscript.
&lt;/sup>
&lt;/p>
<br>Output:
<p>
Hello
 <sup>
Write Your First Paragraph in superscript.
</sup>
</p>
<br><br><b>8) Subscript Text</b>
<br><br>If we put the content within < sub >..............< /sub > element, is shown in subscript ; means it is displayed half a character's height below the other characters.
<br>See this example:
<br>&lt;p>
Hello
 &lt;sub>
Write Your First Paragraph in subscript.
&lt;/sub>
&lt;/p>
<br>Output:
<br><p>
Hello
 <sub>
Write Your First Paragraph in subscript.
</sub>
</p>
<br><br><b>9) Deleted Text</b>
<br><br>Anything that puts within < del >..........< /del > is displayed as deleted text.
<br>See this example:
<br>&lt;p>
Hello
&lt;del>
Delete your first paragraph.
&lt;/del>
&lt;/p>
<br>Output :
<br><p>
Hello
<del>
Delete your first paragraph.
</del>
</p>

<br><br><b>10) Inserted Text</b>
<br><br>Anything that puts within < ins >..........< /ins > is displayed as inserted text.
<br>See this example:
<br>&lt;p>
&lt;del>
Delete your first paragraph.
&lt;/del>
&lt;ins>
Write another paragraph.
&lt;/ins>
&lt;/p>
<br>Output:
<br><p>
<del>
Delete your first paragraph.
</del>
<ins>
Write another paragraph.
</ins>
</p>
<br><br><b>11) Larger Text</b>
<br><br>If you want to put your font size larger than the rest of the text then put the content within < big >.........< /big >. It increase one font size larger than the previous one.
<br>See this example:
<br>&lt;p>
Hello
&lt;big>
Write the paragraph in larger font.
&lt;/big>
&lt;/p>
<br>Output:
<br><p>
Hello
<big>
Write the paragraph in larger font.
</big>
</p>

<br><br><b>12) Smaller Text</b>
<br><br>If you want to put your font size smaller than the rest of the text then put the content within < small >.........< /small >tag. It reduces one font size than the previous one.
<br>See this example:
<br>&lt;p>
Hello
 &lt;small>
Write the paragraph in smaller font.
&lt;/small>
&lt;/p>
<br>Output:
<p>
Hello
 <small>
Write the paragraph in smaller font.
</small>
</p>

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
