<?php 
    include 'logic/forgot_password_functions.php'; 
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Forgot Password</title>
    <link href="css/bootstrap.login.css" rel="stylesheet">
    <link href="css/font.css" rel="stylesheet">
    <link rel = "icon" href =  "logos/lcb_college_logo_2.png" type = "image/x-icon"> 
</head>
<body>
    <?php 
    include 'includes/header.php';
    ?>
    <!-- ---- Navbar starts from here ---- -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark py-3 px-0 px-md-0 px-xxl-8 d-print-none" style="z-index: 999">
        <div class="container-fluid" style="font-size: 15px;">
            <div class="navbar-nav" style="font-size: 15px;">
                <a class="nav-item nav-link" href="home.php" aria-current="page" style="padding-left: 0px">Home</a>
            </div>
    
            <button class="navbar-toggler collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon" style="font-size: 19px;"></span>
            </button>
    
            <div class="navbar-collapse collapse" id="navbarCollapse" style="font-size: 15px;">
                <div class="navbar-nav" style="font-size: 15px;">
                    <a class="nav-item nav-link" href="notices.php">Notice</a>
                    <a class="nav-item nav-link" href="developers.php">Developers</a>
                </div>
                <div class="navbar-nav mx-lg-auto" style="font-size: 15px;"></div>
    
                <div class="navbar-nav ms-lg-4" style="font-size: 15px;"></div>
                <div class="d-flex align-items-lg-center mt-3 mt-lg-0" style="font-size: 15px;">
                    <ul class="nav justify-content-end align-self-start"></ul>
                    <ul class="nav justify-content-end align-self-start" style="margin-left: 10px;">
                        <a href="register_page.php">
                            <button type="button" class="btn btn-sm btn-dark">New Registration</button>
                        </a>
                        <a href="login_page.php">
                            <button type="button" class="btn btn-sm btn-dark login-button" style=" border-radius: 4px; width: 80px; transition: background-color 0.3s;">Login</button>
                        </a>
                    </ul>
                </div>
            </div>
        </div>
      </nav>
    <!-- ---- Navbar ends from here ---- -->
    
    <!-- -- Forgot password form starts from here -- -->
    <h5 style="padding-top: 50px; padding-left: 10%;">Forgot Password- </h5><br>
    <div class="container" style="display: flex; justify-content: center; align-items: center; height: 60vh; width: 50vh;">
        <form method="post">
            <div class="mb-3">
                <label for="exampleInputEmail" class="form-label">Email *</label>
                <input type="email" class="form-control" id="exampleInputEmail1" style="width: 500px;" placeholder="Enter your email" required name="email">
            </div>
            <div class="mb-3">
                <label for="exampleInputRollNo" class="form-label">Roll No. *</label>
                <input type="text" class="form-control" id="exampleInputRollNo" placeholder="Enter your roll number" required name="roll">
                <!-- Adjust the width (e.g., 200px) to your desired value -->
            </div>
            <div class="mb-8">
                <label for="dob">Date of birth *</label>
                <input type="date" class="form-control" id="inputDOB" name="dob" required>
            </div><br>
            <div class="reset-password">
                <div class="mb-8 text-center">
                    <button class="btn btn-primary" style="width: 500px; width: 500px; border-radius: 5px; border-width: 1px; border-color: black; background-color: green;" name="next">Next</button>
                </div>
                <div id="passwordHelpBlock" class="form-text text-center" style="font-size: 12px;">
                    <b>Please click 'Next' to reset your password.</b>
                </div>
            </div>
        </form>
    </div><br><br><br>
    <!-- -- Forgot password form ends from here -- -->

    <!-- ---Footer section starts here--- -->
    <?php 
    include 'includes/footer.php';
    ?>
    <!-- ---Footer section starts here--- -->
    
</body>
</html>

