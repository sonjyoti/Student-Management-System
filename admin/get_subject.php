<?php 
    if(isset($_SESSION['course']) && isset($_SESSION['semester'])) {
        $course = $_SESSION['course'];
        $semester = $_SESSION['semester'];
        $sql = "SELECT `Subject`.`id` AS `sbj_id`, `Subject`.`subject_code` AS `sbj_code` FROM `Subject`, `Course`, `Semester` WHERE `Subject`.`course_id` = `Course`.`id` AND `Subject`.`semester_id` = `Semester`.`id` AND `Subject`.`course_id` = ? AND `Subject`.`semester_id` = ?;";

        $stmt = mysqli_prepare($conn, $sql);
        mysqli_stmt_bind_param($stmt, "ii", $course, $semester);

        if (!mysqli_stmt_execute($stmt)) {
            mysqli_stmt_error($stmt);
        } else {
            $sbj_result = mysqli_stmt_get_result($stmt);
            $sbj_options = array();
            while ($sbj_row = mysqli_fetch_assoc($sbj_result)) {
                $sbj_options[] = $sbj_row;
            }
        }
    }
    else {
        echo "No session";
    }
