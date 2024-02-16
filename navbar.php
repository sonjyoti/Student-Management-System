<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Navbar</title>
    <link href="css/bootstrap.navabar.css" rel="stylesheet">
    <link href="css/font.css" rel="stylesheet">  
</head>
<body>
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark py-3 px-0 px-md-0 px-xxl-8 d-print-none" style="z-index: 999">
    <div class="container-fluid" style="font-size: 15px;">
        <div class="navbar-nav" style="font-size: 15px;">
            <a class="nav-item nav-link active" href="home.html" aria-current="page" style="padding-left: 0px">Home</a>
        </div>

        <button class="navbar-toggler collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon" style="font-size: 19px;"></span>
        </button>

        <div class="navbar-collapse collapse" id="navbarCollapse" style="font-size: 15px;">
            <div class="navbar-nav" style="font-size: 15px;">
                <a class="nav-item nav-link" href="notices.html">Notice</a>
                <a class="nav-item nav-link" href="developers.html">Developers</a>
            </div>
            <div class="navbar-nav mx-lg-auto" style="font-size: 15px;"></div>

            <div class="navbar-nav ms-lg-4" style="font-size: 15px;"></div>
            <div class="d-flex align-items-lg-center mt-3 mt-lg-0" style="font-size: 15px;">
                <ul class="nav justify-content-end align-self-start"></ul>
                <ul class="nav justify-content-end align-self-start" style="margin-left: 10px;">
                    <a href="register_page.html">
                        <button type="button" class="btn btn-sm btn-dark">New Registration</button>
                    </a>
                    <a href="login_page.html">
                        <button type="button" class="btn btn-sm btn-dark">Login</button>
                    </a>
                </ul>
            </div>
        </div>
    </div>
  </nav>

</body>  

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</html> 