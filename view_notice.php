<?php 
include 'show_notices.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="css/bootstrap.css" media="screen" >
    <link rel="stylesheet" href="css/font-awsome.css">
    <link rel="stylesheet" href="css/dashboard.css">
    <link rel = "icon" href =  "logos/lcb_college_logo_2.png" type = "image/x-icon"> 
    <script src="js new/modern.min.js"></script>
    <!-- Common JavaScript file -->
    <script src="js/jquery/jquery.min.js"></script>
    <script src="js/jquery/jquery.ui.js"></script>
    <script src="js/bootstrap/bootstrap.min.js"></script>
    <script src="js/pace/pace.min.js"></script>
    <script src="js/lobipanel/lobipanel.min.js"></script>
    <script src="js/iscroll/iscroll.js"></script>

    <!-- page javascript file -->
    <script src="js/prism/prism.js"></script>
    <script src="js/waypoint/waypoints.min.js"></script>
    <script src="js/counterUp/counterup.min.js"></script>
    <script src="js/amcharts/amcharts.js"></script>
    <script src="js/amcharts/serial.js"></script>
    <script src="js/amcharts/plugins/export/export.min.js"></script>
    <script src="js/amcharts/themes/light.js"></script>
    <script src="js/toastr/toastr.min.js"></script>
    <script src="js/icheck/icheck.min.js"></script>

    <!-- ========== THEME JS ========== -->
    <script src="js/main.js"></script>
    <script src="js/production-chart.min.js"></script>
    <script src="js/traffic-chart.js"></script>
    <script src="js/task-list.js"></script>
    <title>Notice</title>
</head>

<style>
    .container {
    background-color: #fff;
    height: 800px;
    width: 800px;
    max-height: 100%;
    padding: 20px;
    margin-top: 5%;
    margin-bottom: 5%;
    border-radius: 5px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    }

    h3{
        text-align: center;
        padding-bottom: 50px;
    }

</style>

<body class="top-navbar-fixed" style="background-color: grey;">
    <div class="container" style="padding-top: 30px; position: relative;">
        <!-- Close button -->
        <a href="home.php"><button type="button" class="close-button" style="position: absolute; top: 30px; right: 5px; background: none; border: none; font-size: 28px; cursor: pointer;">&times;</button></a>

        <div class="notice" >
            <!-- Notice content -->
            <h3><u><b>Important Notice</b></u></h3>
            <?php
                $notice_id = $_GET['nid'];
                while ($row = mysqli_fetch_assoc($result)) {
                    if ($row['id'] == $notice_id) { ?>
                        <p class="notice-title" style="padding-left: 50px; font-size: 15px;"><b>Title: </b><span><?php echo htmlentities($row["title"]); ?></span></p>
                        <p class="notice-date" style="padding-left: 50px; font-size: 15px;"><b>Date: </b><span><?php echo htmlentities(date('d/m/Y', strtotime($row['date']))); ?></span></p>
                        <p style="padding-left: 50px; font-size: 15px; padding-right: 50px; text-align: justify;"><?php echo htmlentities($row["des"]); ?></p>
                        <?php 
                    } 
                }    
            ?>
        </div>
    </div>
</body>


</html>