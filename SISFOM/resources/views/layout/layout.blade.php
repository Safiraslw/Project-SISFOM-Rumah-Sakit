<!DOCTYPE html>
<html lang="en">

<head>

	<meta charset="UTF-8">
	<meta name='viewport' content='width=device-width, initial-scale=1.0, user-scalable=0'>
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="Description" content="Dashfox - Laravel Admin & Dashboard Template">
	<meta name="Author" content="Spruko Technologies Private Limited">
	<meta name="Keywords" content="admin template, admin dashboard, bootstrap dashboard template, bootstrap 4 admin template, laravel, php framework, php laravel, laravel framework, php mvc, laravel admin panel, laravel admin panel, laravel template, laravel bootstrap, blade laravel, best php framework" />

	<!-- Title -->
	<title>@yield('title')</title>

	<!-- membuat icon tittle -->

	<link rel="icon" href="images/hospital.png" type="image/x-icon" />


	<!-- Bootstrap css -->
	<link href="https://laravel.spruko.com/dashfox/ltr/assets/plugins/bootstrap/css/bootstrap.css" rel="stylesheet" />

	<!-- Icons css -->
	<link href="https://laravel.spruko.com/dashfox/ltr/assets/plugins/icons/icons.css" rel="stylesheet">

	<!--  Right-sidemenu css -->
	<link href="https://laravel.spruko.com/dashfox/ltr/assets/plugins/sidebar/sidebar.css" rel="stylesheet">

	<!--  Left-Sidebar css -->
	<link rel="stylesheet" href="https://laravel.spruko.com/dashfox/ltr/assets/css/sidemenu.css">

	<!--- Dashboard-2 css-->
	<link href="https://laravel.spruko.com/dashfox/ltr/assets/css/style.css" rel="stylesheet">
	<link href="https://laravel.spruko.com/dashfox/ltr/assets/css/style-dark.css" rel="stylesheet">

	<!--- Color css-->
	<link id="theme" href="https://laravel.spruko.com/dashfox/ltr/assets/css/colors/color.css" rel="stylesheet">


	<!---Skinmodes css-->
	<link href="https://laravel.spruko.com/dashfox/ltr/assets/css/skin-modes.css" rel="stylesheet" />

	<!--- Animations css-->
	<link href="https://laravel.spruko.com/dashfox/ltr/assets/css/animate.css" rel="stylesheet">

	<!---Switcher css-->
	<link href="https://laravel.spruko.com/dashfox/ltr/assets/switcher/css/switcher.css" rel="stylesheet">
	<link href="https://laravel.spruko.com/dashfox/ltr/assets/switcher/demo.css" rel="stylesheet">

</head>

<body class="main-body light-theme app sidebar-mini active leftmenu-color" style="background-color: #F5F1EA;">

	<!-- Loader -->
	<!-- <div id="global-loader">
			<img src="https://laravel.spruko.com/dashfox/ltr/assets/img/loader-2.svg" class="loader-img" alt="Loader">
		</div> -->
	<!-- /Loader -->

	<!-- main-sidebar -->
	<div class="app-sidebar__overlay" data-toggle="sidebar"></div>
	<aside class="app-sidebar" style="background-color:#8caca2;">
		<div class="main-sidebar-header">
			<a class="desktop-logo logo-dark mb-4 mt-2" href="#">
				<img src="\images\hospital.png" width="50" height="50"  alt="">
			</a>
		</div>
		</div>
		<div class="main-sidemenu sidebar-scroll">
			<!-- <ul class="nav nav-pills flex-column mb-auto">
				<li class="nav-item">
					<a href="/" class="nav-link link-dark" aria-current="page" style="font-size:20px; margin-right:5px; background-color:#8caca2;">
						<svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" fill="currentColor" class="bi bi-people me-4" viewBox="0 0 16 16">
							<path d="M15 14s1 0 1-1-1-4-5-4-5 3-5 4 1 1 1 1h8zm-7.978-1A.261.261 0 0 1 7 12.996c.001-.264.167-1.03.76-1.72C8.312 10.629 9.282 10 11 10c1.717 0 2.687.63 3.24 1.276.593.69.758 1.457.76 1.72l-.008.002a.274.274 0 0 1-.014.002H7.022zM11 7a2 2 0 1 0 0-4 2 2 0 0 0 0 4zm3-2a3 3 0 1 1-6 0 3 3 0 0 1 6 0zM6.936 9.28a5.88 5.88 0 0 0-1.23-.247A7.35 7.35 0 0 0 5 9c-4 0-5 3-5 4 0 .667.333 1 1 1h4.216A2.238 2.238 0 0 1 5 13c0-1.01.377-2.042 1.09-2.904.243-.294.526-.569.846-.816zM4.92 10A5.493 5.493 0 0 0 4 13H1c0-.26.164-1.03.76-1.724.545-.636 1.492-1.256 3.16-1.275zM1.5 5.5a3 3 0 1 1 6 0 3 3 0 0 1-6 0zm3-2a2 2 0 1 0 0 4 2 2 0 0 0 0-4z" />
						</svg>
						Data Pegawai
					</a>
				</li>
				<li>
					<a href="dosen.php" class="nav-link link-dark">
						<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi me-2" viewBox="0 0 16 16">
							<path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0z" />
							<path fill-rule="evenodd" d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8zm8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1z" />
						</svg>
						Dosen
					</a>
				</li>
				<li>
					<a href="Mahasiswa.php" class="nav-link link-dark">
						<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi me-2" viewBox="0 0 16 16">
							<path d="M7 14s-1 0-1-1 1-4 5-4 5 3 5 4-1 1-1 1H7zm4-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6z" />
							<path fill-rule="evenodd" d="M5.216 14A2.238 2.238 0 0 1 5 13c0-1.355.68-2.75 1.936-3.72A6.325 6.325 0 0 0 5 9c-4 0-5 3-5 4s1 1 1 1h4.216z" />
							<path d="M4.5 8a2.5 2.5 0 1 0 0-5 2.5 2.5 0 0 0 0 5z" />
						</svg>
						Mahasiswa
					</a>
				</li>
				<li>
					<a href="barang.php" class="nav-link link-dark">
						<svg class="bi me-2" width="16" height="16">
							<use xlink:href="#grid" />
						</svg>
						Barang
					</a>
				</li>
				<li>
					<a href="peminjaman.php" class="nav-link link-dark">
						<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi me-2" viewBox="0 0 16 16">
							<path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z" />
							<path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z" />
						</svg>
						Peminjaman
					</a>
				</li>
			</ul> -->
			<ul class="side-menu">
				<li class="slide">
					<a class="side-menu__item" style="background-color:#8caca2;" href="/">
						<i class="fas fa-users" style="font-size:20px; margin-right:5px"></i>
						<span class="side-menu__label" style="background-color:#8caca2;">Data Pegawai</span></a>
				</li>
				<li class="slide">
					<a class="side-menu__item" style="background-color:#8caca2;" data-toggle="slide" href="/data_dokter">
						<i class="fas fa-user-md" style="font-size:22px; margin-right:10px"></i>
						<span class="side-menu__label">Data Dokter</span></a>
				</li>
				<li class="slide">
					<a class="side-menu__item" style="background-color:#8caca2;" href="/jadwal_praktek">
						<i class="far fa-calendar-alt" style="font-size:20px; margin-right:12px"></i>
						<span class="side-menu__label">Jadwal Praktek Dokter</span></a>
				</li>
				<li class="slide">
					<a class="side-menu__item" style="background-color:#8caca2;" href="/data_pasien">
						<i class="far fa-calendar-alt" style="font-size:20px; margin-right:12px"></i>
						<span class="side-menu__label">Data Pasien</span></a>
				</li>
				<li class="slide">
					<a class="side-menu__item" style="background-color:#8caca2;" data-toggle="slide" href="/tempat_tidur">
						<i class="fas fa-bed" style="font-size:17px; margin-right:9px"></i>
						<span class="side-menu__label">Data Tempat Tidur</span></a>
				</li>
				<li class="slide">
					<a class="side-menu__item" style="background-color:#8caca2;" data-toggle="slide" href="/data_rawat">
						<i class="fas fa-procedures" style="font-size:17px; margin-right:9px"></i>
						<span class="side-menu__label">Data Rawat</span></i></a>
				</li>
				<li class="slide">
					<a class="side-menu__item" style="background-color:#8caca2;" data-toggle="slide" href="/obat_perlengkapan">
						<i class="fas fa-tablets" style="font-size:17px; margin-right:9px"></i>
						<span class="side-menu__label">Data Obat & Perlengkapan</span></a>
				</li>
				<li class="slide">
					<a class="side-menu__item" style="background-color:#8caca2;" data-toggle="slide" href="/data_tindakan">
						<i class="fas fa-file-medical-alt" style="font-size:22px; margin-right:10px"></i>
						<span class="side-menu__label">Data Tindakan</span></a>
				</li>
			</ul>
			<div class="app-sidefooter" style="background-color:#8caca2;">
				<a class="side-menu__item" href="/logout"><svg class="side-menu__icon" xmlns="http://www.w3.org/2000/svg" enable-background="new 0 0 24 24" height="24" viewBox="0 0 24 24" width="24">
						<g>
							<rect fill="none" height="24" width="24" />
						</g>
						<g>
							<path d="M11,7L9.6,8.4l2.6,2.6H2v2h10.2l-2.6,2.6L11,17l5-5L11,7z M20,19h-8v2h8c1.1,0,2-0.9,2-2V5c0-1.1-0.9-2-2-2h-8v2h8V19z" />
						</g>
					</svg> <span class="side-menu__label">Logout</span></a>
			</div>
		</div>
	</aside>
	<!-- main-sidebar -->
	<!-- main-content -->
	<div class="main-content app-content">

		<!-- main-header -->
		<div class="main-header sticky side-header nav nav-item" style="background-color: #F5F1EA;">
			<div class="container-fluid">
				<div class="main-header-left">
					<div class="app-sidebar__toggle d-md-none" data-toggle="sidebar">
						<a class="open-toggle" href="#"><i class="fas fa-bars" style="font-size:25px"></i></a>
						<a class="close-toggle" href="#"><i class="fas fa-times"></i></a>
					</div>
				</div>
				<div class="main-header-right">
					<div class="nav nav-item  navbar-nav-right ml-auto">
						<div class="dropdown main-profile-menu nav nav-item nav-link">
							<a class="profile-user d-flex" href=""><img src="https://github.com/Safiraslw.png">
							</a>
						</div>
						<div class="dropdown main-header-message right-toggle">
							<a class="nav-link pr-0" data-toggle="sidebar-right" data-target=".sidebar-right">
								<i class="fas fa-caret-down" style="font-size:20px"></i>
							</a>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- /main-header -->
		<!-- container -->
		@yield('content')
		<!-- Container closed -->

	</div>
	<!-- main-content closed -->

	<!-- Sidebar-right-->
	<div class="sidebar sidebar-right sidebar-animate" style="background-color: #F5F1EA;">
		<div class="panel panel-light card mb-0 box-shadow">
			<div class="tab-menu-heading border-0 p-3" style="background-color:#8caca2;">
				<div class="card-title mb-0">Profil Saya</div>
				<div class="card-options ml-auto">
					<a href="#" class="sidebar-remove" style="color: #F5F1EA;"><i class="fas fa-times"></i></a>
				</div>
			</div>
			<div class="panel-body tabs-menu-body latest-tasks p-0 border-0" style="background-color: #F5F1EA;">
				<div class="tab-content">
					<div class="tab-pane active" id="side1">
						<div class="card-body text-center">
							<div class="dropdown user-pro-body">
								<div class="">
									<img class="avatar avatar-xl brround mx-auto text-center" src="https://github.com/Safiraslw.png">
									<span class="avatar-status profile-status bg-dark"></span>
								</div>
								<div class="user-info mg-t-20">
									<h6 class="font-weight-semibold  mt-2 mb-0">{{session('username')}}</h6>
									<span class="mb-0 text-muted">Administrator</span>
								</div>
							</div>
						</div>
						<a class="dropdown-item d-flex pd-y-15 border-bottom" href="/logout">
							<div class="d-flex"><i class="fas fa-sign-out-alt mr-3 tx-20 mg-t-5 text-muted"></i>
								<div>
									<h6 class="mb-0">Log Out</h6>
								</div>
							</div>
						</a>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!--/Sidebar-right-->

	<!-- Footer opened -->
	<div class="main-footer ht-40" style="background-color: #F5F1EA;">
		<div class="container-fluid pd-t-0-f ht-100p">
			<span>Copyright © 2022 SISFOM RS</span>
		</div>
	</div>
	<!-- Footer closed -->
	<!-- Back-to-top -->
	<!-- <a href="#top" id="back-to-top"><i class="fas fa-arrow-up"></i></a> -->

	<!-- Jquery js-->
	<script src="https://laravel.spruko.com/dashfox/ltr/assets/plugins/jquery/jquery.min.js"></script>

	<!-- Bootstrap4 js-->
	<script src="https://laravel.spruko.com/dashfox/ltr/assets/plugins/bootstrap/popper.min.js"></script>
	<script src="https://laravel.spruko.com/dashfox/ltr/assets/plugins/bootstrap/js/bootstrap.min.js"></script>

	<!-- Ionicons js-->
	<script src="https://laravel.spruko.com/dashfox/ltr/assets/plugins/ionicons/ionicons.js"></script>

	<!-- Moment js -->
	<script src="https://laravel.spruko.com/dashfox/ltr/assets/plugins/moment/moment.js"></script>

	<!-- P-scroll js -->
	<script src="https://laravel.spruko.com/dashfox/ltr/assets/plugins/perfect-scrollbar/perfect-scrollbar.min.js"></script>
	<script src="https://laravel.spruko.com/dashfox/ltr/assets/plugins/perfect-scrollbar/p-scroll.js"></script>

	<!-- Sidebar js -->
	<script src="https://laravel.spruko.com/dashfox/ltr/assets/plugins/side-menu/sidemenu.js"></script>

	<!-- Rating js-->
	<script src="https://laravel.spruko.com/dashfox/ltr/assets/plugins/rating/jquery.rating-stars.js"></script>
	<script src="https://laravel.spruko.com/dashfox/ltr/assets/plugins/rating/jquery.barrating.js"></script>

	<!-- Suggestion js-->
	<script src="https://laravel.spruko.com/dashfox/ltr/assets/plugins/suggestion/jquery.input-dropdown.js"></script>
	<script src="https://laravel.spruko.com/dashfox/ltr/assets/js/search.js"></script>

	<!-- Right-sidebar js -->
	<script src="https://laravel.spruko.com/dashfox/ltr/assets/plugins/sidebar/sidebar.js"></script>
	<script src="https://laravel.spruko.com/dashfox/ltr/assets/plugins/sidebar/sidebar-custom.js"></script>

	<!-- Sticky js-->
	<script src="https://laravel.spruko.com/dashfox/ltr/assets/js/sticky.js"></script>

	<!-- eva-icons js -->
	<script src="https://laravel.spruko.com/dashfox/ltr/assets/plugins/eva-icons/eva-icons.min.js"></script>



	<!-- Eva-icons js -->
	<script src="https://laravel.spruko.com/dashfox/ltr/assets/js/eva-icons.min.js"></script>


	<!-- custom js -->
	<script src="https://laravel.spruko.com/dashfox/ltr/assets/js/custom.js"></script>

	<!-- Switcher js -->
	<script src="https://laravel.spruko.com/dashfox/ltr/assets/switcher/js/switcher.js"></script>

	<!-- font awesome -->
	<script src="https://kit.fontawesome.com/964ae5b0fd.js" crossorigin="anonymous"></script>
</body>

</html>