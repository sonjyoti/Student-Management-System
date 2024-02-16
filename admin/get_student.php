<?php 
    if(isset($_SESSION['course']) && isset($_SESSION['semester'])) {
        $course = $_SESSION['course'];
        $semester = $_SESSION['semester'];

        $sql = "SELECT `Student`.`id` AS `st_id`, `Student`.`roll_id` AS `roll_id` FROM `Student`, `Course` WHERE `Student`.`course_id` = `Course`.`id` AND `Student`.`course_id` = ? AND `Student`.`semester_id` = ?;";
    
        $stmt = mysqli_prepare($conn, $sql);
        mysqli_stmt_bind_param($stmt, "ii", $course, $semester);

        if (!mysqli_stmt_execute($stmt)) {
            mysqli_stmt_error($stmt);
        } else {
            $std_result = mysqli_stmt_get_result($stmt);
            $std_options = array();
            while ($std_row = mysqli_fetch_assoc($std_result)) {
                if (!in_array($std_row['st_id'], $rst_options)) {
                    $std_options[] = $std_row;
                }
            }
            $std_options_json = json_encode($std_options);
        }
    }
    else {
        echo "No session";
    }
    