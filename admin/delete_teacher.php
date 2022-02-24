<?php
    include"../database/config.php";
    $email = $_GET['id'];
    $query = "DELETE FROM user WHERE email='$email'";
    mysqli_query($conn, $query) or die("Cập nhật thất bại!");
    header("location:list_teacher.php");
    
?>