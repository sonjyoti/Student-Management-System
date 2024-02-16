<?php 
    include '../db/db_connect.php';
    $st_id = $_SESSION['studentId'];
    $sql = "SELECT `Course`.`course_code` AS `course` FROM `Course`, `Student` WHERE `Student`.`id` = ? AND `Student`.`course_id` = `Course`.`id`;";
    $stmt = mysqli_prepare($conn, $sql);
    mysqli_stmt_bind_param($stmt, "i", $st_id);
    if (!mysqli_stmt_execute($stmt)) {
        mysqli_stmt_error($stmt);
    } else {
        $result = mysqli_stmt_get_result($stmt);
        $row = mysqli_fetch_assoc($result);
        $course = $row['course'];
    }