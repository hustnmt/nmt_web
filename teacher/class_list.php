<?php
    session_start();
    if(!isset($_SESSION['CurrenUser'])){
        header('location:../accounts/login.php');
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

                <!-- Begin Page Content -->
                <div class="container-fluid">

                <!-- Page Heading -->
                <h1 class="h3 mb-2 text-gray-800">Danh sách lớp học</h1>
                <!-- DataTales Example -->
                <div class="card shadow mb-4 mt-4">
                    <div class="card-header py-3">
                        <div class="dropdown text-left">
                            <button class="btn btn-primary dropdown-toggle" type="button"
                                id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true"
                                aria-expanded="false">
                                Học kỳ
                            </button>
                            <div class="dropdown-menu animated--fade-in"
                                aria-labelledby="dropdownMenuButton">
                                <?php 
                                    include"../database/config.php";
                                    $sql = "SELECT * FROM couse order by couse_id DESC LIMIT 3";
                                    $result = mysqli_query($conn,$sql);
                                    $number = 1;
                                    if(mysqli_num_rows($result)>0){
                                        while($row = mysqli_fetch_assoc($result)){
                                            echo"<button class='dropdown-item text-center' id='option".$number."' value='".$row['couse_id']."'>"."Học kỳ ".$row['couse_id']."</button>";
                                            $number = $number+1;
                                        }
                                    }
                                ?>
                            </div>
                        </div>
                        
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                <thead>
                                    <tr>
                                        <th>Mã lớp</th>
                                        <th>Tên môn học</th>
                                        <th>Mã môn học</th>
                                        <th>Kỳ học</th>
                                        <th>Sỹ số</th>
                                    </tr>
                                </thead>
                                <tfoot>
                                    <tr>
                                        <th>Mã lớp</th>
                                        <th>Tên môn học</th>
                                        <th>Mã môn học</th>
                                        <th>Kỳ học</th>
                                        <th>Sỹ số</th>
                                    </tr>
                                </tfoot>
                                <tbody id="class_mark_table">
                                </tbody>
                            </table>
                        </div>
                    </div>
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
        $("#option1").click(function(){
            var choose = $("#option1").val();
            $.get("table_class_handle.php",{choose:choose},function(data){
                $("#class_mark_table").html(data);
            });
        });
        $("#option2").click(function(){
            var choose = $("#option2").val();
            $.get("table_class_handle.php",{choose:choose},function(data){
                $("#class_mark_table").html(data);
            });
        });
        $("#option3").click(function(){
            var choose = $("#option3").val();
            $.get("table_class_handle.php",{choose:choose},function(data){
                $("#class_mark_table").html(data);
            });
        });
        $.get("table_class_handle.php",{},function(data){
            $("#class_mark_table").html(data);
        });
    });
</script>
</html>



