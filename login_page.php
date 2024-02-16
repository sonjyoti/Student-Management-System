<?php 
include 'logic/login_functions.php';
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
    <link href="css/bootstrap.login.css" rel="stylesheet">
    <link href="css/font.css" rel="stylesheet">
    <link rel = "icon" href =  "logos/lcb_college_logo_2.png" type = "image/x-icon"> 
</head>

<body>
    <?php 
    include 'includes/header.php';
    ?>
    <!-- ---- Navbar starts from here ---- -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark py-3 px-0 px-md-0 px-xxl-8 d-print-none"
        style="z-index: 999">
        <div class="container-fluid" style="font-size: 15px;">
            <div class="navbar-nav" style="font-size: 15px;">
                <a class="nav-item nav-link" href="home.php" aria-current="page" style="padding-left: 0px">Home</a>
            </div>

            <button class="navbar-toggler collapsed" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false"
                aria-label="Toggle navigation">
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
                </div>
            </div>
        </div>
    </nav>
    <!-- ---- Navbar ends from here ---- -->

    <!-- ---- Log In Form starts from here ---- -->
    <h5 style="padding-top: 60px; padding-left: 10%;">Log In- </h5><br>
    <div class="container"
        style="display: flex; justify-content: center; align-items: center; height: 60vh; width: 50vh;">
        <form method="post">
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Roll No:</label>
                <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"
                    name="roll" required>
            </div>
            <div class="mb-3">
                <label for="inputPassword5" class="form-label">Password:</label>
                <input type="password" class="form-control" id="exampleInputPassword1" name="password" required>
            </div>
            <div class="remember-forgot text-center" style="font-size: 14px;">
                <a href="forgot_password.php">Forgot Password?</a>
            </div><br>
            <button type="submit" class="btn btn-primary" style="width: 350px;" name="submit">Log In</button>
            <div class="login-register text-center" style="font-size: 14px;">
                <p>Haven't registered yet? <a href="register_page.php" class="register-link">Register Here</a></p>
            </div>
        </form>
    </div>

    <!-- ---- Log In Form ends from here ---- -->
    <!-- ---Footer section starts here--- -->
    <?php 
    include 'includes/footer.php';
    ?>
    <!-- ---Footer section starts here--- -->

</body>

</html>