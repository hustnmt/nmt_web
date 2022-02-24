<?php
    include"../database/config.php";
    $subject_id = $_GET['id'];
    $query = "DELETE FROM subject WHERE subject_id='$subject_id'";
    mysqli_query($conn, $query) or die("Cập nhật thất bại!");
    header("location:subject_list.php");
    
?>