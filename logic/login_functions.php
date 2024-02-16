<?php
include 'db/db_connect.php';
session_start();

if (isset($_SESSION['adminId'])) {
    header ("Location: admin/admin-dashboard.php");
}

else if (isset($_SESSION['studentId'])) {
    header ("Location: student/student_dashboard.php");
}

else {
    if (isset($_POST['submit'])) {
        $username = $_POST['roll'];
        $password = $_POST['password'];
        $userType = mb_substr($username, 0, 3);
        if ($userType == 'UT-') {
            $sql = "SELECT `id` FROM `Student` WHERE `roll_id` = ? AND `password` = ?;";
            $stmt = mysqli_prepare($conn, $sql);
            mysqli_stmt_bind_param($stmt, "ss", $username, $password);
            if (!mysqli_stmt_execute($stmt)) {
                mysqli_stmt_error($stmt);
            } else {
                $result = mysqli_stmt_get_result($stmt);
                if(mysqli_num_rows($result) == 0) {
                    header ("Location: alerts/invalid-credentials.php");
                } else {
                    if($row = mysqli_fetch_assoc($result)){
                        $id = $row["id"];
                        $_SESSION['studentId'] = $id;
                    }
                    header ("Location: student/student_dashboard.php");
                }
            }
        }
        else{
            $sql = "SELECT `id` FROM `Admin` WHERE `username` = ? AND `password` = ?;";
            $stmt = mysqli_prepare($conn, $sql);
            mysqli_stmt_bind_param($stmt, "ss", $username, $password);
            if (!mysqli_stmt_execute($stmt)) {
                mysqli_stmt_error($stmt);
            } else {
                $result = mysqli_stmt_get_result($stmt);
                if(mysqli_num_rows($result) == 0) {
                    header ("Location: alerts/invalid-credentials.php");
                } else {
                    if($row = mysqli_fetch_assoc($result)){
                        $id = $row["id"];
                        $_SESSION['adminId'] = $id;
                    }
                    header ("Location: admin/admin-dashboard.php");
                }
            }
        }
        mysqli_stmt_close($stmt);
        mysqli_close($conn);
        exit;
    }
}
?>