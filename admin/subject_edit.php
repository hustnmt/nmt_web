<?php
include"../database/config.php";
if(isset($_POST['update-in4-subject'])){
    $subject_id = $_POST['subject_id'];
    $subject_name = $_POST['subject_name'];
    $khoa = $_POST['khoa'];
    $So_Tin = $_POST['So_Tin'];
    $Trong_So = $_POST['Trong_So'];
    $query = "UPDATE subject 
              SET subject_name='$subject_name', Ma_Khoa='$khoa', So_Tin='$So_Tin', Trong_So='$Trong_So' 
              WHERE subject_id='$subject_id'";
    mysqli_query($conn, $query) or die("Cập nhật thất bại!");
    header("location:subject_list.php");
}
?>