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
        <title>Change Password</title>
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
                                    <h2 class="title" style="color: white; font-size: 20px;"><b>Admin Password Reset</b>
                                    </h2>
                                </div>
                            </div>
                        </div>
                        <section class="section">
                            <h4 style="padding-top: 30px; padding-bottom: 20px; padding-left: 10%; color: black;"><b>Reset Your Password -</b></h4><br>
                            <div class="container-fluid">
                                <div class="row">
                                    <div class="col-md-8 col-md-offset-2">
                                        <div class="panel">
                                            <div class="panel-body" style="border-radius: 5px;">
                                                <form method="post" id="registrationForm">
                                                    <div class="mb-6">
                                                        <label for="text" class="form-label">Current Password *</label>
                                                        <input type="password" name="currentPassword" class="form-control" id="currentPassword" placeholder="Enter your current password" required>
                                                    </div>
                                                    <div class="mb-6">
                                                        <label for="text" name="currentPassword" class="form-label">New Password *</label>
                                                        <input type="password" name="password" class="form-control" id="password" placeholder="Enter your new password" required>
                                                    </div>
                                                    <div class="mb-3">
                                                        <label for="text" class="form-label">Confirm Password *</label>
                                                        <input type="text" class="form-control" id="confirmPassword" placeholder="Confirm your new password" required>
                                                        <div id="password_message" style="margin-top: 2px; font-weight: bold;"></div>
                                                        <div id="passwordsethelp" class="form-text text-center" style="font-size: 12px;">
                                                            <b>Please choose a password that you haven't used before.</b>
                                                        </div>
                                                    </div>

                                                    <div style="text-align: center;">
                                                        <button type="submit" class="btn btn-primary" style="width: 400px; border-radius: 5px; border-width: 1px; background-color: green; border-color: black;" name="submit">Reset Password</button>
                                                    </div>
                                                </form>
                                                <?php 
                                                function checkPassword($password, $id, $conn)
                                                {
                                                    $sql = "SELECT `id` FROM `Admin` WHERE `password` = ? AND `id` = ?;";
                                                    $stmt = mysqli_prepare($conn, $sql);
                                                    mysqli_stmt_bind_param($stmt, "si",$password, $id);
                                                    if (!mysqli_stmt_execute($stmt)) {
                                                        mysqli_stmt_error($stmt);
                                                    } else {
                                                        $result = mysqli_stmt_get_result($stmt);
                                                        if(mysqli_num_rows($result) != 0) {
                                                            return true;
                                                        }
                                                    }
                                                    return false;
                                                }
                                                if (isset($_POST['submit'])) {
                                                    $currentPassword = $_POST['currentPassword'];
                                                    $password = $_POST['password'];
                                                    $id = $_SESSION['adminId'];
                                                    if(checkPassword($currentPassword, $id, $conn)){
                                                        $sql = "UPDATE `Admin` SET `password` = ? WHERE `id` = ?;";
                                                        $stmt = mysqli_prepare($conn, $sql);
                                                        mysqli_stmt_bind_param($stmt, "si", $password, $id);
                                                        if (!mysqli_stmt_execute($stmt)) { ?>
                                                            <div class="alert alert-danger left-icon-alert" role="alert">
                                                                <strong>Failed! Try Again</strong>
                                                            </div>
                                                            <?php
                                                        } else { ?>
                                                            <div class="alert alert-success left-icon-alert" role="alert">
                                                                <strong>Password Updated Successfully!</strong>
                                                            </div>
                                                            <?php
                                                        }
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
    </body>
    <script>
        const passwordInput = document.getElementById("password");
        const confirmPasswordInput = document.getElementById("confirmPassword");
        const passwordMessage = document.getElementById("password_message");

        passwordInput.addEventListener("keyup", validatePassword);
        confirmPasswordInput.addEventListener("keyup", validatePassword);

        function validatePassword() {
            const password = passwordInput.value;
            const confirmPassword = confirmPasswordInput.value;

            if (password === confirmPassword) {
                passwordMessage.textContent = "Passwords match";
                passwordMessage.style.color = "green";
            } else {
                passwordMessage.textContent = "Passwords do not match";
                passwordMessage.style.color = "red";
            }
        }
        document.getElementById("registrationForm").addEventListener("submit", function(event) {
            const password = passwordInput.value;
            const confirmPassword = confirmPasswordInput.value;
            if (password !== confirmPassword) {
                event.preventDefault(); 
                alert("Password and Confirm Password do not match. Please try again.");
            }
        });
    </script>
</html>