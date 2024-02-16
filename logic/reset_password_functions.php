<?php
    include 'db/db_connect.php';
    session_start();
    if(isset($_POST['submit'])){
        $roll = $_SESSION['roll'];
        $password = $_POST['password'];
        $sql = "UPDATE `Student` SET `password` = ? WHERE `roll_id` = ?;";
        $stmt = mysqli_prepare($conn, $sql);
        mysqli_stmt_bind_param($stmt, "ss", $password, $roll);
        if (!mysqli_stmt_execute($stmt)) {
            header ("Location: home.php");
            mysqli_stmt_error($stmt);
        } else {
            header ("Location: alerts/psresetsuc.php");
        }
        mysqli_stmt_close($stmt);
        mysqli_close($conn);
        session_destroy();
        exit();
    }
?>