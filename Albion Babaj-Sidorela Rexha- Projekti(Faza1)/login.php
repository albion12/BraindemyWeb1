<?php 
  
  include './includes/header.php'?>


<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="Styles/login.css">
	<script src="Scripts/login.js"></script>
</head>
<body>
    <img src="Images/login.jpg" alt = "" style="float: left; border-radius: 10%;">
	<div class="wrapper">

    <div class="container" >
		<div class="login" onclick="switchVisibleLogin()">Log In</div>
		<div class="signup" onclick="switchVisibleSignUp()">Sign Up</div>
		</div>
		
		<div class="login-form" id="login-form"  action="loginVerify.php" method="post" onsubmit="return validate()">
			<h4 id="Usr"></h4>
			<input id="emailLog" name ="usernameFL" type="text" placeholder="Email or Username" class="input"><br />
			<input id="pwLog" name="passwordFL" type="password" placeholder="Password" class="input"><br />
			<button name="loginBtn" class="btn" onclick="validateLogin()"> log in</button>
		 </div>
		
        <div class="signup-form" id="signup-form" style="display: none;">
          <input id="emailSI" type="email" name="emailField" placeholder="Your Email Address" class="input"><br />
          <input id="userSI" type="text" name="usernameField"placeholder="Choose a Username" class="input"><br />
          <input id="pwSI" type="password" name="passwordField" placeholder="Choose a Password" class="input"><br />
		  <button name="signUPbtn" class="btn" onclick="validateSignUp()"> create account</button>
        </div>      
    </div>
  </div>

</body>
 <?php 
  
  include './includes/footer.php'?>
</html>