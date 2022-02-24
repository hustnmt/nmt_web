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
                                    <h6 class="m-0 font-weight-bold text-primary"style="font-size: 1.2rem;">Thông tin môn học</h6>
                                </div>
                                <div class="card-body">
                                    <table class="card-body ml-5">
                                        <form method="POST" action="subject_edit.php" class="form-control" autocomplete="off">
                                            <?php
                                                include"../database/config.php";
                                                if(isset($_GET['id'])){ 
                                                    $subject_id = $_GET['id'];
                                                
                                                    $sql = "SELECT * FROM subject 
                                                    WHERE subject_id = '$subject_id'";
                                                    $result = mysqli_query($conn,$sql);
                                                    if(mysqli_num_rows($result)>0)
                                                        $row = mysqli_fetch_assoc($result);
                                                    else $row = '';
                                                } else $subject_id = ''
                                            ?>
                                            <tr>
                                                <td class="mt-2">Tên môn học:</td>
                                                <td>
                                                    <input type="text" class="form-control ml-3 mt-2" name="subject_name" value="<?php echo $row['subject_name']; ?>">
                                                </td>
                                            </tr>
                                            <tr class="">
                                                <td class="mt-2">Mã môn học:</td>
                                                <td><input type="text" class="form-control ml-3 mt-2" readonly="readonly" name="subject_id" value="<?php echo $subject_id; ?>"></td>
                                            </tr>
                                            <tr>
                                                <td class="mt-2">Số tín:</td>
                                                <td><input type="text" class="form-control ml-3 mt-2" name="So_Tin" value="<?php echo $row['So_Tin']; ?>"></td>
                                            </tr>
                                            <tr>
                                                <td class="mt-2">Trọng số:</td>
                                                <td><input type="text" class="form-control ml-3 mt-2" name="Trong_So" value="<?php echo $row['Trong_So']; ?>"></td>
                                            </tr>
                                            <tr>
                                                <td class="mt-2">Khoa/Viện:</td>
                                                <td>
                                                <select name="khoa" class="form-control ml-3 mt-2">
                                                    <option selected>Viện đào tạo</option>
                                                    <?php 
                                                        include"../database/config.php";
                                                        $sql = "SELECT * FROM khoa_data order by Ma_Khoa ASC";
                                                        $result = mysqli_query($conn,$sql);
                                                        echo(mysqli_num_rows($result));
                                                        if(mysqli_num_rows($result)>0){
                                                            while($row = mysqli_fetch_assoc($result)){
                                                                if($row['Ma_Khoa'] != 'pdt')
                                                                echo"<option class='form-control' value='".$row['Ma_Khoa']."'>".strtoupper($row['Ma_Khoa'])." - ".$row['Ten_Khoa']."</option>";
                                                            }
                                                        }
                                                    ?>
                                                </select>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td><button type="submit" class="btn btn-primary mt-3 text-center mb-4" name="update-in4-subject">Cập nhật</button></td>
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
