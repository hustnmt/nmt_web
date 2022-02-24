<?php
    session_start();
    include"../database/config.php";
    if(isset($_GET['subject_id'])){
        $subject_id = $_GET['subject_id'];
        $sql = "SELECT * FROM subject
                LEFT JOIN khoa_data
                ON subject.Ma_Khoa = khoa_data.Ma_Khoa
                WHERE subject.subject_id = '$subject_id'";
        $result = mysqli_query($conn,$sql);
        if(mysqli_num_rows($result)>0){
            while($row = mysqli_fetch_assoc($result)){
                echo"<tr>";
                echo"<td>".$row['subject_name']."</td>";
                echo"<td>".$row['subject_id']."</td>";
                echo"<td>".$row['Ten_Khoa']."</td>";
                echo"<td>".$row['So_Tin']."</td>";
                echo"<td>".$row['Trong_So']."</td>";
                echo"<td><a href = 'change_in4_subject.php?id=".$row['subject_id'] ."' class='ml-3 btn btn-warning btn-circle btn-sm text-center'>
                <i class='fas fa-exclamation-triangle'></i>
                </a>
                <a href = 'delete_subject.php?id=".$row['subject_id'] ."' class='ml-2 btn btn-danger btn-circle btn-sm text-right' >
                <i class='fas fa-trash '></i></a>
                </td>";
                echo"</tr>";
            }
        }
    }
    else{
        $sql = "SELECT * FROM subject
        LEFT JOIN khoa_data
        ON subject.Ma_Khoa = khoa_data.Ma_Khoa
        ORDER BY subject.time DESC
        LIMIT 10";
        $result = mysqli_query($conn,$sql);
        if(mysqli_num_rows($result)>0){
            while($row = mysqli_fetch_assoc($result)){
                echo"<tr>";
                echo"<td>".$row['subject_name']."</td>";
                echo"<td>".$row['subject_id']."</td>";
                echo"<td>".$row['Ten_Khoa']."</td>";
                echo"<td>".$row['So_Tin']."</td>";
                echo"<td>".$row['Trong_So']."</td>";
                echo"<td><a href = 'change_in4_subject.php?id=".$row['subject_id'] ."' class='ml-3 btn btn-warning btn-circle btn-sm text-center'>
                <i class='fas fa-exclamation-triangle'></i>
                </a>
                <a href = 'delete_subject.php?id=".$row['subject_id'] ."' class='ml-2 btn btn-danger btn-circle btn-sm text-right' >
                <i class='fas fa-trash '></i></a>
                </td>";
                echo"</tr>";
    }
}
    }
?>