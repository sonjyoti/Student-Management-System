<?php 
    include 'logic/reset_password_functions.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reset Password</title>
    <link href="css/bootstrap.login.css" rel="stylesheet">
    <link href="css/font.css" rel="stylesheet">
    <link rel = "icon" href =  "logos/lcb_college_logo_2.png" type = "image/x-icon"> 
</head>
<body>
    <!-- ---- Navbar starts from here ---- -->
    <header class="container-fluid" style="background-color: rgb(10, 37, 95); color: #fff;">
        <div class="row custom-container">
            <div class="col" style="padding:20px; padding-left: 50px; width: 50px;">
                <img src="logos/lcb_college_logo_2.png" alt="Logo" class="img-fluid" height="100px" width="100px">
            </div>
            <div class="col" style="text-align: center; padding-top: 20px; padding-left: 0px;">
                <h1 style="display: inline-block; width: 800px;"><b>LALIT CHANDRA BHARALI COLLEGE</b></h1>
                <h6 style="display: inline-block; width: 800px;">ACCREDITTED BY NAAC WITH 'B++' GRADE IN 2022</h6>
                <h8 style="display: inline-block; width: 800px; padding-bottom: 20px; font-size: smaller;">Affilliated to Gauhati University, Assam</h8>
            </div>
            <div class="col" style="text-align: center; padding: 30px; padding-top: 50px;">
                <ul class="list-unstyled" style="font-size: 12px">
                    <li>Maligaon, Guwahati, Assam 781011</li>
                    <li>lcbcollege.csc@gmail.com</li>
                </ul>
            </div>
        </div>
    </header>
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
    <h5 style="padding-top: 50px; padding-left: 10%;">New Password- </h5><br>
    <div class="container" style="display: flex; justify-content: center; align-items: center; height: 60vh; width: 50vh;">
        <form method="post">
            <div class="mb-3">
                <label for="text" class="form-label">Password *</label>
                <input type="password" class="form-control" id="exampleInputEmail1" style="width: 500px;" placeholder="Enter your new password" required>
            </div>
            <div class="mb-3">
                <label for="text" class="form-label">Confirm Password *</label>
                <input type="password" class="form-control" id="exampleInputRollNo" placeholder="Confirm your new password" required name="password">
                <div id="passwordsethelp" class="form-text text-center" style="font-size: 12px;">
                    <b>Please create a new password that you don't use before.</b>
                </div>
            </div>
            <div class="reset-password">
                <div class="mb-8 text-center">
                    <button type="submit" class="btn btn-primary" style="width: 500px; border-radius: 5px; border-width: 1px; background-color: green; border-color: black;" name="submit">Reset Password</button>
                </div>
            </div>
        </form>
    </div><br><br><br>
    <!-- -- Forgot password form ends from here -- -->
    <!-- ---Footer section starts here--- -->
    <footer class="footer mt-auto">
        <div class="text-white" style="font-size: 15px; background-color: rgb(28, 26, 26); ">
          <div class="container" style="border: none; padding-top: 50px; padding-bottom: 50px; width: 2000px;">
            <div class="row">
              <div class="col-lg-6 col-md-6 footer-info" style="width: 630px;">
                <p><strong>"WE HAVE 13 YEARS OF EXPERIENCE IN THIS PASSION"</strong><br><br>
                <i>'This system is a web-based application designed to efficiently and accurately record, manage, and analyze academic results and performance data for students in educational institutions. It streamlines the process of grading, generates reports, and provides valuable insights to educators and administrators, enhancing overall academic administration.'</i></p>
              </div>
    
              <div class="col-lg-3 col-md-6 footer-links" style="padding-left: 50px;">
                <h4>Useful Links</h4>
                <ul>
                  <li><a href="home.php" style="color: white; text-decoration: none;">Home</a></li>
                  <li><a href="notices.php"  style="color: white; text-decoration: none;">Notices</a></li>
                  <li><a href="developers.php"  style="color: white; text-decoration: none;">Developers</a></li>
                  <li><a href="login_page.php" style="color: white; text-decoration: none;">Login</a></li>
                  <li><a href="register_page.php"  style="color: white; text-decoration: none;">New Registration</a></li>
                </ul>
              </div>
    
              <div class="col-lg-3 col-md-6 footer-contact" style="padding-left: 30px; width: 320px;">
                  <h4>Contact Address</h4>
                      <p>
                          Maligaon Gate No.4<br>
                          East Gota Nagar, Maligaon <br>
                          Guwahati, Assam 781011 <br>
                          <strong>Phone: </strong> 095772 37877 <br>
                          <strong>Email: </strong> lcbcollege.csc@gmail.com<br>
                      </p>
                  </h4>
              </div>
            </div>
          </div>
        </div>
    </footer>
    <footer>
        <div class="text-white" style="font-size: 15px; padding-top: 15px; padding-bottom: 5px; padding-left: 20px; background-color: black;">
            <div class="container-fluid py-6 px-md-16" style="font-size: 15px; color: azure; text-shadow: none;">
                <p class="small lh-loose" style="font-size: 13px; padding-left: 450px;">Copyright © Designed and Developed by Subhra Kinkar Deka & Sonjyoti Rabha</p>
            </div>
        </div>
    </footer>
      <!-- ---Footer section starts here--- -->
</body>
</html>



    