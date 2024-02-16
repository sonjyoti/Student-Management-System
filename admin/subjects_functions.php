<?php 
    include '../db/db_connect.php';
    $course = $_SESSION['course'];
    $semester = $_SESSION['semester'];
    if($course == 100 && $semester == 100) {
        $sql = "SELECT Course.course_code AS course_code, Semester.semester AS semester, Subject.subject_code AS subject_code, Subject.subject_name AS subject_name, Subject.id AS id FROM Subject, Course, Semester WHERE Subject.course_id = Course.id AND Subject.semester_id = Semester.id;";
        $stmt = mysqli_prepare($conn, $sql);
    }
    else if($course == 100 && $semester != 100) {
        $sql = "SELECT Course.course_code AS course_code, Semester.semester AS semester, Subject.subject_code AS subject_code, Subject.subject_name AS subject_name, Subject.id AS id FROM Subject, Course, Semester WHERE Semester.id = ? AND Subject.course_id = Course.id AND Subject.semester_id = Semester.id;";
        $stmt = mysqli_prepare($conn, $sql);
        mysqli_stmt_bind_param($stmt, "i", $semester);
    } 
    else if($course != 100 && $semester == 100) {
        $sql = "SELECT Course.course_code AS course_code, Semester.semester AS semester, Subject.subject_code AS subject_code, Subject.subject_name AS subject_name, Subject.id AS id FROM Subject, Course, Semester WHERE Course.id = ? AND Subject.course_id = Course.id AND Subject.semester_id = Semester.id;";
        $stmt = mysqli_prepare($conn, $sql);
        mysqli_stmt_bind_param($stmt, "i", $course);
    } 
    else {
        $sql = "SELECT Course.course_code AS course_code, Semester.semester AS semester, Subject.subject_code AS subject_code, Subject.subject_name AS subject_name, Subject.id AS id FROM Subject, Course, Semester WHERE Course.id = ? AND Semester.id = ? AND Subject.course_id = Course.id AND Subject.semester_id = Semester.id;";
        $stmt = mysqli_prepare($conn, $sql);
        mysqli_stmt_bind_param($stmt, "ii", $course, $semester);
    }
    if (!mysqli_stmt_execute($stmt)) {
        mysqli_stmt_error($stmt);
    } 
    else {
        $result = mysqli_stmt_get_result($stmt);
        $count = 0;
    }
    unset($_SESSION['semester']);
    unset($_SESSION['course']);
?>