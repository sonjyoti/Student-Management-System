<?php
    if(isset($_POST['submit'])){
        $course = $_POST['course'];
        $semester = $_POST['semester'];
        $_SESSION['course'] = $course;
        $_SESSION['semester'] = $semester;
        header ("Location: subjects.php");
    }
?>