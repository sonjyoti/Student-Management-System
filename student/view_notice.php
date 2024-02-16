<?php 
include 'includes/auth.php';
include '../show_notices.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
        <?php 
            include 'includes/head.php';
        ?>
        <title>Notices</title>
    </head>
    <body class="top-navbar-fixed">
        <div class="main-wrapper">
            <!-- nanvbar starts -->
            <?php 
                include 'includes/navbar.php';
            ?>
            <!-- nanvbar starts -->

            <div class="content-wrapper">
                <div class="content-container" style="background-color: grey;">
                    <!-- ----Side Bar---- -->
                    <?php 
                    include 'includes/sidebar.php';
                    ?>
                    <!-- ----Side Bar Ends Here---- -->

                    <div class="main-page" style="background-color: white;">
                        <div class="container-fluid">
                            <div class="row page-title-div" style="background-color: green; padding-top: 10px; padding-bottom: 10px;">
                                <div>
                                    <h2 class="title" style="color: white; font-size: 20px;"><b>Notices</b></h2>
                                </div>
                            </div>
                        </div>
                          <!-- ---- Notice section starts from here ---- -->
                        <div class="container" style="padding-top: 50px; padding-bottom: 50px;">
                            <div class="card-body pt-8 pb-12" style="font-size: 15px;">
                                <div id="w0" class="table-responsive small" style="font-size: 13px; border-radius: 20px;">
                                </div>
                                <table class="table table-hover table-bordered">
                                    <thead class="table-head">
                                    <tr>
                                        <th>Title</th>
                                        <th>Published On</th>
                                        <th>Document</th>
                                    </tr>
                                    </thead>

                                    <tbody>
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
                                                    <a class="btn btn-sm btn-primary" href="../view_notice.php?nid=<?php echo htmlentities($row["id"]); ?>" target="_blank" style="background-color: green; border-color: black;">View Document</a>
                                                </td>
                                            </tr>    
                                            <?php
                                            }
                                        }
                                    ?>
                                    </tbody>
                                </table>
                            </div>        
                        </div>
                    </div>
                        <!-- ---- Notice section ends from here ---- -->
                </div>
            </div>
        </div>
    </body>
</html>

