<?php 
include 'includes/auth.php';
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <?php 
            include 'includes/head.php';
        ?>
        <title>Reset Password</title>
    </head>
    <body class="top-navbar-fixed">
        <div class="main-wrapper">
            <!-- nanvbar starts -->
            <?php 
                include 'includes/navbar.php';
            ?>
            <!-- nanvbar starts -->

            <div class="content-wrapper">
                <div class="content-container" style="background-color: grey;">
                    <!-- ----Side Bar---- -->
                    <?php 
                    include 'includes/sidebar.php';
                    ?>
                    <!-- ----Side Bar Ends Here---- -->

                    <div class="main-page" style="background-color: white;">
                        <div class="container-fluid">
                            <div class="row page-title-div" style="background-color: green; padding-top: 10px; padding-bottom: 10px;">
                                <div>
                                    <h2 class="title" style="color: white; font-size: 20px;"><b>Student Password Reset</b></h2>
                                </div>
                            </div>
                        </div>
                        <section class="section">
                            <h4 style="padding-top: 30px; padding-bottom: 20px; padding-left: 10%; color: black;"><b>Reset Your Password -</b></h4><br>
                            <div class="container-fluid">
                                <div class="row">
                                    <div class="col-md-8 col-md-offset-2">
                                        <div class="panel">
                                            <div class="panel-body"  style="border-radius: 5px;">
                                                <form>
                                                    <div class="mb-6">
                                                        <label for="text" class="form-label">Current Password *</label>
                                                        <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Enter your current password" required>
                                                    </div>
                                                    <div class="mb-6">
                                                        <label for="text" class="form-label">New Password *</label>
                                                        <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Enter your new password" required>
                                                    </div>
                                                    <div class="mb-3">
                                                        <label for="text" class="form-label">Confirm Password *</label>
                                                        <input type="text" class="form-control" id="exampleInputRollNo" placeholder="Confirm your new password" required><br>
                                                        <div id="passwordsethelp" class="form-text text-center" style="font-size: 12px;">
                                                            <b>Please create a password that you haven't use before.</b>
                                                        </div>
                                                    </div>

                                                    <div style="text-align: center;">
                                                        <button type="submit" class="btn btn-primary" style="width: 400px; border-radius: 5px; border-width: 1px; background-color: green; border-color: black;" name="submit">Reset Password</button>
                                                    </div>
                                                </form>
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
    </body>
</html>

