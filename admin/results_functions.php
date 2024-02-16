<?php 
    include '../db/db_connect.php';
    
    $course = $_SESSION['course'];
    $semester = $_SESSION['semester'];
    
    $sql = "SELECT `Student`.`roll_id` AS `roll_id`, `Course`.`course_code` AS `course_name`, `Semester`.`semester` AS `semester`, `Result`.`subject_id` AS `subject_id`, `Result`.`credit_point` AS `credit_point`, `Result`.`letter_grade` AS `letter_grade`, `Subject`.`paper_credit` AS `paper_credit` FROM `Student`, `Subject`, `Result`, `Semester`, `Course` WHERE `Result`.`student_id` = `Student`.`id` AND `Result`.`semester` = `Semester`.`id` AND `Student`.`course_id` = `Course`.`id` AND`Result`.`subject_id` = `Subject`.`id` AND `Student`.`course_id` = ? AND `Result`.`semester` = ?;";
    
    $stmt = mysqli_prepare($conn, $sql);
    mysqli_stmt_bind_param($stmt, "ii", $course, $semester);
    
    if (!mysqli_stmt_execute($stmt)) {
        echo mysqli_stmt_error($stmt);
    } else {
        $result = mysqli_stmt_get_result($stmt);
        $totalMarksByStudent = [];
        $stdResult = "PASS";
        $count = 0;
        $totalMarks = 0;
    
        while ($book_row = mysqli_fetch_assoc($result)) {
            $studentId = $book_row['roll_id'];
            $semester = $book_row['semester'];
            $marks = $book_row['credit_point'];
            $totalMarks += $book_row['paper_credit'];
            $letterGrade = $book_row['letter_grade'];
            $course = $book_row['course_name'];
            if ($letterGrade === "D") {
                $stdResult = "FAIL";
            }
    
            $key = "$studentId,$semester,$stdResult";
    
            if (!isset($totalMarksByStudent[$key])) {
                $totalMarksByStudent[$key] = 0;
            }
    
            $totalMarksByStudent[$key] += $marks;
        }
        $totalMarks *= 10;
    }
    unset($_SESSION['semester']);
    unset($_SESSION['course']);
