<?php session_start(); ?>
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
					<li><a href="index.php">Home</a></li>
					<li><a href="trainingpage.php">Training</a></li>
					<li><a href="events.php">Events</a></li>
					<li><a href="about.php">About</a></li>
					<li><a href="contact.php">Contact Us</a></li>
		<?php if(isset($_SESSION['role']) && $_SESSION['role']==1){ ?>
        <a href="admin/index.php" style="text-decoration: none; color: black">
          <li>Dashboard</li>
        </a>
		<?php } ?>

				</ul>
			</div>
			<div id="headD">
				<ul>
				<?php if(isset($_SESSION['role'])){ ?>
					<a href="logout.php"><button id="butoniLogin">Log out</button></a>
				<?php }else{?>
				<a href="login.php"><button id="butoniLogin">Log in</button></a>
				<?php } ?>
				</ul>
			</div>
    </div>
    </div>