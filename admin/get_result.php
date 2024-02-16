<?php
    include '../db/db_connect.php';
    if(isset($_SESSION['course']) && isset($_SESSION['semester'])) {
        $course = $_SESSION['course'];
        $semester = $_SESSION['semester'];
        $sql = "SELECT DISTINCT `Result`.`student_id` AS `std_id` FROM `Student`, `Course`, `Semester`, `Result` WHERE `Result`.`student_id` = `Student`.`id` AND `Student`.`course_id` = `Course`.`id` AND `Result`.`semester` = `Semester`.`id` AND `Student`.`course_id` = ? AND `Result`.`semester` = ?;";

        $stmt = mysqli_prepare($conn, $sql);
        mysqli_stmt_bind_param($stmt, "ii", $course, $semester);

        if (!mysqli_stmt_execute($stmt)) {
            mysqli_stmt_error($stmt);
        } else {
            $rst_result = mysqli_stmt_get_result($stmt);
            $rst_options = array();
            while ($rst_row = mysqli_fetch_assoc($rst_result)) {
                array_push($rst_options, $rst_row['std_id']);
            }
            $rst_options_json = json_encode($rst_options);
        }
    }   
    else {
        echo "No session";
    }
