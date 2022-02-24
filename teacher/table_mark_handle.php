<?php
include"../database/config.php";
session_start();
function load_data($course,$class_id,$choose){
    include"../database/config.php";
    $sql = "SELECT *
        FROM mark_data
        LEFT JOIN student
        ON mark_data.student_id = student.student_id
        WHERE mark_data.couse_id = '$course' AND mark_data.class_id='$class_id'";
    $result = mysqli_query($conn,$sql);
    if(mysqli_num_rows($result)>0){
        while($row = mysqli_fetch_assoc($result)){
            echo"<tr>";
            echo"<td class='pt-3'>".$row['fullname']."</td>";
            echo"<td class='pt-3'>".$row['student_id']."</td>";
            if($row['midterm'] == '' && $choose == 'midterm'){
                echo"<td><input autocomplete='off' class='form-control form-control-sm' type='text' 
                    name='".$row['student_id']."'>".$row['midterm']."</input></td>";
            }else echo"<td class='pt-3'>".$row['midterm']."</td>";
            if($row['final_mark'] == '' && $choose == 'final_mark'){
                echo"<td><input autocomplete='off' class='form-control form-control-sm' type='text' 
                    name='".$row['student_id']."'>".$row['final_mark']."</input></td>";
            }else echo"<td class='pt-3'>".$row['final_mark']."</td>";
            echo"<td class='pt-3'>".$row['s_mark']."</td>";
            echo"</tr>";
        }
    }
}
if(isset($_GET["choose"]) && isset($_SESSION["CurrenCourse"]) && isset($_SESSION["CurrenClass"])){
    $choose = $_GET["choose"];
    $_SESSION["choose"] = $choose;
    $course = $_SESSION["CurrenCourse"];
    $class_id = $_SESSION["CurrenClass"];
    load_data($course,$class_id,$choose);
}
if((isset($_GET["course_id"]) && isset($_GET["class_id"]))){
    $course = $_GET["course_id"];
    $class_id = $_GET["class_id"]; 
    $choose = ''; 
    // $sql = "SELECT *
    //     FROM classes
    //     LEFT JOIN subject
    //     ON classes.subject_id = subject.subject_id 
    //     WHERE classes.couse_id = '$course' AND classes.class_id='$class_id'";
    // $result = mysqli_query($conn,$sql);
    // if(mysqli_num_rows($result)>0){
    //     while($row = mysqli_fetch_assoc($result)){
    //         echo($row['subject_name']);
    //     }
    // }
    
    $_SESSION["CurrenCourse"] = $course;
    $_SESSION["CurrenClass"] = $class_id;
    load_data($course,$class_id,$choose);
}
    
?>