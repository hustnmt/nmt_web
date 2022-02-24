<?php
include"../database/config.php";
if(isset($_GET['update_in4_student'])){
    $student_id = $_GET['student_id'];
    $email = $_GET['email'];
    $full_name = $_GET['full_name'];
    $birth_day = $_GET['birth_day'];
    $address = $_GET["address"];
    $khoa = $_GET["khoa"];
    $query = "UPDATE student 
              SET fullname='$full_name', birth_day='$birth_day', address='$address', email='$email', khoa='$khoa'
              WHERE student_id = '$student_id'";
    echo($query);
    mysqli_query($conn, $query) or die("Cập nhật thất bại!");
    header("location:search_model.php");
}
?>
