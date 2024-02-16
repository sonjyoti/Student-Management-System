<?php 
    include 'includes/auth.php';
    include 'add_result_functions.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <?php
    include 'includes/head.php';
    ?>
    <title>Add Result</title>
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
                                <h2 class="title" style="color: white; font-size: 20px;"><b>Add Results</b></h2>
                            </div>
                        </div>
                    </div>
                    <section class="section">
                        <h4 style="padding-top: 30px; padding-bottom: 20px; padding-left: 10%; color: black;"><b>Add
                                Results -</b></h4><br>
                        <div class="container-fluid">
                            <div class="row">
                                <div class="col-md-8 col-md-offset-2">
                                    <div class="panel">
                                        <div class="panel-body" style="border-radius: 5px;">
                                            <form method="post">
                                                <label for="course" style="padding-left: 2px;">Course Code:</label>
                                                <select class="form-control" id="selectCourse" name="course" required>
                                                    <option value="default">Select Course Code</option>
                                                    <option value="1">BCA</option>
                                                    <option value="2">ITB</option>
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
                                                    <button type="submit" class="btn btn-primary" style="width: 400px; border-radius: 5px; border-width: 1px; background-color: green;" name="submit">Submit</button>
                                                </div><br>
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