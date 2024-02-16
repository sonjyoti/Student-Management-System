<!doctype html>
<html lang="en">
  <head>
    <title>Developers</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="css/bootstrap.navabar.css" rel="stylesheet">
    <link href="css/font.css" rel="stylesheet">
    <link rel = "icon" href =  "logos/lcb_college_logo_2.png" type = "image/x-icon"> 
    <link href="bootstrap/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link rel ="stylesheet" href ="css/devpage.css">
    <link rel="stylesheet" href ="css/social.css">
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
                  <a class="nav-item nav-link" href="resouces.php">Resources</a>
                  <a class="nav-item nav-link active" href="developers.php">Developers</a>
              </div>
              <div class="navbar-nav mx-lg-auto" style="font-size: 15px;"></div>
  
              <div class="navbar-nav ms-lg-4" style="font-size: 15px;"></div>
              <div class="d-flex align-items-lg-center mt-3 mt-lg-0" style="font-size: 15px;">
                  <ul class="nav justify-content-end align-self-start"></ul>
                  <ul class="nav justify-content-end align-self-start" style="margin-left: 10px;">
                      <a href="register_page.php">
                          <button type="button" class="btn btn-sm btn-dark login-button">New Registration</button>
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
     
    <!-- -- Main content starts from here -- -->
    <h5 style="padding-top: 80px; padding-bottom: 20px; padding-left: 5%;"><b>Developers- </b></h5><br>
      
    <div style="padding-left: 350px; padding-top: 40px; padding-bottom: 150px;">
      <div class="devcontainer" style="padding-top: 80px;">
        <h2><b>More About Us</b></h2> 
        <p>Individuals behind the projects - Students' Management System</p>
    
        <div class="developers" style="padding-bottom: 50px;">
          <div class="developer">
            <h4 style="padding-top: 20px;"><b>Sonjyoti Rabbha</b></h4>
            <p style="font-size: 12px;"><b>Roll No: UT-211-023-0031</b></p>
            <p style="font-size: smaller;">Passionate back-end developer, dedicated to coding, databases, and building robust, scalable systems.</p>

            <a href="cv/Sonjyoti Rabha-CV.pdf" style="font-size: 15px;" target="_blank"><b>Curriculum Vitae (CV)</b></a>

            <div class="social-links" style="padding-top: 20px;"> 
                <a href="https://twitter.com/SonjyotiR" class="twitter" style="color: black;" target="_blank"><i class="bi bi-twitter"></i></a>
                <a href="https://www.facebook.com/son.jyoti.58" style="color: black;" class="facebook"  target="_blank"><i class="bi bi-facebook"></i></a>
                <a href="https://www.instagram.com/xonzyoti/" class="instagram" style="color: black;" target="_blank"><i class="bi bi-instagram"></i></a>
                <a href="https://www.linkedin.com/in/sonjyoti-rabha-5b54861b3/" class="linkedin" style="color: black;" target="_blank"><i class="bi bi-linkedin"></i></a>
                <a href="https://github.com/sonjyoti" class="github" style="color: black;" target="_blank"><i class="bi bi-github"></i></a>
            </div>            
          </div>
          
    
          <div class="developer">
            <h4 style="padding-top: 20px;"><b>Subhra Kinkar Deka</b></h4>
            <p style="font-size: 12px;"><b>Roll No: UT-211-023-0032</b></p>
            <p style="font-size: smaller;">Aspiring front-end developer, passionate about creating engaging and user-friendly web experiences.</p>

            <a href="CV/Subhra_Kinkar-CV.pdf" style="font-size: 15px;" target="_blank"><b>Curriculum Vitae (CV)</b></a>

            <div class="social-links" style="padding-top: 20px;"> 
              <a href="https://twitter.com/Suv3_in" class="twitter" style="color: black;" target="_blank"><i class="bi bi-twitter"></i></a>
              <a href="https://www.facebook.com/suvrakingar.deka" style="color: black;" class="facebook"  target="_blank"><i class="bi bi-facebook"></i></a>
              <a href="https://www.instagram.com/suv.ra3/" class="instagram" style="color: black;" target="_blank"><i class="bi bi-instagram"></i></a>
              <a href="https://www.linkedin.com/in/suvki/" class="linkedin" style="color: black;" target="_blank"><i class="bi bi-linkedin"></i></a>
              <a href="https://github.com/Suvra03" class="github" style="color: black;" target="_blank"><i class="bi bi-github"></i></a>
          </div> 
          </div>
        </div>
      </div>
    </div>
      

    <!-- ---Footer section starts here--- -->
    <?php 
    include 'includes/footer.php';
    ?>
      <!-- ---Footer section starts here--- -->
  </body>
</html>