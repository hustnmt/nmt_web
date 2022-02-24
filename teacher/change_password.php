<Title>Change Password</Title>
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
                                    <h6 class="m-0 font-weight-bold text-primary"style="font-size: 1.2rem;">Đổi mật khẩu</h6>
                                </div>
                                <div class="card-body">
                                    <table class="card-body ml-5">
                                        <form method="POST">
                                            <tr>
                                                <td>Nhập mật khẩu cũ: </td>
                                                <td><input type="password" class="form-control ml-3 mt-2" name="old_password"></td>
                                            </tr>
                                            <tr>
                                                <td>Nhập mật khẩu mới: </td>
                                                <td><input type="password" class="form-control ml-3 mt-2" name="new_password"></td>
                                            </tr>
                                            <tr>
                                                <td>Xác nhận mật khẩu: </td>
                                                <td><input type="password" class="form-control ml-3 mt-2" name="re_password"></td>
                                            </tr>
                                            <tr>
                                                <td><button type="submit" class="btn btn-primary mt-3 text-center mb-2" name="change_submit">Submit</button></td>
                                            </tr>
                                        </form>
                                    </table>   
                                </div>
                            </div>
                        </div>
                    </div>
                </div> 
                <?php
                include "../database/config.php";
                if(isset($_POST['change_submit']) && $_POST['old_password'] != '' && $_POST['new_password'] != '' && $_POST['re_password'] != ''){
                    $email = $_SESSION['CurrenUser'];
                    $password = $_POST['old_password'];
                    $new_password = $_POST['new_password'];
                    $re_password = $_POST['re_password'];

                    $password = md5($password);
                    $sql = "SELECT * FROM user WHERE email ='$email' AND password = '$password'";
                    $result = mysqli_query($conn,$sql);
                    if(mysqli_num_rows($result) > 0){
                        if($new_password == $re_password){
                            $new_password = md5($new_password);
                            $sql = "UPDATE user SET password = '$new_password' WHERE email = '$email'";
                            mysqli_query($conn,$sql);
                            echo'<div class="alert alert-success alert-dismissible fade show w-25 m-auto" role="alert">';
                            echo'<strong>Thay đổi mật khẩu thành công!</strong>';
                            echo'<button type="button" class="close" data-dismiss="alert" aria-label="Close">';
                            echo'<span aria-hidden="true">&times;</span>';
                            echo'</button>';
                            echo'</div>';
                        } else {
                            echo'<div class="alert alert-warning alert-dismissible fade show m-auto" style="width: 28% !important;" role="alert">';
                            echo'<strong>Mật khẩu nhập lại không chính xác!</strong>';
                            echo'<button type="button" class="close" data-dismiss="alert" aria-label="Close">';
                            echo'<span aria-hidden="true">&times;</span>';
                            echo'</button>';
                            echo'</div>';
                        }
                    } else {
                        echo'<div class="alert alert-danger alert-dismissible fade show w-25 m-auto" role="alert">';
                        echo'<strong>Mật khẩu không chính xác!</strong>';
                        echo'<button type="button" class="close" data-dismiss="alert" aria-label="Close">';
                        echo'<span aria-hidden="true">&times;</span>';
                        echo'</button>';
                        echo'</div>';
                    }
                }
                ?>
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
    <script type="text/javascript">
    $(document).ready(function () {
    
    window.setTimeout(function() {
        $(".alert").fadeTo(1000, 0).slideUp(1000, function(){
            $(this).remove(); 
        });
    }, 3000);
    
    });
    </script>
</body>

</html>
