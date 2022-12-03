<!-- <ul id="main-menu" class="">
			
    <li class="active opened active"><a href="index.php"><i class="entypo-gauge"></i><span>Dashboard</span></a></li>
                
	<li><a href="new_entry.php"><i class="entypo-user-add"></i><span>New Registration</span></a>                
				
	<li><a href="payments.php"><i class="entypo-star"></i><span>Payments</span></a></li>
	<li><a href="new_plan.php"><i class="entypo-alert"></i><span>Alerts</span></a>

		<ul>
			<li class="active">
				<a href="unpaid.php"><span>Unpaid Members</span></a>
			</li>

			<li>
				<a href="sub_end.php"><span>Ending Membership</span></a>
			</li>

		</ul>

	</li>
	<li><a href="logout.php"><i class="entypo-logout"></i><span>Logout</span></a></li>

</ul>	 -->

<!-------------------------------------------->
<ul class="navbar-nav bg-gradient-dark sidebar sidebar-dark accordion" id="accordionSidebar">

	<!-- Sidebar - Brand -->
	<a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.php">
		<div class="sidebar-brand-icon">
			<img src="../../img/bg.png" alt="" width="70" />
		</div>
		<div class="sidebar-brand-text mx-2">Admin</div>
	</a>

	<!-- Divider -->
	<hr class="sidebar-divider my-0">

	<!-- Nav Item - Dashboard -->
	<li class="nav-item active">
		<a class="nav-link" href="index.php">
			<i class="fas fa-fw fa-tachometer-alt"></i>
			<span>Trang Chủ</span></a>
	</li>

	<!-- Divider -->
	<hr class="sidebar-divider">

	<li class="nav-item">
		<a class="nav-link" href="new_entry.php">
			<i class="fas fa-fw fa-chart-area"></i>
			<span>Thêm thành viên</span></a>
	</li>
	<li class="nav-item">
		<a class="nav-link" href="payments.php">
			<i class="fas fa-fw fa-chart-area"></i>
			<span>Thanh Toán</span></a>
	</li>

	<li class="nav-item">
		<a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUtilities_al" aria-expanded="true" aria-controls="collapseUtilities">
			<i class="fas fa-fw fa-wrench"></i>
			<span>Thông Báo</span>
		</a>
		<div id="collapseUtilities_al" class="collapse" aria-labelledby="headingUtilities" data-parent="#accordionSidebar">
			<div class="bg-white py-2 collapse-inner rounded">
				<a class="collapse-item" href="unpaid.php">Chưa thanh toán</a></a>
				<a class="collapse-item" href="sub_end.php">Gia hạn</a>
			</div>
		</div>
	</li>

	<li class="nav-item">
		<a class="nav-link" href="../../baitap/baitap.php">
			<i class="fas fa-fw fa-tachometer-alt"></i>
			<span>Bài tập</span></a>
	</li>

	<li class="nav-item">
		<a class="nav-link" href="logout.php">
			<i class="fas fa-fw fa-chart-area"></i>
			<span>Đăng xuất</span></a>
	</li>

	<!-- Divider -->
	<hr class="sidebar-divider d-none d-md-block">

	<!-- Sidebar Toggler (Sidebar) -->
	<div class="text-center d-none d-md-inline">
		<button class="rounded-circle border-0" id="sidebarToggle"></button>
	</div>

</ul>