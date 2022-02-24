<?php
  session_start();
  include '../database/config.php';

  if(isset($_SESSION['CurrenAdmin'])){

    if($_GET["address"] != '' && $_GET["phone"] != '' && $_GET["khoa"] != '' && $_GET["email"] != '' && $_GET["password"] != '' && $_GET["re_password"] != ''&& $_GET["birth_day"] != '' && $_GET["full_name"] != '' && isset($_GET['submit'])){
      $email = $_GET['email'];
      $full_name = $_GET['full_name'];
      $birth_day = $_GET['birth_day'];
      $address = $_GET["address"];
      $phone = $_GET["phone"];
      $khoa = $_GET["khoa"];
      $password = $_GET['password'];
      $re_password = $_GET['re_password'];
      $level = 0;
      if($khoa == 'pdt') $level = 1;
      if($password != $re_password){
        header("location:register.php");
        die();
      }
  
      $sql = "SELECT * FROM user WHERE email ='$email'";
      $result = mysqli_query($conn,$sql);
      
      if(mysqli_num_rows($result) > 0){
        header("location:register.php");
      }
      else{
        $password = md5($password);
        $sql = "INSERT INTO user (email,fullname,birthday,address,phone,Ma_Khoa,password,level) VALUES ('$email','$full_name','$birth_day','$address','$phone','$khoa','$password','$level')";
        mysqli_query($conn,$sql);
        header("location:register.php");
      }
    }
    else{
      header("location:register.php");
    }
  } else {
    header('location:../index.php');
  }
  
?>