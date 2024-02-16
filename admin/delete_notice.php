<?php 
    include 'includes/auth.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <?php
    include 'includes/head.php';
    ?>
    <title>Delete Alert</title>
</head>

<style>
    .container {
    text-align: center;
    background-color: #fff;
    height: 150px;
    width: 500px;
    padding: 20px;
    margin-top: 20%;
    border-radius: 5px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    }

    button{
        color: white;
        width: 150px;
        border: none;
    }
</style>

<body class="top-navbar-fixed" style="background-color: grey;">
    <div class="container" style="padding-top: 30px;">
        <p style="font-size: 18px;"><b>Are you sure you want to delete this notice?</b></p>
        <div class="buttons">
            <a href="delete_notice_functions.php?nid=<?php echo htmlentities($_GET['nid']); ?>"><button style="background-color: green;"><b>Yes, Delete</b></button></a>
            <a href="manage_notice.php"><button style="background-color: red;"><b>Cancel</b></button></a>
        </div>
    </div>
</body>

</html>