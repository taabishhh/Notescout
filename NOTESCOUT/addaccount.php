<?php
session_start();
// Include config file
//require_once "config.php";
include_once("config.php");

	if (isset($_POST['Register'])){
	// retrieve the form data by using the element's name attributes value as key
	$uname = $_POST['uname'];
	$email = $_POST['email']; 
	$password = md5($_POST['password']); 
	$updates = $_POST['updates'];
	if ($updates==1){
		$updates=1;
		}
	else{
		$updates=0;
	}
	$sql_u = "SELECT * FROM reg_users WHERE username='$uname'";
  	$sql_e = "SELECT * FROM reg_users WHERE email='$email'";
  	$res_u = mysqli_query($conn, $sql_u);
  	$res_e = mysqli_query($conn, $sql_e);

  	if (mysqli_num_rows($res_u) > 0) {
		$name_error = "This Username is already taken"; 	
  	}
	else if(mysqli_num_rows($res_e) > 0) {
		$email_error = "This email is already registered"; 	
	}
	else{
	// display the results
		$sql = "INSERT INTO reg_users(username, email, password, updates) VALUES('$uname', '$email', '$password', '$updates')";

		if(mysqli_query($conn, $sql)){
			$_SESSION["uname"] = $uname;
			header("location: homep.php");
		} else{
			echo "ERROR: Could not able to execute $sql. " . mysqli_error($conn);
		}
		
		mysqli_close($conn);
	}
	}
?>