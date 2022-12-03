<?php
require 'db_conn.php';
page_protect();
?>
<!-- <!DOCTYPE html>
<html lang="en">

<head>


	<title>Sam's Slim Gym | Dashboard </title>

	<link rel="stylesheet" href="../../neon/js/jquery-ui/css/no-theme/jquery-ui-1.10.3.custom.min.css" id="style-resource-1">
	<link rel="stylesheet" href="../../neon/css/font-icons/entypo/css/entypo.css" id="style-resource-2">
	<link rel="stylesheet" href="../../neon/css/font-icons/entypo/css/animation.css" id="style-resource-3">
	<link rel="stylesheet" href="../../neon/css/neon.css" id="style-resource-5">
	<link rel="stylesheet" href="../../neon/css/custom.css" id="style-resource-6">

	<script src="../../neon/js/jquery-1.10.2.min.js"></script>

</head>

<body class="page-body  page-fade">

	<div class="page-container">

		<div class="sidebar-menu">

			<header class="logo-env">

				 logo 
				<div class="logo">
					<a href="main.php">
						<img src="../../img/bg.png" alt="" width="192" />
					</a>
				</div>

				logo collapse icon 
				<div class="sidebar-collapse">
					<a href="#" class="sidebar-collapse-icon with-animation">
						 add class "with-animation" if you want sidebar to have animation during expanding/collapsing transition
						<i class="entypo-menu"></i>
					</a>
				</div>


				open/close menu icon (do not remove if you want to enable menu on mobile devices) 
				<div class="sidebar-mobile-menu visible-xs">
					<a href="#" class="with-animation">
						 add class "with-animation" to support animation 
						<i class="entypo-menu"></i>
					</a>
				</div>

			</header>
			<?php //include('nav.php'); 
			?>
		</div>

		<div class="main-content">

			<div class="row">

				Profile Info and Notifications
				<div class="col-md-6 col-sm-8 clearfix">

				</div>


				 Raw Links 
				<div class="col-md-6 col-sm-4 clearfix hidden-xs">

					<ul class="list-inline links-list pull-right">

						<li>Welcome <?php // echo $_SESSION['full_name']; 
									?>
						</li>

						<li>
							<a href="logout.php">
								Log Out <i class="entypo-logout right"></i>
							</a>
						</li>
					</ul>

				</div>

			</div>

			<h2>Sam's Slim Gym</h2>

			<hr>

			<div class="col-sm-3">
				<div class="tile-stats tile-red">
					<div class="icon"><i class="entypo-users"></i></div>
					<div class="num" data-postfix="" data-duration="1500" data-delay="0">
						<h2></h2><br>
						PHP
						<?php
						// $date  = date('Y-m');
						// $query = "select * from subsciption WHERE  paid_date LIKE '$date%'";

						//echo $query;
						// $result  = mysqli_query($con, $query);
						// $revenue = 0;
						// if (mysqli_affected_rows($con) != 0) {
						// 	while ($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
						// 		$revenue = $row['paid'] + $revenue;
						// 	}
						// }
						// echo $revenue;
						// 
						?>
					</div>
				</div>
			</div>


			<div class="col-sm-3">
				<div class="tile-stats tile-green">
					<div class="icon"><i class="entypo-chart-bar"></i></div>
					<div class="num" data-postfix="" data-duration="1500" data-delay="0">
						<h2>Total <br>Members</h2><br>
						<?php
						// $date  = date('Y-m');
						// $query = "select COUNT(*) from user_data WHERE wait='no'";

						// //echo $query;
						// $result = mysqli_query($con, $query);
						// $i      = 1;
						// if (mysqli_affected_rows($con) != 0) {
						// 	while ($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
						// 		echo $row['COUNT(*)'];
						// 	}
						// }
						// $i = 1;
						?>
					</div>
				</div>
			</div>

			<div class="col-sm-3">
				<div class="tile-stats tile-aqua">
					<div class="icon"><i class="entypo-mail"></i></div>
					<div class="num" data-postfix="" data-duration="1500" data-delay="0">
						<h2>Joined This Month</h2><br>
						<?php
						// $date  = date('Y-m');
						// $query = "select COUNT(*) from user_data WHERE wait='no'";

						// //echo $query;
						// $result = mysqli_query($con, $query);
						// $i      = 1;
						// if (mysqli_affected_rows($con) != 0) {
						// 	while ($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
						// 		echo $row['COUNT(*)'];
						// 	}
						// }
						// $i = 1;
						?>
					</div>
				</div>
			</div>

			<div class="col-sm-3">
				<div class="tile-stats tile-blue">
					<div class="icon"><i class="entypo-rss"></i></div>
					<div class="num" data-postfix="" data-duration="1500" data-delay="0">
						<h2>Income This Month</h2><br>
						PHP <?php
							// $date  = date('Y-m');
							// $query = "select * from subsciption WHERE  paid_date LIKE '$date%'";

							// //echo $query;
							// $result  = mysqli_query($con, $query);
							// $revenue = 0;
							// if (mysqli_affected_rows($con) != 0) {
							// 	while ($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
							// 		$revenue = $row['total'] + $revenue;
							// 	}
							// }
							// echo $revenue;
							?>
					</div>
				</div>
			</div>




			<?php //include('footer.php'); 
			?>
		</div>

		<script src="../../neon/js/gsap/main-gsap.js" id="script-resource-1"></script>
		<script src="../../neon/js/jquery-ui/js/jquery-ui-1.10.3.minimal.min.js" id="script-resource-2"></script>
		<script src="../../neon/js/bootstrap.min.js" id="script-resource-3"></script>
		<script src="../../neon/js/joinable.js" id="script-resource-4"></script>
		<script src="../../neon/js/resizeable.js" id="script-resource-5"></script>
		<script src="../../neon/js/neon-api.js" id="script-resource-6"></script>
		<script src="../../neon/js/jquery.validate.min.js" id="script-resource-7"></script>
		<script src="../../neon/js/neon-login.js" id="script-resource-8"></script>
		<script src="../../neon/js/neon-custom.js" id="script-resource-9"></script>
		<script src="../../neon/js/neon-demo.js" id="script-resource-10"></script>
</body>

</html> -->

<!DOCTYPE html>
<html lang="en">

<head>

	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="description" content="">
	<meta name="author" content="">

	<title>Admin</title>

	<!-- Custom fonts for this template-->
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
	<link href="/template/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
	<link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

	<!-- Custom styles for this template-->
	<link href="/template/css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body id="page-top">

	<!-- Page Wrapper -->
	<div id="wrapper">

		<!-- Sidebar -->
		<?php include("nav.php") ?>
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

					<!-- Topbar Search -->
					<form class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search">
						<div class="input-group">
							<input type="text" class="form-control bg-light border-0 small" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2">
							<div class="input-group-append">
								<button class="btn btn-primary" type="button">
									<i class="fas fa-search fa-sm"></i>
								</button>
							</div>
						</div>
					</form>

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

					<!-- Page Heading -->
					<div class="d-sm-flex align-items-center justify-content-between mb-4">
						<h1 class="h3 mb-0 text-gray-800">Dashboard</h1>
					</div>

					<!-- Content Row -->
					<div class="row">

						<!-- Earnings (Monthly) Card Example -->
						<div class="col-xl-3 col-md-6 mb-4">
							<div class="card border-left-primary shadow h-100 py-2">
								<div class="card-body">
									<div class="row no-gutters align-items-center">
										<div class="col mr-2">
											<div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
												Paid Income This Month</div>
											<div class="h5 mb-0 font-weight-bold text-gray-800">
												<?php
												$date  = date('Y-m');
												$query = "select * from subsciption WHERE  paid_date LIKE '$date%'";

												// echo $query;
												$result  = mysqli_query($con, $query);
												$revenue = 0;
												if (mysqli_affected_rows($con) != 0) {
													while ($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
														$revenue = $row['paid'] + $revenue;
													}
												}
												echo $revenue;
												?>
											</div>
										</div>
										<div class="col-auto">
											<i class="fas fa-dollar-sign fa-2x text-gray-300"></i>
										</div>
									</div>
								</div>
							</div>
						</div>

						<!-- Earnings (Monthly) Card Example -->
						<div class="col-xl-3 col-md-6 mb-4">
							<div class="card border-left-success shadow h-100 py-2">
								<div class="card-body">
									<div class="row no-gutters align-items-center">
										<div class="col mr-2">
											<div class="text-xs font-weight-bold text-success text-uppercase mb-1">
												Total Members</div>
											<div class="h5 mb-0 font-weight-bold text-gray-800">
												<?php
												$date  = date('Y-m');
												$query = "select COUNT(*) from user_data";

												//echo $query;
												$result = mysqli_query($con, $query);
												$i      = 1;
												if (mysqli_affected_rows($con) != 0) {
													while ($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
														echo $row['COUNT(*)'];
													}
												}
												$i = 1;
												?>
											</div>
										</div>
										<div class="col-auto">
											<i class="fas fa-user fa-2x text-gray-300"></i>
										</div>
									</div>
								</div>
							</div>
						</div>

						<!-- Earnings (Monthly) Card Example -->
						<div class="col-xl-3 col-md-6 mb-4">
							<div class="card border-left-info shadow h-100 py-2">
								<div class="card-body">
									<div class="row no-gutters align-items-center">
										<div class="col mr-2">
											<div class="text-xs font-weight-bold text-info text-uppercase mb-1">Joined This Month
											</div>
											<div class="row no-gutters align-items-center">
												<div class="col-auto">
													<div class="h5 mb-0 mr-3 font-weight-bold text-gray-800">
														<?php
														$date  = date('Y-m');
														$query = "select COUNT(*) from user_data";

														//echo $query;
														$result = mysqli_query($con, $query);
														$i      = 1;
														if (mysqli_affected_rows($con) != 0) {
															while ($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
																echo $row['COUNT(*)'];
															}
														}
														$i = 1;
														?>
													</div>
												</div>
												<!-- <div class="col">
													<div class="progress progress-sm mr-2">
														<div class="progress-bar bg-info" role="progressbar" style="width: 50%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
													</div>
												</div> -->

											</div>
										</div>
										<div class="col-auto">
											<i class="fas fa-user-plus fa-2x text-gray-300"></i>
										</div>
									</div>
								</div>
							</div>
						</div>

						<!-- Pending Requests Card Example -->
						<div class="col-xl-3 col-md-6 mb-4">
							<div class="card border-left-warning shadow h-100 py-2">
								<div class="card-body">
									<div class="row no-gutters align-items-center">
										<div class="col mr-2">
											<div class="text-xs font-weight-bold text-warning text-uppercase mb-1">
												Income This Month</div>
											<div class="h5 mb-0 font-weight-bold text-gray-800">
												<?php
												$date  = date('Y-m');
												$query = "select * from subsciption WHERE  paid_date LIKE '$date%'";

												//echo $query;
												$result  = mysqli_query($con, $query);
												$revenue = 0;
												if (mysqli_affected_rows($con) != 0) {
													while ($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
														$revenue = $row['total'] + $revenue;
													}
												}
												echo $revenue;
												?>
											</div>
										</div>
										<div class="col-auto">
											<i class="fas fa-comments fa-2x text-gray-300"></i>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>

					<!-- Content Row -->

					<div class="row">

						<!-- Area Chart -->
						<div class="col-xl-8 col-lg-7">
							<div class="card shadow mb-4">
								<!-- Card Header - Dropdown -->
								<div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
									<h6 class="m-0 font-weight-bold text-primary">Earnings Overview</h6>
									<div class="dropdown no-arrow">
										<a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
											<i class="fas fa-ellipsis-v fa-sm fa-fw text-gray-400"></i>
										</a>
										<div class="dropdown-menu dropdown-menu-right shadow animated--fade-in" aria-labelledby="dropdownMenuLink">
											<div class="dropdown-header">Dropdown Header:</div>
											<a class="dropdown-item" href="#">Action</a>
											<a class="dropdown-item" href="#">Another action</a>
											<div class="dropdown-divider"></div>
											<a class="dropdown-item" href="#">Something else here</a>
										</div>
									</div>
								</div>
								<!-- Card Body -->
								<div class="card-body">
									<div class="chart-area">
										<canvas id="myAreaChart"></canvas>
									</div>
								</div>
							</div>
						</div>

						<!-- Pie Chart -->
						<div class="col-xl-4 col-lg-5">
							<div class="card shadow mb-4">
								<!-- Card Header - Dropdown -->
								<div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
									<h6 class="m-0 font-weight-bold text-primary">Revenue Sources</h6>
									<div class="dropdown no-arrow">
										<a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
											<i class="fas fa-ellipsis-v fa-sm fa-fw text-gray-400"></i>
										</a>
										<div class="dropdown-menu dropdown-menu-right shadow animated--fade-in" aria-labelledby="dropdownMenuLink">
											<div class="dropdown-header">Dropdown Header:</div>
											<a class="dropdown-item" href="#">Action</a>
											<a class="dropdown-item" href="#">Another action</a>
											<div class="dropdown-divider"></div>
											<a class="dropdown-item" href="#">Something else here</a>
										</div>
									</div>
								</div>
								<!-- Card Body -->
								<div class="card-body">
									<div class="chart-pie pt-4 pb-2">
										<canvas id="myPieChart"></canvas>
									</div>
									<div class="mt-4 text-center small">
										<span class="mr-2">
											<i class="fas fa-circle text-primary"></i> Direct
										</span>
										<span class="mr-2">
											<i class="fas fa-circle text-success"></i> Social
										</span>
										<span class="mr-2">
											<i class="fas fa-circle text-info"></i> Referral
										</span>
									</div>
								</div>
							</div>
						</div>
					</div>


					<!-- Slider -->
					<div id="carouselExampleIndicators" class="carousel slide container mb-3" data-ride="carousel">
						<ol class="carousel-indicators">
							<li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
							<li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
							<li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
						</ol>
						<div class="carousel-inner">
							<div class="carousel-item active">
								<img src="/img/bg/bg_1.jpg" class="d-block w-100" alt="..." height="500">
							</div>
							<div class="carousel-item">
								<img src="/img/bg/bg_2.jpg" class="d-block w-100" alt="..." height="500">
							</div>
							<div class="carousel-item">
								<img src="/img/bg/bg_3.jpg" class="d-block w-100" alt="..." height="500">
							</div>
						</div>
						<button class="carousel-control-prev" type="button" data-target="#carouselExampleIndicators" data-slide="prev">
							<span class="carousel-control-prev-icon" aria-hidden="true"></span>
							<span class="sr-only">Previous</span>
						</button>
						<button class="carousel-control-next" type="button" data-target="#carouselExampleIndicators" data-slide="next">
							<span class="carousel-control-next-icon" aria-hidden="true"></span>
							<span class="sr-only">Next</span>
						</button>
					</div>

					
				</div>
				<!-- /.container-fluid -->

			</div>
			<!-- End of Main Content -->

			<!-- Footer -->
			<?php include("footer.php") ?>
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
					<h5 class="modal-title" id="exampleModalLabel">Bạn có muốn đăng xuất</h5>
					<button class="close" type="button" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">×</span>
					</button>
				</div>
				<div class="modal-body">Vui lòng chọn "Đăng xuất" để thoát khỏi phiên làm việc!</div>
				<div class="modal-footer">
					<button class="btn btn-secondary" type="button" data-dismiss="modal">Thoát</button>
					<a class="btn btn-primary" href="logout.php">Đăng xuất</a>
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