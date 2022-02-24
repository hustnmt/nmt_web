<?php
    session_start();
    include"../database/config.php";
    if(isset($_GET['choose'])){
        $email = $_SESSION['CurrenUser'];
        $course = $_GET['choose'];
        unset($_GET['choose']);
        $sql = "SELECT * FROM classes 
                LEFT JOIN subject
                ON subject.subject_id = classes.subject_id
                WHERE classes.teacher_id='$email' AND classes.couse_id='$course' 
                ORDER BY couse_id ASC";
        $result = mysqli_query($conn,$sql);
        if(mysqli_num_rows($result)>0){
            while($row = mysqli_fetch_assoc($result)){
                echo"<tr>";
                echo"<td>".$row['class_id']."</td>";
                echo"<td>".$row['subject_name']."</td>";
                echo"<td>".$row['subject_id']."</td>";
                echo"<td>".$row['couse_id']."</td>";
                echo"<td>".$row['class_size']."</td>";
                echo"</tr>";
            }
        }
    }else{
        $email = $_SESSION['CurrenUser'];
        $sql = "SELECT * FROM classes 
                LEFT JOIN subject
                ON subject.subject_id = classes.subject_id
                WHERE classes.teacher_id='$email'
                ORDER BY couse_id ASC";
        $result = mysqli_query($conn,$sql);
        if(mysqli_num_rows($result)>0){
            while($row = mysqli_fetch_assoc($result)){
                echo"<tr>";
                echo"<td>".$row['class_id']."</td>";
                echo"<td>".$row['subject_name']."</td>";
                echo"<td>".$row['subject_id']."</td>";
                echo"<td>".$row['couse_id']."</td>";
                echo"<td>".$row['class_size']."</td>";
                echo"</tr>";
            }
        }
    }
?>