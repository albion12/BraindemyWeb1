<?php
include 'includes/header.php';
?>
<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="Styles/styleAC.css">
</head>
<body>
    <div id="main">
        <div id="mainPh">
        <a href=""><img src="./Images/aboutus.jpg" alt = "" ></a>
            <div id="aboutus1">
                <h1>ABOUT US</h1>
            </div>
        </div>
    </div>
    <div class="contact">
        <div class="left-side">
            <h2>ABOUT</h2>
            <br>
            <h3>Founded in 2020</h3>
            <br>
            <p>Braindemy is a training center whose aim is to connect research and development component of
                scientific field with the business sector, focusing on creating trainings and new job opportunities
                oriented towards the future, based on knowledge and new technology. </p> <br>
            <p>If you require any further information, feel free to contact us: <br><br>
                <a href="contact.html" style="text-decoration: none; color: blue;"> CONTACT US</a>
            </p>
        </div>
        <div class="right-side">
            <br>
            <h3 style="color:black; padding-left:35%">LOKACIONI</h3>
            <br>
            <div class="mapouter">
                <div class="gmap_canvas"><iframe width="480" height="400" id="gmap_canvas"
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2923.40439919913!2d20.864362414926685!3d42.88541387915515!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x1353450e19b1ab3b%3A0xadf0d4d7ba780fd7!2sMbretresha%20Teut%C3%AB%2C%20Mitrovic%C3%AB!5e0!3m2!1sen!2s!4v1608168099386!5m2!1sen!2s"
                        width="600" height="450" frameborder="0" style="border:0;" allowfullscreen=""
                        aria-hidden="false" tabindex="0" frameborder="0" scrolling="no" marginheight="0"
                        marginwidth="0"></iframe><a href=""></a></div>
                <style>
                    .mapouter {
                        position: absolute;
                        text-align: right;
                        height: 400px;
                        width: 480px;
                    }

                    .gmap_canvas {
                        overflow: hidden;
                        background: none !important;
                        height: 400px;
                        width: 480px;
                    }
                </style>
            </div>
        </div>
    </div>

    </div>
    </div>
    <!-- Pjesa e footer-it-->
    <?php
        include 'includes/footer.php';
        ?>
</body>
</html>