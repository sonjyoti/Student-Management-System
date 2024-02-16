<?php 
    include '../db/db_connect.php';
    
    $course = $_SESSION['course'];
    $semester = $_SESSION['semester'];

    $sql = "SELECT `Student`.`roll_id` AS `roll_id`, `Course`.`course_name` AS `course` , `Semester`.`semester` AS `semester`, `Subject`.`subject_name` AS `subject_name`, `Subject`.`subject_code` AS `subject_code`, `Result`.`grade_point` AS `grade_point`, `Result`.`letter_grade` AS `letter_grade`, `Result`.`credit_point` AS `credit_point` FROM `Student`, `Subject`, `Result`, `Semester`, `Course` WHERE `Result`.`student_id` = `Student`.`id` AND `Result`.`semester` = `Semester`.`id` AND `Student`.`course_id` = `Course`.`id` AND`Result`.`subject_id` = `Subject`.`id` AND `Student`.`course_id` = ? AND `Result`.`semester` = ?;";
    
    $stmt = mysqli_prepare($conn, $sql);
    mysqli_stmt_bind_param($stmt, "ii", $course, $semester);

    if (!mysqli_stmt_execute($stmt)) {
        mysqli_stmt_error($stmt);
    } else {
        $result = mysqli_stmt_get_result($stmt);
        $count = 0;
        $totalMarksStd = array();
        $stdRollId = '';
        $semester = 0;
        if (mysqli_num_rows($result) > 0) {
            while ($book_row = mysqli_fetch_assoc($result)) {
                $tmpStdRollId = $book_row['roll_id'];
                $tmpSemester = $book_row['semester'];
                if ($stdRollId != $tmpStdRollId && $semester != $tmpSemester){
                    $stdRollId = $tmpStdRollId;
                    $semester = $tmpSemester;
                }
                $credit_point = $book_row['credit_point'];
                if (!isset($totalMarksStd[$stdRollId])) {
                    $totalMarksStd[$stdRollId] = 0;
                }
                $totalMarksStd[$stdRollId] += $credit_point; 
            }
        }
    }
    
    unset($_SESSION['course']);
    unset($_SESSION['semester']);
?>