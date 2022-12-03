<?php
require 'db_conn.php';
page_protect();

if (isset($_POST['name'])) {
	$memid = $_POST['name'];
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
		<link href="/template/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
		<link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

		<!-- Custom styles for this template-->
		<link href="/template/css/sb-admin-2.min.css" rel="stylesheet">

		<link rel="stylesheet" href="../../template/vendor/datatables/dataTables.bootstrap4.min.css">


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

		<!-- <script src="../../js/eakroko.min.js"></script>

		<script src="../../js/application.min.js"></script>

		<script src="../../js/demonstration.min.js"></script>

		<script src="../../neon/js/jquery-1.10.2.min.js"></script>

		<script src="../../js/plugins/jquery-ui/jquery.ui.core.min.js"></script>
		<script src="../../js/plugins/jquery-ui/jquery.ui.widget.min.js"></script>
		<script src="../../js/plugins/jquery-ui/jquery.ui.mouse.min.js"></script>
		<script src="../../js/plugins/jquery-ui/jquery.ui.resizable.min.js"></script>
		<script src="../../js/plugins/jquery-ui/jquery.ui.spinner.js"></script>
		<script src="../../js/plugins/jquery-ui/jquery.ui.slider.js"></script> -->


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

	</head>

	<body class="page-top">

		<div id="wrapper">
			<!-- Sidebar -->
			<?php include("nav.php") ?>
			<!-- End of Sidebar -->

			<div id="content-wrapper" class="d-flex flex-column">

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
					<div class="container-fluid">
						<h3>Sửa thông tin chi tiết thành viên</h3>

						<hr />

						<form action="edit_mem_submit.php" enctype="multipart/form-data" method="POST" role="form" class="form-horizontal form-groups-bordered">

							<?php

							$query  = "select * from user_data WHERE newid='$memid'";
							//echo $query;
							$result = mysqli_query($con, $query);
							$sno    = 1;

							if (mysqli_affected_rows($con) == 1) {
								while ($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
									$pic_src = $row['pic_add'];
									$name    = $row['name'];
									$email   = $row['email'];
									$address   	 = $row['address'];
									$zipcode = $row['zipcode'];
									$birthdate	 = $row['birthdate'];
									$age     = $row['age'];
									$date    = $row['joining'];
									$address = $row['address'];
									$contact = $row['contact'];
									$height  = $row['height'];
									$weight  = $row['weight'];
									$nationality  = $row['nationality'];
									$facebookaccount  = $row['facebookaccount'];
									$twitteraccount  = $row['twitteraccount'];
									$contactperson  = $row['contactperson'];
									$previousgym  = $row['previousgym'];
									$yearstraining  = $row['yearstraining'];
								}
							}


							?>

							<div class="form-group">
								<label for="field-1" class="col-sm-3 control-label">ID Thành viên:</label>
								<div class="col-sm-5">
									<input type="text" name="p_id" value="<?php echo $memid; ?>" class="form-control" readonly />
								</div>
							</div>

							<div class="form-group">
								<label for="field-1" class="col-sm-3 control-label">Ảnh:</label>
								<div class="col-sm-5">
									<img src='<?php echo $pic_src; ?>' height="200">
									<input type="file" name="image">
								</div>
							</div>

							<div class="form-group">
								<label for="field-1" class="col-sm-3 control-label">Họ tên :</label>
								<div class="col-sm-5">
									<input type="text" name="p_name" id="textfield3" class="form-control" data-rule-required="true" data-rule-minlength="4" value='<?php echo $name; ?>' placeholder="Member Name" maxlength="30">
								</div>
							</div>

							<div class="form-group">
								<label for="field-1" class="col-sm-3 control-label">Địa chỉ :</label>
								<div class="col-sm-5">
									<input type="text" name="add" id="textfield5" class="form-control" data-rule-required="true" data-rule-minlength="6" value='<?php echo $address; ?>' placeholder="Address">
								</div>
							</div>

							<div class="form-group">
								<label for="field-1" class="col-sm-3 control-label">Zip Code :</label>
								<div class="col-sm-5">
									<input type="text" name="zipcode" id="zipcode" class="form-control" data-rule-required="true" data-rule-minlength="4" value='<?php echo $zipcode; ?>' placeholder="Zip Code" maxlength="30">
								</div>
							</div>

							<div class="form-group">
								<label for="field-1" class="col-sm-3 control-label">Ngày sinh :</label>
								<div class="col-sm-5">
									<input type="text" name="birthdate" id="birthdate" class="form-control datepicker" value='<?php echo $birthdate; ?>' data-format="yyyy-m-d">
								</div>
							</div>

							<div class="form-group">
								<label for="field-1" class="col-sm-3 control-label">Tuổi :</label>
								<div class="col-sm-5">
									<input type="text" name="age" id="textfield4" class="form-control" data-rule-required="true" data-rule-minlength="1" placeholder="Age" value='<?php echo $age; ?>' onKeyPress="return checkIt(event)" maxlength="3">
								</div>
							</div>

							<div class="form-group">
								<label for="field-1" class="col-sm-3 control-label">Giới tính:</label>
								<div class="col-sm-5">
									<select name="sex" id="bbb" data-rule-required="true" class="form-control" value='<?php echo $sex; ?>'>
										<option value="">-- Please select --</option>
										<option value="Male">Male</option>
										<option value="Female">Female</option>
									</select>
								</div>
							</div>

							<div class="form-group">
								<label for="field-1" class="col-sm-3 control-label">Chiều cao :</label>
								<div class="col-sm-5">
									<input type="text" name="height" id="textfield" class="form-control" data-rule-required="true" data-rule-minlength="1" placeholder="Height" onKeyPress="return checkIt(event)" value='<?php echo $height; ?>' maxlength="3"> (In Feet)
								</div>
							</div>

							<div class="form-group">
								<label for="field-1" class="col-sm-3 control-label">Cân nặng :</label>
								<div class="col-sm-5">
									<input type="text" name="weight" id="textfield" class="form-control" data-rule-required="true" data-rule-minlength="1" placeholder="Weight" onKeyPress="return checkIt(event)" value='<?php echo $weight; ?>' maxlength="3"> (In Kgs)
								</div>
							</div>

							<div class="form-group">
								<label for="field-1" class="col-sm-3 control-label">Quốc tịch :</label>
								<div class="col-sm-5">
									<input type="text" name="nationality" id="nationality" class="form-control" data-rule-required="true" data-rule-minlength="6" value='<?php echo $nationality; ?>' placeholder="Nationality">
								</div>
							</div>

							<div class="form-group">
								<label for="field-1" class="col-sm-3 control-label">Liên hệ :</label>
								<div class="col-sm-5">
									<input type="text" name="contact" id="textfield6" class="form-control" data-rule-required="true" data-rule-minlength="10" placeholder="Mobile / Phone" value='<?php echo $contact; ?>' onKeyPress="return checkIt(event)" maxlength="10">
								</div>
							</div>

							<div class="form-group">
								<label for="field-1" class="col-sm-3 control-label">E-Mail :</label>
								<div class="col-sm-5">
									<input type="text" name="email" id="emailfield" class="form-control" value='<?php echo $email; ?>' data-rule-minlength="5" placeholder="E-Mail" maxlength="60">
								</div>
							</div>

							<div class="form-group">
								<label for="field-1" class="col-sm-3 control-label">Tài khoản Facebook :</label>
								<div class="col-sm-5">
									<input type="text" name="facebookaccount" id="facebookaccount" class="form-control" data-rule-required="true" data-rule-minlength="6" value='<?php echo $facebookaccount; ?>' placeholder="Facebook Account">
								</div>
							</div>

							<div class="form-group">
								<label for="field-1" class="col-sm-3 control-label">Twitter Account :</label>
								<div class="col-sm-5">
									<input type="text" name="twitteraccount" id="twitteraccount" class="form-control" data-rule-required="true" data-rule-minlength="6" value='<?php echo $twitteraccount; ?>' placeholder="Twitter Account">
								</div>
							</div>


							<div class="form-group">
								<label for="field-1" class="col-sm-3 control-label">Contact Person :</label>
								<div class="col-sm-5">
									<input type="text" name="contactperson" id="contactperson" class="form-control" data-rule-required="true" data-rule-minlength="6" value='<?php echo $contactperson; ?>' placeholder="Contact Person">
								</div>
							</div>

							<div class="form-group">
								<label for="field-1" class="col-sm-3 control-label">Previous Gym :</label>
								<div class="col-sm-5">
									<input type="text" name="previousgym" id="previousgym" class="form-control" data-rule-required="true" data-rule-minlength="6" value='<?php echo $previousgym; ?>' placeholder="Previous Gym">
								</div>
							</div>

							<div class="form-group">
								<label for="field-1" class="col-sm-3 control-label">Years Training:</label>
								<div class="col-sm-5">
									<input type="text" name="yearstraining" id="yearstraining" class="form-control" data-rule-required="true" data-rule-minlength="6" value='<?php echo $yearstraining; ?>' placeholder="Years Training">
								</div>
							</div>

							<div class="form-group">
								<label for="field-1" class="col-sm-3 control-label">Proof Given :</label>
								<div class="col-sm-5">
									<select name="proof" id="bbb" data-rule-required="true" class="form-control" value='<?php echo $proof; ?>'>
										<option value="">-- Please select --</option>
										<option value="GSIS Card">GSIS Card</option>
										<option value="Voter Card">Voter Card</option>
										<option value="Driving License">Driving License</option>
										<option value="Passport">Passport</option>
										<option value="College/School ID">College/School ID</option>
										<option value="Others">Others</option>
									</select>

								</div>
							</div>

							<div class="form-group">
								<label for="field-1" class="col-sm-3 control-label">Join Date :</label>
								<div class="col-sm-5">
									<input type="text" name="date" id="textfield22" class="form-control datepicker" value='<?php echo $date; ?>' data-format="yyyy-m-d">
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



				<?php include('footer.php'); ?>
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
		<script src="../../neon/js/bootstrap-datepicker.js" id="script-resource-11"></script>


	</body>

	</html>

<?php
} else {
}
?>