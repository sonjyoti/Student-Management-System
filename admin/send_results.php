<?php 
    include 'includes/auth.php';
    include 'get_result.php';
    include 'get_student.php';
    include 'get_subject.php';
    include 'send_result_functions.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <?php
    include 'includes/head.php';
    ?>
    <title>Add Result</title>
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
                                <h2 class="title" style="color: white; font-size: 20px;"><b>Add Results</b></h2>
                            </div>
                        </div>
                    </div>
                    <section class="section">
                        <h4 style="padding-top: 30px; padding-bottom: 20px; padding-left: 10%; color: black;"><b>Add
                                Results -</b></h4><br>
                        <div class="container-fluid">
                            <div class="row">
                                <div class="col-md-8 col-md-offset-2">
                                    <div class="panel">
                                        <div class="panel-body" style="border-radius: 5px;">
                                            <form method="post">
                                                <?php 
                                                    if (sizeof($std_options) > 0) {
                                                ?>
                                                    <label for="selectRoll" style="padding-left: 2px;">Students' Roll No:</label>
                                                    <select class="form-control" id="selectRoll" style="width: 770px;" name="roll" onchange="checkResult()" required>
                                                        <option disabled selected>Select Roll No</option>
                                                    </select>
                                                    <div div="subjectField">
                                                        <?php foreach($sbj_options as $sbj): ?>
                                                        <div class="col-10" id="subjectField_<?php echo htmlentities($sbj['sbj_id']); ?>">
                                                            <div class="row">
                                                                <div class="col-md-6">
                                                                    <label for="gradePoint_<?php echo htmlentities($sbj['sbj_id']); ?>" class="form-label"><?php echo htmlentities($sbj['sbj_code']); ?>:</label>
                                                                    <select class="form-control" style="width: 770px;" id="gradePoint_<?php echo htmlentities($sbj['sbj_id']); ?>" name="gradePoint[<?php echo htmlentities($sbj['sbj_id']); ?>]" required>
                                                                        <option disabled selected>Select Grade Point</option>
                                                                        <option value="1">1</option>
                                                                        <option value="2">2</option>
                                                                        <option value="3">3</option>
                                                                        <option value="4">4</option>
                                                                        <option value="5">5</option>
                                                                        <option value="6">6</option>
                                                                        <option value="7">7</option>
                                                                        <option value="8">8</option>
                                                                        <option value="9">9</option>
                                                                        <option value="10">10</option>
                                                                    </select>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <?php endforeach; ?>
                                                    </div><br>
                                                    <div style="text-align: center;">
                                                        <button type="submit" name="submitResult" class="btn btn-primary"
                                                            style="width: 400px; border-radius: 5px; border-width: 1px; background-color: green;"
                                                            name="addCourse">Add Result</button>
                                                    </div><br>
                                                <?php } else { ?>
                                                    <strong>
                                                        <?php echo htmlentities("No Students to show!"); ?>
                                                    </strong>
                                                <?php } ?>
                                            </form>
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
    <script>
        var options = <?php echo $std_options_json; ?>;
        var select = document.getElementById("selectRoll");

        options.forEach(function(option) {
            var opt = document.createElement("option");
            opt.value = option.st_id;
            opt.innerHTML = option.roll_id;
            select.appendChild(opt);
        });
    </script>
    <script>
        var declaredRollNumbers = <?php echo $rst_options_json; ?>;

        function checkResult() {
            var rollNumber = document.getElementById('selectRoll').value;
            var subjectField = document.getElementById('subjectField');
            subjectField.style.visibility = 'hidden';

            if (rollNumber !== "") {
                // Check if the result is already declared for the selected roll number
                var declaredRolls = JSON.parse(declaredRollNumbers);
                var resultDeclared = declaredRolls.includes(rollNumber);
                if (resultDeclared) {
                    // If result is not declared, show subject fields
                    alert('Result already declared for roll number ' + rollNumber + '.');
                } else{
                    subjectField.style.visibility = 'visible';
                }
            }
        }
    </script>
</body>
</html>
<?php 
mysqli_stmt_close($stmt);
mysqli_close($conn);
exit();
?>