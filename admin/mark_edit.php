<?php
    session_start();
    if(!isset($_SESSION['CurrenUser'])){
        header('location:../accounts/login.php');
    }else {
        if(!isset($_SESSION['CurrenAdmin'])){
            header('location:../index.php');
        }
    }
?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Cổng Thông Tin Đào Tạo</title>

    <!-- Custom fonts for this template-->
    <link href="../vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="../css/sb-admin-2.css" rel="stylesheet">

</head>

<body id="page-top">
    <!-- Page Wrapper -->
    <div id="wrapper">
        <!-- sidebar -->
        <?php
            require("front_end/sidebar.php");
        ?>
        <!-- end sidebar -->
        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">
            <!-- Main Content -->
            <div id="content">
                <!-- Topbar -->
                <?php
                    require("front_end/topbar.php");
                ?>
                <!-- End of Topbar -->
                <!-- content -->
                <div class="container-fluid">
                    <!-- Content Row -->
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="card mb-4 shadow mt-2">
                                <div class="card-header py-3">
                                    <h6 class="m-0 font-weight-bold text-primary"style="font-size: 1.2rem;">Sửa điểm</h6>
                                </div>
                                <div class="card-body">
                                    <table class="card-body ml-5">
                                        <form method="get" action="" class="form-control" autocomplete="off">
                                            <tr class="">
                                                <td class="mt-2">Mã lớp:</td>
                                                <td><input type="text" class="form-control ml-3 mt-2" name="class_id"></td>
                                            </tr>
                                            <tr>
                                                <td class="mt-2">Mã học kỳ:</td>
                                                <td><input type="text" class="form-control ml-3 mt-2" name="course_id" ></td>
                                            </tr>
                                            <tr>
                                                <td class="mt-2">Mã sinh viên:</td>
                                                <td><input type="text" class="form-control ml-3 mt-2" name="student_id" ></td>
                                            </tr>
                                            <tr>
                                                <td>Điểm quá trình:</td>
                                                <td><input type="text" class="form-control ml-3 mt-2"name="midterm" ></td>
                                            </tr>
                                            <tr>
                                                <td>Điểm cuối kỳ:</td>
                                                <td><input type="text" class="form-control ml-3 mt-2"name="final_mark" ></td>
                                            </tr>
                                            <tr>
                                                <td>Điểm chữ:</td>
                                                <td><input type="text" class="form-control ml-3 mt-2"name="s_mark" ></td>
                                            </tr>
                                            <tr>
                                                <td><button type="submit" class="btn btn-primary mt-3 text-center mb-4" name="update_mark">Cập nhật</button></td>
                                            </tr>
                                        </form>
                                    </table>
                                    
                                </div>
                            </div>
                        </div>
                    </div>
                </div> 
            <!-- End of Main Content -->
            </div>
            <!-- UPDATE INFO TEACHER -->
            <!-- END UPDATE -->
            <!-- Footer -->
                <?php
                    require("front_end/footer.php");
                ?>
            <!-- End of Footer -->
        </div>
        <!-- End of Content Wrapper -->
    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    <!-- Logout Modal-->
    <?php
        require("front_end/logout_model.php");
    ?>
    <!-- Bootstrap core JavaScript -->
    <script src="../vendor/jquery/jquery.min.js"></script>
    <script src="../vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="../vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="../js/sb-admin-2.min.js"></script>
</body>

</html>
<?php
include "../database/config.php";
if(isset($_SESSION['CurrenAdmin'])){
    if(isset($_GET['update_mark']) &&  $_GET["student_id"] != '' && $_GET["class_id"] != '' && $_GET["course_id"] != '' && $_GET["midterm"] != ''&& $_GET["final_mark"] != ''&& $_GET["s_mark"] != ''){
        $student_id = $_GET['student_id'];
        $class_id = $_GET['class_id'];
        $course_id = $_GET['course_id'];
        $midterm = $_GET['midterm'];
        $final_mark = $_GET['final_mark'];
        $s_mark = $_GET['s_mark'];
        $sql = "SELECT * FROM mark_data WHERE student_id='$student_id' AND class_id='$class_id' AND couse_id='$couse_id'";
        $result = mysqli_query($conn,$sql);
        $sql = "SELECT * FROM student WHERE student_id='$student_id'";
        $std_check = mysqli_query($conn,$sql);
        if(mysqli_num_rows($result) > 0 or mysqli_num_rows($std_check) == 0){
            echo '<script language="javascript">';
            echo 'alert("Không tốn tại!")';
            echo '</script>';
        }
        else{
            $sql = "UPDATE mark_data
                    SET midterm = '$midterm', final_mark = '$final_mark', s_mark = '$s_mark'
                    WHERE class_id='$class_id' AND couse_id='$course_id' AND student_id ='$student_id'";
            mysqli_query($conn,$sql);
            echo '<script language="javascript">';
            echo 'alert("Successful!")';
            echo '</script>';
            header("location: $url");
            
        }
    }
} else {
    header('location:../index.php');
}
?>
