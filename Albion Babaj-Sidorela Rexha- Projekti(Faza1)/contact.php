<?php
include 'includes/header.php';
?>
<!DOCTYPE html>
<html>

<head>
	<link rel="stylesheet" href="Styles/styleAC.css">
	<script src="Scripts/script.js"></script>
</head>
<body>
	<div id="main">
		<div id="mainPh">
		<a href=""><img src="./Images/contactus.jpg" alt = "" ></a>
			<div id="contactus1">
				<h1>CONTACT US</h1>
			</div>
		</div>
	</div>
	<div class="contact">
		<div class="left-side">
			<p>Contact us using any of the ways below</p>
			<br>
			<p>Mbreteresha Teute st. 28A, <br>
				40000 Mitrovica, <br>
				Kosovo</p>
			<br>
			<p><b>Call Center:</b> <br>
				+383 (0)11 22 31 41 /11 - info@braindemy.com</p>
			<br>
			<p><b>Training Department:</b> <br>
				+383 (0)38 11 12 13 /14 - training@braindemy.com</p>
			<br>
			<p><b>Events Department: </b> <br>
				+383 (0)38 11 21 31 /41 - events@braindemy.com</p>
		</div>
		<div class="right-side">
				<div id="container">
					<p>EMRI</p>
					<input type="text" class="form" id="ConName" name="ConName" placeholder="Emri juaj...">
					<p>EMAIL</p>
					<input type="email" class="form" id="ConEmail" name="ConEmail" placeholder="Email juaj...">
					<p>MESAZHI</p>
					<textarea id="contactBox" name="Message" placeholder="Mesazhi apo pyetja qe doni te dergoni..."
						style="height:100px"></textarea>
					<button name="SendBtn" id="btn" onclick="validateContact()">Submit</button>
		</div>
	</div>
	</div>
	<!-- Pjesa e footer-it-->
	<?php
        include 'includes/footer.php';
        ?>
</body>