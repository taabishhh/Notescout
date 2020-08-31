<!DOCTYPE html>
<?php include('addaccount.php') ?>
<html>
<head>
<script>
var check = function() {
  if (document.getElementById('password').value ==
    document.getElementById('confirm_password').value) {
    document.getElementById('message').style.color = 'lightgreen';
    document.getElementById('message').innerHTML = '(Password is matching)';
  } else {
    document.getElementById('message').style.color = 'red';
    document.getElementById('message').innerHTML = '(Password is not matching)';
  }
}
var checklen = function() {
	var pass=document.getElementById('password').value;
	passlen=pass.length;
	if (passlen<8){
		document.getElementById('mess').style.color = 'red';
		document.getElementById('mess').innerHTML = '(Password should be a minimum of 8 &nbsp&nbsp&nbsp&nbspcharacters)';
	}
	else{
		document.getElementById('mess').innerHTML = '';
	}
}


function validatePassword(){
	var password = document.getElementById("password"), confirm_password = document.getElementById("confirm_password");
	if(password.value.length < 8) {
    password.setCustomValidity("Password should be a minimum of 8 characters");
	confirm_password.setCustomValidity('');
  }
	else if(password.value != confirm_password.value) {
		confirm_password.setCustomValidity("Passwords Don't Match");
		password.setCustomValidity('');
	} 
	else {
    confirm_password.setCustomValidity('');
	password.setCustomValidity('');
  } 
  }
</script>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="register.css">
</head>
<body>
	<div class="header" id="head">
    <a><img class="img" src="logonew.png" alt="logo" width="100px" height="100%"></a>
  </div>
  <form  method="POST" action="register.php">
    
	
	<h2>CREATE A NEW ACCOUNT</h2>
	<?php if (isset($success)): ?>
	<span name="success"><?php echo $success; ?></span>
	<?php endif ?><br>
    <label class="headings"><b> Username</b></label>
    <input type="text" placeholder="Enter Username" name="uname" required/><br>
	<?php if (isset($name_error)): ?>
	<span><?php echo $name_error; ?></span>
	<?php endif ?>
	<br>
	<label class="headings"><b>Email ID</b></label>
    <input type="email" placeholder="Enter your email-id" name="email" required/><br>
	<?php if (isset($email_error)): ?>
	<span><?php echo $email_error; ?></span>
	<?php endif ?>
	<br>
    <label class="headings"><b> Password</b></label>
    <input type="password" placeholder="Enter Password" name="password" id="password" onkeyup='checklen()' required/>      
    <br><span id='mess'></span><br>
	<label class="headings"><b>Confirm Password</b></label>
    <input type="password" placeholder="Confirm Password" name="confirm_password" id="confirm_password" onkeyup='check()' required/>      
    <br><span id='message'></span><br>
    <label>
      <input type="checkbox" checked="checked" name="updates" value="1"/> Yes, I would like to be notified about the latest updates and advancements in the website
    </label><br>
	<input type="submit" value="Register" name="Register" onclick="validatePassword()"/>
	</form>
</body>
</html>