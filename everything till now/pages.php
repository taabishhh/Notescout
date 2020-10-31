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

<link rel="stylesheet" href="pages.css?v=<?php echo time(); ?>">
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
          color: aliceblue;">Introduction to<br>HTML</h1>

<div style="margin: 100px 0px 0px 0px;" class="sticky">
<a href="#" class="previous round">‹ back</a>
<a href="page2.php" class="next round">next ›</a>
</div>

  <div class="row">
    <div class="column-66">
    <p style="
    margin: 0px 0px 20px 0px;">
    <strong>HTML</strong> stands for Hyper Text Markup Language. It is used to design web pages using markup language. HTML is the combination of Hypertext and Markup language. Hypertext defines the link between the web pages. <br><br>Markup language is used to define the text document within tag which defines the structure of web pages. This language is used to annotate (make notes for the computer) text so that a machine can understand it and manipulate text accordingly. Most of markup (e.g. HTML) languages are human readable. Language uses tags to define what manipulation has to be done on the text.<br><br>
    HTML is a markup language which is used by the browser to manipulate text, images and other content to display it in required format. HTML was created by Tim Berners-Lee in 1991. The first ever version of HTML was HTML 1.0 but the first standard version was HTML 2.0 which was published in 1999.<br>
    </p>
    <table width="100%">
<thead>
<tr>
<th style="color: white;padding:8px;background-color: rgb(24,142,142);text-align:center;">HTML Version</th>
<th style="color: white;width:50%;padding:8px;background-color: #3f0d40e3;text-align:center;">Year</th>
</tr>
</thead>
<tbody>
<tr>
<td style="text-align:center;padding:8px">HTML 1.0</td>
<td style="text-align:center;padding:8px">1991</td>
</tr>
<tr>
<td style="text-align:center;background-color:#dcdfe2;padding:8px">HTML 2.0</td>
<td style="text-align:center;background-color:#dcdfe2;padding:8px">1995</td>
</tr>
<tr>
<td style="text-align:center;padding:8px">HTML 3.2</td>
<td style="text-align:center;padding:8px">1997</td>
</tr>
<tr>
<td style="text-align:center;background-color:#dcdfe2;padding:8px">HTML 4.01</td>
<td style="text-align:center;background-color:#dcdfe2;padding:8px">1999</td>
</tr>
<tr>
<td style="text-align:center;padding:8px">XHTML</td>
<td style="text-align:center;padding:8px">2000</td>
</tr>
<tr>
<td style="text-align:center;background-color:#dcdfe2;padding:8px">HTML 5</td>
<td style="text-align:center;background-color:#dcdfe2;padding:8px">2014</td>
</tr>
</tbody>
</table>

<p><strong>Elements and Tag:</strong> HTML uses predefined tags and elements which tells the browser about content display property. If a tag is not closed then browser applies that effect till end of page.<br>
<img src="tag.png" alt="" width="619" height="380" style="cursor: pointer;"></p>

<p><strong>HTML page structure:</strong> The Basic structure of HTML page is given below. It contain some elements like head, title, body, … etc. These elements are used to build the blocks of web pages.<br><br>
<img src="htmlstructure.png" alt=""><br><br>
1.<strong> &lt;!DOCTYPE html&gt;</strong> - All HTML documents must start with a <! DOCTYPE> declaration. The declaration is not an HTML tag. It is an "information" to the browser about what document type to expect.<br><br>

2.<strong> &lt;html&gt;</strong> - The <strong>html</strong> tag represents the root of an HTML document. The <strong>html</strong> tag is the container for all other HTML elements (except for the <! DOCTYPE> tag). Note: You should always include the lang attribute inside the <strong>html</strong> tag, to declare the language of the Web page.<br><br>

3.<strong> &lt;head&gt;</strong> -  Head tag contains metadata, title, page CSS etc. All the HTML elements that can be used inside the <head> element are:<br>
<ul>
<li>&lt;style&gt;</li>
<li>&lt;title&gt;</li>
<li>&lt;base&gt;</li>
<li>&lt;noscript&gt;</li>
<li>&lt;script&gt;</li>
<li>&lt;meta&gt;</li>
<li>&lt;title&gt;</li>
</ul>
<br>
4.<strong> &lt;body&gt;</strong> - The <body> tag defines the document's body. The <body> element contains all the contents of an HTML document, such as headings, paragraphs, images, hyperlinks, tables, lists, etc.<br><br>
</p>

<div id="highlighter_288596" class="syntaxhighlighter nogutter night">
<table cellpadding="0" cellspacing="0">
<tbody>
<tr>
<td class="code">
<div class="container">
<div class="line number1 index0 alt2"><code class="plain">&lt;!DOCTYPE html&gt; </code></div>
<div class="line number2 index1 alt1"><code class="plain">&lt;</code><code class="keyword">html</code><code class="plain">&gt; </code></div>
<div class="line number3 index2 alt2"><code class="undefined spaces">&nbsp;&nbsp;&nbsp;&nbsp;</code><code class="plain">&lt;</code><code class="keyword">head</code><code class="plain">&gt; </code></div>
<div class="line number4 index3 alt1"><code class="undefined spaces">&nbsp;&nbsp;&nbsp;&nbsp;</code><code class="plain">&lt;</code><code class="keyword">title</code><code class="plain">&gt;demo web page&lt;/</code><code class="keyword">title</code><code class="plain">&gt; </code></div>
<div class="line number5 index4 alt2"><code class="undefined spaces">&nbsp;&nbsp;&nbsp;&nbsp;</code><code class="plain">&lt;</code><code class="keyword">style</code><code class="plain">&gt; </code></div>
<div class="line number6 index5 alt1"><code class="undefined spaces">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</code><code class="plain">h1 { </code></div>
<div class="line number7 index6 alt2"><code class="undefined spaces">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</code><code class="plain">color:#009900; </code></div>
<div class="line number8 index7 alt1"><code class="undefined spaces">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</code><code class="plain">font-size:46px; </code></div>
<div class="line number9 index8 alt2"><code class="undefined spaces">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</code><code class="plain">} </code></div>
<div class="line number10 index9 alt1"><code class="undefined spaces">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</code><code class="plain">p { </code></div>
<div class="line number11 index10 alt2"><code class="undefined spaces">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</code><code class="plain">font-size:17px; </code></div>
<div class="line number12 index11 alt1"><code class="undefined spaces">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</code><code class="plain">margin-top:-25px; </code></div>
<div class="line number13 index12 alt2"><code class="undefined spaces">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</code><code class="plain">margin-left:15px; </code></div>
<div class="line number14 index13 alt1"><code class="undefined spaces">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</code><code class="plain">} </code></div>
<div class="line number15 index14 alt2"><code class="undefined spaces">&nbsp;&nbsp;&nbsp;&nbsp;</code><code class="plain">&lt;/</code><code class="keyword">style</code><code class="plain">&gt; </code></div>
<div class="line number16 index15 alt1"><code class="undefined spaces">&nbsp;&nbsp;&nbsp;&nbsp;</code><code class="plain">&lt;/</code><code class="keyword">head</code><code class="plain">&gt; </code></div>
<div class="line number17 index16 alt2"><code class="undefined spaces">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</code>&nbsp;</div>
<div class="line number18 index17 alt1"><code class="undefined spaces">&nbsp;&nbsp;&nbsp;&nbsp;</code><code class="plain">&lt;</code><code class="keyword">body</code><code class="plain">&gt; </code></div>
<div class="line number19 index18 alt2"><code class="undefined spaces">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</code><code class="plain">&lt;</code><code class="keyword">h1</code><code class="plain">&gt;NoteScout&lt;/</code><code class="keyword">h1</code><code class="plain">&gt; </code></div>
<div class="line number20 index19 alt1"><code class="undefined spaces">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</code><code class="plain">&lt;</code><code class="keyword">p</code><code class="plain">&gt;A web development learning portal for Students&lt;/</code><code class="keyword">p</code><code class="plain">&gt; </code></div>
<div class="line number21 index20 alt2"><code class="undefined spaces">&nbsp;&nbsp;&nbsp;&nbsp;</code><code class="plain">&lt;/</code><code class="keyword">body</code><code class="plain">&gt; </code></div>
<div class="line number22 index21 alt1"><code class="plain">&lt;/</code><code class="keyword">html</code><code class="plain">&gt;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </code></div>
</div>
</td>
</tr>
</tbody>
</table>
</div>

<p><strong>Features of HTML:</strong></p>
<ul>
<li>It is easy to learn and easy to use.</li>
<li>It is platform independent.</li>
<li>Images, video and audio can be added to a web page.</li>
<li>Hypertext can be added to text.</li>
<li>It is a markup language.</li>
</ul>
<p><strong>Why learn HTML?</strong></p>
<ul>
<li>It is a simple markup language. Its implementation is easy.</li>
<li>It is used to create a website.</li>
<li>Helps in developing fundamentals about web programming.</li>
<li>Boost professional career.</li>
</ul>
<p><strong>Advantages:</strong></p>
<ul>
<li>HTML is used to build a websites.</li>
<li>It is supported by all browsers.</li>
<li>It can be integrated with other languages like CSS, JavaScript etc.</li>
</ul>
<p><strong>Disadvantages:</strong></p>
<ul>
<li>HTML can create only static webpages so for dynamic web page other languages have to be used.</li>
<li>Large amount of code has to be written to create a simple web page.</li>
<li>Security feature is not good.</li>
</ul>

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

