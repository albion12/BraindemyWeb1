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
            include_once 'businessLogicAdmin/trainingMapper.php';
            $showusers = new trainingMapper();
            $userat = $showusers->getAllTrainings();

        ?>

    <br><br>  
    <div>
    <table id="tbl" class="table table-border">
        <thead>
            <tr>
                <th> Title </th>
                <th> Content </th>
                <th> Image </th>
                <th> Modifiko </th>
                <th> Delete </th>
            </tr>
        </thead>
    <tbody>
            <?php foreach ($userat as $roww){ ?>
            <tr>
                <td><?php echo $roww['title'] ?></td>
                <td><?php echo $roww['content'] ?></td>
                <td><?php echo $roww['image'] ?></td>

                <td><a href="editTraining.php?id=<?php echo $roww['trainingid'];?>" style="text-decoration: none; color: green">Modifiko</a></td>
                <td><a href="businessLogicAdmin/deleteTraining.php?id=<?php echo $roww['trainingid'];?>" style="text-decoration: none; color: tomato">Fshij</a></td>
            </tr>
            <?php }?>
        </tbody>
            </table>
            </form>
            
        <div class="AddForm" id="AddForm">
				<form name="signUpForm" action="businessLogicAdmin/insertTraining.php" method="POST" class="signUpForm" enctype="multipart/form-data">
			        <h1>ADD A TRAINING</h1>
					<input type="text" name="Title" id="Email" placeholder="Title" onblur=""/>
					<textarea type="text" name="Content" id="content" placeholder="Content" onblur=""> </textarea>
                    <input type="file" name="uploadfile" class="form-control">
                    </br>

                    <button name="AddButton" id="SignUpButton" onclick="">Add Training</button>
                    <a href="index.php" class="Back" style="text-decoration: none; color: black"> Go Back </a>
		        </form>
        </div>
        <div>
            
        </div>
</body>
</html>