<?php 
include 'show_notices.php';
?>
<!doctype html>
<html lang="en">
  <head>
    <title>Notice</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="css/bootstrap.navabar.css" rel="stylesheet">
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
                  <a class="nav-item nav-link active" href="notices.php">Notice</a>
                  <a class="nav-item nav-link" href="resouces.php">Resources</a>
                  <a class="nav-item nav-link" href="developers.php">Developers</a>
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

  <!-- ---- Notice section starts from here ---- -->
  <div style="height: 800px;">
    <h5 style="padding-top: 80px; padding-bottom: 0px; padding-left: 5%;"><b>Notices- </b></h5><br>
    <div class="container" style="padding-top: 10px; padding-bottom: 50px;">
      <div class="card-body pt-8 pb-12" style="font-size: 15px;">
        <div id="w0" class="table-responsive small" style="font-size: 13px; border-radius: 20px;">
          </div>
          <table class="table table-hover table-bordered">
            <thead class="table-head"">
              <tr>
                <th style="width: 700px;">Title</th>
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
                  <a class="btn btn-sm btn-primary" href="view_notice.php?nid=<?php echo htmlentities($row["id"]); ?>" target="_blank" style="background-color: green; border-color: black;">View Document</a>
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
  </div>
  
    <!-- ---- Notice section ends from here ---- -->

    <!-- ---Footer section starts here--- -->
    <?php 
    include 'includes/footer.php';
    ?>
    <!-- ---Footer section starts here--- -->
  </body>
</html>