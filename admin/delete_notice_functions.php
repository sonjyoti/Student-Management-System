<?php
    include '../db/db_connect.php';
    $notice_id = $_GET['nid'];
    $sql = "DELETE FROM `Notice` WHERE `id` = ?;";
    $stmt = mysqli_prepare($conn, $sql);
    mysqli_stmt_bind_param($stmt, "i", $notice_id);

    if (!mysqli_stmt_execute($stmt)) {
        mysqli_stmt_error($stmt);
    } else {
        header("Location: admin-dashboard.php");
    }