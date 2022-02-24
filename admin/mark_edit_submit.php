<?php
include "../database/config.php";
if(isset($_SESSION['CurrenAdmin'])){
    if(isset($_GET['update_mark']) &&  $_GET["student_id"] != '' && $_GET["class_id"] != '' && $_GET["course_id"] != '' && $_GET["midterm"] != ''&& $_GET["final_mark"] != ''&& $_GET["s_mark"] != ''){
        $student_id = $_GET['student_id'];
        $class_id = $_GET['class_id'];
        $course_id = $_GET['course_id'];
        $midterm = $_GET['midterm'];
        $final_mark = $_GET['final_mark'];
        $s_mark = $_GET['s_mark'];
        $sql = "SELECT * FROM mark_data WHERE student_id='$student_id' AND class_id='$class_id' AND couse_id='$couse_id'";
        $result = mysqli_query($conn,$sql);
        $sql = "SELECT * FROM student WHERE student_id='$student_id'";
        $std_check = mysqli_query($conn,$sql);
        if(mysqli_num_rows($result) > 0 or mysqli_num_rows($std_check) == 0){
            echo '<script language="javascript">';
            echo 'alert("Không tốn tại!")';
            echo '</script>';
        }
        else{
            $sql = "UPDATE mark_data
                    SET midterm = '$midterm', final_mark = '$final_mark', s_mark = '$s_mark'
                    WHERE class_id='$class_id' AND couse_id='$course_id' AND student_id ='$student_id'";
            mysqli_query($conn,$sql);
            echo '<script language="javascript">';
            echo 'alert("Successful!")';
            echo '</script>';
            header("location: $url");
            
        }
    }
} else {
    header('location:../index.php');
}
?>