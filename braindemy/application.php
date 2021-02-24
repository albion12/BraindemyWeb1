<?php
include 'includes/header.php';
include 'businessLogic/trainingMapper.php';
include 'businessLogic/trainingClass.php';
include 'businessLogic/trainingAppClass.php';
include 'businessLogic/trainingAppMapper.php';

if(isset($_GET['id'])){
	$trainingM = new trainingMapper;
	$training = $trainingM->getTrainingByID($_GET['id']);
};

if(isset($_POST['AppBtn'])){
	$email = $_POST['AppEmail'];
	$name = $_POST['AppName'];
	$trainingApp = new TrainingApp($name,$email,$_GET['id']);
	$tAppMapp = new trianingAppMapper;
	$tAppMapp->insertTrainingApplication($trainingApp);
	echo "<script> alert('Faleminderit qe aplikuat ne trajnim.'); </script>";
}
?>
<!DOCTYPE html>
<html>

<head>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="Styles/styleAC.css">
	<script src="Scripts/script.js"></script>
</head>
<body>
	<div id="main">
		<div id="mainPh">
		<a href=""><img src="./Images/apply.jpg" alt = "" ></a>
			<div id="contactus1">
				<h1>APPLY</h1>
			</div>
		</div>
	</div>
	<div class="contact">
		<div class="left-side">
			<img style="height: 200px; width: 200px" src="Images\<?php echo $training['image'];?>"/>
			<h1><?php echo $training['title'];?></h1>
			<br>
			<p><?php echo $training['content'];?></p>
			<br>
			<p><b>For further information: </b> <br>
				+383 (0)11 22 31 41 /11 - info@braindemy.com</p>
			<br>
		</div>
		<form method="post" class="right-side">
				<div id="container1">
					<p>EMRI</p>
					<input type="text" class="form" id="AppName" name="AppName" placeholder="Emri juaj...">
					<p>EMAIL</p>
					<input type="email" class="form" id="AppEmail" name="AppEmail" placeholder="Email juaj...">
					<button name="AppBtn" id="btn" onclick="return validateApplication()">APPLY</button>
				</div>
		</form>
	</div>
	<!-- Pjesa e footer-it-->
	<?php
        include 'includes/footer.php';
        ?>
</body>