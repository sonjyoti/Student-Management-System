<?php 
    include 'logic/register_functions.php'
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register Form</title>
    <link href="css/bootstrap.navabar.css" rel="stylesheet">
    <link href="css/font.css" rel="stylesheet">
    <link href="css/quicklinks.css" rel="stylesheet">
    <link rel="icon" href="logos/lcb_college_logo_2.png" type="image/x-icon">
    <script src="js/states.js"></script>
    <script src="js/citizen.js"></script>
    <script src="js/year.js"></script>
    <script src="js/mySelect.js"></script>

    <style>
        .container {
            max-width: 1200px;
            padding-left: 220px;
        }
    </style>

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
                <a class="nav-item nav-link active" href="home.php" aria-current="page"
                    style="padding-left: 0px">Home</a>
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
                    <ul class="nav justify-content-end align-self-start" style="margin-left: 10px;">
                        <a href="login_page.php">
                            <button type="button" class="btn btn-sm btn-dark login-button"
                                style=" border-radius: 4px; width: 80px; transition: background-color 0.3s;">Login</button>
                        </a>
                    </ul>
                </div>
            </div>
        </div>
    </nav>
    <br><br>
    <!-- ---- Navbar ends from here ---- -->

    <!-- ---Registration Form starts from here--- -->

    <!-- --Personal details form starts here-- -->
    <form class="row g-3" method="post">
        <h5 style="padding-top: 30px; padding-bottom: 20px; padding-left: 10%;">Registration- </h5><br>
        <div class="container">
            <h5>Personal Details: </h5><br>
            <div class="col-10">
                <label for="name" class="form-label">Name of the Student:</label>
                <input type="text" class="form-control" id="inputName" placeholder="Enter your full name." name="name"
                    required>
            </div>
            <div class="col-10">
                <label for="dob">Date of birth:</label>
                <input type="date" class="form-control" id="inputDOB" name="dob" required>
            </div>
            <div class="col-10">
                <label for="dob">Gender:</label>
                <select class="form-control" id="selectGender" name="gender" required>
                    <option value="default">Select Your Gender</option>
                    <option value="MALE">Male</option>
                    <option value="FEMALE">Female</option>
                </select>
            </div>
            <div class="col-10">
                <label for="email" class="form-label">Email ID:</label>
                <input type="email" class="form-control" id="inputName" placeholder="Enter your email id." name="email"
                    required>
            </div>
            <div class="col-10">
                <label for="name" class="form-label">Phone Number:</label>
                <input type="text" class="form-control" id="inputName" placeholder="Enter your phone number."
                    name="phone" required>
            </div>
        </div><br><br>
        <!-- --Personal details form ends here-- -->


        <!-- --Address form starts here-- -->
        <div class="container">
            <h5>Address: </h5><br>
            <div class="col-10">
                <label for="inputAddress" class="form-label">Address Line 1:</label>
                <input type="text" class="form-control" id="inputAddress"
                    placeholder="Enter your permanent address. required" name="address_1" required>
            </div>
            <div class="col-10">
                <label for="inputAddress" class="form-label">Address Line 2:</label>
                <input type="text" class="form-control" id="inputAddress"
                    placeholder="Enter your correspondence address." name="address_2">
            </div>
            <div class="row">
                <div class="col-5">
                    <label for="inputCountry" class="form-label">Are you a citizen of India?</label> <br>
                    <label>
                        <input type="radio" name="citizen" value="YES" id="citizenYes"
                            onclick="handleCitizenSelection()" style="width: 30px;" required>Yes
                    </label>
                    <label>
                        <input type="radio" name="citizen" value="NO" id="citizenNo" onclick="handleCitizenSelection()"
                            style="width: 30px;" required>No
                    </label>
                </div>
                <div class="col-5">
                    <label for="inputState">State</label>
                    <select class="form-control" id="inputState" onchange="populateDistricts()" name="state" disabled>
                        <option selected>Choose your State</option>
                        <option value="AndhraPradesh">Andhra Pradesh</option>
                        <option value="ArunachalPradesh">Arunachal Pradesh</option>
                        <option value="Assam">Assam</option>
                        <option value="Bihar">Bihar</option>
                        <option value="Chhattisgarh">Chhattisgarh</option>
                        <option value="Goa">Goa</option>
                        <option value="Gujarat">Gujarat</option>
                        <option value="Haryana">Haryana</option>
                        <option value="HimachalPradesh">Himachal Pradesh</option>
                        <option value="JammuKashmir">Jammu and Kashmir</option>
                        <option value="Jharkhand">Jharkhand</option>
                        <option value="Karnataka">Karnataka</option>
                        <option value="Kerala">Kerala</option>
                        <option value="MadhyaPradesh">Madhya Pradesh</option>
                        <option value="Maharashtra">Maharashtra</option>
                        <option value="Manipur">Manipur</option>
                        <option value="Meghalaya">Meghalaya</option>
                        <option value="Mizoram">Mizoram</option>
                        <option value="Nagaland">Nagaland</option>
                        <option value="Orissa">Orissa</option>
                        <option value="Punjab">Punjab</option>
                        <option value="Rajasthan">Rajasthan</option>
                        <option value="Sikkim">Sikkim</option>
                        <option value="TamilNadu">Tamil Nadu</option>
                        <option value="Telangana">Telangana</option>
                        <option value="Tripura">Tripura</option>
                        <option value="Uttarakhand">Uttarakhand</option>
                        <option value="UttarPradesh">Uttar Pradesh</option>
                        <option value="WestBengal">West Bengal</option>
                        <option disabled style="background-color:#aaa; color:#fff">UNION Territories</option>
                        <option value="AndamanNicobar">Andaman and Nicobar Islands</option>
                        <option value="Chandigarh">Chandigarh</option>
                        <option value="DadaraHaveli">Dadar and Nagar Haveli</option>
                        <option value="DamanDiu">Daman and Diu</option>
                        <option value="Delhi">Delhi</option>
                        <option value="Lakshadeep">Lakshadeep</option>
                        <option value="Poducherry">Poducherry</option>
                    </select>
                </div>
            </div>

            <div class="row">
                <div class="col-5">
                    <label for="inputDistrict">District</label>
                    <select class="form-control" id="inputDistrict" name="district" disabled>
                        <option selected>Choose your State</option>
                    </select>
                </div>
                <div class="col-5">
                    <label for="inputZip" class="form-label">Pincode:</label>
                    <input type="text" class="form-control" id="inputZip" placeholder="Enter your Pincode"
                        name="pincode" required>
                </div>
            </div>
        </div><br><br>
        <!-- --Address form ends here-- -->

        <!-- --Course form starts here-- -->
        <div class="container">
            <h5>Course Details: </h5><br>

            <div class="col-10">
                <label for="dob">Course:</label>
                <select class="form-control" id="selectCourse mySelect" name="course" required>
                    <option value="">Select Your Course</option>
                    <option value="1">BCA</option>
                    <option value="2">BSC IT</option>
                    <option value="3">BSC CS</option>
                </select>
            </div>
            <div class="col-10">
                <label for="dob">Semester:</label>
                <select class="form-control" id="selectCourse mySelect" name="semester" required>
                    <option value="">Select Your Semester</option>
                    <option value="1">Semester I</option>
                    <option value="2">Semester II</option>
                    <option value="3">Semester III</option>
                    <option value="4">Semester IV</option>
                    <option value="5">Semester V</option>
                    <option value="6">Semester VI</option>
                </select>
            </div>
            <div class="col-10">
                <label for="admissionYear">Admission Year:</label>
                <select class="form-control" id="admissionYear" name="admissionYear" required>
                    <option value="default">Select Your Admission Year</option>
                </select><br>
            </div>
        </div>
        <!-- --Course form ends here-- -->
        <div class="container">
            <div class="col-10 text-center" style="padding-bottom: 100px;">
                <button type="submit" class="btn btn-primary"
                    style="width: 300px; border-radius: 5px; border-width: 1px; background-color: green; border-color: black;"
                    name="submit">
                    <a style="color: #fff; text-decoration: double;">Submit</a></button>
                <button type="reset" class="btn btn-primary"
                    style="width: 300px; border-radius: 5px; border-width: 1px; border-color: black; background-color: red;">Reset</button>
            </div>
        </div>
    </form>

    <!-- ---Footer section starts here--- -->
    <footer class="footer">
        <div class="text-white" style="font-size: 15px; background-color: rgb(28, 26, 26); ">
            <div class="container-fluid"
                style="border: none; padding-top: 50px; padding-bottom: 50px; width: 1300px; padding-left: 0px;">
                <div class="row">
                    <div class="col-lg-6 col-md-6 footer-info" style="width: 610px;">
                        <p><strong>"WE HAVE 13 YEARS OF EXPERIENCE IN THIS PASSION"</strong><br><br>
                            <i>'This system is a web-based application designed to efficiently and accurately record,
                                manage, and analyze academic results and performance data for students in educational
                                institutions. It streamlines the process of grading, generates reports, and provides
                                valuable insights to educators and administrators, enhancing overall academic
                                administration.'</i>
                        </p>
                    </div>

                    <div class="col-lg-3 col-md-6 footer-links" style="padding-left: 50px;">
                        <h4>Useful Links</h4>
                        <ul>
                            <li><a href="home.php" style="color: white; text-decoration: none;">Home</a></li>
                            <li><a href="notices.php" style="color: white; text-decoration: none;">Notices</a></li>
                            <li><a href="developers.php" style="color: white; text-decoration: none;">Developers</a>
                            </li>
                            <li><a href="login_page.php" style="color: white; text-decoration: none;">Login</a></li>
                            <li><a href="register_page.php" style="color: white; text-decoration: none;">New
                                    Registration</a></li>
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
        <div class="text-white"
            style="font-size: 15px; padding-top: 15px; padding-bottom: 5px; padding-left: 20px; background-color: black;">
            <div class="container-fluid py-6 px-md-16" style="font-size: 15px; color: azure; text-shadow: none;">
                <p class="small lh-loose" style="font-size: 13px; padding-left: 450px;">Copyright © Designed and
                    Developed by Subhra Kinkar Deka & Sonjyoti Rabha</p>
            </div>
        </div>
    </footer>
    <!-- ---Footer section starts here--- -->
</body>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
    integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
    crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"
    integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49"
    crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"
    integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T"
    crossorigin="anonymous"></script>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
    integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
    crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"
    integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49"
    crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"
    integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T"
    crossorigin="anonymous"></script>
<script>
    // Get a reference to the select element
    var admissionYearSelect = document.getElementById("admissionYear");

    // Get the current year
    var currentYear = new Date().getFullYear();

    // Populate the select element with options from 2000 to 2030
    for (var year = 2000; year <= 2030; year++) {
        var option = document.createElement("option");
        option.value = year;
        option.textContent = year;
        admissionYearSelect.appendChild(option);
    }
</script>

</html>