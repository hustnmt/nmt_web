<?php
    include"../database/config.php";
    $student_id = $_GET['student_id'];
    $class_id = $_GET['class_id'];
    $course_id = $_GET['course_id'];
    $sql = "SELECT * FROM classes WHERE class_id='$class_id' AND couse_id='$course_id'";
    $result = mysqli_query($conn,$sql);
    $data = mysqli_fetch_assoc($result);
    $class_size = $data['class_size'];
    $class_size = (int)$class_size;
    $class_size = $class_size - 1;
    $sql = "UPDATE classes
            SET class_size = $class_size
            WHERE class_id='$class_id' AND couse_id='$course_id'";
    mysqli_query($conn,$sql);
    $url= "add_to_class.php?class_id=".$class_id."&course_id=".$course_id;
    $query = "DELETE FROM mark_data 
    WHERE student_id='$student_id' AND class_id='$class_id' AND couse_id='$course_id'";
    mysqli_query($conn, $query) or die("Cập nhật thất bại!");
    header("location: $url");
?>