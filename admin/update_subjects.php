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
    <title>Update Subjects' Details</title>
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
                                <h2 class="title" style="color: white; font-size: 20px;"><b>Update Subjects</b></h2>
                            </div>
                        </div>
                    </div>
                    <section class="section">
                        <h4 style="padding-top: 30px; padding-bottom: 20px; padding-left: 10%; color: black;"><b>Update
                                Subjects -</b></h4><br>
                        <div class="container-fluid">
                            <div class="row">
                                <div class="col-md-8 col-md-offset-2">
                                    <div class="panel">
                                        <div class="panel-body" style="border-radius: 5px;">
                                            <form method="post" id="myForm">
                                                <label for="course" style="padding-left: 2px;">Course Code:</label>
                                                <select class="form-control" id="mySelect" name="course" required>
                                                    <option value="">Select Course Code</option>
                                                    <option value="1">BCA</option>
                                                    <option value="2">ITB</option>
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
                                                </select>

                                                <div class="col-10">
                                                    <label for="course">Subject Name:</label>
                                                    <input type="text" class="form-control" id="inputName" name="name"
                                                        required>
                                                </div>
                                                <div class="col-10">
                                                    <label for="courseid">Subject Code:</label>
                                                    <input type="text" class="form-control" id="inputName" name="code"
                                                        required>
                                                </div><br>

                                                <div style="text-align: center;">
                                                    <button type="submit" class="btn btn-primary"
                                                        style="width: 400px; border-radius: 5px; border-width: 1px; background-color: green;"
                                                        name="updateSubject">Update Subject</button>
                                                </div><br>

                                            </form>
                                            <?php
                                            if (isset($_POST['updateSubject'])) {
                                                $course = $_POST['course'];
                                                $semester = $_POST['semester'];
                                                $subject = $_POST['name'];
                                                $code = $_POST['code'];
                                                $sid = $_GET['sid'];
                                                $sql = "UPDATE `Subject` SET `subject_name` = ?, `subject_code` = ?, `semester_id` = ?, `course_id` = ? WHERE `id` = ?;";
                                                $stmt = mysqli_prepare($conn, $sql);
                                                mysqli_stmt_bind_param($stmt, "ssiii", $subject, $code, $course, $semester, $sid);
                                                if (!mysqli_stmt_execute($stmt)) { ?>
                                                    <div class="alert alert-danger left-icon-alert" role="alert">
                                                        <strong>Failed! Try Again</strong>
                                                    </div>
                                                    <?php
                                                } else { ?>
                                                    <div class="alert alert-success left-icon-alert" role="alert">
                                                        <strong>Subject Updated Successfully!</strong>
                                                    </div>
                                                    <?php
                                                }
                                                mysqli_stmt_close($stmt);
                                                mysqli_close($conn);
                                                exit();
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
</body>

</html>