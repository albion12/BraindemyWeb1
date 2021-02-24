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
include_once 'businessLogicAdmin/trainingMapper.php';
if (isset($_GET['id'])) {
    $trainingid = $_GET['id'];
    $mapper = new trainingMapper();
    $user = $mapper->getTrainingByID($trainingid);
}
?>
<div class='modContainer'>
    <h1>Modifiko trajnimin</h1>
    <form class="mainForm" action="businessLogicAdmin/editTraining.php" method="post">
        <div class="login forms form-style">
            <input type="text" style="display:none;" value=<?php echo $trainingid; ?> name="trainingid" />

            <label for="">Title:</label>
            <input type="text" name="Title" id="Email" class="input" placeholder="Title" value="<?php echo $user['title'];?>" onblur=""/> <br> <br>
            <label for="">Content:</label>
            <textarea type="text" name="Content" id="Username" class="input" placeholder="Content" onblur=""><?php echo $user['content'];?> </textarea> <br> <br>

            </br>

            <button name="AddButton" id="SignUpButton" onclick="">Edit Training</button>
            <a href="index.php" class="Back" style="text-decoration: none; color: black"> Go Back </a>
        </div>
    </form>
</div>