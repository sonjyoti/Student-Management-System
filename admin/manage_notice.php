<?php
include 'includes/auth.php';
include 'manage_notice_functions.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <?php
    include 'includes/head.php';
    ?>
    <title>Manage Notices</title>
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
                                <h2 class="title" style="color: white; font-size: 20px;"><b>Manage Notices</b></h2>
                            </div>
                        </div>
                    </div>
                    <section class="section">
                        <h4 style="padding-top: 30px; padding-bottom: 20px; padding-left: 10%; color: black;"><b>Manage
                                Notices -</b></h4><br>
                        <div class="container-fluid">
                            <div class="row">
                                <div class="col-md-8 col-md-offset-2">
                                    <div class="panel">
                                        <div class="panel-title">
                                            <h5 style="padding-left: 15px; padding-top: 10px; font-color: black;">
                                                <b>Edit Or Delete Notices -</b>
                                            </h5>
                                        </div>

                                        <div class="panel-body p-20">
                                            <table id="example" class="display table table-striped table-bordered"
                                                cellspacing="0" width="100%">
                                                <thead>
                                                    <tr>
                                                        <th style="width: 500px;">Title</th>
                                                        <th>Published On</th>
                                                        <th style="padding-left: 30px;">Action</th>
                                                    </tr>
                                                    <?php
                                                    if (mysqli_num_rows($result) == 0) {
                                                        ?><strong>
                                                            <?php echo htmlentities("No Notices to show!"); ?>
                                                        </strong>
                                                        <?php
                                                    } else {
                                                        while ($row = mysqli_fetch_assoc($result)) {
                                                            ?>
                                                            <tr>
                                                                <td>
                                                                    <?php echo htmlentities($row["title"]); ?>
                                                                </td>
                                                                <td>
                                                                    <?php echo htmlentities(date('d/m/Y', strtotime($row['date']))); ?>
                                                                </td>
                                                                <td>
                                                                    <a href="edit_notice.php?nid=<?php echo htmlentities($row["id"]); ?>"><i class="fa fa-edit" title="Edit Record" style="margin-right: 10px;"></i></a>
                                                                    <a href="delete_notice.php?nid=<?php echo htmlentities($row["id"]); ?>"><i class="fa fa-trash" title="Delete Record"></i></a>
                                                                </td>
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
    <div class="foot">
        <footer></footer>
        <style>
            .foot {
                text-align: center;
            }
        </style>
</body>

</html>