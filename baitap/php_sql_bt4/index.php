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
</head>

<body class="page-top">
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
                    <h4>BÀI 2.4: Lưới phân trang.</h4>
                    <div class="box__center">
                        <h1 style="margin-bottom:20px;">THÔNG TIN SỮA</h1>
                        </h1>
                        <?php
                        // Kết nối Database
                        require_once "connection.php";

                        // Số dòng trong 1 trang
                        $rowPerPage = 5;

                        // Set tràng mặc định
                        if (isset($_GET["page"])) {
                            $page  = $_GET["page"];
                        } else {

                            $page = 1;
                        }

                        // Vi tri cua mau tin dau tien tren moi trang
                        $offset = ($page - 1) * $rowPerPage;

                        // Set stt của record
                        $temp = $page  * $rowPerPage;

                        // Truy vấn để lấy số bản ghi ứng với số dòng mỗi trang
                        $query = "SELECT * FROM sua LIMIT $offset, $rowPerPage";

                        $result = mysqli_query($conn, $query);

                        // Set bđ chạy của stt từng trang
                        if ($temp <= $rowPerPage) {
                            $stt = 0;
                        } else {
                            $stt = $temp - $rowPerPage;
                        }


                        ?>
                        <!-- Fetch DL -->
                        <table border='1' cellpadding='10' cellspacing='10'>
                            <thead>
                                <tr>
                                    <th>STT</th>
                                    <th width=”10%”>Mã Sữa</th>
                                    <th>Tên Sữa</th>
                                    <th>Mã Hãng Sữa</th>
                                    <th>Đơn Giá</th>
                                </tr>
                            </thead>
                            <tbody>

                                <?php
                                while ($row = mysqli_fetch_array($result)) {
                                    $stt++;
                                ?>
                                    <tr>
                                        <td><?php echo $stt; ?></td>
                                        <td><?php echo $row["Ma_sua"]; ?></td>
                                        <td><?php echo $row["Ten_sua"]; ?></td>
                                        <td><?php echo $row["Ma_hang_sua"]; ?></td>
                                        <td><?php echo $row["Don_gia"]; ?></td>
                                    </tr>
                                <?php
                                };
                                ?>
                            </tbody>

                        </table>

                        <nav aria-label="..." style="margin-top: 20px;" class="d-flex justify-content-center">
                            <ul class="pagination">
                                <?php
                                $sum = "SELECT COUNT(*) FROM sua";

                                $rs_result = mysqli_query($conn, $sum);

                                $row = mysqli_fetch_row($rs_result);

                                $total_records = $row[0];

                                echo "</br>";

                                // Number of pages required.

                                $total_pages = ceil($total_records / $rowPerPage);

                                $pagLink = "";

                                if ($page >= 2) {

                                    echo "<li class='page-item'><a class='page-link' href='index.php?page=" . ($page - 1) . "'>  Prev </a></li>";
                                }

                                for ($i = 1; $i <= $total_pages; $i++) {
                                    // C1
                                    // if ($i == $page) {
                                    //     $pagLink .= '<li class="page-item active"><a class="page-link" href="index.php?page="' . $i . '">' . $i . ' </a></li>';
                                    // } else {

                                    //     $pagLink .= "<li class='page-item'><a class='page-link' href='index.php?page=" . $i . "'>" . $i . " </a></li>";
                                    // }

                                    // C2
                                    if ($i == $page) {
                                        echo '<li class="page-item active"><a class="page-link" href="index.php?page="' . $i . '">' . $i . ' </a></li>';
                                    } else {

                                        echo "<li class='page-item'><a class='page-link' href='index.php?page=" . $i . "'>" . $i . " </a></li>";
                                    }
                                };
                                // C1
                                // echo $pagLink;

                                if ($page < $total_pages) {

                                    echo "<li class='page-item'><a class='page-link' href='index.php?page=" . ($page + 1) . "'>  Next </a></li>";
                                }
                                ?>
                            </ul>
                        </nav>
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

</body>

</html>