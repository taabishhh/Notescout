<?php
session_start();

// This page can be accessed only after login
// Redirect user to login page, if user email is not available in session
if (!isset($_SESSION["uname"])) {
    header("location: login.php");
}
else{
	$uname=$_SESSION["uname"];
}
?>

<html>

<body>
    <a href="logout.php">Logout</a>
	<?php if (isset($uname)): ?>
	<h1><?php echo "Welcome '$uname'"; ?></span></h1>
	<?php endif ?><br>
</body>

</html>