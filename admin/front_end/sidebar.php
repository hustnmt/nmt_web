<!-- Sidebar -->
<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="admin.php">
        <div class="sidebar-brand-text mx-3">Phòng đào tạo</div>
    </a>

    <!-- Divider -->
    <hr class="sidebar-divider my-0">

    <!-- Nav Item - Dashboard -->
    <li class="nav-item active">
        <a class="nav-link" href="admin.php">
            <i class="fas fa-fw fa-home"></i>
            <span>Trang chủ</span></a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider">

    <!-- Heading -->
    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo"
            aria-expanded="true" aria-controls="collapseTwo">
            <i class="fas fa-fw fa-id-card"></i>
            <span>Giảng viên</span>
        </a>
        <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <h6 class="collapse-header">Quản lý giảng viên:</h6>
                <a class="collapse-item" href="register.php">Thêm tài khoản</a>
                <a class="collapse-item" href="list_teacher.php">Sửa thông tin</a>
            </div>
        </div>
    </li>

    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUtilities"
            aria-expanded="true" aria-controls="collapseUtilities">
            <i class="fas fa-fw fa-user"></i>
            <span>Sinh viên</span>
        </a>
        <div id="collapseUtilities" class="collapse" aria-labelledby="headingUtilities"
            data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <h6 class="collapse-header">Quản lý sinh viên:</h6>
                <a class="collapse-item" href="add_student.php">Thêm sinh viên</a>
                <a class="collapse-item" href="search_model.php">Sửa thông tin</a>
                <a class="collapse-item" href="mark_edit.php">Sửa điểm</a>
            </div>
        </div>
    </li>
    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#subject_sidebar"
            aria-expanded="true" aria-controls="subject_sidebar">
            <i class="fas fa-fw fa-book"></i>
            <span>Môn học</span>
        </a>
        <div id="subject_sidebar" class="collapse" aria-labelledby="headingUtilities"
            data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <h6 class="collapse-header">Quản lý môn học:</h6>
                <a class="collapse-item" href="adm_create_subject.php">Thêm môn học</a>
                <a class="collapse-item" href="subject_list.php">Danh sách môn học</a>
            </div>
        </div>
    </li>
    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#class_sidebar"
            aria-expanded="true" aria-controls="class_sidebar">
            <i class="fas fa-fw fa-users"></i>
            <span>Lớp học</span>
        </a>
        <div id="class_sidebar" class="collapse" aria-labelledby="headingUtilities"
            data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <h6 class="collapse-header">Quản lý lớp học:</h6>
                <a class="collapse-item" href="adm_create_class.php">Thêm lớp học</a>
                <a class="collapse-item" href="list_class.php">Danh sách lớp học</a>
            </div>
        </div>
    </li>
</ul>
<!-- End of Sidebar -->