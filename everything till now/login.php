<!DOCTYPE html>
<?php


// Start PHP session at the beginning 


// Create database connection using config file
include_once("config.php");

// If form submitted, collect email and password from form
if (isset($_POST['login'])) {
    $uname   = $_POST['uname'];
    $pass = $_POST['password'];
	$password=md5($pass);
    // Check if a user exists with given username & password
    $result = mysqli_query($conn, "select 'username', 'password' from reg_users where username='$uname' and password='$password'");

    // Count the number of user/rows returned by query 
    $user_matched = mysqli_num_rows($result);

    // Check If user matched/exist, store user email in session and redirect to sample page-1
    if ($user_matched > 0) {

        $_SESSION["uname"] = $uname;
        header("location: home.php");
		?> <script>var logerr=null;</script><?php
    } else {
		$login_error = "Invalid username or password!!";
		?> <script>var logerr="Invalid username or password!!";</script><?php
    }
}
if (isset($_SESSION["uname"])) {
   $name=$_SESSION["uname"];
}



?>

<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="login.css?v=<?php echo time(); ?>">
<script>
var modalreg = document.getElementById('register');

window.onclick = function(event) {
    if (event.target == modalreg) {
        modalreg.style.display = "none";
    }
}
</script>
</head>
<body>
	<!--<div class="header" id="head">
    <a><img class="img" src="logonew.png" alt="logo" width="100px" height="100%"></a>
  </div>-->
	   <div id="login" class="modal">
  <form class="modal-content animate" method="POST" action="home.php">
	
	<h2>USER LOGIN</h2>

    <label class="headings"><b> Username</b></label>
    <input type="text" placeholder="Enter Username" name="uname" required>
<br><br>
    <label class="headings"><b> Password</b></label>
    <input type="password" placeholder="Enter Password" name="password" required>      
    <br><br>
    <!--<a class="forgot" href="#">Forgot password?</a>
    <label>
      <input type="checkbox" checked="checked" name="rememberme"> Remember me
    </label><br><br>-->
	<input type="submit" value="Login" name="login">
	<p class="register">Don't have an account?&nbsp<a class="register" href="register.php" >Register</a></p>
	
	</form>
	</div>
</body>
</html>