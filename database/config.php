<?php
    $hostname = 'localhost';
    $db_name = 'qldt_data';
    $conn = mysqli_connect($hostname,"root","",$db_name);
    mysqli_set_charset($conn,"utf8");
?>