<?php
    session_start();
    echo'<div class=" mt-2 text-right col-8 row">';
        if(isset($_SESSION['CurrenClass'])){
            echo"Mã lớp: ".$_SESSION['CurrenClass'];
        }  
        else{
            echo"Mã lớp:";
        }
    echo'</div>';
    echo'<div class=" mt-2 text-right col-4 row">';
        if(isset($_SESSION['CurrenCourse']))
            echo"Học kỳ: ".$_SESSION['CurrenCourse'];
        else echo"Học kỳ:";
    echo'</div>';
?>