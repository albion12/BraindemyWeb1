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
            include_once 'businessLogicAdmin/contactMapper.php';

            $showcontacts = new contactMapper();
            $contacts = $showcontacts->getAllContacts();

        ?>

    <br><br>  
    <table id="tbl" class="table table-border">
        <thead>
            <tr>
                <th> Username </th>
                <th> Email </th>
                <th> Message </th>
                <th> Fshij </th>

            </tr>
        </thead>
    <tbody>
            <?php foreach ($contacts as $contact){ ?>
            <tr>
                <td><?php echo $contact['user_name'] ?></td>
                <td><?php echo $contact['user_email'] ?></td>
                <td><?php echo $contact['user_text'] ?></td>

                    <td><a href="businessLogicAdmin/deleteContacts.php?id=<?php echo $contact['contactid'];?>" style="text-decoration: none; color: tomato">Fshij</a></td>
            </tr>
            <?php }?>
        </tbody>
            </table>
            </form>
            

        <div>
            
        </div>
</body>
</html>