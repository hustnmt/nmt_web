<?php
session_start();
include "../database/config.php";
if(isset($_SESSION['CurrenAdmin'])){
    if(isset($_POST['submit']) &&  $_POST["subject_id"] != '' && $_POST["class_id"] != '' &&  $_POST["teacher_id"] != '' && $_POST["couse_id"] != '' ){
        $subject_id = $_POST['subject_id'];
        $class_id = $_POST['class_id'];
        $teacher_id = $_POST["teacher_id"];
        $couse_id = $_POST["couse_id"];
        $sql = "SELECT * FROM classes WHERE class_id='$class_id' AND couse_id='$couse_id'";
        $result = mysqli_query($conn,$sql);
        
        if(mysqli_num_rows($result) > 0){
            echo '<script language="javascript">';
            echo 'alert("Subject ID already exists!")';
            echo '</script>';
        }
        else{
            $sql = "INSERT INTO classes (class_id,subject_id,couse_id,teacher_id) 
                    VALUES ('$class_id','$subject_id','$couse_id','$teacher_id')";
            mysqli_query($conn,$sql);
        }
    }
    header("location:adm_create_class.php");
} else {
    header('location:../index.php');
}
?>