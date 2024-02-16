<?php

include 'db/db_connect.php';

function createRoll($year, $conn)
{
    $sql = "SELECT `id` FROM `Student` ORDER BY `id` DESC LIMIT 1;";
    $stmt = mysqli_prepare($conn, $sql);
    $id = 0;
    if (!mysqli_stmt_execute($stmt)) {
        mysqli_stmt_error($stmt);
    } else {
        $result = mysqli_stmt_get_result($stmt);
        if(mysqli_num_rows($result) == 0) {
            $id = 1;
        } else {
            $tid = mysqli_fetch_assoc($result);
            $id = reset( $tid ) + 1;
        }
    }
    $year = $year % 100;
    $year = str_pad($year, 2, '0', STR_PAD_LEFT);
    $roll = str_pad($id, 4, '0', STR_PAD_LEFT);
    return "UT-" . $year . "1-023-" . $roll;
}

if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $dob = $_POST['dob'];
    $gender = $_POST['gender'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $address1 = $_POST['address_1'];
    $address2 = $_POST['address_2'];
    $indian = $_POST['citizen'];
    $state = $_POST['state'];
    $district = $_POST['district'];
    $pincode = $_POST['pincode'];
    $course = $_POST['course'];
    $semester = $_POST['semester'];
    $password = $_POST['dob'];
    $year = $_POST['admissionYear'];
    $roll = createRoll($year, $conn);

    $sql = "INSERT INTO `Student` (`roll_id`, `name`, `email`, `phone`, `dob`, `gender`, `address1`, `address2`, `indian`, `state`, `district`, `pincode`, `semester_id`, `course_id`,  `password`, `add_year`) 
        VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?);";

    $stmt = mysqli_prepare($conn, $sql);
    mysqli_stmt_bind_param($stmt, "sssssssssssiiisi",$roll, $name, $email, $phone, $dob, $gender, $address1, $address2, $indian, $state, $district, $pincode, $semester, $course, $password, $year);



    if (!mysqli_stmt_execute($stmt)) {
        mysqli_stmt_error($stmt);
    } else {
        header("Location: alerts/regformsub.php");
    }
    mysqli_stmt_close($stmt);
    mysqli_close($conn);
    exit;
}
?>