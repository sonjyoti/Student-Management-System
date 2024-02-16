<?php 
    include 'includes/auth.php';
    include '../db/db_connect.php';
    $semester = $_SESSION['semester'];
    $course = $_SESSION['course'];
    $st_id = $_SESSION['studentId'];
    $sql = "SELECT `Student`.`name` AS `st_name`, `Student`.`roll_id` AS `roll`, `Semester`.`semester` AS `sem` FROM `Student`, `Semester` WHERE `Student`.`id` = ? AND `Semester`.`id` = ? AND `Student`.`semester_id` = `Semester`.`id`;";
    $stmt = mysqli_prepare($conn, $sql);
    mysqli_stmt_bind_param($stmt, "ii", $st_id, $semester);
    if (!mysqli_stmt_execute($stmt)) {
        mysqli_stmt_error($stmt);
    } else {
        $result = mysqli_stmt_get_result($stmt);
        $row = mysqli_fetch_assoc($result);
        $name = $row['st_name'];
        $roll = $row['roll'];
        $sem = $row['sem'];
    }
    unset($_SESSION['semester']);
    unset($_SESSION['course']);
    include 'result_functions.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <?php
    include 'includes/head.php';
    ?>
    <title>Result</title>
</head>

<style>
    .container {
    background-color: #fff;
    height: 1000px;
    width: 800px;
    max-height: 100%;
    padding: 20px;
    margin-top: 5%;
    margin-bottom: 5%;
    border-radius: 5px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    }

    .page-border {
        border: 2px solid #000;
        padding: 20px;
        height: 950px;
    }
   
    table {
    width: 100%;
    border-collapse: collapse;
    }
    th, td {
        border: 1px solid #000;
        padding: 8px;
        text-align: center;
    }

</style>

<body class="top-navbar-fixed" style="background-color: grey;">
    <div class="container" style="padding-top: 25px; position: relative;">
       
        <a href="student_dashboard.php"><button type="button" class="close-button" style="position: absolute; top: 30px; right: 5px; background: none; border: none; font-size: 28px; cursor: pointer;">&times;</button></a>

        <div class="page-border">
            <p style="font-size: 25px;  text-align: center; padding-top: 20px;"style="font-size: 25px;  text-align: center; padding-top: 20px;"><b>LALIT CHANDRA BHARALI COLLEGE</b><br><span style="font-size: 12px;"><b>ACCREDITTED BY NAAC WITH 'B++' GRADE IN 2022</b></span><br><span style="font-size: 10px;"><b>Affilliated to Gauhati University, Assam</b></span><br><span style="font-size: 12px;"><u><b>Maligaon, Guwahati, Assam 781011 </b></u><br><span></p>
          
            <p style="font-size: 22px;  text-align: center;"><u><b>GRADE SHEET</b></u></p>
            
           <p style="padding-left: 80px;"><b>Name: </b><span><?php echo htmlentities($name); ?></span>
           <b style="padding-left: 20px;">Roll No: </b><span><?php echo htmlentities($roll); ?></span>
           <b style="padding-left: 20px;">Course: </b><span><?php echo htmlentities($course); ?> CBCS</span>
           <b style="padding-left: 100px;">Semester: </b><span><?php echo htmlentities($sem); ?></span>
           <b style="padding-left: 10px;">of  LCB COLLEGE</b></p><hr>
           <table>
                <thead>
                    <tr>
                        <th style="width: 300px;">Papers</th>
                        <th>PC</th>
                        <th>Letter Grade</th>
                        <th>Grade Point</th>
                        <th>Credit Point</th>
                    </tr>
                </thead>
                <tbody>
                    <!-- Rows -->
                    <?php
                        $totalPC = 0;
                        $totalCP = 0;
                        $sgpa = 0;
                        $rest = "PASS";
                        while ($row = mysqli_fetch_assoc($result)) {
                            $sbj_code = $row["sc"];
                            $paper_credit = $row["pc"];
                            $letter_grade = $row["lp"];
                            $grade_point = $row["gp"];
                            $credit_point = $row["cp"];
                            if ($letter_grade == 'D') {
                                $rest = "FAIL";
                            }
                            $totalPC += $paper_credit;
                            $totalCP += +$credit_point;
                        ?>
                        <tr>
                            <td>
                                <?php echo htmlentities($sbj_code); ?>
                            </td>
                            <td>
                                <?php echo htmlentities($paper_credit); ?>
                            </td>
                            <td>
                                <?php echo htmlentities($letter_grade); ?>
                            </td>
                            <td>
                                <?php echo htmlentities($grade_point); ?>
                            </td>
                            <td>
                                <?php echo htmlentities($credit_point); ?>
                            </td>
                        </tr>    
                        <?php
                        }
                    ?>
                    <tr>
                        <td>Total</td>
                        <td><?php echo htmlentities($totalPC); ?></td>
                        <td></td>
                        <td></td>
                        <td><?php echo htmlentities($totalCP); ?></td>
                    </tr>
                    <?php $totalPC *= 10; $sgpa = ($totalCP/$totalPC)*100;?>
                    <tr>
                        <td>SGPA</td>
                        <td colspan="4"><?php echo htmlentities(number_format($sgpa/10, 2)); ?></td>
                    </tr>
                    <tr>
                        <td>Result</td>
                        <td colspan="4"><?php echo htmlentities($rest); ?></td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</body>


</html>