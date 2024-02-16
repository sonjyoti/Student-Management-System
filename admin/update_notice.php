<?php
    if (isset($_POST['updateNotice'])) {
        $notice_id = $_GET['nid'];
        $title = $_POST['title'];
        $desc = $_POST['des'];
        $sql = "UPDATE `Notice` SET `title` = ?, `des` = ? WHERE `id` = ?;";
        $stmt = mysqli_prepare($conn, $sql);
        mysqli_stmt_bind_param($stmt, "ssi", $title, $desc, $notice_id);
        if (!mysqli_stmt_execute($stmt)) { 
            mysqli_stmt_error($stmt);
        } else { 
            header("Location: manage_notice.php");
        }
    }
    