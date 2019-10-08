<!DOCTYPE html>
<html lang="en">
<!-- begin::Head -->

<head>
	<meta charset="utf-8" />
	<title>FATbit | Dashboard</title>
	<meta name="description" content="">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<!--begin::Fonts -->
	<script src="https://ajax.googleapis.com/ajax/libs/webfont/1.6.16/webfont.js"></script>
	<script>
		WebFont.load({
			google: {
				"families": ["Poppins:300,400,500,600,700"]
			},
			active: function() {
				sessionStorage.fonts = true;
			}
		});
	</script>
	<!--end::Fonts -->
	<link href="css/bundle.css" rel="stylesheet" type="text/css" />
	<!--end::Layout Skins -->
	<link rel="shortcut icon" href="images/favicon.ico" />

</head>
<!-- end::Head -->
<!-- begin::Body -->

<body class="page--loading-enabled demo-panel--right offcanvas-panel--right header--fixed header--minimize-menu header-mobile--fixed subheader--enabled subheader--transparent">
	<div class="wrapper">
		<?php
  include 'includes/header.php';
?>
		<div class="body grid__item grid__item--fluid grid grid--hor grid--stretch" id="body">
			<div class="content content--fit-top  grid__item grid__item--fluid grid grid--hor" id="content">

				<!-- begin:: Subheader -->
				<div class="subheader   grid__item" id="subheader">
					<div class="container ">
						<div class="subheader__main">
							<h3 class="subheader__title">

								Ribbon </h3>

							<div class="subheader__breadcrumbs">
								<a href="#" class="subheader__breadcrumbs-home"><i class="flaticon2-shelter"></i></a>
								<span class="subheader__breadcrumbs-separator"></span>
								<a href="" class="subheader__breadcrumbs-link">
									Components </a>
								<span class="subheader__breadcrumbs-separator"></span>
								<a href="" class="subheader__breadcrumbs-link">
									Custom </a>
								<span class="subheader__breadcrumbs-separator"></span>
								<a href="" class="subheader__breadcrumbs-link">
									Ribbon </a>
							</div>
						</div>
						<div class="subheader__toolbar">
							<div class="subheader__wrapper">
								<a href="#" class="btn subheader__btn-secondary">
									Reports
								</a>

								<div class="dropdown dropdown-inline" data-toggle="tooltip" title="" data-placement="top" data-original-title="Quick actions">
									<a href="#" class="btn btn-danger subheader__btn-options" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
										Products
									</a>
									<div class="dropdown-menu dropdown-menu-right">
										<a class="dropdown-item" href="#"><i class="la la-plus"></i> New Product</a>
										<a class="dropdown-item" href="#"><i class="la la-user"></i> New Order</a>
										<a class="dropdown-item" href="#"><i class="la la-cloud-download"></i> New Download</a>
										<div class="dropdown-divider"></div>
										<a class="dropdown-item" href="#"><i class="la la-cog"></i> Settings</a>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<!-- end:: Subheader -->

				<!-- begin:: Content -->
				<div class="container  grid__item grid__item--fluid">
					<!--begin: Row -->
					<div class="row">
						<div class="col-lg-4">
							<div class="portlet">
								<div class="portlet__head ribbon ribbon--right">
									<div class="ribbon__target" style="top: 10px; right: -2px;">Ribbon</div>
									<div class="portlet__head-label">
										<h3 class="portlet__head-title">
											Default
										</h3>
									</div>
								</div>
								<div class="portlet__body">
									Lorem ipsum dolor sit amet, consectetur adipiscing elit. Inceptos imperdiet magna! Sed fusce fames tempus
									litora venenatis ad: Ac aliquet leo hendrerit taciti viverra? Nisl suscipit potenti accumsan quis ipsum purus cursus.
									Suspendisse ultrices morbi in purus lectus dictum porta; Commodo penatibus nec.
								</div>
							</div>
						</div>

						<div class="col-lg-4">
							<div class="portlet">
								<div class="portlet__head portlet__head--right ribbon ribbon--success">
									<div class="ribbon__target" style="top: 10px; left: -2px;">Ribbon</div>

									<div class="portlet__head-label" style="align-self: center;">
										<h3 class="portlet__head-title">
											Left Aligned
										</h3>
									</div>
								</div>
								<div class="portlet__body">
									Lorem ipsum dolor sit amet, consectetur adipiscing elit. Inceptos imperdiet magna! Sed fusce fames tempus
									litora venenatis ad: Ac aliquet leo hendrerit taciti viverra? Nisl suscipit potenti accumsan quis ipsum purus cursus.
									Suspendisse ultrices morbi in purus lectus dictum porta; Commodo penatibus nec.
								</div>
							</div>
						</div>

						<div class="col-lg-4">
							<div class="portlet">
								<div class="portlet__head ribbon">
									<div class="ribbon__target" style="top: -2px; right: 20%;">Ribbon</div>
									<div class="portlet__head-label">
										<h3 class="portlet__head-title">
											Custom Aligment
										</h3>
									</div>
								</div>
								<div class="portlet__body">
									Lorem ipsum dolor sit amet, consectetur adipiscing elit. Inceptos imperdiet magna! Sed fusce fames tempus
									litora venenatis ad: Ac aliquet leo hendrerit taciti viverra? Nisl suscipit potenti accumsan quis ipsum purus cursus.
									Suspendisse ultrices morbi in purus lectus dictum porta; Commodo penatibus nec.
								</div>
							</div>
						</div>
					</div>
					<!--end: Row -->

					<!--begin: Row -->
					<div class="row">
						<div class="col-lg-4">
							<div class="portlet">
								<div class="portlet__head ribbon ribbon--right ribbon--danger">
									<div class="ribbon__target" style="top: 70px; right: -2px;">Hot</div>
									<div class="portlet__head-label">
										<h3 class="portlet__head-title">
											Custom Position
										</h3>
									</div>
								</div>
								<div class="portlet__body">
									Lorem ipsum dolor sit amet, consectetur adipiscing elit. Inceptos imperdiet magna! Sed fusce fames tempus
									litora venenatis ad: Ac aliquet leo hendrerit taciti viverra? Nisl suscipit potenti accumsan quis ipsum purus cursus.
									Suspendisse ultrices morbi in purus lectus dictum porta; Commodo penatibus nec.
								</div>
							</div>
						</div>

						<div class="col-lg-4">
							<div class="portlet">
								<div class="portlet__head ribbon ribbon--success">
									<div class="ribbon__target" style="top: 15px; left: -14px;"><i class="flaticon2-hangouts-logo"></i></div>

									<div class="portlet__head-label">
										<h3 class="portlet__head-title">
											Custom Position
										</h3>
									</div>
								</div>
								<div class="portlet__body">
									Lorem ipsum dolor sit amet, consectetur adipiscing elit. Inceptos imperdiet magna! Sed fusce fames tempus
									litora venenatis ad: Ac aliquet leo hendrerit taciti viverra? Nisl suscipit potenti accumsan quis ipsum purus cursus.
									Suspendisse ultrices morbi in purus lectus dictum porta; Commodo penatibus nec.
								</div>
							</div>
						</div>

						<div class="col-lg-4">
							<div class="portlet">
								<div class="portlet__head ribbon">
									<div class="ribbon__target" style="top: -14px; left: 25px;">Ribbon</div>
									<div class="portlet__head-label">
										<h3 class="portlet__head-title">
											Custom Position
										</h3>
									</div>
								</div>
								<div class="portlet__body">
									Lorem ipsum dolor sit amet, consectetur adipiscing elit. Inceptos imperdiet magna! Sed fusce fames tempus
									litora venenatis ad: Ac aliquet leo hendrerit taciti viverra? Nisl suscipit potenti accumsan quis ipsum purus cursus.
									Suspendisse ultrices morbi in purus lectus dictum porta; Commodo penatibus nec.
								</div>
							</div>
						</div>
					</div>
					<!--end: Row -->

					<!--begin: Row -->
					<div class="row">
						<div class="col-lg-4">
							<div class="portlet">
								<div class="portlet__head portlet__head--noborder  ribbon ribbon--danger ribbon--ver">
									<div class="ribbon__target" style="top: -2px; right: 20px;">
										OK!
									</div>
									<div class="portlet__head-label">
										<h3 class="portlet__head-title">
											Vertical
										</h3>
									</div>
								</div>
								<div class="portlet__body portlet__body--fit-top">
									Lorem ipsum dolor sit amet, consectetur adipiscing elit. Inceptos imperdiet magna! Sed fusce fames tempus
									litora venenatis ad: Ac aliquet leo hendrerit taciti viverra? Nisl suscipit potenti accumsan quis ipsum purus cursus.
									Suspendisse ultrices morbi in purus lectus dictum porta; Commodo penatibus nec.
								</div>
							</div>
						</div>

						<div class="col-lg-4">
							<div class="portlet">
								<div class="portlet__head portlet__head--noborder  ribbon ribbon--success ribbon--ver">
									<div class="ribbon__target" style="top: -2px; right: 20px;">
										<i class="fa fa-star"></i>
									</div>
									<div class="portlet__head-label">
										<h3 class="portlet__head-title">
											With Icon
										</h3>
									</div>
								</div>
								<div class="portlet__body portlet__body--fit-top">
									Lorem ipsum dolor sit amet, consectetur adipiscing elit. Inceptos imperdiet magna! Sed fusce fames tempus
									litora venenatis ad: Ac aliquet leo hendrerit taciti viverra? Nisl suscipit potenti accumsan quis ipsum purus cursus.
									Suspendisse ultrices morbi in purus lectus dictum porta; Commodo penatibus nec.
								</div>
							</div>
						</div>

						<div class="col-lg-4">
							<div class="portlet">
								<div class="portlet__head portlet__head--noborder  ribbon ribbon--warning ribbon--ver">
									<div class="ribbon__target" style="top: -2px; right: 20px;">
										<i class="fa fa-star"></i>
									</div>
									<div class="portlet__head-label">
										<h3 class="portlet__head-title">
											Vertical Ribbons
										</h3>
									</div>
								</div>
								<div class="portlet__body portlet__body--fit-top">
									Lorem ipsum dolor sit amet, consectetur adipiscing elit. Inceptos imperdiet magna! Sed fusce fames tempus
									litora venenatis ad: Ac aliquet leo hendrerit taciti viverra? Nisl suscipit potenti accumsan quis ipsum purus cursus.
									Suspendisse ultrices morbi in purus lectus dictum porta; Commodo penatibus nec.
								</div>
							</div>
						</div>
					</div>
					<!--end: Row -->

					<!--begin: Row -->
					<div class="row">
						<div class="col-lg-4">
							<div class="portlet">
								<div class="portlet__head portlet__head--noborder  ribbon ribbon--brand ribbon--shadow">
									<div class="ribbon__target" style="top: 12px; right: -2px;">
										Ribbon
									</div>
									<div class="portlet__head-label">
										<h3 class="portlet__head-title">
											Shadow Style
										</h3>
									</div>
								</div>
								<div class="portlet__body portlet__body--fit-top">
									Lorem ipsum dolor sit amet, consectetur adipiscing elit. Inceptos imperdiet magna! Sed fusce fames tempus
									litora venenatis ad: Ac aliquet leo hendrerit taciti viverra? Nisl suscipit potenti accumsan quis ipsum purus cursus.
									Suspendisse ultrices morbi in purus lectus dictum porta; Commodo penatibus nec.
								</div>
							</div>
						</div>

						<div class="col-lg-4">
							<div class="portlet">
								<div class="portlet__head portlet__head--noborder  ribbon ribbon--dark ribbon--ver ribbon--shadow">
									<div class="ribbon__target" style="top: -2px; right: 20px;">
										<i class="fa fa-star"></i>
									</div>
									<div class="portlet__head-label">
										<h3 class="portlet__head-title">
											Shadow Style
										</h3>
									</div>
								</div>
								<div class="portlet__body portlet__body--fit-top">
									Lorem ipsum dolor sit amet, consectetur adipiscing elit. Inceptos imperdiet magna! Sed fusce fames tempus
									litora venenatis ad: Ac aliquet leo hendrerit taciti viverra? Nisl suscipit potenti accumsan quis ipsum purus cursus.
									Suspendisse ultrices morbi in purus lectus dictum porta; Commodo penatibus nec.
								</div>
							</div>
						</div>

						<div class="col-lg-4">
							<div class="portlet">
								<div class="portlet__head portlet__head--noborder  ribbon ribbon--info ribbon--ver ribbon--shadow">
									<div class="ribbon__target" style="top: -2px; right: 20px;">
										<i class="fa fa-star"></i>
									</div>
									<div class="portlet__head-label">
										<h3 class="portlet__head-title">
											Shadow Style
										</h3>
									</div>
								</div>
								<div class="portlet__body portlet__body--fit-top">
									Lorem ipsum dolor sit amet, consectetur adipiscing elit. Inceptos imperdiet magna! Sed fusce fames tempus
									litora venenatis ad: Ac aliquet leo hendrerit taciti viverra? Nisl suscipit potenti accumsan quis ipsum purus cursus.
									Suspendisse ultrices morbi in purus lectus dictum porta; Commodo penatibus nec.
								</div>
							</div>
						</div>
					</div>
					<!--end: Row -->

					<!--begin: Row -->
					<div class="row">
						<div class="col-lg-4">
							<div class="portlet">
								<div class="portlet__head portlet__head--noborder  ribbon ribbon--danger ribbon--shadow ribbon--left ribbon--round">
									<div class="ribbon__target" style="top: 12px; right: -2px;">
										Ribbon
									</div>
									<div class="portlet__head-label">
										<h3 class="portlet__head-title">
											Rounded Style
										</h3>
									</div>
								</div>
								<div class="portlet__body portlet__body--fit-top">
									Lorem ipsum dolor sit amet, consectetur adipiscing elit. Inceptos imperdiet magna! Sed fusce fames tempus
									litora venenatis ad: Ac aliquet leo hendrerit taciti viverra? Nisl suscipit potenti accumsan quis ipsum purus cursus.
									Suspendisse ultrices morbi in purus lectus dictum porta; Commodo penatibus nec.
								</div>
							</div>
						</div>

						<div class="col-lg-4">
							<div class="portlet">
								<div class="portlet__head portlet__head--noborder  ribbon ribbon--success ribbon--ver ribbon--bottom ribbon--shadow ribbon--round">
									<div class="ribbon__target" style="top: -2px; right: 20px;">
										<i class="fa fa-star"></i>
									</div>
									<div class="portlet__head-label">
										<h3 class="portlet__head-title">
											Rounded Style
										</h3>
									</div>
								</div>
								<div class="portlet__body portlet__body--fit-top">
									Lorem ipsum dolor sit amet, consectetur adipiscing elit. Inceptos imperdiet magna! Sed fusce fames tempus
									litora venenatis ad: Ac aliquet leo hendrerit taciti viverra? Nisl suscipit potenti accumsan quis ipsum purus cursus.
									Suspendisse ultrices morbi in purus lectus dictum porta; Commodo penatibus nec.
								</div>
							</div>
						</div>

						<div class="col-lg-4">
							<div class="portlet">
								<div class="portlet__head portlet__head--noborder  ribbon ribbon--danger ribbon--ver ribbon--bottom ribbon--shadow ribbon--round">
									<div class="ribbon__target" style="top: -2px; right: 20px;">
										<i class="fa fa-star"></i>
									</div>
									<div class="portlet__head-label">
										<h3 class="portlet__head-title">
											Rounded Style
										</h3>
									</div>
								</div>
								<div class="portlet__body portlet__body--fit-top">
									Lorem ipsum dolor sit amet, consectetur adipiscing elit. Inceptos imperdiet magna! Sed fusce fames tempus
									litora venenatis ad: Ac aliquet leo hendrerit taciti viverra? Nisl suscipit potenti accumsan quis ipsum purus cursus.
									Suspendisse ultrices morbi in purus lectus dictum porta; Commodo penatibus nec.
								</div>
							</div>
						</div>
					</div>
					<!--end: Row -->

					<!--begin: Row -->
					<div class="row">
						<div class="col-lg-4">
							<div class="portlet">
								<div class="portlet__head portlet__head--noborder  ribbon ribbon--border-hor ribbon--danger ribbon--left">
									<div class="ribbon__target" style="top: 12px; right: -2px;">
										<span class="ribbon__inner"></span>Ribbon
									</div>
									<div class="portlet__head-label">
										<h3 class="portlet__head-title">
											Border Style
										</h3>
									</div>
								</div>
								<div class="portlet__body portlet__body--fit-top">
									Lorem ipsum dolor sit amet, consectetur adipiscing elit. Inceptos imperdiet magna! Sed fusce fames tempus
									litora venenatis ad: Ac aliquet leo hendrerit taciti viverra? Nisl suscipit potenti accumsan quis ipsum purus cursus.
									Suspendisse ultrices morbi in purus lectus dictum porta; Commodo penatibus nec.
								</div>
							</div>
						</div>

						<div class="col-lg-4">
							<div class="portlet">
								<div class="portlet__head portlet__head--noborder  ribbon ribbon--success ribbon--border-ver ribbon--bottom">
									<div class="ribbon__target" style="top: -2px; right: 20px; height: 45px;">
										<span class="ribbon__inner"></span><i class="fa fa-star"></i>
									</div>
									<div class="portlet__head-label">
										<h3 class="portlet__head-title">
											Border Style
										</h3>
									</div>
								</div>
								<div class="portlet__body portlet__body--fit-top">
									Lorem ipsum dolor sit amet, consectetur adipiscing elit. Inceptos imperdiet magna! Sed fusce fames tempus
									litora venenatis ad: Ac aliquet leo hendrerit taciti viverra? Nisl suscipit potenti accumsan quis ipsum purus cursus.
									Suspendisse ultrices morbi in purus lectus dictum porta; Commodo penatibus nec.
								</div>
							</div>
						</div>

						<div class="col-lg-4">
							<div class="portlet">
								<div class="portlet__head portlet__head--noborder  ribbon ribbon--danger ribbon--border-hor ribbon--bottom">
									<div class="ribbon__target" style="top: -2px; right: 20px; height: 45px;">
										<span class="ribbon__inner"></span><i class="fa fa-star"></i>
									</div>
									<div class="portlet__head-label">
										<h3 class="portlet__head-title">
											Border Style
										</h3>
									</div>
								</div>
								<div class="portlet__body portlet__body--fit-top">
									Lorem ipsum dolor sit amet, consectetur adipiscing elit. Inceptos imperdiet magna! Sed fusce fames tempus
									litora venenatis ad: Ac aliquet leo hendrerit taciti viverra? Nisl suscipit potenti accumsan quis ipsum purus cursus.
									Suspendisse ultrices morbi in purus lectus dictum porta; Commodo penatibus nec.
								</div>
							</div>
						</div>
					</div>
					<!--end: Row -->

					<!--begin: Row -->
					<div class="row">
						<div class="col-lg-4">
							<div class="portlet">
								<div class="portlet__head portlet__head--noborder  ribbon ribbon--border-dash-hor ribbon--danger ribbon--left">
									<div class="ribbon__target" style="top: 12px; right: -2px;">
										<span class="ribbon__inner"></span>Ribbon
									</div>
									<div class="portlet__head-label">
										<h3 class="portlet__head-title">
											Dash Style
										</h3>
									</div>
								</div>
								<div class="portlet__body portlet__body--fit-top">
									Lorem ipsum dolor sit amet, consectetur adipiscing elit. Inceptos imperdiet magna! Sed fusce fames tempus
									litora venenatis ad: Ac aliquet leo hendrerit taciti viverra? Nisl suscipit potenti accumsan quis ipsum purus cursus.
									Suspendisse ultrices morbi in purus lectus dictum porta; Commodo penatibus nec.
								</div>
							</div>
						</div>

						<div class="col-lg-4">
							<div class="portlet">
								<div class="portlet__head portlet__head--noborder  ribbon ribbon--success ribbon--border-dash-ver ribbon--border-ver ribbon--bottom">
									<div class="ribbon__target" style="top: -2px; right: 20px; height: 45px;">
										<span class="ribbon__inner"></span><i class="fa fa-star"></i>
									</div>
									<div class="portlet__head-label">
										<h3 class="portlet__head-title">
											Dash Style
										</h3>
									</div>
								</div>
								<div class="portlet__body portlet__body--fit-top">
									Lorem ipsum dolor sit amet, consectetur adipiscing elit. Inceptos imperdiet magna! Sed fusce fames tempus
									litora venenatis ad: Ac aliquet leo hendrerit taciti viverra? Nisl suscipit potenti accumsan quis ipsum purus cursus.
									Suspendisse ultrices morbi in purus lectus dictum porta; Commodo penatibus nec.
								</div>
							</div>
						</div>

						<div class="col-lg-4">
							<div class="portlet">
								<div class="portlet__head portlet__head--noborder  ribbon ribbon--danger ribbon--border-dash-ver ribbon--border-hor ribbon--bottom">
									<div class="ribbon__target" style="top: -2px; right: 20px; height: 45px;">
										<span class="ribbon__inner"></span><i class="fa fa-star"></i>
									</div>
									<div class="portlet__head-label">
										<h3 class="portlet__head-title">
											Dash Style
										</h3>
									</div>
								</div>
								<div class="portlet__body portlet__body--fit-top">
									Lorem ipsum dolor sit amet, consectetur adipiscing elit. Inceptos imperdiet magna! Sed fusce fames tempus
									litora venenatis ad: Ac aliquet leo hendrerit taciti viverra? Nisl suscipit potenti accumsan quis ipsum purus cursus.
									Suspendisse ultrices morbi in purus lectus dictum porta; Commodo penatibus nec.
								</div>
							</div>
						</div>
					</div>
					<!--end: Row -->

					<!--begin: Row -->
					<div class="row">
						<div class="col-lg-4">
							<div class="portlet">
								<div class="portlet__head portlet__head--right portlet__head--noborder  ribbon ribbon--clip ribbon--left ribbon--info">
									<div class="ribbon__target" style="top: 12px;">
										<span class="ribbon__inner"></span>Ribbon
									</div>
									<div class="portlet__head-label">
										<h3 class="portlet__head-title">
											Clip Style
										</h3>
									</div>
								</div>
								<div class="portlet__body portlet__body--fit-top">
									Lorem ipsum dolor sit amet, consectetur adipiscing elit. Inceptos imperdiet magna! Sed fusce fames tempus
									litora venenatis ad: Ac aliquet leo hendrerit taciti viverra? Nisl suscipit potenti accumsan quis ipsum purus cursus.
									Suspendisse ultrices morbi in purus lectus dictum porta; Commodo penatibus nec.
								</div>
							</div>
						</div>

						<div class="col-lg-4">
							<div class="portlet">
								<div class="portlet__head portlet__head--noborder  ribbon ribbon--clip ribbon--right ribbon--border-dash-hor ribbon--success">
									<div class="ribbon__target" style="top: 15px; height: 45px;">
										<span class="ribbon__inner"></span><i class="fa fa-star"></i>
									</div>
									<div class="portlet__head-label">
										<h3 class="portlet__head-title">
											Clip Style
										</h3>
									</div>
								</div>
								<div class="portlet__body portlet__body--fit-top">
									Lorem ipsum dolor sit amet, consectetur adipiscing elit. Inceptos imperdiet magna! Sed fusce fames tempus
									litora venenatis ad: Ac aliquet leo hendrerit taciti viverra? Nisl suscipit potenti accumsan quis ipsum purus cursus.
									Suspendisse ultrices morbi in purus lectus dictum porta; Commodo penatibus nec.
								</div>
							</div>
						</div>

						<div class="col-lg-4">
							<div class="portlet">
								<div class="portlet__head portlet__head--noborder  ribbon ribbon--clip ribbon--right ribbon--border-dash-hor ribbon--warning">
									<div class="ribbon__target" style="top: 12px;">
										<span class="ribbon__inner"></span>Ribbon
									</div>
									<div class="portlet__head-label">
										<h3 class="portlet__head-title">
											Clip Style
										</h3>
									</div>
								</div>
								<div class="portlet__body portlet__body--fit-top">
									Lorem ipsum dolor sit amet, consectetur adipiscing elit. Inceptos imperdiet magna! Sed fusce fames tempus
									litora venenatis ad: Ac aliquet leo hendrerit taciti viverra? Nisl suscipit potenti accumsan quis ipsum purus cursus.
									Suspendisse ultrices morbi in purus lectus dictum porta; Commodo penatibus nec.
								</div>
							</div>
						</div>
					</div>
					<!--end: Row -->

					<!--begin: Row -->
					<div class="row">
						<div class="col-lg-4">
							<div class="portlet">
								<div class="portlet__head portlet__head--right portlet__head--noborder  ribbon ribbon--ver ribbon--flag ribbon--border-dash-hor ribbon--brand">
									<div class="ribbon__target" style="top: 0; left: 20px; height: 45px;">
										<span class="ribbon__inner"></span><i class="fa fa-star"></i>
									</div>
									<div class="portlet__head-label">
										<h3 class="portlet__head-title">
											Flag Style
										</h3>
									</div>
								</div>
								<div class="portlet__body portlet__body--fit-top">
									Lorem ipsum dolor sit amet, consectetur adipiscing elit. Inceptos imperdiet magna! Sed fusce fames tempus
									litora venenatis ad: Ac aliquet leo hendrerit taciti viverra? Nisl suscipit potenti accumsan quis ipsum purus cursus.
									Suspendisse ultrices morbi in purus lectus dictum porta; Commodo penatibus nec.
								</div>
							</div>
						</div>

						<div class="col-lg-4">
							<div class="portlet">
								<div class="portlet__head portlet__head--noborder  ribbon ribbon--flag ribbon--ver ribbon--border-dash-hor ribbon--success">
									<div class="ribbon__target" style="top: 0; right: 20px; height: 45px;">
										<span class="ribbon__inner"></span><i class="fa fa-star"></i>
									</div>
									<div class="portlet__head-label">
										<h3 class="portlet__head-title">
											Flag Style
										</h3>
									</div>
								</div>
								<div class="portlet__body portlet__body--fit-top">
									Lorem ipsum dolor sit amet, consectetur adipiscing elit. Inceptos imperdiet magna! Sed fusce fames tempus
									litora venenatis ad: Ac aliquet leo hendrerit taciti viverra? Nisl suscipit potenti accumsan quis ipsum purus cursus.
									Suspendisse ultrices morbi in purus lectus dictum porta; Commodo penatibus nec.
								</div>
							</div>
						</div>

						<div class="col-lg-4">
							<div class="portlet">
								<div class="portlet__head portlet__head--noborder  ribbon ribbon--flag ribbon--ver ribbon--border-dash-hor ribbon--danger">
									<div class="ribbon__target" style="top: 0; right: 20px; height: 45px;">
										<span class="ribbon__inner"></span><i class="fa fa-star"></i>
									</div>
									<div class="portlet__head-label">
										<h3 class="portlet__head-title">
											Flag Style
										</h3>
									</div>
								</div>
								<div class="portlet__body portlet__body--fit-top">
									Lorem ipsum dolor sit amet, consectetur adipiscing elit. Inceptos imperdiet magna! Sed fusce fames tempus
									litora venenatis ad: Ac aliquet leo hendrerit taciti viverra? Nisl suscipit potenti accumsan quis ipsum purus cursus.
									Suspendisse ultrices morbi in purus lectus dictum porta; Commodo penatibus nec.
								</div>
							</div>
						</div>


					</div>
					<!--end: Row -->
				</div>
				<!-- end:: Content -->
			</div>
		</div>

		<?php
  include 'includes/footer.php';
?>
	</div>

</body>
<!-- end::Body -->

</html>