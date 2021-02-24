<?php
include 'includes/header.php';
include 'businessLogic/trainingMapper.php';


?>
<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="Styles/stiliTandE.css" type="text/css" />
</head>
<body>
<div id="main">
			<div id="sliderShow">
				<img src="Images/training.jpg" alt="" />
				<div id="trainingdepartment">
					<h1>TRAINING DEPARTMENT</h1>
				</div>
			</div>
			<!-- Pjesa e DIV-it se cfare eshte Training Department-->
			<div id="cfareeshte">
				<h1 id="shkrimi">Training</h1>
				<p id="shkrimi2">Training Department provides special training services and delivers market-oriented,
					high quality courses improving</p>
				<p id="shkrimi2">the skills of the general workforce, including Incubator tenants, business people, ICT
					professionals, public</p>
				<p id="shkrimi2">administration and civil society. Training Department also serves as a link between
					private companies and certified </p>
				<p id="shkrimi2">trainees.</p>
			</div>

			<div id="upcomingTr">
				<h1>Upcoming Trainings</h1>
			</div>
			<!-- Pjesa e trainings-->
			<?php
				$trainings = new trainingMapper;
				$trainingsAll = $trainings->getAllTrainings();
				foreach($trainingsAll as $training){
			?>
			<div id="trainings">
				<div id="fotocyber"><img style="width: 250px; height: 250px;"src="Images\<?php echo $training['image'];?>"
						alt="" />
				</div>
				<div>
					<h1 id="shkrimi3"><?php echo $training['title'];?></h1>
					<p id="shkrimi3"><?php echo $training['content'];?></p>
					<button id="butoni1" onclick="location.href='application.php?id=<?php echo $training['trainingid'];?>'">APPLY</button>
					<br>
				</div>
			</div>
			<?php } ?>
			
			<!-- Pjesa e 4 flexboxave orange-->
			<div id="flexboxi11">
				<div class="orangeflexbox"><img id="foto1"
						src="https://ickosovo.com/images/uploads/photos/icon-people.svg" alt="">
					<h2 id="shkrimiflexbox">+3000 </h2>
					<h5 id="shkrimiflexbox3">Participants</h5>
				</div>

				<div class="orangeflexbox"><img id="foto1"
						src="https://ickosovo.com/images/uploads/photos/icon-training.svg" alt="">
					<h2 id="shkrimiflexbox">230</h2>
					<h5 id="shkrimiflexbox3">Training</h5>
					<h5 id="shkrimiflexbox3">Courses</h5>
				</div>

				<div class="orangeflexbox"><img id="foto1"
						src="https://ickosovo.com/images/uploads/photos/icon-ribbon.svg" alt="">
					<h2 id="shkrimiflexbox">+4,300 TRAINEES</h2>
					<h5 id="shkrimiflexbox3">With 80% in ICT and 20% in</h5>
					<h5 id="shkrimiflexbox3">Business, respectively.</h5>
				</div>
				<div class="orangeflexbox"><img id="foto1" src="https://ickosovo.com/images/uploads/photos/icon-tie.svg"
						alt="">
					<h2 id="shkrimiflexbox">+150</h2>
					<h5 id="shkrimiflexbox3">Internships</h5>


				</div>
			</div>

			<?php
        include 'includes/footer.php';
        ?>
</body>

</html>