<?php 
    include 'includes/auth.php';
    include 'results_functions.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <?php
    include 'includes/head.php';
    ?>
    <title>Manage Results</title>
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
                                <h2 class="title" style="color: white; font-size: 20px;"><b>Manage Results</b>
                                </h2>
                            </div>
                        </div>
                    </div>
                    <section class="section">
                        <h4 style="padding-top: 30px; padding-bottom: 20px; padding-left: 10%; color: black;">Manage
                            Students' Results -</h4><br>
                        <div class="container-fluid">
                            <div class="row">
                                <div class="col-md-8 col-md-offset-2">
                                    <div class="panel">
                                        <div class="panel-title">
                                            <h5 style="padding-left: 15px; padding-top: 10px;">View Results
                                                -</h5>
                                        </div>

                                        <div class="panel-body p-20">
                                            <table id="example" class="display table table-striped table-bordered"
                                                cellspacing="0" width="100%">
                                                <thead>
                                                    <tr>
                                                        <th>Serial No.</th>
                                                        <th>Roll No.</th>
                                                        <th>Course</th>
                                                        <th>Semester</th>
                                                        <th>Total</th>
                                                        <th>SGPA</th>
                                                        <th>Result</th>
                                                    </tr>
                                                    <?php
                                                    if (mysqli_num_rows($result) == 0) {
                                                        ?><strong>
                                                            <?php echo htmlentities("No Results to show!"); ?>
                                                        </strong>
                                                        <?php
                                                    } else {
                                                        foreach ($totalMarksByStudent as $key => $obtainedMarks) {
                                                            $count++;
                                                            list($studentId, $semester, $stdResult) = explode(',', $key);
                                                            ?>
                                                        <tr>
                                                            <th>
                                                                <?php echo htmlentities($count); ?>
                                                            </th>
                                                            <th>
                                                                <?php echo htmlentities($studentId); ?>
                                                            </th>
                                                            <th>
                                                                <?php echo htmlentities($course); ?>
                                                            </th>
                                                            <th>
                                                                <?php echo htmlentities($semester); ?>
                                                            </th>
                                                            <th>
                                                                <?php echo htmlentities($obtainedMarks); ?>
                                                            </th>
                                                            <th>
                                                                <?php echo htmlentities(sprintf("%.2f",(($obtainedMarks/$totalMarks)*100)/10)); ?>
                                                            </th>
                                                            <th>
                                                                <?php echo htmlentities($stdResult); ?>
                                                            </th>
                                                        </tr>
                                                        <?php
                                                        }
                                                    }
                                                    ?>
                                                </thead>
                                            </table>
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