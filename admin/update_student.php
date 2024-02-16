<?php
include 'includes/auth.php';
include '../db/db_connect.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <?php
    include 'includes/head.php';
    ?>
    <title>Update Students' Details</title>
</head>

<body class="top-navbar-fixed">
    <div class="main-wrapper">
        <?php
        include 'includes/navbar.php';
        ?>
        <div class="content-wrapper">
            <div class="content-container" style="background-color: grey;">
                <!-- sidebar starts -->
                <?php
                include 'includes/sidebar.php';
                ?>
                <!-- sidebar ends -->
                <div class="main-page" style="background-color: white;">
                    <div class="container-fluid">
                        <div class="row page-title-div"
                            style="background-color: green; padding-top: 10px; padding-bottom: 10px;">
                            <div>
                                <h2 class="title" style="color: white; font-size: 20px;"><b>Update Student Information
                                    </b></h2>
                            </div>
                        </div>
                    </div>
                    <section class="section">
                        <h4 style="padding-top: 30px; padding-bottom: 20px; padding-left: 10%; color: black;"><b>Update
                                Student's Details -</b></h4><br>
                        <div class="container-fluid">
                            <div class="row">
                                <div class="col-md-8 col-md-offset-2">
                                    <div class="panel">
                                        <div class="panel-body">
                                            <form method="post" id="selectForm">
                                                <label for="course" style="padding-left: 2px;">Course:</label>
                                                <select class="form-control" id="mySelect" name="course" required>
                                                    <option value="">Select Course</option>
                                                    <option value="1">BCA</option>
                                                    <option value="2">ITB</option>
                                                    <option value="4">All</option>
                                                </select>

                                                <label for="semester" style="padding-left: 2px;">Semester:</label>
                                                <select class="form-control" id="mySelect" name="semester" required>
                                                    <option value="">Select Semester</option>
                                                    <option value="1">Semester I</option>
                                                    <option value="2">Semester II</option>
                                                    <option value="3">Semester III</option>
                                                    <option value="4">Semester IV</option>
                                                    <option value="5">Semester V</option>
                                                    <option value="6">Semester VI</option>
                                                </select><br>

                                                <div style="text-align: center;">
                                                    <button name="submit" class="btn btn-primary"
                                                        style="width: 400px; border-radius: 5px; border-width: 1px; background-color: green;">Update</a>
                                                </div><br>
                                            </form>
                                            <?php
                                            if (isset($_POST['submit'])) {
                                                $course = $_POST['course'];
                                                $semester = $_POST['semester'];
                                                $studentid = $_GET['std'];
                                                $sql = "UPDATE `Student` SET `course_id` = ?, `semester_id` = ? WHERE `id` = ?;";
                                                $stmt = mysqli_prepare($conn, $sql);
                                                mysqli_stmt_bind_param($stmt, "iii", $course, $semester, $studentid);
                                                if (!mysqli_stmt_execute($stmt)) { ?>
                                                    <div class="alert alert-danger left-icon-alert" role="alert">
                                                        <strong>Failed! Try Again</strong>
                                                        <?php
                                                } else { ?>
                                                        <div class="alert alert-success left-icon-alert" role="alert">
                                                            <strong>Student Details Updated Successfully!</strong>
                                                        </div>
                                                        <?php
                                                }
                                            }
                                            ?>
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
</body>

</html>
<?php
mysqli_stmt_close($stmt);
mysqli_close($conn);
exit();
?>