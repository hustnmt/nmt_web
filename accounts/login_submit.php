<?php
    session_start();
    include "../database/config.php";
    if(isset($_POST['submit']) && $_POST['email'] != '' && $_POST['password']){
        $email = $_POST['email'];
        $password = $_POST['password'];
        $password = md5($password);
        $sql = "SELECT * FROM user WHERE email = '$email' AND password = '$password'";
        $result = mysqli_query($conn,$sql);

        if(mysqli_num_rows($result) > 0){
            $row = mysqli_fetch_array($result);
            $_SESSION['CurrenUser'] = $row['email'];
            if($row['level'] == 1){
                $_SESSION['CurrenAdmin'] = $row['level'];
                header("location:../admin/admin.php");
            } else {
                header('location:../teacher/index.php');
            }
        } else{
            header("location:login.php");
        }
    } else{
        header("location:login.php");
    }
?>