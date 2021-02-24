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
            include_once 'businessLogicAdmin/eventMapper.php';
            $showusers = new eventMapper();
            $userat = $showusers->getAllEvents();

        ?>

    <br><br>  
    <div>
    <table id="tbl" class="table table-border">
        <thead>
            <tr>
                <th> Title </th>
                <th> Content </th>
                <th> Start Date </th>
                <th> End Date </th>
                <th> Image </th>
                <th> Modifiko </th>
                <th> Delete </th>
            </tr>
        </thead>
    <tbody>
            <?php foreach ($userat as $roww){ ?>
            <tr>
                <td><?php echo $roww['event_title'] ?></td>
                <td><?php echo $roww['event_content'] ?></td>
                <td><?php echo $roww['event_date'] ?></td>
                <td><?php echo $roww['event_end_date'] ?></td>
                <td><?php echo $roww['event_image'] ?></td>

                <td><a href="editEvent.php?id=<?php echo $roww['eventiid'];?>" style="text-decoration: none; color: green">Modifiko</a></td>
                <td><a href="businessLogicAdmin/deleteEvent.php?id=<?php echo $roww['eventiid'];?>" style="text-decoration: none; color: tomato">Fshij</a></td>
            </tr>
            <?php }?>
        </tbody>
            </table>
            </form>
            
        <div class="AddForm" id="AddForm">
				<form name="signUpForm" action="businessLogicAdmin/insertEvent.php" method="POST" class="signUpForm" enctype="multipart/form-data">
			        <h1>ADD AN EVENT</h1>
					<input type="text" name="Title" id="Email" placeholder="Title" onblur=""/>
					<textarea type="text" name="Content" id="content" placeholder="Content" onblur=""> </textarea>
                    <input type="file" name="uploadfile" class="form-control"><br> <br>
                    <label> Start Date </label>
                    <input type="date" name="start_date" id="Email" placeholder="Title" onblur=""/>
                    <label> End Date </label>
					<input type="date" name="end_date" id="Email" placeholder="Title" onblur=""/>

                    </br>

                    <button name="AddButton" id="SignUpButton" onclick="">Add Event</button>
                    <a href="index.php" class="Back" style="text-decoration: none; color: black"> Go Back </a>
		        </form>
        </div>
        <div>
            
        </div>
</body>
</html>