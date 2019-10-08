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

<body class="subheader--transparent page--loading">
	<div class="wrapper">

		<?php
  include 'includes/header.php';
?>
		<div class="body" id="body">
			<div class="content content--fit-top  grid__item grid__item--fluid grid grid--hor" id="content">

				<!-- begin:: Subheader -->
				<div id="subheader" class="subheader" >
					<div class="container ">
						<div class="subheader__main">
							<h3 class="subheader__title">Checkbox</h3>

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
									Form Controls </a>
								<span class="subheader__breadcrumbs-separator"></span>
								<a href="" class="subheader__breadcrumbs-link">
									Checkbox </a>
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
						<div class="col-md-6">
							<!--begin::Portlet-->
							<div class="portlet">
								<div class="portlet__head">
									<div class="portlet__head-label">
										<h3 class="portlet__head-title">
											Basic Checkbox
										</h3>
									</div>
								</div>
								<div class="portlet__body">
									<!--begin::Form-->
									<form class="form">
										<div class="form-group">
											<label>Default Checkboxes</label>
											<div class="checkbox-list">
												<label class="checkbox">
													<input type="checkbox"> Default
													<span></span>
												</label>
												<label class="checkbox checkbox--disabled">
													<input type="checkbox" disabled=""> Disabled
													<span></span>
												</label>
												<label class="checkbox">
													<input type="checkbox" checked="checked"> Checked
													<span></span>
												</label>
											</div>
										</div>
										<div class="form-group">
											<label>Inline Checkboxes</label>
											<div class="checkbox-inline">
												<label class="checkbox">
													<input type="checkbox"> Option 1
													<span></span>
												</label>
												<label class="checkbox">
													<input type="checkbox"> Option 2
													<span></span>
												</label>
												<label class="checkbox">
													<input type="checkbox"> Option 3
													<span></span>
												</label>
											</div>
											<span class="form-text text-muted">Some help text goes here</span>
										</div>
									</form>
									<!--end::Form-->
								</div>
							</div>
							<!--end::Portlet-->

							<!--begin::Portlet-->
							<div class="portlet">
								<div class="portlet__head">
									<div class="portlet__head-label">
										<h3 class="portlet__head-title">
											Horizontal Form
										</h3>
									</div>
								</div>
								<div class="portlet__body">
									<!--begin::Form-->
									<form class="form">
										<div class="form-group row">
											<label class="col-3 col-form-label">Checkboxes</label>
											<div class="col-9">
												<div class="checkbox-list">
													<label class="checkbox">
														<input type="checkbox"> Option 1
														<span></span>
													</label>
													<label class="checkbox">
														<input type="checkbox"> Option 2
														<span></span>
													</label>
													<label class="checkbox">
														<input type="checkbox" checked="checked"> Checked
														<span></span>
													</label>
													<label class="checkbox checkbox--disabled">
														<input type="checkbox" disabled=""> Disabled
														<span></span>
													</label>
												</div>
											</div>
										</div>
										<div class="form-group row">
											<label class="col-3 col-form-label">Inline Checkboxes</label>
											<div class="col-9">
												<div class="checkbox-inline">
													<label class="checkbox" cheched="">
														<input type="checkbox"> Option 1
														<span></span>
													</label>
													<label class="checkbox">
														<input type="checkbox" checked="checked"> Option 2
														<span></span>
													</label>
													<label class="checkbox">
														<input type="checkbox"> Option 3
														<span></span>
													</label>
												</div>
												<span class="form-text text-muted">Some help text goes here</span>
											</div>
										</div>
									</form>
									<!--end::Form-->
								</div>
							</div>
							<!--end::Portlet-->
						</div>
						<div class="col-md-6">
							<!--begin::Portlet-->
							<div class="portlet">
								<div class="portlet__head">
									<div class="portlet__head-label">
										<h3 class="portlet__head-title">
											Color Options
										</h3>
									</div>
								</div>
								<div class="portlet__body">
									<!--begin::Form-->
									<form class="form">
										<div class="form-group">
											<label>Default Checkboxes</label>
											<div class="checkbox-list">
												<label class="checkbox">
													<input type="checkbox"> Default
													<span></span>
												</label>
												<label class="checkbox">
													<input type="checkbox" checked="checked"> Checked
													<span></span>
												</label>
												<label class="checkbox checkbox--disabled">
													<input type="checkbox" disabled="disabled"> Disabled
													<span></span>
												</label>
												<label class="checkbox checkbox--success">
													<input type="checkbox"> Success state
													<span></span>
												</label>
												<label class="checkbox checkbox--brand">
													<input type="checkbox"> Brand state
													<span></span>
												</label>
											</div>
											<span class="form-text text-muted">Some help text goes here</span>
										</div>
										<div class="form-group">
											<label>Bold Checkboxes</label>
											<div class="checkbox-list">
												<label class="checkbox checkbox--bold">
													<input type="checkbox"> Default
													<span></span>
												</label>
												<label class="checkbox checkbox--bold">
													<input type="checkbox" checked="checked"> Checked
													<span></span>
												</label>
												<label class="checkbox checkbox--bold checkbox--disabled">
													<input type="checkbox" disabled="disabled"> Disabled
													<span></span>
												</label>
												<label class="checkbox checkbox--bold checkbox--success">
													<input type="checkbox"> Success state
													<span></span>
												</label>
												<label class="checkbox checkbox--bold checkbox--brand">
													<input type="checkbox"> Brand state
													<span></span>
												</label>
											</div>
											<span class="form-text text-muted">Some help text goes here</span>
										</div>

										<div class="form-group">
											<label>Solid Checkboxes</label>
											<div class="checkbox-list">
												<label class="checkbox checkbox--solid">
													<input type="checkbox"> Default
													<span></span>
												</label>
												<label class="checkbox checkbox--solid">
													<input type="checkbox" checked="checked"> Checked
													<span></span>
												</label>
												<label class="checkbox checkbox--solid checkbox--disabled">
													<input type="checkbox" disabled="disabled"> Disabled
													<span></span>
												</label>
												<label class="checkbox checkbox--solid checkbox--success">
													<input type="checkbox"> Success state
													<span></span>
												</label>
												<label class="checkbox checkbox--solid checkbox--brand">
													<input type="checkbox"> Brand state
													<span></span>
												</label>
											</div>
											<span class="form-text text-muted">Some help text goes here</span>
										</div>
									</form>
									<!--end::Form-->
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