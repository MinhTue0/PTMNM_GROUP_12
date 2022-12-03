<?php
require 'db_conn.php';
page_protect();
if (isset($_POST['name'])) {
	$invoice = $_POST['name'];
?>

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
		<link href="../../template/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
		<link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

		<!-- Custom styles for this template-->
		<link href="../..//template/css/sb-admin-2.min.css" rel="stylesheet">

		<link rel="stylesheet" href="../../template/vendor/datatables/dataTables.bootstrap4.min.css">
		<style>
			.img {
				width: 120px !important;
				padding: 0 auto !important;
			}
		</style>



		<script type="text/javascript" src="webcam.js"></script>

	</head>

	<body id="page-top">

		<div id="wrapper">

			<?php include("nav.php") ?>

			<div id="content-wrapper" class="d-flex flex-column">
				<div id="content">
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

					<div class="container-fluid">
						<h3>Thanh toán số dư</h3>

						<hr />

						<form action="bal_pay_submit.php" enctype="multipart/form-data" method="POST" role="form" class="form-horizontal form-groups-bordered">

							<?php

							$query  = "select * from subsciption WHERE invoice='$invoice'";
							//echo $query;
							$result = mysqli_query($con, $query);
							$sno    = 1;

							if (mysqli_affected_rows($con) == 1) {
								while ($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
									$name  = $row['name'];
									$total = $row['total'];
									$paid  = $row['paid'];
								}
							}
							?>

							<div class="form-group">
								<label for="field-1" class="col-sm-3 control-label">Tên thành viên:</label>
								<div class="col-sm-5">
									<input type="text" name="name" value="<?php echo $name; ?>" class="form-control" readonly />
								</div>
							</div>


							<div class="form-group">
								<label for="field-1" class="col-sm-3 control-label">Hóa đơn:</label>
								<div class="col-sm-5">
									<input type="text" name="invoice" id="textfield3" class="form-control" data-rule-required="true" data-rule-minlength="4" value='<?php echo $invoice; ?>' placeholder="Plan Name" maxlength="100" class="uneditable-input" readonly>
								</div>
							</div>


							<div class="form-group">
								<label for="field-1" class="col-sm-3 control-label">Tổng:</label>
								<div class="col-sm-5">
									<input type="text" name="total" id="textfield4" class="form-control" data-rule-required="true" data-rule-minlength="1" placeholder="Days" value='<?php echo $total; ?>' onKeyPress="return checkIt(event)" maxlength="9">
								</div>
							</div>

							<div class="form-group">
								<label for="field-1" class="col-sm-3 control-label">Đã trả :</label>
								<div class="col-sm-5">
									<input type="text" name="paid" id="textfield6" class="form-control" data-rule-required="true" data-rule-minlength="10" placeholder="Mobile / Phone" value='<?php echo $paid; ?>' onKeyPress="return checkIt(event)" maxlength="10">
								</div>
							</div>

							<div class="form-group">
								<div class="col-sm-offset-3 col-sm-5">
									<button type="submit" class="btn btn-primary">Save changes</button>
								</div>
							</div>

						</form>
					</div>
				</div>
				<?php include("footer.php") ?>
			</div>


		</div>

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
						<a class="btn btn-primary" href="logout.php">Logout</a>
					</div>
				</div>
			</div>
		</div>


		<!-- Bootstrap core JavaScript-->
		<script src="../../template/vendor/jquery/jquery.min.js"></script>
		<script src="../../template/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

		<!-- Core plugin JavaScript-->
		<script src="../../template/vendor/jquery-easing/jquery.easing.min.js"></script>

		<!-- Custom scripts for all pages-->
		<script src="../../template/js/sb-admin-2.min.js"></script>

		<script src="../../template/vendor/datatables/jquery.dataTables.min.js"></script>
		<script src="../../template/vendor/datatables/dataTables.bootstrap4.min.js"></script>

		<script src="../../template/js/demo/datatables-demo.js"></script>


		<script type="text/javascript">
			$(document).ready(function() {
				$(".country").change(function() {
					var id = $(this).val();
					var dataString = 'id=' + id;

					$.ajax({
						type: "POST",
						url: "ajax_city.php",
						data: dataString,
						cache: false,
						success: function(html) {
							$(".city").html(html);
						}
					});

				});
			});
		</script>
		<script type="text/javascript">
			$(document).ready(function() {
				$(".country1").change(function() {
					var id = $(this).val();
					var dataString = 'id=' + id;

					$.ajax({
						type: "POST",
						url: "ajax_city1.php",
						data: dataString,
						cache: false,
						success: function(html) {
							$(".city1").html(html);
						}
					});

				});
			});
		</script>
		<script type="text/javascript">
			function checkIt(evt) {
				evt = (evt) ? evt : window.event
				var charCode = (evt.which) ? evt.which : evt.keyCode
				if (charCode > 31 && (charCode < 48 || charCode > 57)) {
					status = "This field accepts numbers only."
					return false
				}
				status = ""
				return true
			}
		</script>

		<script type="text/javascript">
			var sprytextfield1 = new Spry.Widget.ValidationTextField("sprytextfield1");
			var sprytextfield2 = new Spry.Widget.ValidationTextField("sprytextfield2");
			var spryselect1 = new Spry.Widget.ValidationSelect("spryselect1");
			var sprytextfield3 = new Spry.Widget.ValidationTextField("sprytextfield3");
			var sprytextfield4 = new Spry.Widget.ValidationTextField("sprytextfield4");
			var spryselect2 = new Spry.Widget.ValidationSelect("spryselect2");
		</script>
	</body>

	</html>
<?php
} else {
	echo "<meta http-equiv='refresh' content='0; url=unpaid.php'>";
}
?>
Access Denied