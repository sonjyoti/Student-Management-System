<?php
    include '../db/db_connect.php';
    $sql = "SELECT `course_name`, `course_code`, `id` FROM `Course`;";
    $stmt = mysqli_prepare($conn, $sql);
    if (!mysqli_stmt_execute($stmt)) {
        mysqli_stmt_error($stmt);
    } else {
        $result = mysqli_stmt_get_result($stmt);
        $count = 0;
    }
?>