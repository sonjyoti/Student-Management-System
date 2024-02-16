<?php
    include 'db\db_connect.php';
    session_start();
    if(isset($_POST['next'])){
        $email = $_POST['email'];
        $roll = $_POST['roll'];
        $dob = $_POST['dob'];
        $sql = "SELECT `roll_id` FROM `Student` WHERE `roll_id` = ? AND `email` = ? AND `dob` = ?;";
        $stmt = mysqli_prepare($conn, $sql);
        mysqli_stmt_bind_param($stmt, "sss", $roll, $email, $dob);
        if (!mysqli_stmt_execute($stmt)) {
            mysqli_stmt_error($stmt);
        } else {
            $result = mysqli_stmt_get_result($stmt);
            if(mysqli_num_rows($result) == 0) {
                header ("Location: alerts/invalid-credentials.php");
            } else {
                $_SESSION['roll'] = $roll;
                header ("Location: reset_password.php");
            }
        }
        mysqli_stmt_close($stmt);
        mysqli_close($conn);
        exit();
    }
?>