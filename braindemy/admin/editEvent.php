<?php include('businessLogicAdmin/admCheck.php'); ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../Styles/adminindex.css">
</head>
<?php
//include 'components/header.php';
include_once 'businessLogicAdmin/eventMapper.php';
if (isset($_GET['id'])) {
    $eventid = $_GET['id'];
    $mapper = new eventMapper();
    $event = $mapper->getEventByID($eventid);
}
?>
<div class='modContainer'>
    <h1>Modifiko eventin</h1>
    <form class="mainForm" action="businessLogicAdmin/editEvent.php" method="post">
        <div class="login forms form-style">
            <input type="text" style="display:none;" value=<?php echo $eventid; ?> name="eventid" />

            <label for="">Title:</label>
            <input type="text" name="Title" id="Email" class="input" placeholder="Title" value="<?php echo $event['event_title'];?>" onblur=""/> <br> <br>
            <label for="">Content:</label>
            <textarea type="text" name="Content" id="Username" class="input" placeholder="Content" onblur=""><?php echo $event['event_content'];?> </textarea> <br> <br>
            <label for="">Start date:</label>
            <input type="date" required name="start_date" id="Email" class="input" placeholder="Title" value="<?php echo $event['event_date'];?>" onblur=""/> <br> <br>
            <label for="">End date:</label>
            <input type="date" required name="end_date" id="Email" class="input" placeholder="Title" value="<?php echo $event['event_end_date'];?>" onblur=""/> <br> <br>

            </br>

            <button name="AddButton" id="SignUpButton" onclick="">Edit Training</button>
            <a href="index.php" class="Back" style="text-decoration: none; color: black"> Go Back </a>
        </div>
    </form>
</div>