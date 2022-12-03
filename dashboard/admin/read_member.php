<?php
require 'db_conn.php';
page_protect();
?>


<!DOCTYPE html>
<html lang="en">

<head>

	<title>Sam's Slim Gym</title>

	<!-- Custom fonts for this template-->
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
	<link href="/template/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
	<link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

	<!-- Custom styles for this template-->
	<link href="/template/css/sb-admin-2.min.css" rel="stylesheet">

	<link rel="stylesheet" href="../../template/vendor/datatables/dataTables.bootstrap4.min.css">


	<link rel="stylesheet" href="../../neon/js/jquery-ui/css/no-theme/jquery-ui-1.10.3.custom.min.css" id="style-resource-1">
	<link rel="stylesheet" href="../../neon/css/font-icons/entypo/css/entypo.css" id="style-resource-2">
	<link rel="stylesheet" href="../../neon/css/font-icons/entypo/css/animation.css" id="style-resource-3">
	<!-- <link rel="stylesheet" href="../../neon/css/neon.css" id="style-resource-5">
	<link rel="stylesheet" href="../../neon/css/custom.css" id="style-resource-6"> -->
</head>

<body class="page-top">

	<div id="wrapper">

		<!-- Sidebar -->
		<?php include("nav.php") ?>
		<!-- End of Sidebar -->

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
				<!--------------------------------------->
				<div class="container-fluid">
					Details of : - <?php
									$id     = $_POST['name'];
									$query  = "select * from user_data WHERE newid='$id'";
									//echo $query;
									$result = mysqli_query($con, $query);

									if (mysqli_affected_rows($con) != 0) {
										while ($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
											$name = $row['name'];
											echo $name;
										}
									}
									?>

					<hr />

					<table class="table table-bordered">
						<thead>
							<tr>
								<th>Image</th>
								<th>Membership ID</th>
								<th>Name</th>
								<th>Age / Sex</th>
								<th>Join On</th>
							</tr>
						</thead>
						<tbody>
							<?php
							$query  = "select * from user_data WHERE newid='$id'";
							//echo $query;
							$result = mysqli_query($con, $query);
							if (mysqli_affected_rows($con) != 0) {
								while ($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) {


									echo "<tr><td><img src='" . $row['pic_add'] . "' height='200'></td>";
									echo "<td>" . $row['newid'] . "</td>";
									echo "<td>" . $row['name'] . "</td>";
									echo "<td>" . $row['age'] . " / " . $row['sex'] . "</td>";
									echo "<td>" . $row['joining'] . "</td></tr>";
								}
							}
							?>
						</tbody>
					</table>
					Details of : - <?php
									$id     = $_POST['name'];
									$query  = "select * from user_data WHERE newid='$id'";
									//echo $query;
									$result = mysqli_query($con, $query);

									if (mysqli_affected_rows($con) != 0) {
										while ($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
											$name = $row['name'];
											echo $name;
										}
									}
									?>
					<table class="table table-bordered datatable" id="table-1">
						<thead>
							<tr>
								<th>S.No</th>
								<th>Name</th>
								<th>Membership</th>
								<th>Payment Date</th>
								<th>Total / Paid</th>
								<th>Invoice</th>
								<th>Membership Expiry</th>
								<th>Action</th>
							</tr>
						</thead>
						<tbody>
							<?php
							$memid  = $_POST['name'];
							$query  = "select * from subsciption WHERE mem_id='$memid'";
							//echo $query;
							$result = mysqli_query($con, $query);
							$sno    = 1;

							if (mysqli_affected_rows($con) != 0) {
								while ($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
									$msgid = $row['invoice'];
									echo "<td>" . $sno . "</td>";
									echo "<td>" . $row['name'] . "</td>";
									echo "<td>" . $row['sub_type_name'] . "</td>";
									echo "<td>" . $row['paid_date'] . "</td>";
									echo "<td>" . $row['total'] . " / " . $row['paid'] . "</td>";
									echo "<td>" . $row['invoice'] . "</td>";
									echo "<td>" . $row['expiry'] . "</td>";

									$sno++;

									echo "<td><form action='gen_invoice.php' method='post'><input type='hidden' name='name' value='" . $msgid . "'/><input type='submit' value='Print Invoice ' class='btn btn-info'/></form><form action='edit_invoice.php' method='post'><input type='hidden' name='name' value='" . $msgid . "'/><input type='submit' value='Edit Invoice ' class='btn btn-warning'/></form><form action='del_invoice.php' method='post' onSubmit='return ConfirmDelete();'><input type='hidden' name='name' value='" . $msgid . "'/><input type='submit' value='Delete Invoice ' class='btn btn-danger'/></form></td></tr>";
									$msgid = 0;
								}
							}

							?>
						</tbody>
					</table>
					Health Status of : - <?php
											$id     = $_POST['name'];
											$query  = "select * from user_data WHERE newid='$id'";
											//echo $query;
											$result = mysqli_query($con, $query);

											if (mysqli_affected_rows($con) != 0) {
												while ($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
													$name = $row['name'];
													echo $name;
												}
											}
											?>
					<table class="table table-bordered datatable" id="table-1">
						<thead>
							<tr>
								<th>#</th>
								<th>Body Fat</th>
								<th>Water</th>
								<th>Muscle</th>
								<th>Calorie</th>
								<th>Bone</th>
								<th>Remarks</th>


							</tr>
						</thead>
						<tbody>
							<?php
							$memid  = $_POST['name'];
							$query  = "select * from healthstatus as health join user_data as users on users.id=health.id";
							//echo $query;
							$result = mysqli_query($con, $query);
							$sno    = 1;

							if (mysqli_affected_rows($con) != 0) {
								while ($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
									$msgid = $row['hs_id'];
									echo "<td>" . $sno . "</td>";
									echo "<td>" . $row['bodyfat'] . "</td>";
									echo "<td>" . $row['water'] . "</td>";
									echo "<td>" . $row['muscle'] . "</td>";
									echo "<td>" . $row['calorie'] . "</td>";
									echo "<td>" . $row['bone'] . "</td>";
									echo "<td>" . $row['remarks'] . "</td>";

									$sno++;

									$msgid = 0;
								}
							}

							?>
						</tbody>
					</table>
				</div>
			</div>

			<?php include('footer.php'); ?>
		</div>



	</div>

	<script src="../../neon/js/jquery-1.10.2.min.js"></script>

	<!-- Bootstrap core JavaScript-->
	<script src="/template/vendor/jquery/jquery.min.js"></script>
	<script src="/template/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

	<!-- Core plugin JavaScript-->
	<script src="/template/vendor/jquery-easing/jquery.easing.min.js"></script>

	<!-- Custom scripts for all pages-->
	<script src="/template/js/sb-admin-2.min.js"></script>

	<script src="../../template/vendor/datatables/jquery.dataTables.min.js"></script>
	<script src="../../template/vendor/datatables/dataTables.bootstrap4.min.js"></script>

	<script src="../../template/js/demo/datatables-demo.js"></script>

	<script type="text/javascript">
		var sprytextfield1 = new Spry.Widget.ValidationTextField("sprytextfield1");
		var sprytextfield2 = new Spry.Widget.ValidationTextField("sprytextfield2");
		var spryselect1 = new Spry.Widget.ValidationSelect("spryselect1");
		var sprytextfield3 = new Spry.Widget.ValidationTextField("sprytextfield3");
		var sprytextfield4 = new Spry.Widget.ValidationTextField("sprytextfield4");
		var spryselect2 = new Spry.Widget.ValidationSelect("spryselect2");
	</script>




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
</body>

</html>