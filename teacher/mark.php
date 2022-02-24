<?php
    session_start();
    if(!isset($_SESSION['CurrenUser'])){
        header('location:../accounts/login.php');
    }
    if(!isset($_SESSION['CurrenClass'])){
        $_SESSION['CurrenClass'] = '';
        $_SESSION['CurrenCourse'] = '';
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
                <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

                <!-- Sidebar Toggle (Topbar) -->
                <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                    <i class="fa fa-bars"></i>
                </button>
                <div class="sidebar-brand-text mx-3 font-weight-bold text-gray-800 d-sm-inline-block" style="font-size: 1.75rem;">
                    CỔNG THÔNG TIN ĐÀO TẠO
                </div>

                <form class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 w-50 text-right row">
                    <input type="text" class="form-control form-control ml-1 col-4" id="class_id" placeholder="Mã lớp">
                    <input type="text" class="form-control form-control ml-1 col-4" id="course_id"placeholder="Học kỳ">
                    <button class="btn btn-primary ml-1" id="search-class" type="button"> 
                        <i class="fas fa-search fa-sm"></i>
                    </button>
                </form>
                <!-- Topbar Navbar -->
                <ul class="navbar-nav ml-auto">
                    <!-- Nav Item - User Information -->
                    <li class="nav-item dropdown no-arrow">
                        <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button"
                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <?php
                                echo'<span class="mr-2 d-none d-lg-inline text-gray-600 small">'.$_SESSION['CurrenUser'].'</span>';
                            ?>
                            <img class="img-profile rounded-circle"
                                src="../img/undraw_profile.jpg">
                        </a>
                        <!-- Dropdown - User Information -->
                        <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in"
                            aria-labelledby="userDropdown">
                            <a class="dropdown-item" href="../accounts/change_password.php">
                                <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                                Đổi mật khẩu
                            </a>
                            <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
                                <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                                Đăng xuất
                            </a>
                        </div>
                    </li>

                </ul>
            </nav>
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="container-fluid">

                <!-- Page Heading -->
                <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h3 mb-0 text-gray-800">Nhập điểm lớp học</h1>
                        <a href="exportMark.php" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
                                class="fas fa-download fa-sm text-white-50"></i> Download Excel</a>
                    </div>
                <!-- DataTales Example -->
                <div class="card shadow mb-4 mt-4">
                    <div class="card-header py-3">
                        <div class="row">
                            <div class="col-6 dropdown text-left mr-5">
                                <button class="btn btn-primary dropdown-toggle" type="button"
                                    id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true"
                                    aria-expanded="false">
                                    Nhập điểm
                                </button>
                                <div class="dropdown-menu animated--fade-in"
                                    aria-labelledby="dropdownMenuButton">
                                    <button id="midterm" value="midterm" class='dropdown-item text-center'>Giữa kỳ</button>
                                    <button id="final_mark" value="final_mark" class='dropdown-item text-center'>Cuối kỳ</button>
                                </div>
                            </div>
                            <div id="header-content" class="col-5 row"></div>
                        </div>
                    </div>
                    <form action="" method="POST">
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>Họ và tên</th>
                                            <th>Mã số sinh viên</th>
                                            <th>Điểm quá trình</th>
                                            <th>Điểm cuối kỳ</th>
                                            <th>Điểm chữ</th>
                                        </tr>
                                    </thead>
                                    <tbody id="class_mark_table">
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <div class="card-footer text-center">
                            <button class="btn btn-success" name="submit_mark">
                                Gửi điểm về phòng đào tạo
                            </button>
                        </div>
                    </form>
                    <?php
                    if(isset($_POST['submit_mark']) && isset($_SESSION['CurrenClass']) && isset($_SESSION['CurrenCourse']) && isset($_SESSION['choose'])){
                        unset($_POST['submit_mark']);
                        include"../database/config.php";
                        $class_id = $_SESSION["CurrenClass"];
                        $course_id = $_SESSION["CurrenCourse"];
                        $choose = $_SESSION["choose"];
                        $sql = "SELECT * FROM  mark_data 
                                WHERE couse_id = '$course_id' AND class_id = '$class_id'";
                        $result = mysqli_query($conn,$sql);
                        if(mysqli_num_rows($result)>0){
                            while($row = mysqli_fetch_assoc($result)){
                                if(isset($_POST[$row['student_id']])){
                                    if($_POST[$row['student_id']] != ''){
                                        $id = $row['student_id'];
                                        $mark = $_POST[$row['student_id']];
                                        $sql = "UPDATE mark_data SET ".$choose."= '$mark' 
                                                WHERE student_id = '$id' AND couse_id = '$course_id' AND class_id = '$class_id'";
                                        mysqli_query($conn,$sql);
                                    }
                                }
                            }
                        }
                        $sql = "SELECT * FROM  mark_data 
                                LEFT JOIN subject
                                ON mark_data.subject_id = subject.subject_id
                                WHERE couse_id = '$course_id' AND class_id = '$class_id'";
                        $result = mysqli_query($conn,$sql); 
                        if(mysqli_num_rows($result)>0){
                            while($row = mysqli_fetch_assoc($result)){
                                $id = $row['student_id'];
                                if($row['midterm'] != '' && $row['final_mark'] != ''){
                                    $midterm = $row['midterm'];
                                    $final = $row['final_mark'];
                                    $value = $row['Trong_So'];
                                    $mark = $midterm*$value+$final*(1-$value);
                                    if($mark >= 9.5) $s_mark = "A+";
                                    elseif($mark >= 8.5) $s_mark = "A";
                                    elseif($mark >= 8) $s_mark = "B+";
                                    elseif($mark >= 7) $s_mark = "B";
                                    elseif($mark >= 6.5) $s_mark = "C+";
                                    elseif($mark >= 5.5) $s_mark = "C";
                                    elseif($mark >= 5) $s_mark = "D";
                                    elseif($mark >= 4) $s_mark = "D+";
                                    else $s_mark = "F";
                                    $sql = "UPDATE mark_data SET s_mark= '$s_mark' 
                                            WHERE student_id = '$id' AND couse_id = '$course_id' AND class_id = '$class_id'";
                                    mysqli_query($conn,$sql);
                                }
                            }
                        }
                        unset($_SESSION["choose"]);
                    }
                    ?>
                </div>

                <!-- /.container-fluid -->

                </div>
                <!-- End of Main Content -->
            </div>
            <!-- End of Main Content -->
            <!-- Footer -->
            <div>
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
    <!-- Page level plugins -->
    <script src="../vendor/datatables/jquery.dataTables.min.js"></script>
    <script src="../vendor/datatables/dataTables.bootstrap4.min.js"></script>
</body>
<script>
    $(document).ready(function(){
        $("#search-class").click(function(){
            var class_id = $("#class_id").val();
            var course_id =$("#course_id").val();
            console.log(class_id);
            $.get("table_mark_handle.php",{class_id:class_id, course_id:course_id},function(data){
                $("#class_mark_table").html(data);
                $.get("header_content.php",{},function(data){
                    $("#header-content").html(data);
                });
            });
        });
        $("#midterm").click(function(){
            var choose = $("#midterm").val();
            $.get("table_mark_handle.php",{choose:choose},function(data){
                $("#class_mark_table").html(data);
            });
        });
        $("#final_mark").click(function(){
            var choose = $("#final_mark").val();
            $.get("table_mark_handle.php",{choose:choose},function(data){
                $("#class_mark_table").html(data);
            });
        });
        var class_id = '<?php echo($_SESSION["CurrenClass"]) ?>';
        var course_id = '<?php echo($_SESSION["CurrenCourse"]) ?>';
        $.get("table_mark_handle.php",{class_id:class_id, course_id:course_id},function(data){
            $("#class_mark_table").html(data);
            $.get("header_content.php",{},function(data){
                $("#header-content").html(data);
            });
        });
        
    });
</script>

</html>



