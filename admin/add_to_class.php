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

    <title>Add Student</title>

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
                <div class="container-fluid">
                    <!-- Content Row -->
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="card mb-4 shadow mt-2">
                                <div class="card-header py-3">
                                    <h6 class="m-0 font-weight-bold text-primary"style="font-size: 1.2rem;">Thêm thông sinh viên</h6>
                                </div>
                                <div class="card-body">
                                <?php
                                        if(isset($_GET['class_id']) && isset($_GET['course_id'])){
                                            $class_id = $_GET['class_id'];
                                            $course_id = $_GET['course_id'];
                                        } else{
                                            $class_id = '';
                                            $course_id = '';
                                        }
                                    ?>
                                    <table class="card-body ml-5">
                                        <form method="GET" action="add_to_class_submit.php" class="form-control" autocomplete="off">
                                            <tr class="">
                                                <td class="mt-2">Mã lớp:</td>
                                                <td><input type="text" class="form-control ml-3 mt-2" readonly="readonly"
                                                    name="class_id" value="<?php echo($class_id); ?>"></td>
                                            </tr>
                                            <tr>
                                                <td class="mt-2">Học kỳ:</td>
                                                <td><input type="text" class="form-control ml-3 mt-2" name="course_id" readonly="readonly"
                                                    value="<?php echo $course_id; ?>"></td>
                                            </tr>
                                            <tr>
                                                <td class="mt-2">MSSV:</td>
                                                <td><input type="text" class="form-control ml-3 mt-2" name="student_id"></td>
                                            </tr>
                                                <td><button type="submit" class="btn btn-primary mt-3 text-center mb-4" name="submit">Submit</button></td>
                                            </tr>
                                        </form>
                                    </table>
                                    
                                    <h6 class="m-0 font-weight-bold text-primary mb-3"style="font-size: 1.2rem;">Danh sách sinh viên</h6>
                                    <div class="table-responsive">
                                        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                            <thead>
                                                <tr>
                                                    <th>Họ tên</th>
                                                    <th>MSSV</th>
                                                    <th>Ngày sinh</th>
                                                    <th>Địa chỉ</th>
                                                    <th>Email</th>
                                                    <th>Xử lý</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php
                                                    include"../database/config.php";
                                                    $sql = "SELECT * FROM mark_data
                                                            LEFT JOIN student
                                                            ON mark_data.student_id = student.student_id
                                                            WHERE class_id='$class_id' AND couse_id='$course_id'
                                                            ORDER BY mark_data.time DESC";
                                                    $result = mysqli_query($conn,$sql);
                                                    if(mysqli_num_rows($result)>0){
                                                        while($row = mysqli_fetch_assoc($result)){
                                                            echo"<tr>";
                                                            echo"<td>".$row['fullname']."</td>";
                                                            echo"<td>".$row['student_id']."</td>";
                                                            echo"<td>".$row['birth_day']."</td>";
                                                            echo"<td>".$row['address']."</td>";
                                                            echo"<td>".$row['email']."</td>";
                                                            echo"<td>
                                                                <a href = 'delete_student_in_class.php?class_id=".$class_id."&course_id=".$course_id."&student_id=".$row['student_id']."' class='ml-2 btn btn-danger btn-circle btn-sm text-right' >
                                                                <i class='fas fa-trash '></i></a>
                                                                </td>";
                                                            echo"</tr>";
                                                        }
                                                    }
                                                ?>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>                           
                <!-- end content -->
            </div>
            <!-- End of Main Content -->
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
