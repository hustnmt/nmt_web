<!-- Begin Page Content -->
<div class="container-fluid">
    <!-- Content Row -->
    <div class="row">
        <div class="col-lg-12">
        <div class="card mb-4 shadow mt-3">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary"style="font-size: 1.2rem;">Thông tin cá nhân</h6>
            </div>
            <div class="card-body row">
                <div class="col-4">
                    <div class="text-left ml-5">
                        <img class="img-fluid px-3  mt-3 mb-4" style="width: 18rem;"
                            src="../img/undraw_profile.jpg" alt="...">
                    </div>
                </div>
                <div class="col-6">
                    <div>
                        <ul class=" text-left mt-5 mt-5 font-weight-bold text-gray-800" style="font-size: 1.2rem;">
                        <?php 
                            include"../database/config.php";
                            $email = $_SESSION['CurrenUser'];
                            $sql = "SELECT * FROM user WHERE email= '$email'";
                            $result = mysqli_query($conn,$sql);
                            if(mysqli_num_rows($result)>0){
                                $row = mysqli_fetch_assoc($result);
                                echo"<li>Họ và tên:  ".$row['fullname']."</li>";
                                echo"<li>Ngày sinh:  ".$row['birthday']."</li>";
                                echo"<li>Số điện thoại:  ".$row['phone']."</li>";
                                echo"<li>Email:  ".$row['email']."</li>";
                                echo"<li>Địa chỉ:  ".$row['address']."</li>";
                                $Ma_Khoa = $row['Ma_Khoa'];
                                $sql = "SELECT * FROM khoa_data WHERE Ma_Khoa= '$Ma_Khoa'";
                                $result = mysqli_query($conn,$sql);
                                $row = mysqli_fetch_assoc($result);
                                echo"<li>Viện đào tạo:  ".$row['Ten_Khoa']."</li>";
                                echo"<li>Văn phòng:  ".$row['Dia_Chi']."</li>";
                            }
                        ?>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        </div>
    </div>

</div>
<!-- /.container-fluid -->