<?php include('businessLogicAdmin/admCheck.php'); ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../Styles/adminindex.css">
</head>
<body>
        <?php
            include_once 'businessLogicAdmin/userMapper.php';
            $showusers = new UserMapper();
            $userat = $showusers->getAllUsers();

        ?>

    <br><br>  
    <div>
    <table id="tbl" class="table table-border">
        <thead>
            <tr>
                <th> Username </th>
                <th> Email </th>
                <th> RoleID </th>
                <th> Modifiko </th>
                <th> Delete </th>
            </tr>
        </thead>
    <tbody>
            <?php foreach ($userat as $roww){ ?>
            <tr style="border-bottom: 1px black; margin: 20px;">
                <td><?php echo $roww['username'] ?></td>
                <td><?php echo $roww['email'] ?></td>
                <td><?php 
                if($roww['role'] == '1'){
                    echo 'Admin';
                }else{
                    echo 'User';
                } ?></td>
                <td><a href=<?php echo "usersEdit.php?id=" . $roww['userid'];?> style="text-decoration: none; color: green">Modifiko</a></td>
                <td><a href="businessLogicAdmin/deleteUser.php?id=<?php echo $roww['userid'];?>" style="text-decoration: none; color: tomato">Fshij</a></td>
            </tr>
            <?php }?>
        </tbody>
            </table>
            </form>
            
        <div class="AddForm" id="AddForm">
				<form name="signUpForm" action="businessLogicAdmin/insertUser.php" method="POST" class="signUpForm">
			        <h1>ADD A USER OR ADMIN</h1>
					<input type="email" name="Email" id="Email" placeholder="Email" onblur=""/>
					<input type="text" name="Username" id="Username" placeholder="Username" onblur=""/>
					<input type="password" name="Password" id="Password" placeholder="Password" onblur=""/>
                    <select name="RoleID" id="RoleID">
                        <option value="1">Admin</option>
                        <option value="0">User</option>
                    </select>
                    </br>
                    <button name="AddButton" id="SignUpButton" onclick="">Add User</button>
                    <a href="index.php" class="Back" style="text-decoration: none; color: black"> Go Back </a>
		        </form>
        </div>
        <div>
            
        </div>
</body>
</html>