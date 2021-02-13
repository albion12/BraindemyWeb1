<!DOCTYPE html>
<html>

<head>
  <link rel="stylesheet" href="Styles/stili.css" type="text/css" />

</head>
<div id="mbajtesiW">
		<div id="header">
			<div id="headM">
				<ul>
					<li>
						<href="#"><img src="https://i.imgur.com/KkWdAKN.png" title="source: imgur.com" alt="" /></a>
					</li>
					<li><a href="project.php">Home</a></li>
					<li><a href="trainingpage.php">Training</a></li>
					<li><a href="events.php">Events</a></li>
					<li><a href="about.php">About</a></li>
					<li><a href="contact.php">Contact Us</a></li>
                    <?php
      if (isset($_SESSION["role"]) && $_SESSION['role'] == '1') {
        echo 'test';
      ?>

        <a href="dashboard.php">
          <li>Dashboard</li>
        </a>
      <?php
      }
      ?>
				</ul>
			</div>
			<div id="headD">
				<ul>
					<a href="login.html"><button id="butoniLogin">Log out</button></a>
				</ul>
			</div>
    </div>
    </div>
	
	