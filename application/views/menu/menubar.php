<!DOCTYPE html>
<html lang="en">

<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<title>Brgy. Cogon Pardo Facility & Amenity Reservation System</title>

	<link rel="shortcut icon" href="<?php echo base_url('assets/img/photos/cogonlogo.png');?>">
	<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500&amp;display=swap" rel="stylesheet">
	<link href="<?php echo base_url('assets/css/light.css');?>" rel="stylesheet">
	<link class="js-stylesheet" href="<?php echo base_url('assets/css/light.css');?>" rel="stylesheet">
	
	<link href="https://cdn.jsdelivr.net/npm/sweetalert2@11.7.20/dist/sweetalert2.min.css" rel="stylesheet">

	<!-- END SETTINGS -->	
</head>
<!--SideBar--->
<body data-theme="default" data-layout="fluid" data-sidebar-position="left" data-sidebar-behavior="sticky">
<script src="https://code.jquery.com/jquery-3.7.0.js" integrity="sha256-JlqSTELeR4TLqP0OG9dxM7yDPqX1ox/HfgiSLBj8+kM=" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.7.20/dist/sweetalert2.all.min.js"></script>	
<script src="<?php echo base_url('assets/js/facility.js');?>"></script>
	<div class="wrapper">
		<nav id="sidebar" class="sidebar">
			<div class="sidebar-content js-simplebar bg-danger">
				<a class="sidebar-brand" href="index.html">
          <span class="align-middle mr-3 text-white">Brgy. Cogon Pardo Reservation System</span>
        </a>
				<ul class="sidebar-nav">
					<li class="sidebar-item active">
						<a href="#dashboards" class="sidebar-link">
              <i class="align-middle text-white" data-feather="sliders"></i> <span class="align-middle text-white">Dashboard</span>
            </a>
					</li>
					<li class="sidebar-item">
						<a href="<?php echo base_url('Facility/facility_index');?>"  class="sidebar-link collapsed text-white">
              <i class="align-middle text-white" data-feather="layout"></i> <span class="align-middle text-white">Facility</span>
            </a>
					</li>
					<li class="sidebar-item">
						<a href="<?php echo base_url('Amenity/amenity_index');?>" class="sidebar-link collapsed text-white">
              <i class="align-middle text-white" data-feather="book-open"></i> <span class="align-middle">Amenity</span>
            </a>
					</li>
						<a href="<?php echo base_url('resident/resident_index');?>" class="sidebar-link collapsed text-white">
              	<i class="align-middle text-white" data-feather="users"></i> <span class="align-middle">Residents</span>
            	</a>
						</ul>
					</li>
				</ul>
			</li>
		</ul>
	</div>
</nav>
		<div class="main">
			<nav class="navbar navbar-expand navbar-light navbar-bg">
				<a class="sidebar-toggle">
          <i class="hamburger align-self-center"></i>
        </a>

				<form class="d-none d-sm-inline-block">
					<div class="input-group input-group-navbar">
						<input type="text" class="form-control" placeholder="Search..." aria-label="Search">
						<div class="input-group-append">
							<button class="btn" type="button">
                <i class="align-middle" data-feather="search"></i>
              </button>
						</div>
					</div>
				</form>

				<div class="navbar-collapse collapse">
					<ul class="navbar-nav navbar-align">
						<li class="nav-item dropdown">
							<a class="nav-icon dropdown-toggle d-inline-block d-sm-none" href="#" data-toggle="dropdown">
                <i class="align-middle" data-feather="settings"></i>
              </a>

							<a class="nav-link dropdown-toggle d-none d-sm-inline-block" href="#" data-toggle="dropdown">
                			<span class="text-dark">Rashed Perez</span>
              </a>
							<div class="dropdown-menu dropdown-menu-right">
								<a class="dropdown-item" href="<?php echo base_url('pages-profile.html');?>"><i class="align-middle mr-1" data-feather="user"></i> Profile</a>
								<a class="dropdown-item" href="#"><i class="align-middle mr-1" data-feather="pie-chart"></i> Analytics</a>
								<div class="dropdown-divider"></div>
								<a class="dropdown-item" href="<?php echo base_url('pages-settings.html');?>">Settings & Privacy</a>
								<a class="dropdown-item" href="#">Help</a>
								<a class="dropdown-item" href="#">Sign out</a>
							</div>
						</li>
					</ul>
				</div>
			</nav>
	<script src="<?php echo base_url('assets/js/app.js');?>"></script>
</body>
</html>