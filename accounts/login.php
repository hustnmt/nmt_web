<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="../css/style_custom.css">
    <title>Login</title>
</head>
<body class="body-bg">
    <?php
        session_start();
        session_unset();
    ?>
    <div class="login-header">
        <div class="login-logo"></div>
        <div class="content-header-1">TRƯỜNG ĐẠI HỌC BÁCH KHOA HÀ NỘI</div>
        <div class="content-header-2">CỔNG THÔNG TIN ĐÀO TẠO</div>
    </div>


    <div class="ff-login-box" >
        <form action="login_submit.php" method="POST" class="was-validated">
            <div class="h2 mb-5">Sign in</div>
            <div class="mb-3 mt-4 form-floating">
                <input class="form-control" type="email" name="email" placeholder="Username" required>
                <label for="Email">Email</label>
                <div class="valid-feedback">Valid.</div>
                <div class="invalid-feedback">Please fill out this field.</div>
            </div>
            <div class="mb-3 form-floating">
                <input type="password" class="form-control" id="pwd" placeholder="Enter password" name="password" required >
                <label for="password">Password</label>
                <div class="valid-feedback">Valid.</div>
                <div class="invalid-feedback">Please fill out this field.</div>
            </div>
            <div class="d-grid gap-3">
                <button class="btn btn-primary btn-lg ff-login-btn font-weight-bol" type="submit" style="margin-bottom:20px;" name="submit">Sign in</button>
            </div>
    </form>
    </div> 
    <div class="footer-login">
        <div class="text-footer">
            Copyright © 2021, Trường đại học Bách Khoa Hà Nội
        <br>
        Số 1, Đại Cồ Việt, Hai Bà Trưng, Hà Nội
        </div>
        <div class="footer-line"></div>
    </div>
</body>
</html>