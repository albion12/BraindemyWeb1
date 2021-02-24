<?php include('businessLogicAdmin/admCheck.php'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../Styles/styleAdmin.css">
</head>
<body>
        <?php
            include_once 'businessLogicAdmin/trainingAppMapper.php';

            $showtap = new trainingAppMapper();
            $taps = $showtap->getAllTrainingApplications();

        ?>

    <br><br>  
    <table id="tbl" class="table table-border">
        <thead>
            <tr>
                <th> Trajnimi </th>
                <th> Emri i plote</th>
                <th> Email </th>
                <th> Fshij </th>

            </tr>
        </thead>
    <tbody>
            <?php foreach ($taps as $tap){ ?>
            <tr>
                <td><?php echo $tap['title'] ?></td>
                <td><?php echo $tap['user_name'] ?></td>
                <td><?php echo $tap['user_email'] ?></td>

                    <td><a href="businessLogicAdmin/deleteTrainingApp.php?id=<?php echo $tap['tappid'];?>" style="text-decoration: none; color: tomato">Fshij</a></td>
            </tr>
            <?php }?>
        </tbody>
            </table>
            </form>
            

        <div>
            
        </div>
</body>
</html>