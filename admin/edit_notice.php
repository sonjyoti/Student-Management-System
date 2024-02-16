<?php 
include 'includes/auth.php';
include 'manage_notice_functions.php';
include 'update_notice.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <?php
    include 'includes/head.php';
    ?>
    <title>Edit Notice</title>
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
                                <h2 class="title" style="color: white; font-size: 20px;"><b>Edit Notice</b></h2>
                            </div>
                        </div>
                    </div>
                    <section class="section">
                        <h4 style="padding-top: 30px; padding-bottom: 20px; padding-left: 10%; color: black;"><b>Edit Notice -</b></h4><br>
                        <div class="container-fluid">
                            <div class="row">
                                <div class="col-md-8 col-md-offset-2">
                                    <div class="panel">
                                        <div class="panel-body" style="border-radius: 5px;">
                                            <form method="post" id="selectForm">
                                                <?php
                                                    $notice_id = $_GET['nid'];
                                                    while ($row = mysqli_fetch_assoc($result)) {
                                                        if ($row['id'] == $notice_id) { ?>
                                                            <div class="col-10">
                                                                <label for="course">Title:</label>
                                                                <input type="text" class="form-control" placeholder="<?php echo htmlentities($row["title"]); ?>" id="inputName" name="title"
                                                                    required>
                                                            </div>
                                                            <div class="col-10">
                                                                <label for="courseid">Description:</label>
                                                                <textarea type="text" class="form-control" id="inputName" style="height: 150px;" placeholder="<?php echo htmlentities($row["des"]); ?>" name="des" required></textarea>
                                                            </div>

                                                            <div style="text-align: center;">
                                                                <button type="submit" name="updateNotice" class="btn btn-primary" style="width: 482px; border-radius: 2px; border-width: 1px; background-color: green;" ><b>Update Notice</b></button>
                                                                <br><br>
                                                                <a href="manage_notice.php"><button type="submit" class="btn btn-primary" style="width: 282px; border-radius: 2px; border-width: 1px; background-color: red;" ><b>Cancel</b></button></a>
                                                            </div>
                                                        <?php } 
                                                    }    
                                                ?>
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
    <div class="foot">
        <footer></footer>
        <style>
            .foot {
                text-align: center;
            }
        </style>
</body>

</html>