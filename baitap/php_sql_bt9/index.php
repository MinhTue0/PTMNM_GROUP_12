<?php
require '../../include/db_conn.php';
page_protect();
?>
<!DOCTYPE html>
<html lang="en">

<head>


    <title>BÀI TẬP</title>

    <!-- Custom fonts for this template-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    <link href="/template/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="/template/css/sb-admin-2.min.css" rel="stylesheet">

    <link rel="stylesheet" href="show.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
</head>

<body class="page-top">
    <?php
    if (isset($_POST['submit'])) {
        if (!empty($_POST['name_milk'])) {
            $name = $_POST['name_milk'];
            require_once "connection.php";

            $query = "SELECT sua.Loi_ich, sua.Hinh, sua.Ten_Sua, hs.Ten_Hang_Sua, 
                sua.Trong_luong, sua.Don_gia, sua.`TP_Dinh_Duong` FROM `sua` sua, `hang_sua` hs 
                WHERE sua.Ma_Hang_Sua LIKE hs.Ma_Hang_Sua AND sua.Ten_Sua LIKE N'%" . $name . "%';";

            $count = "SELECT COUNT(*) AS COUNT FROM `sua` sua, `hang_sua` hs 
            WHERE sua.Ma_Hang_Sua LIKE hs.Ma_Hang_Sua AND sua.Ten_Sua LIKE N'%" . $name . "%';";

            $result = mysqli_query($conn, $query);

            $result2 = mysqli_query($conn, $count);
            $row2 = mysqli_fetch_array($result2);
            if ($row2["COUNT"] > 0) {
                $mess = "Có " . $row2["COUNT"] . " sp được tìm thấy";
            } else {
                $mess = "Không có sp đó";
            }
        }
    }
    ?>
    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <?php include("../nav.php") ?>
        <!-- End of Sidebar -->

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
                    <!-- Topbar Navbar -->
                    <ul class="navbar-nav ml-auto">

                        <!-- Nav Item - Search Dropdown (Visible Only XS) -->
                        <li class="nav-item dropdown no-arrow d-sm-none">
                            <a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fas fa-search fa-fw"></i>
                            </a>
                            <!-- Dropdown - Messages -->
                            <div class="dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in" aria-labelledby="searchDropdown">
                                <form class="form-inline mr-auto w-100 navbar-search">
                                    <div class="input-group">
                                        <input type="text" class="form-control bg-light border-0 small" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2">
                                        <div class="input-group-append">
                                            <button class="btn btn-primary" type="button">
                                                <i class="fas fa-search fa-sm"></i>
                                            </button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </li>

                        <!-- Nav Item - Alerts -->
                        <!-- <li class="nav-item dropdown no-arrow mx-1">
                            <a class="nav-link dropdown-toggle" href="#" id="alertsDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <b>Bài Tập</b>
                            </a>
                            
                        </li> -->

                        <!-- Nav Item - User Information -->
                        <li class="nav-item dropdown no-arrow">
                            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span class="mr-2 d-none d-lg-inline text-gray-600 small"><?php echo $_SESSION['full_name']; ?></span>
                                <i class="fas fa-user"></i>
                            </a>
                            <!-- Dropdown - User Information -->
                            <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">

                                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
                                    <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Logout
                                </a>
                            </div>
                        </li>

                    </ul>

                </nav>
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="container-fluid">
                    <h4>BÀI 2.8: List chi tiết có phân trang.</h4>
                    <div class="box__center">
                        <h1 style="margin-bottom:20px;margin-top: 20px;">THÔNG TIN CHI TIẾT CÁC LOẠI SỮA</h1>
                        <form action="index.php" method="POST">
                            <div class="form__container">
                                <div class="form__item">
                                    <label for="name_milk" class="form__label">TÊN SỮA</label>
                                    <input type="text" class="form__input" name="name_milk" value="<?php if (isset($name)) echo $name; ?>">
                                    <button type="submit" class="form__submit" name="submit">Tìm Kiếm</button>
                                </div>
                                <h6 class="form__result text-center"><?php if (isset($mess)) echo $mess; ?></h6>
                            </div>
                        </form>
                        <?php
                        if (isset($_POST['submit'])) {
                            while ($row = mysqli_fetch_array($result)) {
                        ?>
                                <div class="form__container">
                                    <div class="form__title">
                                        <?php echo $row["Ten_Sua"] . " - " . $row["Ten_Hang_Sua"]; ?>
                                    </div>
                                    <div class="row">
                                        <div class="col-4" style="position:relative;">
                                            <img src="<?php echo $row["Hinh"]; ?>" alt="anh" onerror="this.src='error.jpg'" height="200" width="200" class="mb-4">
                                        </div>
                                        <div class="col-8">
                                            <div class="form__box">
                                                <strong><i>Thành phần dinh dưỡng</i></strong>
                                                <p><?php echo $row["TP_Dinh_Duong"] ?></p>
                                            </div>
                                            <div class="form__box">
                                                <strong><i>Lợi ích</i></strong>
                                                <p><?php echo $row["Loi_ich"] ?></p>
                                                <div class="text-start"><?php echo "<strong>Trọng lượng:</strong> " . $row["Trong_luong"] . " gr - <strong>Đơn giá:</strong> " . $row["Don_gia"] . " VND" ?></div>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                        <?php
                            };
                        }
                        ?>
                    </div>

                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->

            <!-- Footer -->
            <?php include("../footer.php") ?>
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
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                    <a class="btn btn-primary" href="../logout.php">Logout</a>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="/template/vendor/jquery/jquery.min.js"></script>
    <script src="/template/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="/template/vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="/template/js/sb-admin-2.min.js"></script>

    <!-- Page level plugins -->
    <script src="/template/vendor/chart.js/Chart.min.js"></script>

    <!-- Page level custom scripts -->
    <script src="/template/js/demo/chart-area-demo.js"></script>
    <script src="/template/js/demo/chart-pie-demo.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>


</body>

</html>