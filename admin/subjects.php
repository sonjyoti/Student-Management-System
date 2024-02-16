<?php
include 'includes/auth.php';
include 'subjects_functions.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <?php
    include 'includes/head.php';
    ?>
    <title>Subjects</title>
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
                                <h2 class="title" style="color: white; font-size: 20px;"><b>Manage Subjects</b></h2>
                            </div>
                        </div>
                    </div>
                    <section class="section">
                        <h4 style="padding-top: 30px; padding-bottom: 20px; padding-left: 10%; color: black;"><b>Manage
                                Subjects -</b></h4><br>
                        <div class="container-fluid">
                            <div class="row">
                                <div class="col-md-8 col-md-offset-2">
                                    <div class="panel">
                                        <div class="panel-title">
                                            <h5 style="padding-left: 15px; padding-top: 10px; font-color: black;">
                                                <b>Manage Subjects -</b>
                                            </h5>
                                        </div>

                                        <div class="panel-body p-20">
                                            <table id="example" class="display table table-striped table-bordered"
                                                cellspacing="0" width="100%">
                                                <tbody>
                                                    <thead>
                                                        <tr>
                                                            <th>Sl No.</th>
                                                            <th>Course Code</th>
                                                            <th>Semester</th>
                                                            <th>Subject Code</th>
                                                            <th>Subject Name</th>
                                                            <th>Action</th>
                                                        </tr>

                                                        <tr>
                                                            <?php
                                                            if (mysqli_num_rows($result) == 0) {
                                                                ?><strong>
                                                                    <?php echo htmlentities("No Subjects to show!"); ?>
                                                                </strong>
                                                                <?php
                                                            } else {
                                                                while ($book_row = mysqli_fetch_assoc($result)) {
                                                                    $count++;
                                                                    ?>
                                                                <tr>
                                                                    <th>
                                                                        <?php echo htmlentities($count); ?>
                                                                    </th>
                                                                    <th>
                                                                        <?php echo htmlentities($book_row["course_code"]); ?>
                                                                    </th>
                                                                    <th>
                                                                        <?php echo htmlentities($book_row["semester"]); ?>
                                                                    </th>
                                                                    <th>
                                                                        <?php echo htmlentities($book_row["subject_code"]); ?>
                                                                    </th>
                                                                    <th>
                                                                        <?php echo htmlentities($book_row["subject_name"]); ?>
                                                                    </th>
                                                                    <th><a
                                                                            href="update_subjects.php?sid=<?php echo htmlentities($book_row["id"]); ?>"><i
                                                                                class="fa fa-edit" title="Edit Record"></i></a>
                                                                    </th>
                                                                    <?php
                                                                }
                                                            }
                                                            ?>
                                                        </tr>
                                                    </thead>
                                                </tbody>
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