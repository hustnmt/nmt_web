<?php
session_start();
include "../database/config.php";
if(isset($_SESSION['CurrenAdmin'])){
    if(isset($_GET['submit']) &&  $_GET["student_id"] != '' && $_GET["full_name"] != '' &&  $_GET["address"] != '' && $_GET["khoa"] != '' && $_GET["email"] != '' && $_GET["birth_day"] != '' ){
        $student_id = $_GET['student_id'];
        $email = $_GET['email'];
        $full_name = $_GET['full_name'];
        $birth_day = $_GET['birth_day'];
        $address = $_GET["address"];
        $khoa = $_GET["khoa"];
        $sql = "SELECT * FROM student WHERE student_id='$student_id'";
        $result = mysqli_query($conn,$sql);
        
        if(mysqli_num_rows($result) > 0){
            return;
        }
        else{
            $sql = "INSERT INTO student 
                    (fullname,student_id,birth_day,khoa,address,email) 
                    VALUES ('$full_name','$student_id','$birth_day','$khoa','$address','$email')";
            mysqli_query($conn,$sql);
        }
        header("Location:add_student.php");
    }
} else {
    header('location:../index.php');
}
?>