<?php 
    include 'includes/auth.php';
    include 'view_result_functions.php';
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <?php 
            include 'includes/head.php';
        ?>
        <title> View Results</title>
    </head>
    <body class="top-navbar-fixed">
        <div class="main-wrapper">
            <!-- navbar starts -->
            <?php 
                include 'includes/navbar.php';
            ?>
            <!-- navbar starts -->

            <div class="content-wrapper">
                <div class="content-container" style="background-color: grey;">
                    <!-- Side Bar -->
                    <?php 
                    include 'includes/sidebar.php';
                    ?>
                    <!-- Side Bar Ends Here -->

                    <div class="main-page" style="background-color: white;">
                        <div class="container-fluid">
                            <div class="row page-title-div" style="background-color: green; padding-top: 10px; padding-bottom: 10px;">
                                <div>
                                    <h2 class="title" style="color: white; font-size: 20px;"><b>View Results </b></h2>
                                </div>
                            </div>
                            
                            <section class="section">
                                <h4 style="padding-top: 30px; padding-bottom: 20px; padding-left: 10%; color: black;"><b>View
                                        Results -</b></h4><br>
                                <div class="container-fluid">
                                    <div class="row">
                                        <div class="col-md-8 col-md-offset-2">
                                            <div class="panel">
                                                <div class="panel-body" style="border-radius: 5px;">
                                                    <form method="post">
                                                        <label for="course" style="padding-left: 2px;">Course Code:</label>
                                                        <select class="form-control" id="selectCourse" name="course" required>
                                                            <option selected><?php echo htmlentities($course); ?></option>
                                                        </select>

                                                        <label for="semester" style="padding-left: 2px;">Semester:</label>
                                                        <select class="form-control" id="selectCourse" name="semester" required>
                                                            <option value="default">Select Semester</option>
                                                            <option value="1">Semester I</option>
                                                            <option value="2">Semester II</option>
                                                            <option value="3">Semester III</option>
                                                            <option value="4">Semester IV</option>
                                                            <option value="5">Semester V</option>
                                                            <option value="6">Semester VI</option>
                                                        </select> <br>
                                                        <div style="text-align: center;">
                                                            <button type="submit" name="submit" class="btn btn-primary" style="width: 750px; border-radius: 3px; border-width: 1px; background-color: green;"><b>Get Result</b></button>
                                                        </div><br>
                                                    </form>
                                                    <?php
                                                        if (isset($_POST['submit'])) {
                                                            $semester = $_POST['semester'];
                                                            $sql = "SELECT COUNT(`student_id`) FROM `Result` WHERE `Result`.`student_id` = ? AND `Result`.`semester` = ?;";
                                                            $stmt = mysqli_prepare($conn, $sql);
                                                            mysqli_stmt_bind_param($stmt, "ii", $st_id, $semester);
                                                            if (!mysqli_stmt_execute($stmt)) {
                                                                mysqli_stmt_error($stmt);
                                                            } else {
                                                                $_SESSION['semester'] = $semester;
                                                                $_SESSION['course'] = $course;
                                                                $result = mysqli_stmt_get_result($stmt);
                                                                if (mysqli_num_rows($result) == 0) {
                                                                    ?>
                                                                    <div class="alert alert-danger left-icon-alert" role="alert">
                                                                        <strong>Result not Declared!</strong>
                                                                    </div>
                                                                    <?php
                                                                } else {
                                                                    echo '<script type="text/javascript"> window.location.href = "result.php"; </script>';
                                                                }
                                                            }
                                                        }
                                                    ?>
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
        </div>
    </body>
</html>
