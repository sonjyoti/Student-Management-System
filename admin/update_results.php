<?php 
    include 'includes/auth.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <?php
    include 'includes/head.php';
    ?>
    <title>Update Results</title>
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
                                <h2 class="title" style="color: white; font-size: 20px;"><b>Update Students' Results
                                    </b></h2>
                            </div>
                        </div>
                    </div>
                    <section class="section">
                        <h4 style="padding-top: 30px; padding-bottom: 20px; padding-left: 10%; color: black;"><b>Update
                                 Result -</b></h4><br>
                        <div class="container-fluid">
                            <div class="row">
                                <div class="col-md-8 col-md-offset-2">
                                    <div class="panel">
                                        <div class="panel-body">
                                            <form>
                                                <label for="course" style="padding-left: 2px;">Course:</label>
                                                <input type="text" placeholder="BCA">

                                                <label for="semester" style="padding-left: 2px;">Semester:</label>
                                                <input type="text" placeholder="SEMESTER I">

                                                <label for="semester" style="padding-left: 2px;">Roll Id:</label>
                                                <input type="text" placeholder="UT-211-023-0031">

                                                <div div="subjectField">
                                                    <?php foreach($sbj_options as $sbj): ?>
                                                    <div class="col-10" id="subjectField_<?php echo htmlentities($sbj['sbj_id']); ?>">
                                                        <div class="row">
                                                            <div class="col-md-6">
                                                                <label for="gradePoint_<?php echo htmlentities($sbj['sbj_id']); ?>" class="form-label"><?php echo htmlentities($sbj['sbj_code']); ?>:</label>
                                                                <select class="form-control" style="width: 770px;" id="gradePoint_<?php echo htmlentities($sbj['sbj_id']); ?>" name="gradePoint[<?php echo htmlentities($sbj['sbj_id']); ?>]" required>
                                                                    <option disabled selected>Select Grade Point</option>
                                                                    <option value="1">1</option>
                                                                    <option value="2">2</option>
                                                                    <option value="3">3</option>
                                                                    <option value="4">4</option>
                                                                    <option value="5">5</option>
                                                                    <option value="6">6</option>
                                                                    <option value="7">7</option>
                                                                    <option value="8">8</option>
                                                                    <option value="9">9</option>
                                                                    <option value="10">10</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <?php endforeach; ?>
                                                </div><br>

                                                <div style="text-align: center;">
                                                    <a href="#" class="btn btn-primary"
                                                        style="width: 400px; border-radius: 5px; border-width: 1px; background-color: green;">Update</a>
                                                </div><br>

                                                <div class="alert alert-success left-icon-alert" role="alert">
                                                    <strong>Student Details Updated Successfully!</strong>
                                                </div>

                                                <div class="alert alert-danger left-icon-alert" role="alert">
                                                    <strong>Failed! Try Again</strong>
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