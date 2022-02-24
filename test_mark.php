<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>index</title>
</head>
<body>
    <div class="container">
        <form action="" method="post" autocomplete="off">
            <table class="table table-striped">
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Student ID</th>
                    <th>Mark</th>
                </tr>
                <?php
                    $hostname = 'localhost';
                    $db_name = 'qldt_data';
                    $conn = mysqli_connect($hostname,"root","",$db_name);
                    mysqli_set_charset($conn,"utf8");
                    $sql = "SELECT * FROM  mark_data order by student_id ASC";
                    $result = mysqli_query($conn,$sql);
                    if(mysqli_num_rows($result)>0){
                        while($row = mysqli_fetch_assoc($result)){
                            echo"<tr>";
                            echo"<td>".$row['student_id']."</td>";
                            echo"<td> <input type='number' name='".$row['student_id']."'> </td>";
                            echo"</tr>";
                        }
                    }                 
                ?>
            </table>
            <button class="btn btn-danger" name="submit">Submit</button>
        </form>
        <?php
        if(isset($_POST['suSbmit'])){
            $sql = "SELECT * FROM  mark_data ";
            $result = mysqli_query($conn,$sql);
            if(mysqli_num_rows($result)>0){
                while($row = mysqli_fetch_assoc($result)){
                    if($_POST[$row['student_id']] != ''){
                        $id = $row['student_id'];
                        $mark = $_POST[$row['student_id']];
                        $sql = "UPDATE mark_data SET midterm = '$mark' WHERE student_id = '$id'";
                        mysqli_query($conn,$sql);
                    }
                }
            }
            header("location:test_mark.php"); 
        }
        ?>
    </div>
</body>
</html>