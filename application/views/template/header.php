<?php 



if ( empty( $this->session->userdata('id_profile') ) ) {

    $html = '<div class="alert alert-danger text-left">Pemberitahuan<br><small>Harap login terlebih dahulu</small></div>';
    $this->session->set_flashdata('pesan', $html);

    // password salah
    redirect('login/index');
}

?>


<!DOCTYPE html>
<!--
Template Name: Metronic - Bootstrap 4 HTML, React, Angular 11 & VueJS Admin Dashboard Theme
Author: KeenThemes
Website: http://www.keenthemes.com/
Contact: support@keenthemes.com
Follow: www.twitter.com/keenthemes
Dribbble: www.dribbble.com/keenthemes
Like: www.facebook.com/keenthemes
Purchase: https://1.envato.market/EA4JP
Renew Support: https://1.envato.market/EA4JP
License: You must have a valid license purchased only from themeforest(the above link) in order to legally use the theme for your project.
-->
<html lang="en">
	<!--begin::Head ella-->
	<head>
		
		<meta charset="utf-8" />
		<title>Dashboard</title>
		<meta name="description" content="Updates and statistics" />
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
		<link rel="canonical" href="https://keenthemes.com/metronic" />
		<!--begin::Fonts-->
		<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" />
		<!--end::Fonts-->
		<!--begin::Page Vendors Styles(used by this page)-->
		<link href="<?php echo base_url() ?>assets/plugins/custom/fullcalendar/fullcalendar.bundle.css?v=7.2.9" rel="stylesheet" type="text/css" />
		<!--end::Page Vendors Styles-->
		<!--begin::Global Theme Styles(used by all pages)-->
		<link href="<?php echo base_url() ?>assets/plugins/global/plugins.bundle.css?v=7.2.9" rel="stylesheet" type="text/css" />
		<link href="<?php echo base_url() ?>assets/plugins/custom/prismjs/prismjs.bundle.css?v=7.2.9" rel="stylesheet" type="text/css" />
		<link href="<?php echo base_url() ?>assets/css/style.bundle.css?v=7.2.9" rel="stylesheet" type="text/css" />
		<!--end::Global Theme Styles-->
		<!--begin::Layout Themes(used by all pages)-->
		<!--end::Layout Themes-->
		<link rel="shortcut icon" href="<?php echo base_url() ?>assets/media/logos/logopolinema.ico" />

		<script>var HOST_URL = "/metronic/theme/html/tools/preview";</script>
		<!--begin::Global Config(global config for global JS scripts)-->
		<script>var KTAppSettings = { "breakpoints": { "sm": 576, "md": 768, "lg": 992, "xl": 1200, "xxl": 1200 }, "colors": { "theme": { "base": { "white": "#ffffff", "primary": "#8950FC", "secondary": "#E5EAEE", "success": "#1BC5BD", "info": "#6993FF", "warning": "#FFA800", "danger": "#F64E60", "light": "#F3F6F9", "dark": "#212121" }, "light": { "white": "#ffffff", "primary": "#EEE5FF", "secondary": "#ECF0F3", "success": "#C9F7F5", "info": "#E1E9FF", "warning": "#FFF4DE", "danger": "#FFE2E5", "light": "#F3F6F9", "dark": "#D6D6E0" }, "inverse": { "white": "#ffffff", "primary": "#ffffff", "secondary": "#212121", "success": "#ffffff", "info": "#ffffff", "warning": "#ffffff", "danger": "#ffffff", "light": "#464E5F", "dark": "#ffffff" } }, "gray": { "gray-100": "#F3F6F9", "gray-200": "#ECF0F3", "gray-300": "#E5EAEE", "gray-400": "#D6D6E0", "gray-500": "#B5B5C3", "gray-600": "#80808F", "gray-700": "#464E5F", "gray-800": "#1B283F", "gray-900": "#212121" } }, "font-family": "Poppins" };</script>
		<!--end::Global Config-->
		<!--begin::Global Theme Bundle(used by all pages)-->
		<script src="<?php echo base_url() ?>assets/plugins/global/plugins.bundle.js?v=7.2.9"></script>
		<script src="<?php echo base_url() ?>assets/plugins/custom/prismjs/prismjs.bundle.js?v=7.2.9"></script>
		<script src="<?php echo base_url() ?>assets/js/scripts.bundle.js?v=7.2.9"></script>
		<!--end::Global Theme Bundle-->
		<!--begin::Page Vendors(used by this page)-->
		<script src="<?php echo base_url() ?>assets/plugins/custom/fullcalendar/fullcalendar.bundle.js?v=7.2.9"></script>
		<!--end::Page Vendors-->
		<!--begin::Page Scripts(used by this page)-->
		<script src="<?php echo base_url() ?>assets/js/pages/widgets.js?v=7.2.9"></script>
		<!--end::Page Scripts-->
		
		
	</head>
	<!--end::Head-->
	<!--begin::Body-->
	<body id="kt_body" class="header-fixed subheader-enabled page-loading">
		<!-- Google Tag Manager (noscript) -->
		
		<!--begin::Main-->
		<div class="d-flex flex-column flex-root">
			<!--begin::Page-->
			<div class="d-flex flex-row flex-column-fluid page">
				<!--begin::Wrapper-->
				<div class="d-flex flex-column flex-row-fluid wrapper" id="kt_wrapper">
					<!--begin::Header Mobile-->
					<div id="kt_header_mobile" class="header-mobile">
						<!--begin::Logo-->
						<a href="/metronic/demo8/index.html">
							<img alt="Logo" src="<?php echo base_url() ?>assets/media/logos/Logo-2.png" class="max-h-80px" />
						</a>
						<!--end::Logo-->
						<!--begin::Toolbar-->
						<div class="d-flex align-items-center">
							<button class="btn p-0 burger-icon burger-icon-left ml-4" id="kt_header_mobile_toggle">
								<span></span>
							</button>
							<button class="btn p-0 ml-2" id="kt_header_mobile_topbar_toggle">
								<span class="svg-icon svg-icon-xl">
									<!--begin::Svg Icon | path:<?php echo base_url() ?>assets/media/svg/icons/General/User.svg-->
									<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
										<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
											<polygon points="0 0 24 0 24 24 0 24" />
											<path d="M12,11 C9.790861,11 8,9.209139 8,7 C8,4.790861 9.790861,3 12,3 C14.209139,3 16,4.790861 16,7 C16,9.209139 14.209139,11 12,11 Z" fill="#000000" fill-rule="nonzero" opacity="0.3" />
											<path d="M3.00065168,20.1992055 C3.38825852,15.4265159 7.26191235,13 11.9833413,13 C16.7712164,13 20.7048837,15.2931929 20.9979143,20.2 C21.0095879,20.3954741 20.9979143,21 20.2466999,21 C16.541124,21 11.0347247,21 3.72750223,21 C3.47671215,21 2.97953825,20.45918 3.00065168,20.1992055 Z" fill="#000000" fill-rule="nonzero" />
										</g>
									</svg>
									<!--end::Svg Icon-->
								</span>
							</button>
						</div>
						<!--end::Toolbar-->
					</div>
					<!--end::Header Mobile-->
					<!--begin::Header-->
					<div id="kt_header" class="header header-fixed">
						<!--begin::Container-->
						<div class="container">
							<!--begin::Left-->
							<div class="d-none d-lg-flex align-items-center mr-3">
								<!--begin::Logo-->
								<a href="/metronic/demo8/index.html" class="mr-20">
									<img alt="Logo" src="<?php echo base_url() ?>assets/media/logos/Logo-2.png" class="logo-default max-h-60px" />
								</a>
								<!--end::Logo-->
							</div>
							<!--end::Left-->
							<!--begin::Topbar-->
							<div class="topbar topbar-minimize">
								
								<!--begin::Notifications-->
								
								<!--end::Notifications-->
								<!--begin::Quick Actions-->
								
								<!--end::Quick Actions-->
								<!--begin::My Cart-->
								
								<!--end::My Cart-->
								<!--begin::Quick panel-->
								
								<!--end::Quick panel-->
								<!--begin::User-->
								<div class="dropdown">
									<!--begin::Toggle-->
									<div class="topbar-item" data-toggle="dropdown" data-offset="0px,0px">
										<div class="btn btn-icon btn-clean h-40px w-40px btn-dropdown">
											<span class="svg-icon svg-icon-lg">
												<!--begin::Svg Icon | path:<?php echo base_url() ?>assets/media/svg/icons/General/User.svg-->
												<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
													<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
														<polygon points="0 0 24 0 24 24 0 24" />
														<path d="M12,11 C9.790861,11 8,9.209139 8,7 C8,4.790861 9.790861,3 12,3 C14.209139,3 16,4.790861 16,7 C16,9.209139 14.209139,11 12,11 Z" fill="#000000" fill-rule="nonzero" opacity="0.3" />
														<path d="M3.00065168,20.1992055 C3.38825852,15.4265159 7.26191235,13 11.9833413,13 C16.7712164,13 20.7048837,15.2931929 20.9979143,20.2 C21.0095879,20.3954741 20.9979143,21 20.2466999,21 C16.541124,21 11.0347247,21 3.72750223,21 C3.47671215,21 2.97953825,20.45918 3.00065168,20.1992055 Z" fill="#000000" fill-rule="nonzero" />
													</g>
												</svg>
												<!--end::Svg Icon-->
											</span>
										</div>
									</div>
									<!--end::Toggle-->
									<!--begin::Dropdown-->
									<div class="dropdown-menu p-0 m-0 dropdown-menu-right dropdown-menu-anim-up dropdown-menu-lg p-0">
										<!--begin::Header-->
										<div class="d-flex align-items-center p-8 rounded-top">
											<!--begin::Symbol-->
											<div class="symbol symbol-md bg-light-primary mr-3 flex-shrink-0">
												<img src="<?php echo base_url() ?>assets/media/users/300_21.jpg" alt="" />
											</div>
											<!--end::Symbol-->
											<!--begin::Text-->
											<div class="text-dark m-0 flex-grow-1 mr-3 font-size-h5"><?php echo $this->session->userdata('nama') ?></div>
											
											<!--end::Text-->
										</div>
										<div class="separator separator-solid"></div>
										<!--end::Header-->
										<!--begin::Nav-->
										<div class="navi navi-spacer-x-0 pt-5">
											
											<!--begin::Footer-->
											<div class="navi-separator mt-3"></div>
											<div class="navi-footer px-8 py-5">
												<a href="<?php echo base_url('login/proseslogout') ?>" class="btn btn-light-primary font-weight-bold">Keluar Aplikasi</a>
											</div>
											<!--end::Footer-->
										</div>
										<!--end::Nav-->
									</div>
									<!--end::Dropdown-->
								</div>
								<!--end::User-->
							</div>
							<!--end::Topbar-->
						</div>
						<!--end::Container-->
					</div>
					<!--end::Header-->
					<!--begin::Header Menu Wrapper-->
					<div class="header-menu-wrapper header-menu-wrapper-left" id="kt_header_menu_wrapper">
						<div class="container">
							<!--begin::Header Menu-->
							<div id="kt_header_menu" class="header-menu header-menu-left header-menu-mobile header-menu-layout-default header-menu-root-arrow">
								<!--begin::Header Nav-->
								<ul class="menu-nav">
									<?php $uri = $this->uri->segment(1); ?>
									
									<li class="menu-item <?php if ( $uri == "dashboard" ) echo 'menu-item-here'; ?>">
										<a href="<?php echo base_url('dashboard/index') ?>" class="menu-link">
											<span class="menu-text">Dashboard</span>
										</a>
									</li>

									<li class="menu-item">
										<a href="<?php echo base_url() ?>" class="menu-link">
											<span class="menu-text">Halaman Depan</span>
										</a>
									</li>
									
                                    <li class="menu-item <?php if ( $uri == "dataset" ) echo 'menu-item-here'; ?>">
										<a href="<?php echo base_url('dataset/index') ?>" class="menu-link">
											<span class="menu-text">Dataset</span>
										</a>
									</li>
                                    
                                    <li class="menu-item  <?php if ( $uri == "preprocessing" ) echo 'menu-item-here'; ?>">
										<a href="<?php echo base_url('preprocessing/index') ?>" class="menu-link">
											<span class="menu-text">Preprocessing</span>
										</a>
									</li>
                                    
                                    <li class="menu-item <?php if ( $uri == "processing" ) echo 'menu-item-here'; ?> ">
										<a href="<?php echo base_url('processing/index') ?>" class="menu-link">
											<span class="menu-text">Processing</span>
										</a>
									</li>
                                    <li class="menu-item <?php if ( $uri == "klasifikasi" ) echo 'menu-item-here'; ?> ">
										<a href="<?php echo base_url('klasifikasi/index') ?>" class="menu-link">
											<span class="menu-text">Klasifikasi</span>
										</a>
									</li>
                                    
                                    <li class="menu-item  <?php if ( $uri == "lapor_hoax" ) echo 'menu-item-here'; ?>">
										<a href="<?php echo base_url('lapor_hoax/index') ?>" class="menu-link">
											<span class="menu-text">Laporan Hoax</span>
										</a>
									</li>
									<li class="menu-item  <?php if ( $uri == "profile" ) echo 'menu-item-here'; ?>">
										<a href="<?php echo base_url('profile/index') ?>" class="menu-link">
											<span class="menu-text">Profile</span>
										</a>
									</li>
									<li class="menu-item  <?php if ( $uri == "faq" ) echo 'menu-item-here'; ?>">
										<a href="<?php echo base_url('faq') ?>" class="menu-link">
											<span class="menu-text">FAQ</span>
										</a>
									</li>

								</ul>
								<!--end::Header Nav-->
							</div>
							<!--end::Header Menu-->
						</div>
					</div>
					<!--end::Header Menu Wrapper-->
					<!--begin::Container-->
					<div class="d-flex flex-row flex-column-fluid container">
						<!--begin::Content Wrapper-->
						<div class="main d-flex flex-column flex-row-fluid">
							<!--begin::Subheader-->
							<div class="subheader py-2 py-lg-6" id="kt_subheader">
								<div class="w-100 d-flex align-items-center justify-content-between flex-wrap flex-sm-nowrap">
									<!--begin::Info-->
									<div class="d-flex align-items-center flex-wrap mr-1">
										<!--begin::Page Heading-->
										<div class="d-flex align-items-baseline flex-wrap mr-5">
											<!--begin::Page Title-->
											<h5 class="text-dark font-weight-bold my-1 mr-5">Reports</h5>
											<!--end::Page Title-->
											<!--begin::Breadcrumb-->
											<ul class="breadcrumb breadcrumb-transparent breadcrumb-dot font-weight-bold p-0 my-2 font-size-sm">
												
												<li class="breadcrumb-item text-muted">
													<a href="" class="text-muted">Application</a>
												</li>
											</ul>
											<!--end::Breadcrumb-->
										</div>
										<!--end::Page Heading-->
									</div>
									<!--end::Info-->
									<!--begin::Toolbar-->
									<div class="d-flex align-items-center">
										<!--begin::Daterange-->
										<a href="#" class="btn btn-light-primary btn-sm font-weight-bold mr-2" id="kt_dashboard_daterangepicker" data-toggle="tooltip" title="Select dashboard daterange" data-placement="left">
											<span class="opacity-60 font-weight-bold mr-2" id="kt_dashboard_daterangepicker_title">Today</span>
											<span class="font-weight-bold" id="kt_dashboard_daterangepicker_date">Aug 16</span>
										</a>
										<!--end::Daterange-->
										<!--begin::Dropdown-->
										
										<!--end::Dropdown-->
									</div>
									<!--end::Toolbar-->
								</div>
							</div>
							<!--end::Subheader-->