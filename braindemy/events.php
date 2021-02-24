<?php
include 'includes/header.php';
include 'businessLogic/eventMapper.php';
?>
<!DOCTYPE html>
<html>
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="Styles/stiliTandE.css" type="text/css" />
</head>
<body>
<div id="main">
			<div id="sliderShow">
				<img src="Images/eventet.jpg" alt ="" />
				<div id="trainingdepartment">
					<h1>UPCOMING EVENTS</h1>
				</div>
			</div>
			<!-- Pjesa e DIV-it se cfare eshte Training Department-->
			<div id="cfareeshte">
				<h1 id="shkrimi">Events</h1>
				<p id="shkrimi2">Events Department is a multimedia space dedicated to hosting different types of events with the purpose of</p>
				<p id="shkrimi2">networking for different types of projects, in an open, casual and friendly way. Braindemy is a hub of entrepreneurial and ICT</p>
				<p id="shkrimi2">events (local and international) in Kosovo, and actively partners with different organizations and stakeholders in</p>
				<p id="shkrimi2">support of its mission.</p>
			</div>

			<div id="upcomingTr">
				<h1>Upcoming Events</h1>
			</div>
			<br>
			<br>
			<!-- Pjesa e trainings-->
			<?php
				$events = new eventMapper;
				$eventsAll = $events->getAllEvents();
                foreach ($eventsAll as $event) {
					$time = strtotime($event['event_date']);
					$myFormatForView = date("m/d/y g:i A", $time);
					$time2 = strtotime($event['event_end_date']);
					$myFormatForView2 = date("m/d/y g:i A", $time2);

                    ?>
			<div id="trainings">
				<div id="fotocyber"><img src="Images\<?php echo $event['event_image'];?>" alt=""/>
				</div>
				<div>
					<h1 id="shkrimi3"><?php echo $event['event_title'];?></h1>
					<p id="shkrimi3"><?php echo $event['event_content'];?></p>
					<br>
					<div><p id="shkrimi3"><strong><?php echo $myFormatForView;?> — <?php echo $myFormatForView2;?></strong></p></div>
                </div>
			</div>
			<?php } ?>
					
			
			<!-- Pjesa e 4 flexboxave orange-->
			<div id="flexboxi12">
				<div class="orangeflexbox"><img id="foto1"
						src="https://ickosovo.com/images/uploads/photos/icon-people.svg" alt="">
					<h2 id="shkrimiflexbox">+60000 </h2>
					<h5 id="shkrimiflexbox3">ATENDEES</h5>
				</div>

				<div class="orangeflexbox"><img id="foto1"
						src="https://ickosovo.com/images/uploads/photos/calendar.svg" alt="">
					<h2 id="shkrimiflexbox">465</h2>
					<h5 id="shkrimiflexbox3">EVENTS</h5>

				</div>

				<div class="orangeflexbox"><img id="foto1"
						src="https://ickosovo.com/images/uploads/photos/icon-code.svg" alt="">
					<h2 id="shkrimiflexbox">+20</h2>
					<h5 id="shkrimiflexbox3">HACKATHONS</h5>
				</div>
				<div class="orangeflexbox"><img id="foto1"
						src="https://ickosovo.com/images/uploads/photos/icon-shake.svg" alt="">
					<h2 id="shkrimiflexbox">+50</h2>
					<h5 id="shkrimiflexbox3">INERNATIONAL PARTNERSHIPS</h5>


				</div>
			</div>

			<?php
        include 'includes/footer.php';
        ?>
</body>

</html>