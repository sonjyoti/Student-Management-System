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
    <title>Add Subject</title>
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
                                <h2 class="title" style="color: white; font-size: 20px;"><b>Create Subjects</b></h2>
                            </div>
                        </div>
                    </div>
                    <section class="section">
                        <h4 style="padding-top: 30px; padding-bottom: 20px; padding-left: 10%; color: black;"><b>Create
                                Subjects -</b></h4><br>
                        <div class="container-fluid">
                            <div class="row">
                                <div class="col-md-8 col-md-offset-2">
                                    <div class="panel">
                                        <div class="panel-body" style="border-radius: 5px;">
                                            <form method="post" id="selectForm">

                                                <div class="col-10">
                                                    <label for="course">Subject Name:</label>
                                                    <input type="text" class="form-control" id="inputName" name="name"
                                                        required>
                                                </div>
                                                <div class="col-10">
                                                    <label for="courseid">Subject Code:</label>
                                                    <input type="text" class="form-control" id="inputName" name="code"
                                                        required>
                                                </div>

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
                                                </select><br>

                                                <div style="text-align: center;">
                                                    <button type="submit" class="btn btn-primary"
                                                        style="width: 400px; border-radius: 5px; border-width: 1px; background-color: green;"
                                                        name="addSubject">Add Subject</button>
                                                </div><br>

                                            </form>
                                            <?php
                                            if (isset($_POST['addSubject'])) {
                                                $subject = $_POST['name'];
                                                $code = $_POST['code'];
                                                $course = $_POST['course'];
                                                $semester = $_POST['semester'];
                                                $sql = "INSERT INTO `Subject` (`subject_name`, `subject_code`, `course_id`, `semester_id`) VALUES (?, ?, ?, ?);";
                                                $stmt = mysqli_prepare($conn, $sql);
                                                mysqli_stmt_bind_param($stmt, "ssii", $subject, $code, $course, $semester);
                                                if (!mysqli_stmt_execute($stmt)) { ?>
                                                    <div class="alert alert-danger left-icon-alert" role="alert">
                                                        <strong>Failed! Try Again</strong>
                                                    </div>
                                                    <?php
                                                } else { ?>
                                                    <div class="alert alert-success left-icon-alert" role="alert">
                                                        <strong>Subject Added Successfully!</strong>
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
    <script>
        $(function () {

            // Counter for dashboard stats
            $('.counter').counterUp({
                delay: 10,
                time: 1000
            });

            // Welcome notification
            toastr.options = {
                "closeButton": true,
                "debug": false,
                "newestOnTop": false,
                "progressBar": false,
                "positionClass": "toast-top-right",
                "preventDuplicates": false,
                "onclick": null,
                "showDuration": "300",
                "hideDuration": "1000",
                "timeOut": "5000",
                "extendedTimeOut": "1000",
                "showEasing": "swing",
                "hideEasing": "linear",
                "showMethod": "fadeIn",
                "hideMethod": "fadeOut"
            }
        });
    </script>
    <div class="foot">
        <footer></footer>
        <style>
            .foot {
                text-align: center;
            }
        </style>
</body>

</html>