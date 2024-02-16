<?php 
include 'includes/auth.php';
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
    	<meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Student Dashboard</title>
        <link rel="stylesheet" href="../css/bootstrap.css" media="screen" >
        <link rel="stylesheet" href="../css/font-awsome.css">
        <link rel="stylesheet" href="../css/dashboard.css">
        <link rel = "icon" href =  "../logos/lcb_college_logo_2.png" type = "image/x-icon"> 
        <script src="../js new/modern.min.js"></script>
    </head>
    <body class="top-navbar-fixed">
        <div class="main-wrapper">
            <nav class="navbar top-navbar bg-black">
            	<div class="container-fluid">
                    <div class="row">
                        <div class="navbar-header no-padding">
                			<a class="navbar-brand" href="#" style="color: white; padding-top: 15px; pointer-events: none;"> SRM | Student</a>
                            <button type="button" class="navbar-toggle mobile-nav-toggle" >
                				<i class="fa fa-bars"></i>
                			</button>
                		</div>
                		<div class="collapse navbar-collapse" id="navbar-collapse-1">
                			<ul class="nav navbar-nav navbar-right" data-dropdown-in="fadeIn" data-dropdown-out="fadeOut">
                				<li><a href="logout_functions.php" class="text-center" style="color: white;"><i class="fa fa-sign-out"></i> Logout</a></li>
                			</ul>
                		</div>
                    </div>
            	</div>
            </nav>

            <div class="content-wrapper">
                <div class="content-container" style="background-color: grey;">
                    <!-- ----Side Bar---- -->
                    <div class="left-sidebar bg-black-300 box-shadow" style="background-color: black;">
                        <div class="sidebar-content">              
                            <div class="sidebar-nav">
                                <ul class="side-nav color-white">
                                    <li class="nav-header" style="padding-top: 20px;"><span class="">Main Category</span></li>
                                    <li><a href="student_dashboard.php"><i class="fa fa-dashboard"></i><span>Dashboard</span></a></li>
                                    <li class="nav-header"><span class="">Appearance</span></li>
                                    <li><a href="manage_profile.php"><i class="fa fa-user"></i> <span>Manage Profile</span></a></li>
                                    <li><a href="view_results.php"><i class="fa fa-file-text"></i> <span>View Results</span></a></li>
                                    <li><a href="view_notice.php"><i class="fa fa-bars"></i> <span>View Updates</span></a></li>
                                    <li><a href="change_password.php"><i class="fa fa-info-circle"></i> <span>Change Password</span></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <!-- ----Side Bar Ends Here---- -->

                    <div class="main-page" >
                        <div class="container-fluid">
                            <div class="row page-title-div" style="background-color: green; padding-top: 10px; padding-bottom: 10px;">
                                <div>
                                    <h2 class="title" style="color: white; font-size: 20px;"><b>Dashboard</b></h2>
                                </div>
                            </div>
                        </div>

                        <section class="section">
                            <div class="container-fluid">
                                <div class="row">
                                    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12" style="padding-left: 50px;">
                                        <div class="card-body" style="font-size: 15px;">
                                            <div class="mb-4" style="font-size: 15px;">
                                                <div style="background-color: white; height: 130px; width: 250px; border-top-right-radius: 12px; border-top-left-radius: 12px; padding-top: 20px; padding-left: 75px;">
                                                    <img src="../logos/edit.gif" class="img-fluid h-20" alt="Uni Logo" style="height: 100px; width: 100px;">
                                                </div>
                                                <div class="pt-2 btn" style="font-size: 15px; color: white;border-radius: 0%; width: 250px; background-color: green; border-bottom-right-radius: 12px; border-bottom-left-radius: 12px;">
                                                    <a class="cool-link" href="manage_profile.php" style="color: #fff; text-decoration: dotted;"><b>Edit Profile</b></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                   
                                    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12" style="padding-left: 40px;">
                                        <div class="card-body" style="font-size: 15px;">
                                            <div class="mb-4" style="font-size: 15px;">
                                                <div style="background-color: white; height: 130px; width: 250px; border-top-right-radius: 12px; border-top-left-radius: 12px; padding-top: 20px; padding-left: 75px;">
                                                    <img src="../logos/homework.gif" class="img-fluid h-20" alt="Uni Logo" style="height: 100px; width: 100px;">
                                                </div>
                                                <div class="pt-2 btn" style="font-size: 15px; color: white;border-radius: 0%; width: 250px; background-color: green; border-bottom-right-radius: 12px; border-bottom-left-radius: 12px;">
                                                    <a class="cool-link" href="view_results.php" style="color: #fff; text-decoration: dotted;"><b>View Results</b></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12" style="padding-left: 30px;">
                                        <div class="card-body" style="font-size: 15px;">
                                            <div class="mb-4" style="font-size: 15px;">
                                                <div style="background-color: white; height: 130px; width: 250px; border-top-right-radius: 12px; border-top-left-radius: 12px; padding-top: 20px; padding-left: 75px;">
                                                    <img src="../logos/notification.gif" class="img-fluid h-20" alt="Uni Logo" style="height: 100px; width: 100px;">
                                                </div>
                                                <div class="pt-2 btn" style="font-size: 15px; color: white;border-radius: 0%; width: 250px; background-color: green; border-bottom-right-radius: 12px; border-bottom-left-radius: 12px;">
                                                    <a class="cool-link" href="view_notice.php" style="color: #fff; text-decoration: dotted;"><b>View Updates</b></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                
                                    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12" style="padding-left: 20px;">
                                        <div class="card-body" style="font-size: 15px;">
                                            <div class="mb-4" style="font-size: 15px;">
                                                <div style="background-color: white; height: 130px; width: 250px; border-top-right-radius: 12px; border-top-left-radius: 12px; padding-top: 20px; padding-left: 75px;">
                                                    <img src="../logos/pattern-lock.gif" class="img-fluid h-20" alt="Uni Logo" style="height: 100px; width: 100px;">
                                                </div>
                                                <div class="pt-2 btn" style="font-size: 15px; color: white;border-radius: 0%; width: 250px; background-color: green; border-bottom-right-radius: 12px; border-bottom-left-radius: 12px;">
                                                    <a class="cool-link" href="change_password.php" style="color: #fff; text-decoration: dotted;"><b>Change Password</b></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </section>
                    </div>
                </div>
            </div>
        </div>

        <!-- Common JavaScript file -->
        <script src="../js/jquery/jquery.min.js"></script>
        <script src="../js/jquery/jquery.ui.js"></script>
        <script src="../js/bootstrap/bootstrap.min.js"></script>
        <script src="../js/pace/pace.min.js"></script>
        <script src="../js/lobipanel/lobipanel.min.js"></script>
        <script src="../js/iscroll/iscroll.js"></script>

        <!-- page javascript file -->
        <script src="../js/prism/prism.js"></script>
        <script src="../js/waypoint/waypoints.min.js"></script>
        <script src="../js/counterUp/counterup.min.js"></script>
        <script src="../js/amcharts/amcharts.js"></script>
        <script src="../js/amcharts/serial.js"></script>
        <script src="../js/amcharts/plugins/export/export.min.js"></script>
        <script src="../js/amcharts/themes/light.js"></script>
        <script src="../js/toastr/toastr.min.js"></script>
        <script src="../js/icheck/icheck.min.js"></script>

        <!-- ========== THEME JS ========== -->
        <script src="../js/main.js"></script>
        <script src="../js/production-chart.min.js"></script>
        <script src="../js/traffic-chart.js"></script>
        <script src="../js/task-list.js"></script>
    </body>
</html>

