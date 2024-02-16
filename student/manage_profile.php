<?php 
include 'includes/auth.php';
include 'manage_profile_functions.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
        <?php 
            include 'includes/head.php';
        ?>
        <title>Manage Profile</title>
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
                                    <h2 class="title" style="color: white; font-size: 20px;"><b>Manage Profile </b></h2>
                                </div>
                            </div>
                        </div>
                        <!-- --Personal details form starts here-- -->
                        
                        <form class="row g-3">
                            <div class="container">
                                <div class="custom-container">
                                    <div class="row">
                                        <div class="col-9">
                                        <h4><b>Personal Details- </b></h4>
                                        </div>
                                    </div>
                                </div>
                                <?php 
                                    $book_row = mysqli_fetch_assoc($result);
                                ?>
                                <div class="col-10">
                                    <label for="Name" class="form-label">Name of the Student:</label>
                                    <input type="text" class="form-control" id="Name" placeholder="<?php echo htmlentities($name); ?>"
                                        disabled>
                                </div>
                                <div class="col-10">
                                    <label for="DOB">Date of birth:</label>
                                    <input type="text" class="form-control" id="DOB" placeholder="<?php echo htmlentities($dob); ?>" disabled>
                                </div>
                                <div class="col-10">
                                    <label for="Gender">Gender:</label>
                                    <input type="text" class="form-control" id="Gender" placeholder="<?php echo htmlentities($gender); ?>" disabled>
                                </div>
                                <div class="row">
                                    <form method="post">
                                        <div class="col-md-10">
                                            <label for="Email" class="form-label">Email ID:</label>
                                            <input type="email" class="form-control" id="Email" placeholder="<?php echo htmlentities($email); ?>" disabled>
                                        </div>
                                        <div class="col-md-2 d-flex" style="padding-top: 25px;">
                                            <button type="button" class="btn btn-secondary" id="btnEmail" onclick="enableInputEmail()" style="width: 160px; border: solid black 2px; background-color: green; color: white;">Edit</button>
                                        </div>
                                    </form>

                                </div>
                                <div class="row">
                                    <div class="col-md-10">
                                        <label for="Phone" class="form-label">Phone Number:</label>
                                        <input type="text" class="form-control" id="Phone" placeholder="<?php echo htmlentities($phone); ?>" disabled>
                                    </div>
                                    <div class="col-md-2 d-flex" style="padding-top: 25px;">
                                        <button type="button" class="btn btn-secondary" id="btnPhone" onclick="enableInputPhone()" style="width: 160px; border: solid black 2px; background-color: green; color: white;">Edit</button>
                                    </div>
                                </div>
                            </div>
                            <!-- --Personal details form ends here-- -->

                            <!-- --Address form starts here-- -->
                            <div class="container">
                                <div class="row">
                                    <div class="col-9">
                                        <h4><b>Address- </b></h4>
                                    </div>
                                </div>
                                <div class="col-10">
                                    <label for="Address-1" class="form-label">Address Line 1:</label>
                                    <input type="text" class="form-control" id="Address-1" placeholder="<?php echo htmlentities($address1); ?>" disabled>
                                </div>
                                <div class="col-10">
                                    <label for="Address-2" class="form-label">Address Line 2:</label>
                                    <input type="text" class="form-control" id="Address-2" placeholder="<?php echo htmlentities($address2); ?>" disabled>
                                </div>
                                <div class="col-5">
                                    <label for="State">State</label>
                                    <input type="text" class="form-control" id="State" placeholder="<?php echo htmlentities($state); ?>" disabled>
                                </div>

                                <div class="col-5">
                                    <label for="District">District</label>
                                    <input type="text" class="form-control" id="District" placeholder="<?php echo htmlentities($district); ?>" disabled>
                                </div>

                                <div class="col-5">
                                    <label for="Pin" class="form-label">Pincode:</label>
                                    <input type="text" class="form-control" id="Pin" placeholder="<?php echo htmlentities($pincode); ?>" disabled>
                                </div>
                            </div><br><br>
                            <!-- --Address form ends here-- -->
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </body>
    <script>

    function enableInputPhone() {
        var phone = document.getElementById("Phone");

        phone.disabled = false;
        var phoneButton = document.getElementById("btnPhone");
        phoneButton.innerHTML = "Save";
        phoneButton.name = "submitPhone";
    }

    function enableInputEmail() {
        var email = document.getElementById("Email");

        email.disabled = false;
        var emailButton = document.getElementById("btnEmail");
        emailButton.innerHTML = "Save";
        emailButton.name = "submitEmail";
    }

  </script>
</html>