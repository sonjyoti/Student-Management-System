<?php 
    include '../db/db_connect.php';
    $course = $_SESSION['course'];
    $semester = $_SESSION['semester'];
    if($course == 100 && $semester == 100){
        $sql = "SELECT Student.roll_id AS roll_id, Course.course_name AS course_name, Semester.semester AS semester, Student.id AS id FROM Student, Course, Semester WHERE student.course_id = course.id AND student.semester_id = semester.id;";
        $stmt = mysqli_prepare($conn, $sql);
    }
    else if($course == 100 && $semester != 100){
        $sql = "SELECT Student.roll_id AS roll_id, Course.course_name AS course_name, Semester.semester AS semester, Student.id AS id FROM Student, Course, Semester WHERE Semester.id = ? AND Student.course_id = Course.id AND Student.semester_id = Semester.id;";
        $stmt = mysqli_prepare($conn, $sql);
        mysqli_stmt_bind_param($stmt, "i", $semester);
    } 
    else if($course != 100 && $semester == 100){
        $sql = "SELECT Student.roll_id AS roll_id, Course.course_name AS course_name, Semester.semester AS semester, Student.id AS id FROM Student, Course, Semester WHERE Course.id = ? AND Student.course_id = Course.id AND Student.semester_id = Semester.id;";
        $stmt = mysqli_prepare($conn, $sql);
        mysqli_stmt_bind_param($stmt, "i", $course);
    } 
    else{
        $sql = "SELECT Student.roll_id AS roll_id, Course.course_name AS course_name, Semester.semester AS semester, Student.id AS id FROM Student, Course, Semester WHERE Course.id = ? AND Semester.id = ? AND Student.course_id = Course.id AND Student.semester_id = Semester.id;";
        $stmt = mysqli_prepare($conn, $sql);
        mysqli_stmt_bind_param($stmt, "ii", $course, $semester);
    }
    if (!mysqli_stmt_execute($stmt)) {
        mysqli_stmt_error($stmt);
    } else {
        $result = mysqli_stmt_get_result($stmt);
        $count = 0;
    }
    unset($_SESSION['semester']);
    unset($_SESSION['course']);
?>