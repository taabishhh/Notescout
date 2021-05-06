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
          color: aliceblue;">Basic HTML<br>Syntax</h1>

<div style="margin: 100px 0px 0px 0px;" class="sticky">
<a href="four.php" class="previous round">‹ back</a>
<!--<a href="five.php" class="next round">next ›</a>-->
</div>

  <div class="row">
    <div class="column-66">
    <p style="margin: 0px 0px 20px 0px;">
      <b>Html anchor tag</b>
The HTML anchor tag defines a hyperlink that links one page to another page. It can create hyperlink to other web page as well as files, location, or any URL. The "href" attribute is the most important attribute of the HTML a tag. and which links to destination page or URL.
href attribute of HTML anchor tag
The href attribute is used to define the address of the file to be linked. In other words, it points out the destination page.
Specify a location for Link using target attribute
If we want to open that link to another page then we can use target attribute of <a> tag. With the help of this link will be open in next page.
e.g.:
<a href="second.html">Click for Second Page</a>
Output:
Click for Second Page.

Html images
Images are very important to beautify as well as to depict many complex concepts in simple way on your web page.
You can insert any image in your web page by using <img> tag. Following is the simple syntax to use this tag.
Syntax:
<img src = "Image URL" ... attributes-list/>

we can use PNG, JPEG or GIF image file
based on your comfort but make sure you specify correct image file name in src attribute. Image name is always case sensitive.
The alt attribute is a mandatory attribute which specifies an alternate text for an image, if the image cannot be displayed.
The <img> alt attribute is used to specify the alternate text for an image. It is useful when the image not displayed. It is used to give alternative information for an image.
Syntax:
<img alt="text">
Attribute Values: It contains single value text which specifies the alternative text for an image.
most of the HTML tags can also have attributes, which are extra bits of information.
an attribute is used to define the characteristics of an HTML element and is placed inside the element's opening tag. All attributes are made up of two parts − a name and a value
The name is the property you want to set.
For example, the paragraph <p> element in the example carries an attribute whose name is align, which we can use to indicate the alignment of paragraph on the page.
the value is what we want the value of the property to be set and always put within quotations.  three possible values of align attribute: left, center and right.
Attribute names and attribute values are case-insensitive. However, the World Wide Web Consortium (W3C) recommends lowercase attributes/attribute values in their HTML.
the four core attributes that can be used on the majority of HTML elements (although not all) are −Id
            Title
            Class
            Style
Id attribute:
The id attribute of an HTML tag can be used to uniquely identify any element within an HTML page. There are two primary reasons that you might want to use an id attribute on an element −
      If an element carries an id attribute as a unique identifier, it is possible to identify just that element and its content.
     If you have two elements of the same name within a Web page (or style sheet), you can use the id attribute to distinguish between elements that have the same name.
For now, let's use the id attribute to distinguish between two paragraph elements as shown below.
e.g:
<p id = "html">This para explains what is HTML</p>
<p id = "css">This para explains what is Cascading Style Sheet</p>
 Title Attribute:
The title attribute gives a suggested title for the element. They syntax for the title attribute is similar as explained for id attribute −
The behavior of this attribute will depend upon the element that carries it, although it is often displayed as a tooltip when cursor comes over the element or while the element is loading.
Syntax:
<element title = "text">
class Attribute
The class attribute is used to associate an element with a style sheet, and specifies the class of element.
The value of the attribute may also be a space-separated list of class names.
To create a class; write a period (.) character, followed by a class name.
e.g.-
class = "className1 className2 className3".
style Attribute
The style attribute allows you to specify Cascading Style Sheet (CSS) rules within the element . the style attribute specifies an inline style for an element. the style attribute will override any style set globally .
e.g. styles specified in the <style> tag or in an external style sheet. The style attribute can be used on any HTML element (it will validate on any HTML element).
Supported Browsers: The browser supported by HTML <img> alt Attribute are listed below:
Google Chrome
Internet Explorer
Firefox
Safari
Opera
Set Image Location
Usually we keep all the images in a separate directory. So let's keep HTML file test.htm in our home directory and create a subdirectory images inside the home directory where we will keep our image test.png.
Set Image Width/Height
You can set image width and height based on your requirement using width and height attributes. You can specify width and height of the image in terms of either pixels or percentage of its actual size.
e.g.:-
An image with a height of 600 pixels and a width of 500 pixels:
<img src="img_girl.jpg" alt="Girl in a jacket" width="500" height="600">
Set Image Border
By default, image will have a border around it, you can specify border thickness in terms of pixels using border attribute. A thickness of 0 means, no border around the picture.
e.g:
#borderimg {
  border-image: url(border.png) 30 round;
}
Set Image Alignment
image will align at the left side of the page, but we can use align attribute to set it in the center or right.
Image alignment :
left: It sets the alignment of image to the left.
right: It sets the alignment of image to the right.
middle: It sets the alignment of image to the middle.
top: It sets the alignment of image to the top.
bottom: It sets the alignment of image to the bottom.

Lists in HTML
HTML offers web authors three ways for specifying lists of information. All lists must contain one or more list elements. Lists may contain
<ul> − An unordered list. This will list items using plain bullets. an unordered list is a collection of related items that have no special order or sequence. This list is created by using HTML <ul> tag. Each item in the list is marked with a bullet.
Example:
    <ul>
           <li>Beetroot</li>
           <li>Ginger</li>
          <li>Potato</li>
          <li>Radish</li>
    </ul>
Output:
Beetroot
Ginger
Potato
Radish
Type Attribute for <ul> tags-
We can use type attribute for <ul> tag to specify the type of bullet . By default, it is a disc. Following are the possible options −
<ul type = "square">
<ul type = "disc">
<ul type = "circle">
Example:

<ol> − An ordered list. This will use different schemes of numbers to list your items.  if we are required to put your items in a numbered list instead of bulleted, then HTML ordered list will be used. This list is created by using <ol> tag. The numbering starts at one and is incremented by one for each successive ordered list element tagged with <li>.
e.g:
<ol>
        <li>Beetroot</li>
         <li>Ginger</li>
         <li>Potato</li>
         <li>Radish</li>
    </ol>
Output:
     1.Beetroot
     2.Ginger
     3.Potato
     4.Radish

type Attribute <ol> tag-
We can use type attribute for <ol> tag to specify the type of numbering you like. By default, it is a number.
Following are the possible options:
<ol type = "1"> - Default-Case Numerals.
<ol type = "I"> - Upper-Case Numerals.
<ol type = "i"> - Lower-Case Numerals.
<ol type = "A"> - Upper-Case Letters.
<ol type = "a"> - Lower-Case Letters.

 <dl> − A definition list. This arranges your items in the same way as they are arranged in a dictionary.HTML and XHTML supports a list style which is called definition lists where entries are listed like in a dictionary or encyclopedia. The definition list is the ideal way to present a glossary, list of terms, or other name/value list. definition List makes use of following three tags.
<dl> − Defines the start of the list
<dt> − A term
<dd> − Term definition
</dl> − Defines the end of the list
e.g.
<dl>
         <dt><b>HTML</b></dt>
         <dd>This stands for Hyper Text
Markup Language</dd>
         <dt><b>HTTP</b></dt>
         <dd>This stands for Hyper Text Transfer Protocol</dd>
</dl>

Tables in HTML
The HTML tables allow web authors to arrange data like text, images, links, other tables, etc. into rows and columns of cells.
The HTML tables are created using the <table> tag in which the <tr> tag is used to create table rows and <td> tag is used to create data cells. The elements under <td> are regular and left aligned by default.
Table Heading:
The <table> tag is written as <table></table> with the various table elements nested between the start and end tags. table heading can be defined using <th> tag. This tag will be put to replace <td> tag, which is used to represent actual data cell. Normally we will put your top row as table heading as shown below, otherwise we can use <th> element in any row. Headings, which are defined in <th> tag are centered and bold by default.
each <tr> element represents a row in the table. A row can have one or more <td> or <th> elements, which determine the columns in the table. Specifically, <td> represents table data and <th> represents a table header.
e.g.-
<table>
 <tr>
  <th>Table Header 1</th>
  <th>Table Header 2</th>
 </tr>
 <tr>
  <td>Cell 1</td>
  <td>Cell 2</td>
 </tr>
 <tr>
  <td>Cell 3</td>
  <td>Cell 4</td>
 </tr>
</table>
we also add borders to the table with the style element.
e.g.
table{
    border: 1px solid black;
}
We can also use the <caption> element to provide a caption/title for your table.
e.g.
<table>
 <caption>Table Caption...</caption>
<table>
Cellpadding and Cellspacing Attributes:
There are two attributes called cellpadding and cellspacing which you will use to adjust the white space in your table cells. The cellspacing attribute defines space between table cells, while cellpadding represents the distance between cell borders and the content within a cell.
Cell padding e.g.
th, td {
  padding: 15px;
}
Cell spaccing e.g.:
table
{
spaccing:10px;
}
Colspan and Rowspan Attributes:
We will use colspan attribute if we want to merge two or more columns into a single column. Similar way you will use rowspan if we want to merge two or more rows.
e.g.
<tr>
            <td rowspan = "2">Row 1 Cell 1</td>
            <td>Row 1 Cell 2</td>
            <td>Row 1 Cell 3</td>
         </tr>
         <tr>
            <td>Row 2 Cell 2</td>
            <td>Row 2 Cell 3</td>
         </tr>
         <tr>
            <td colspan = "3">Row 3 Cell 1</td>
         </tr>
 Also we using <tbody>, <thead>, and <tfoot> tags.we can use the <tbody>, <thead>, and <tfoot> tags to group table rows, and to add a table header and/or footer.
e.g.
<table>
<thead>
     <tr><th colspan="2">Table Header (thead)</th></tr>
</thead>
<tfoot>
     <tr><th colspan="2">Table Footer </th></tr>
</tfoot>
<tbody>
<tr>
<td>Cell 1 - part of tbody</td>
<td>Cell 2 - part of tbody</td>
</tr>
<tr>
<td>Cell 3 - part of tbody</td>
<td>Cell 4 - part of tbody</td>
</tr>
<tr>
<td>Cell 5 - part of tbody</td>
<td>Cell 6 - part of tbody</td>
</tr>
</tbody>
</table>
Above all are important parts for the describing the structure of table formatting.
Frames of html
frame is a part of a web page or browser window which displays content independent of its container, with the ability to load content independently. frames in html are created using the <frameset></frameset> tag pair.
the HTML or media elements shown in a frame may come from a different web site as the other elements of content on display, although this practice, known as framing.
HTML frames are used to divide your browser window into multiple sections where each section can load a separate HTML document.
 a collection of frames in the browser window is known as a frameset. The <frameset> tag is a container tag for all other tags that are used to create frames. The  <frameset> tag replaces the <body> tag in frameset documents. the <frameset> tag defines how to divide the window into frames. the window is divided into frames in a similar way the tables are organized into rows and columns . Each frameset defines a set of rows or columns.  If user define frames by using the rows attribute then horizontal frames are created. If user define frames by using cols then vertical frames are created.
e.g.
< frameset  cols="85%, 15%">
  <frame src="http://www.example.com/frame_1.html" name="frame_1">
Frameborder
Framesets have a border attribute. If set to an integer greater than 0, the user can resize the frames by dragging this border, unless a noresize attribute is present in a frame element. If border is set to 0, no border will be displayed and content in different frames will about each other without declination .
framespacing
This attribute specifies the amount of space between frames in a frameset. This can take any integer value.
For example:
 framespacing = "10" means there should be 10 pixels spacing between each frames.

Frames have also tag attributes which are
 important attributes of <frame> tag −
src
This attribute is used to give the file name that should be loaded in the frame. Its value can be any URL.
 For example:
src = "/html/top_frame.htm" will load an HTML file available in html directory.
name
This attribute allows you to give a name to a frame. It is used to indicate which frame a document should be loaded into. This is especially important when you want to create links in one frame that load pages into an another frame, in which case the second frame needs a name to identify itself as the target of the link.
Marginwidth
This attribute allows you to specify the width of the space between the left and right of the frame's borders and the frame's content. The value is given in pixels.
For example
marginwidth = "10".

Marginheight
This attribute allows you to specify the height of the space between the top and bottom of the frame's borders and its contents. The value is given in pixels.
For example
 marginheight = "10".

noresize
By default, you can resize any frame by clicking and dragging on the borders of a frame. The noresize attribute prevents a user from being able to resize the frame. For example noresize = "noresize".


scrolling
This attribute controls the appearance of the scrollbars that appear on the frame. This takes values either "yes", "no" or "auto".
 For example
scrolling = "no" means it should not have scroll bars.

longdesc
This attribute allows you to provide a link to another page containing a long description of the contents of the frame.
For example
longdesc = "framedescription.htm"

 iframe element is used inline within a normal HTML body, and defines the initial content and name similarly to the frame element. Any text inside an <iframe></iframe> tag pair will be displayed in browsers that do not understand the iframe tag.
e.g.
<iframe src="http://www.example.com/frame_1.html" height="480" width="640">
    Your browser does not support iframes. <a href="http://www.example.com/frame_1.html">Click here</a> to view the content.
</iframe>

There are few drawbacks with using frames, so it's never recommended to use frames in your webpages −
some smaller devices cannot cope with frames often because their screen is not big enough to be divided up. sometimes our page will be displayed differently on different computers due to different screen resolution. there are still few browsers that do not support frame technology.the <noframes> element may be included so web browsers with frames disabled (or browsers that do not support frames) can display something to the user, as in this example:
<noframes>
    Your browser does not support frames.

Creating Frames
To use frames on a page we use <frameset> tag instead of <body> tag. The <frameset> tag defines, how to divide the window into frames. The rows attribute of <frameset> tag defines horizontal frames and cols attribute defines vertical frames. Each frame is indicated by <frame> tag and it defines which HTML document shall open into the frame.
e.g.
      <frameset rows = "10%,80%,10%">
      <frame name = "top" src =              "/html/top_frame.htm" />
      <frame name = "main" src = "/html/main_frame.htm" />
      <frame name = "bottom" src = "/html/bottom_frame.htm" />
       </frameset>

Forms in HTML
An HTML form is a section of a document which contains controls such as text fields, password fields, checkboxes, radio buttons, submit button, menus etc.HTML form facilitates the user to enter data that is to be sent to the server for processing such as name, email address, password, phone number, etc.
HTML forms are required if we want to collect some data from of the site visitor.
Form Syntax
<form action="server url" method="get|post">
  //input controls e.g. textfield, textarea, radiobutton, button
</form>

Form Tags
Forms have several tags which are following-
<form>
It defines an HTML form to enter inputs by the used side.
<input>
It defines an input control.
<textarea>
It defines a multi-line input control.
<label>
It defines a label for an input element.
<fieldset>
It groups the related element in a form.
<legend>
It defines a caption for a <fieldset> element.
<select>
It defines a drop-down list.
<optgroup>
It defines a group of related options in a drop-down list.
<option>
It defines an option in a drop-down list.
<button>
It defines a clickable button.
<datalist>
It specifies a list of pre-defined options for input control.
<keygen>
It defines a key-pair generator field for forms.
<output>
It defines the result of a calculation.

HTML<form> element
The HTML <form> element provide a document section to take input from user. It provides various interactive controls for submitting information to web server such as text field, text area, password field, etc.
HTML <input> element
The HTML <input> element is fundamental form element. It is used to create form fields, to take input from user. We can apply different input filed to gather different information form user. following is the example to show the simple text input.
Example:
<body>
  <form>
     Enter your name  <br>
    <input type="text" name="username">
  </form>
</body>
HTML TextField Control
The type="text" attribute of input tag creates textfield control also known as single line textfield control. the name attribute is optional, but it is required for the server side component such as JSP, ASP, PHP etc.
e.g.
<form>
    First Name: <input type="text" name="firstname"/> <br/>
    Last Name:  <input type="text" name="lastname"/> <br/>
 </form>




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
