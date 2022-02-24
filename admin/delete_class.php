<?php
    include"../database/config.php";
    $class_id = $_GET['id'];
    $course_id = $_GET['course_id'];
    $query = "DELETE FROM classes WHERE class_id='$class_id' AND couse_id='$course_id'";
    mysqli_query($conn, $query) or die("Cập nhật thất bại!");
    header("location:list_class.php");
    
?>