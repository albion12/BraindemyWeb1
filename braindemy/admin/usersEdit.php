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
include_once 'businessLogicAdmin/userMapper.php';
if (isset($_GET['id'])) {
    $userId = $_GET['id'];
    $mapper = new UserMapper();
    $user = $mapper->getUserByID($userId);
}
?>


<div class='modContainer'>
    <h1>Modifiko perdoruesin</h1>
				<form name="signUpForm" action="businessLogicAdmin/editUser.php" method="POST" class="signUpForm">
                    <input hidden name="userid" value = "<?php echo $user['userid']; ?>";>
					<input type="email" name="Email" id="Email" placeholder="Email" value="<?php echo $user['email']; ?>" onblur=""/> <br> <br>
					<input type="text" name="Username" id="Username" placeholder="Username" value="<?php echo $user['username']; ?>" onblur=""/> <br> <br>
					<input type="password" name="Password" id="Password" placeholder="Password" value="<?php echo $user['password']; ?>" onblur=""/> <br> <br>
                    <select name="RoleID" id="RoleID">
                        <option <?php if($user['role']==1) echo "selected"; ?> value="1">Admin</option>
                        <option <?php if($user['role']==0) echo "selected"; ?> value="0">User</option>
                    </select>
                    </br>
                    <button name="AddButton" id="button" onclick="">Edit   User</button>
                    <a href="index.php" class="Back" style="text-decoration: none; color: black"> Go Back </a>
		        </form>
</div>
