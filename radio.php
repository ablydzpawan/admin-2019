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
							<h3 class="subheader__title">Radio</h3>

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
									Radio </a>
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
											Basic Radio
										</h3>
									</div>
								</div>
								<div class="portlet__body">
									<!--begin::Form-->
									<form class="form">
										<div class="form-group">
											<label>Default Radioes</label>
											<div class="radio-list">
												<label class="radio">
													<input type="radio" name="radio1"> Default
													<span></span>
												</label>
												<label class="radio radio--disabled">
													<input type="radio" disabled="" name="radio1"> Disabled
													<span></span>
												</label>
												<label class="radio">
													<input type="radio" checked="checked" name="radio1"> Checked
													<span></span>
												</label>
											</div>
										</div>
										<div class="form-group">
											<label>Inline Radioes</label>
											<div class="radio-inline">
												<label class="radio">
													<input type="radio" name="radio2"> Option 1
													<span></span>
												</label>
												<label class="radio">
													<input type="radio" name="radio2"> Option 2
													<span></span>
												</label>
												<label class="radio">
													<input type="radio" name="radio2"> Option 3
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
											<label class="col-3 col-form-label">Radioes</label>
											<div class="col-9">
												<div class="radio-list">
													<label class="radio">
														<input type="radio" name="radio3"> Option 1
														<span></span>
													</label>
													<label class="radio">
														<input type="radio" name="radio3"> Option 2
														<span></span>
													</label>
													<label class="radio">
														<input type="radio" checked="checked" name="radio3"> Checked
														<span></span>
													</label>
													<label class="radio radio--disabled">
														<input type="radio" disabled="" name="radio3"> Disabled
														<span></span>
													</label>
												</div>
											</div>
										</div>
										<div class="form-group row">
											<label class="col-3 col-form-label">Inline Radioes</label>
											<div class="col-9">
												<div class="radio-inline">
													<label class="radio">
														<input type="radio" name="radio4"> Option 1
														<span></span>
													</label>
													<label class="radio">
														<input type="radio" checked="checked" name="radio4"> Option 2
														<span></span>
													</label>
													<label class="radio">
														<input type="radio" name="radio4"> Option 3
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
											<label>Default Radioes</label>
											<div class="radio-list">
												<label class="radio">
													<input type="radio" name="radio5"> Default
													<span></span>
												</label>
												<label class="radio">
													<input type="radio" checked="checked" name="radio5"> Checked
													<span></span>
												</label>
												<label class="radio radio--disabled">
													<input type="radio" disabled="disabled" name="radio5"> Disabled
													<span></span>
												</label>
												<label class="radio radio--success" name="radio5">
													<input type="radio"> Success state
													<span></span>
												</label>
												<label class="radio radio--brand" name="radio5">
													<input type="radio"> Brand state
													<span></span>
												</label>
											</div>
											<span class="form-text text-muted">Some help text goes here</span>
										</div>
										<div class="form-group">
											<label>Bold Radioes</label>
											<div class="radio-list">
												<label class="radio radio--bold">
													<input type="radio" name="radio6"> Default
													<span></span>
												</label>
												<label class="radio radio--bold">
													<input type="radio" checked="checked" name="radio6"> Checked
													<span></span>
												</label>
												<label class="radio radio--bold radio--disabled">
													<input type="radio" disabled="disabled" name="radio6"> Disabled
													<span></span>
												</label>
												<label class="radio radio--bold radio--success">
													<input type="radio" name="radio6"> Success state
													<span></span>
												</label>
												<label class="radio radio--bold radio--brand">
													<input type="radio" name="radio6"> Brand state
													<span></span>
												</label>
											</div>
											<span class="form-text text-muted">Some help text goes here</span>
										</div>

										<div class="form-group">
											<label>Solid Radioes</label>
											<div class="radio-list">
												<label class="radio radio--solid">
													<input type="radio" name="radio7"> Default
													<span></span>
												</label>
												<label class="radio radio--solid">
													<input type="radio" checked="checked" name="radio7"> Checked
													<span></span>
												</label>
												<label class="radio radio--solid radio--disabled">
													<input type="radio" disabled="disabled" name="radio7"> Disabled
													<span></span>
												</label>
												<label class="radio radio--solid radio--success">
													<input type="radio" name="radio7"> Success state
													<span></span>
												</label>
												<label class="radio radio--solid radio--brand">
													<input type="radio" name="radio7"> Brand state
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