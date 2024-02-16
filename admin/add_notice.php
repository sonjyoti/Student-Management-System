<?php 
    include '../db/db_connect.php';
    include 'includes/auth.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <?php
    include 'includes/head.php';
    ?>
    <title>Add Notice</title>
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
                                <h2 class="title" style="color: white; font-size: 20px;"><b>Add Notice</b></h2>
                            </div>
                        </div>
                    </div>
                    <section class="section">
                        <h4 style="padding-top: 30px; padding-bottom: 20px; padding-left: 10%; color: black;"><b>Add Notice -</b></h4><br>
                        <div class="container-fluid">
                            <div class="row">
                                <div class="col-md-8 col-md-offset-2">
                                    <div class="panel">
                                        <div class="panel-body" style="border-radius: 5px;">
                                            <form method="post" id="selectForm">

                                                <div class="col-10">
                                                    <label for="course">Title:</label>
                                                    <input type="text" class="form-control" id="inputName" name="title"
                                                        required>
                                                </div>
                                                <div class="col-10">
                                                    <label for="courseid">Description:</label>
                                                    <textarea type="text" class="form-control" id="inputName" style="height: 150px;" name="desc" required></textarea>
                                                </div>

                                                <div style="text-align: center;">
                                                    <button type="submit" name="submitNotice" class="btn btn-primary"
                                                        style="width: 770px; border-radius: 5px; border-width: 1px; background-color: green;"
                                                        name="addSubject"><b>Add Notice</b></button>
                                                </div>
                                            </form> <br>   
                                            <?php
                                                if (isset($_POST['submitNotice'])) {
                                                    date_default_timezone_set('Asia/Kolkata');
                                                    $title = $_POST['title'];
                                                    $desc = $_POST['desc'];
                                                    $date = date('Y-m-d');
                                                    $time = date('H:i:s');

                                                    $sql = "INSERT INTO `Notice` (`title`, `des`, `date`, `time`) VALUES (?, ?, ?, ?);";
                                                    $stmt = mysqli_prepare($conn, $sql);
                                                    mysqli_stmt_bind_param($stmt, "ssss", $title, $desc, $date, $time);
                                                    if (!mysqli_stmt_execute($stmt)) { ?>
                                                        <div class="alert alert-danger left-icon-alert" role="alert">
                                                            <strong>Failed! Try Again</strong>
                                                        </div>
                                                        <?php
                                                    } else { ?>
                                                        <div class="alert alert-success left-icon-alert" role="alert">
                                                            <strong>Notice Added Successfully!</strong>
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
    <div class="foot">
        <footer></footer>
        <style>
            .foot {
                text-align: center;
            }
        </style>
</body>

</html>