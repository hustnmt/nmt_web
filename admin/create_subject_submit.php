<?php
session_start();
include "../database/config.php";
if(isset($_SESSION['CurrenAdmin'])){
    if(isset($_POST['submit']) &&  $_POST["subject_id"] != '' && $_POST["subject_name"] != '' &&  $_POST["So_Tin"] != '' && $_POST["khoa"] != '' && $_POST["Trong_So"] != '' ){
        $subject_id = $_POST['subject_id'];
        $Trong_So = $_POST['Trong_So'];
        $subject_name = $_POST['subject_name'];
        $So_Tin = $_POST["So_Tin"];
        $khoa = $_POST["khoa"];
        $sql = "SELECT * FROM subject WHERE subject_id='$subject_id'";
        $result = mysqli_query($conn,$sql);
        
        if(mysqli_num_rows($result) > 0){
            echo '<script language="javascript">';
            echo 'alert("Subject ID already exists!")';
            echo '</script>';
        }
        else{
            $sql = "INSERT INTO subject (subject_name,subject_id,Ma_Khoa,So_Tin,Trong_So) VALUES ('$subject_name','$subject_id','$khoa','$So_Tin','$Trong_So')";
            mysqli_query($conn,$sql);
            echo '<script language="javascript">';
            echo 'alert("Successful!")';
            echo '</script>';
            
        }
        header('location:adm_create_subject.php');
    }
} else {
    header('location:../index.php');
}
?>