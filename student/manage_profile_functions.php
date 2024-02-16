<?php 
include '../db/db_connect.php';
    if(isset($_SESSION['studentId'])){
        $studentId =  $_SESSION['studentId'];
        $sql = "SELECT `roll_id`, `name`, `email`, `phone`, `dob`, `gender`, `address1`, `address2`, `state`, `district`, `pincode` FROM `Student` WHERE id = ?;";
        $stmt = mysqli_prepare($conn, $sql);
        mysqli_stmt_bind_param($stmt, "i", $studentId);
        if (!mysqli_stmt_execute($stmt)) {
            mysqli_stmt_error($stmt);
        } 
        else {
            $result = mysqli_stmt_get_result($stmt);
            $book_row = mysqli_fetch_assoc($result);
            $name = $book_row["name"];
            $email = $book_row["email"];
            $phone = $book_row["phone"];
            $dob = date("d-m-Y", strtotime($book_row["dob"])); 
            $gender = $book_row["gender"];
            $address1 = $book_row["address1"];
            $address2 = $book_row["address2"];
            $state = $book_row["state"];
            $district = $book_row["district"];
            $pincode = $book_row["pincode"];
        }
    }
?>