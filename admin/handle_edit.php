<?php
include"../database/config.php";
if(isset($_POST['update-in4-teacher'])){
    $email = $_POST['id'];
    $name = $_POST['full_name'];
    $date = $_POST['birth_day'];
    $khoa = $_POST['khoa'];
    $address = $_POST['address'];
    $phone = $_POST['phone'];
    $query = "UPDATE user SET fullname='$name', birthday='$date', address='$address', phone='$phone' WHERE email='$email'";
    mysqli_query($conn, $query) or die("Cập nhật thất bại!");
    header("location:list_teacher.php");
}
?>