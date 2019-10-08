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

								Autosize </h3>

							<div class="subheader__breadcrumbs">
								<a href="#" class="subheader__breadcrumbs-home"><i class="flaticon2-shelter"></i></a>
								<span class="subheader__breadcrumbs-separator"></span>
								<a href="" class="subheader__breadcrumbs-link">
									Crud </a>
								<span class="subheader__breadcrumbs-separator"></span>
								<a href="" class="subheader__breadcrumbs-link">
									Forms &amp; Controls </a>
								<span class="subheader__breadcrumbs-separator"></span>
								<a href="" class="subheader__breadcrumbs-link">
									Form Widgets 2 </a>
								<span class="subheader__breadcrumbs-separator"></span>
								<a href="" class="subheader__breadcrumbs-link">
									Autosize </a>
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
					<div class="row">
						<div class="col">
							<div class="alert alert-light alert-elevate fade show" role="alert">
								<div class="alert-icon"><i class="flaticon-warning font-brand"></i></div>
								<div class="alert-text">
									A small, stand-alone script to automatically adjust textarea height.
									<br>
									For more info please visit the plugin's <a class="link font-bold" href="http://www.jacklmoore.com/autosize/" target="_blank">Demo Page</a> or <a class="link font-bold" href="http://github.com/jackmoore/autosize" target="_blank">Github Repo</a>.
								</div>
							</div>
						</div>
					</div>

					<!--begin::Portlet-->
					<div class="portlet">
						<div class="portlet__head">
							<div class="portlet__head-label">
								<h3 class="portlet__head-title">
									Autosize Textarea Examples
								</h3>
							</div>
						</div>
						<!--begin::Form-->
						<form class="form form--label-right">
							<div class="portlet__body">
								<div class="form-group row">
									<label class="col-form-label col-lg-3 col-sm-12">Basic Demo</label>
									<div class="col-lg-4 col-md-9 col-sm-12">
										<textarea class="form-control" id="autosize_1" rows="3" style="overflow: hidden; overflow-wrap: break-word; resize: none; height: 76px;"></textarea>
									</div>
								</div>
								<div class="form-group row">
									<label class="col-form-label col-lg-3 col-sm-12">Preset Value</label>
									<div class="col-lg-4 col-md-9 col-sm-12">
										<textarea class="form-control" id="autosize_2" rows="3" style="overflow: hidden; overflow-wrap: break-word; resize: none; height: 76px;">A small, stand-alone script to automatically adjust textarea height</textarea>
									</div>
								</div>
							</div>
							<div class="portlet__foot">
								<div class="form__actions">
									<div class="row">
										<div class="col-lg-9 ml-lg-auto">
											<button type="reset" class="btn btn-success">Submit</button>
											<button type="reset" class="btn btn-secondary">Cancel</button>
										</div>
									</div>
								</div>
							</div>
						</form>
						<!--end::Form-->
					</div>
					<!--end::Portlet-->
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