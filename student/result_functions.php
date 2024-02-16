<?php
    $sql = "SELECT `Subject`.`paper_credit` AS `pc`, `Subject`.`subject_code` AS `sc`, `Result`.`grade_point` AS `gp`, `Result`.`letter_grade` AS `lp`, `Result`.`credit_point` AS `cp` FROM `Student`, `Result`, `Subject`, `Semester` WHERE `Result`.`student_id` = ? AND `Result`.`semester` = ? and `Result`.`student_id` = `Student`.`id` AND `Result`.`semester` = `Semester`.`id` AND `Result`.`Subject_id` = `Subject`.`id`;";
    $stmt = mysqli_prepare($conn, $sql);
    mysqli_stmt_bind_param($stmt, "ii", $st_id, $semester);
    if (!mysqli_stmt_execute($stmt)) {
        mysqli_stmt_error($stmt);
    } else {
        $result = mysqli_stmt_get_result($stmt);
    }
    unset($_SESSION['semester']);
    unset($_SESSION['course']);
