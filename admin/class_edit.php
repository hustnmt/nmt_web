<?php
include"../database/config.php";
if(isset($_POST['update-in4-class'])){
    $class_id = $_POST['class_id'];
    $course_id = $_POST['course_id'];
    $subject_id = $_POST['subject_id'];
    $teacher_id = $_POST['teacher_id'];
    $query = "UPDATE classes 
              SET subject_id='$subject_id', teacher_id='$teacher_id'
              WHERE class_id='$class_id' AND couse_id = '$course_id'";
    mysqli_query($conn, $query) or die("Cập nhật thất bại!");
    header("location:list_class.php");
}
?>