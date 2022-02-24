<?php
include "../database/config.php";
session_start();
if(isset($_SESSION['CurrenAdmin'])){
    if(isset($_GET['submit']) &&  $_GET["student_id"] != '' && $_GET["class_id"] != '' && $_GET["course_id"] != ''){
        $student_id = $_GET['student_id'];
        $class_id = $_GET['class_id'];
        $couse_id = $_GET['course_id'];
        $url= "add_to_class.php?class_id=".$class_id."&course_id=".$couse_id;
        $sql = "SELECT * FROM mark_data WHERE student_id='$student_id' AND class_id='$class_id' AND couse_id='$couse_id'";
        $result = mysqli_query($conn,$sql);
        $sql = "SELECT * FROM student WHERE student_id='$student_id'";
        $std_check = mysqli_query($conn,$sql);
        if(mysqli_num_rows($result) > 0 or mysqli_num_rows($std_check) == 0){
            echo '<script language="javascript">';
            echo 'alert("Subject ID already exists!")';
            echo '</script>';
            header("location: $url");
        }
        else{
            $sql = "SELECT * FROM classes WHERE class_id='$class_id' AND couse_id='$couse_id'";
            $result = mysqli_query($conn,$sql);
            $data = mysqli_fetch_assoc($result);
            $subject_id = $data['subject_id'];
            $class_size = $data['class_size'];
            $class_size = (int)$class_size;
            $class_size = $class_size + 1;
            $sql = "UPDATE classes
                    SET class_size = $class_size
                    WHERE class_id='$class_id' AND couse_id='$couse_id'";
            mysqli_query($conn,$sql);
            $sql = "INSERT INTO mark_data (student_id,subject_id,class_id,couse_id) VALUES ('$student_id','$subject_id','$class_id','$couse_id')";
            mysqli_query($conn,$sql);
            echo '<script language="javascript">';
            echo 'alert("Successful!")';
            echo '</script>';
            header("location: $url");
            
        }
    }
    else{
        $url= "add_to_class.php?class_id=".$_GET['class_id']."&course_id=".$_GET['course_id'];
        header("location: $url");
    }
} else {
    header('location:../index.php');
}
?>