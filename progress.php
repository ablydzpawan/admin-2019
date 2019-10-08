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

								Progress </h3>

							<div class="subheader__breadcrumbs">
								<a href="#" class="subheader__breadcrumbs-home"><i class="flaticon2-shelter"></i></a>
								<span class="subheader__breadcrumbs-separator"></span>
								<a href="" class="subheader__breadcrumbs-link">
									Components </a>
								<span class="subheader__breadcrumbs-separator"></span>
								<a href="" class="subheader__breadcrumbs-link">
									Base </a>
								<span class="subheader__breadcrumbs-separator"></span>
								<a href="" class="subheader__breadcrumbs-link">
									Progress </a>
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
									Metronic extends <code>Bootstrap Progress</code> component with a variety of options to provide uniquely looking Progress component that matches the Metronic's design standards.
									<br>
									For more info please visit the plugin's <a class="link font-bold" href="https://getbootstrap.com/docs/4.3/components/progress/" target="_blank">Documentation</a>.
								</div>
							</div>
						</div>
					</div>

					<div class="row">
						<div class="col-lg-6">
							<!--begin::Portlet-->
							<div class="portlet">
								<div class="portlet__head">
									<div class="portlet__head-label">
										<h3 class="portlet__head-title">
											Basic Progress Bars
										</h3>
									</div>
								</div>
								<div class="portlet__body">
									<!--begin::Section-->
									<div class="section section--last">
										<span class="section__info">
											Progress components are built with two HTML elements, some CSS to set the width, and a few attributes.
										</span>
										<div class="section__content">
											<div class="progress">
												<div class="progress-bar" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>
											</div>

											<div class="space-10"></div>

											<div class="progress">
												<div class="progress-bar" role="progressbar" style="width: 25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
											</div>

											<div class="space-10"></div>

											<div class="progress">
												<div class="progress-bar" role="progressbar" style="width: 50%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
											</div>

											<div class="space-10"></div>

											<div class="progress">
												<div class="progress-bar" role="progressbar" style="width: 75%" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
											</div>

											<div class="space-10"></div>

											<div class="progress">
												<div class="progress-bar" role="progressbar" style="width: 100%" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
											</div>
										</div>
									</div>
									<!--end::Section-->
								</div>
							</div>
							<!--end::Portlet-->

							<!--begin::Portlet-->
							<div class="portlet">
								<div class="portlet__head">
									<div class="portlet__head-label">
										<h3 class="portlet__head-title">
											Customizing
										</h3>
									</div>
								</div>
							</div>
							<!--end::Portlet-->

							<!--begin::Portlet-->
							<div class="portlet">
								<div class="portlet__head">
									<div class="portlet__head-label">
										<h3 class="portlet__head-title">
											Sizing
										</h3>
									</div>
								</div>
								<div class="portlet__body">
									<!--begin::Section-->
									<div class="section">
										<span class="section__info">
											Use <code>.progress-sm</code> class to change progress size to small:
										</span>
										<div class="section__content">
											<div class="progress progress-sm">
												<div class="progress-bar bg-primary" role="progressbar" style="width: 25%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
											</div>

											<div class="space-10"></div>

											<div class="progress progress-sm">
												<div class="progress-bar bg-brand" role="progressbar" style="width: 50%;" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
											</div>

											<div class="space-10"></div>

											<div class="progress progress-sm">
												<div class="progress-bar bg-warning" role="progressbar" style="width: 75%;" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
											</div>

											<div class="space-10"></div>

											<div class="progress progress-sm">
												<div class="progress-bar m-progress-lg" role="progressbar" style="width: 100%;" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
											</div>
										</div>

										<div class="separator separator--dashed"></div>

										<span class="section__info">
											Use <code>.progress-lg</code> class to change progress size to large:
										</span>
										<div class="section__content">
											<div class="progress progress-lg">
												<div class="progress-bar bg-primary" role="progressbar" style="width: 25%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
											</div>

											<div class="space-10"></div>

											<div class="progress progress-lg">
												<div class="progress-bar bg-brand" role="progressbar" style="width: 50%;" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
											</div>

											<div class="space-10"></div>

											<div class="progress progress-lg">
												<div class="progress-bar bg-warning" role="progressbar" style="width: 75%;" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
											</div>

											<div class="space-10"></div>

											<div class="progress progress-lg">
												<div class="progress-bar m-progress-lg" role="progressbar" style="width: 100%;" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
											</div>
										</div>

										<div class="separator separator--dashed"></div>

										<span class="section__info">
											Set a height value on the <code>.progress-bar</code>, so if you change that value the outer <code>.progress</code> will automatically resize accordingly.
										</span>
										<div class="section__content">
											<div class="progress" style="height: 1px;">
												<div class="progress-bar bg-info" role="progressbar" style="width: 65%;" aria-valuenow="65" aria-valuemin="0" aria-valuemax="100"></div>
											</div>

											<div class="space-10"></div>

											<div class="progress" style="height: 5px;">
												<div class="progress-bar bg-success" role="progressbar" style="width: 65%;" aria-valuenow="65" aria-valuemin="0" aria-valuemax="100"></div>
											</div>

											<div class="space-10"></div>

											<div class="progress" style="height: 10px;">
												<div class="progress-bar bg-brand" role="progressbar" style="width: 65%;" aria-valuenow="65" aria-valuemin="0" aria-valuemax="100"></div>
											</div>

											<div class="space-10"></div>

											<div class="progress" style="height: 15px;">
												<div class="progress-bar bg-brand" role="progressbar" style="width: 65%;" aria-valuenow="65" aria-valuemin="0" aria-valuemax="100"></div>
											</div>
										</div>
									</div>
									<!--end::Section-->
								</div>
							</div>
							<!--end::Portlet-->
						</div>
						<div class="col-lg-6">
							<!--begin::Portlet-->
							<div class="portlet">
								<div class="portlet__head">
									<div class="portlet__head-label">
										<h3 class="portlet__head-title">
											Progress States
										</h3>
									</div>
								</div>
								<div class="portlet__body">
									<!--begin::Section-->
									<div class="section">
										<span class="section__info">
											Use state utility classes to change the appearance of individual progress bars.
										</span>
										<div class="section__content">
											<div class="progress">
												<div class="progress-bar bg-success" role="progressbar" style="width: 25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
											</div>
											<div class="space-10"></div>
											<div class="progress">
												<div class="progress-bar bg-info" role="progressbar" style="width: 50%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
											</div>
											<div class="space-10"></div>
											<div class="progress">
												<div class="progress-bar bg-warning" role="progressbar" style="width: 75%" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
											</div>
											<div class="space-10"></div>
											<div class="progress">
												<div class="progress-bar progress-lg" role="progressbar" style="width: 100%" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
											</div>
										</div>
									</div>
									<!--end::Section-->

									<div class="separator separator--dashed"></div>

									<!--begin::Section-->
									<div class="section">
										<span class="section__info">
											Include multiple progress bars in a progress component if you need.
										</span>
										<div class="section__content">
											<div class="progress">
												<div class="progress-bar" role="progressbar" style="width: 15%" aria-valuenow="15" aria-valuemin="0" aria-valuemax="100"></div>
												<div class="progress-bar bg-success" role="progressbar" style="width: 30%" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100"></div>
												<div class="progress-bar bg-info" role="progressbar" style="width: 20%" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100"></div>
											</div>

											<div class="space-10"></div>

											<div class="progress">
												<div class="progress-bar" role="progressbar" style="width: 35%" aria-valuenow="15" aria-valuemin="0" aria-valuemax="100"></div>
												<div class="progress-bar bg-warning" role="progressbar" style="width: 10%" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100"></div>
												<div class="progress-bar progress-lg" role="progressbar" style="width: 40%" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100"></div>
											</div>
										</div>
									</div>
									<!--end::Section-->
								</div>
							</div>
							<!--end::Portlet-->

							<!--begin::Portlet-->
							<div class="portlet">
								<div class="portlet__head">
									<div class="portlet__head-label">
										<h3 class="portlet__head-title">
											Striped
										</h3>
									</div>
								</div>
								<div class="portlet__body">
									<!--begin::Section-->
									<div class="section ">
										<span class="section__info">
											Add <code>.progress-bar-striped</code> to any <code>.progress-bar</code> to apply a stripe via CSS gradient over the progress bar’s background color.
										</span>
										<div class="section__content">
											<div class="progress">
												<div class="progress-bar progress-bar-striped" role="progressbar" style="width: 10%" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100"></div>
											</div>
											<div class="space-10"></div>
											<div class="progress">
												<div class="progress-bar progress-bar-striped bg-success" role="progressbar" style="width: 25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">

												</div>
											</div>
											<div class="space-10"></div>
											<div class="progress">
												<div class="progress-bar progress-bar-striped bg-info" role="progressbar" style="width: 50%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
											</div>
											<div class="space-10"></div>
											<div class="progress">
												<div class="progress-bar progress-bar-striped bg-warning" role="progressbar" style="width: 75%" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
											</div>
											<div class="space-10"></div>
											<div class="progress">
												<div class="progress-bar progress-bar-striped progress-lg" role="progressbar" style="width: 100%" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
											</div>
										</div>
									</div>
									<!--end::Section-->

									<div class="separator separator--dashed"></div>

									<!--begin::Section-->
									<div class="section section--last">
										<span class="section__info">
											The striped gradient can also be animated. Add <code>.progress-bar-animated</code> to <code>.progress-bar</code> to animate the stripes right to left via CSS3 animations.
										</span>
										<div class="section__content">
											<div class="progress">
												<div class="progress-bar progress-bar-striped progress-bar-animated " role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100" style="width: 75%"></div>
											</div>

											<div class="space-10"></div>

											<div class="progress">
												<div class="progress-bar progress-bar-striped progress-bar-animated  bg-warning" role="progressbar" aria-valuenow="35" aria-valuemin="0" aria-valuemax="100" style="width: 35%"></div>
											</div>

											<div class="space-10"></div>

											<div class="progress">
												<div class="progress-bar progress-bar-striped progress-bar-animated  bg-success" role="progressbar" aria-valuenow="65" aria-valuemin="0" aria-valuemax="100" style="width: 65%"></div>
											</div>
										</div>
									</div>
									<!--end::Section-->
								</div>
							</div>
							<!--end::Portlet-->
						</div>
					</div>
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