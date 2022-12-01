<?php
require 'db_conn.php';
page_protect();
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

    <!-- Custom -->
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.css" />


    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/webcamjs/1.0.25/webcam.min.js"></script>

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
                        <h1 class="h3 mb-0 text-gray-800">New Member</h1>
                    </div>

                    <form action="new_submit.php" method="POST" class="form-horizontal form-groups-bordered" enctype="multipart/form-data" style="margin: 0 auto;">

                        <div class="form-group">
                            <label for="field-1" class="col-sm-3 control-label">Membership ID :</label>
                            <div class="col-sm-5">
                                <input type="text" name="p_id" value="<?php echo time(); ?>" class="form-control" readonly />
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="field-1" class="col-sm-3 control-label" style="max-width: 90px;">Photo :</label>
                            <input type="file" name="image" id="fileToUpload" />
                        </div>

                        <div class="form-group">
                            <label for="field-1" class="col-sm-3 control-label">Name :</label>
                            <div class="col-sm-5">
                                <input type="text" name="p_name" id="textfield3" class="form-control" data-rule-required="true" data-rule-minlength="4" placeholder="Member Name" maxlength="30">
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="field-1" class="col-sm-3 control-label">Address :</label>
                            <div class="col-sm-5">
                                <input type="text" name="add" id="textfield5" class="form-control" data-rule-required="true" data-rule-minlength="6" placeholder="Address">
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="field-1" class="col-sm-3 control-label">Zip Code :</label>
                            <div class="col-sm-5">
                                <input type="text" name="zipcode" id="zipcode" class="form-control" data-rule-required="true" data-rule-minlength="20" placeholder="Zipcode">
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="field-1" class="col-sm-3 control-label">Birthdate :</label>
                            <div class="col-sm-5">
                                <input type="date" name="birthdate" id="birthdate" class="form-control datepicker" data-format="yyyy-m-d">
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="field-1" class="col-sm-3 control-label">Age :</label>
                            <div class="col-sm-5">
                                <input type="text" name="age" id="textfield4" class="form-control" data-rule-required="true" data-rule-minlength="1" placeholder="Age" onKeyPress="return checkIt(event)" maxlength="3">
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="field-1" class="col-sm-3 control-label">Sex :</label>
                            <div class="col-sm-5">
                                <select name="sex" id="bbb" data-rule-required="true" class="form-control">
                                    <option value="">-- Please select --</option>
                                    <option value="Male">Male</option>
                                    <option value="Female">Female</option>
                                </select>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="field-1" class="col-sm-3 control-label">Height :</label>
                            <div class="col-sm-5">
                                <input type="text" name="height" id="textfield" class="form-control" data-rule-required="true" data-rule-minlength="1" placeholder="Height" maxlength="10"> (In FEET)
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="field-1" class="col-sm-3 control-label">Weight :</label>
                            <div class="col-sm-5">
                                <input type="text" name="weight" id="textfield" class="form-control" data-rule-required="true" data-rule-minlength="1" placeholder="Weight" maxlength="10"> (In Kgs)
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="field-1" class="col-sm-3 control-label">Nationality :</label>
                            <div class="col-sm-5">
                                <input type="text" name="nationality" id="nationality" class="form-control" data-rule-required="true" data-rule-minlength="6" placeholder="Nationality">
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="field-1" class="col-sm-3 control-label">Contact :</label>
                            <div class="col-sm-5">
                                <input type="text" name="contact" id="textfield6" class="form-control" data-rule-required="true" data-rule-minlength="12" placeholder="Mobile / Phone" onKeyPress="return checkIt(event)" maxlength="12">
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="field-1" class="col-sm-3 control-label">E-Mail:</label>
                            <div class="col-sm-5">
                                <input type="text" name="email" id="emailfield" class="form-control" data-rule-minlength="5" placeholder="E-Mail" maxlength="60">
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="field-1" class="col-sm-3 control-label">Facebook Account:</label>
                            <div class="col-sm-5">
                                <input type="text" name="facebookaccount" id="facebookaccount" class="form-control" data-rule-minlength="5" placeholder="Facebook Account" maxlength="60">
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="field-1" class="col-sm-3 control-label">Twitter Account:</label>
                            <div class="col-sm-5">
                                <input type="text" name="twitteraccount" id="twitteraccount" class="form-control" data-rule-minlength="5" placeholder="Twitter Account" maxlength="60">
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="field-1" class="col-sm-3 control-label">Contact Person:</label>
                            <div class="col-sm-5">
                                <input type="text" name="contactperson" id="contactperson" class="form-control" data-rule-minlength="5" placeholder="Contact Person" maxlength="60">
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="field-1" class="col-sm-3 control-label">Previous Gym:</label>
                            <div class="col-sm-5">
                                <input type="text" name="previousgym" id="previousgym" class="form-control" data-rule-minlength="5" placeholder="Previous Gym" maxlength="60">
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="field-1" class="col-sm-3 control-label">Years Training:</label>
                            <div class="col-sm-5">
                                <input type="text" name="yearstraining" id="yearstraining" class="form-control" data-rule-minlength="5" placeholder="Years Training" maxlength="60">
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="field-1" class="col-sm-3 control-label">Proof Given :</label>
                            <div class="col-sm-5">
                                <select name="proof" id="bbb" data-rule-required="true" class="form-control">
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
                            <label for="field-1" class="col-sm-3 control-label">Other Proof</label>
                            <div class="col-sm-5">
                                <input type="text" name="other_proof" id="other_proof" class="form-control" placeholder="Other Proof" maxlength="60">
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="field-1" class="col-sm-3 control-label">Join Date :</label>
                            <div class="col-sm-5">
                                <input type="text" name="date" id="textfield22" value="<?php echo date('Y-m-d'); ?>">
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="field-1" class="col-sm-3 control-label">Membership Type :</label>
                            <div class="col-sm-5">
                                <select name="mem_type" id="id" data-rule-required="true" class="country">
                                    <option value="">-- Please select --</option>
                                    <?php
                                    $query = "select * from mem_types";
                                    $result = mysqli_query($con, $query);

                                    if (mysqli_affected_rows($con) != 0) {
                                        while ($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
                                            echo "<option value=" . $row['mem_type_id'] . ">" . $row['name'] . "</option>";
                                        }
                                    }
                                    ?>
                                </select>
                                <span class="selectRequiredMsg">Please select an item.</span>
                            </div>
                        </div>



                        <div class="form-group">
                            <div class="col-sm-offset-3 col-sm-5">
                                <div class="city"></div>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-sm-offset-3 col-sm-5">
                                <button type="submit" class="btn btn-primary">Save changes</button>
                            </div>
                        </div>
                    </form>
                    


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

    <!-- Time/Date -->
    <script src="https://cdn.jsdelivr.net/jquery/latest/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/momentjs/latest/moment.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.min.js"></script>
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