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

		<div class="body" id="body">
			<div class="content content--fit-top  grid__item grid__item--fluid grid grid--hor" id="content">

				<!-- begin:: Subheader -->
				<div id="subheader" class="subheader" >
					<div class="container ">
						<div class="subheader__main">
							<h3 class="subheader__title">Basic Action Bars</h3>

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
									Form Layouts </a>
								<span class="subheader__breadcrumbs-separator"></span>
								<a href="" class="subheader__breadcrumbs-link">
									Basic Action Bars </a>
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
											Default Action Bar
										</h3>
									</div>
								</div>
								<!--begin::Form-->
								<form class="form">
									<div class="portlet__body">
										<div class="form-group">
											<label>Full Name:</label>
											<input type="email" class="form-control" placeholder="Enter full name">
											<span class="form-text text-muted">Please enter your full name</span>
										</div>
										<div class="form-group">
											<label>Email address:</label>
											<input type="email" class="form-control" placeholder="Enter email">
											<span class="form-text text-muted">We'll never share your email with anyone else</span>
										</div>
										<div class="form-group">
											<label>Communication:</label>
											<div class="checkbox-list">
												<label class="checkbox">
													<input type="checkbox"> Email
													<span></span>
												</label>
												<label class="checkbox">
													<input type="checkbox"> SMS
													<span></span>
												</label>
												<label class="checkbox">
													<input type="checkbox"> Phone
													<span></span>
												</label>
											</div>
										</div>
									</div>
									<div class="portlet__foot">
										<div class="form__actions">
											<button type="reset" class="btn btn-primary">Submit</button>
											<button type="reset" class="btn btn-secondary">Cancel</button>
										</div>
									</div>
								</form>
								<!--end::Form-->
							</div>
							<!--end::Portlet-->

							<!--begin::Portlet-->
							<div class="portlet">
								<div class="portlet__head">
									<div class="portlet__head-label">
										<h3 class="portlet__head-title">
											Right Action Bar
										</h3>
									</div>
								</div>
								<!--begin::Form-->
								<form class="form">
									<div class="portlet__body">
										<div class="form-group">
											<label>Full Name:</label>
											<input type="email" class="form-control" placeholder="Enter full name">
											<span class="form-text text-muted">Please enter your full name</span>
										</div>
										<div class="form-group">
											<label>Email address:</label>
											<input type="email" class="form-control" placeholder="Enter email">
											<span class="form-text text-muted">We'll never share your email with anyone else</span>
										</div>
										<div class="form-group">
											<label>Communication:</label>
											<div class="checkbox-list">
												<label class="checkbox">
													<input type="checkbox"> Email
													<span></span>
												</label>
												<label class="checkbox">
													<input type="checkbox"> SMS
													<span></span>
												</label>
												<label class="checkbox">
													<input type="checkbox"> Phone
													<span></span>
												</label>
											</div>
										</div>
									</div>
									<div class="portlet__foot">
										<div class="form__actions form__actions--right">
											<button type="reset" class="btn btn-brand">Submit</button>
											<button type="reset" class="btn btn-secondary">Cancel</button>
										</div>
									</div>
								</form>
								<!--end::Form-->
							</div>
							<!--end::Portlet-->

							<!--begin::Portlet-->
							<div class="portlet">
								<div class="portlet__head">
									<div class="portlet__head-label">
										<h3 class="portlet__head-title">
											Multiple Buttons
										</h3>
									</div>
								</div>
								<!--begin::Form-->
								<form class="form">
									<div class="portlet__body">
										<div class="form-group">
											<label>Full Name:</label>
											<input type="email" class="form-control" placeholder="Enter full name">
											<span class="form-text text-muted">Please enter your full name</span>
										</div>
										<div class="form-group">
											<label>Email address:</label>
											<input type="email" class="form-control" placeholder="Enter email">
											<span class="form-text text-muted">We'll never share your email with anyone else</span>
										</div>
										<div class="form-group">
											<label>Communication:</label>
											<div class="checkbox-list">
												<label class="checkbox">
													<input type="checkbox"> Email
													<span></span>
												</label>
												<label class="checkbox">
													<input type="checkbox"> SMS
													<span></span>
												</label>
												<label class="checkbox">
													<input type="checkbox"> Phone
													<span></span>
												</label>
											</div>
										</div>
									</div>
									<div class="portlet__foot">
										<div class="form__actions form__actions--right">
											<div class="row">
												<div class="col align-left">
													<button type="reset" class="btn btn-brand">Submit</button>
													<button type="reset" class="btn btn-secondary">Cancel</button>
												</div>
												<div class="col align-right">
													<button type="reset" class="btn btn-danger">Delete</button>
												</div>
											</div>
										</div>
									</div>
								</form>
								<!--end::Form-->
							</div>
							<!--end::Portlet-->

							<!--begin::Portlet-->
							<div class="portlet">
								<div class="portlet__head">
									<div class="portlet__head-label">
										<h3 class="portlet__head-title">
											Action Button &amp; Link
										</h3>
									</div>
								</div>
								<!--begin::Form-->
								<form class="form">
									<div class="portlet__body">
										<div class="form-group">
											<label>Full Name:</label>
											<input type="email" class="form-control" placeholder="Enter full name">
											<span class="form-text text-muted">Please enter your full name</span>
										</div>
										<div class="form-group">
											<label>Email address:</label>
											<input type="email" class="form-control" placeholder="Enter email">
											<span class="form-text text-muted">We'll never share your email with anyone else</span>
										</div>
										<div class="form-group">
											<label>Communication:</label>
											<div class="checkbox-list">
												<label class="checkbox">
													<input type="checkbox"> Email
													<span></span>
												</label>
												<label class="checkbox">
													<input type="checkbox"> SMS
													<span></span>
												</label>
												<label class="checkbox">
													<input type="checkbox"> Phone
													<span></span>
												</label>
											</div>
										</div>
									</div>
									<div class="portlet__foot">
										<div class="form__actions form__actions--right">
											<button type="reset" class="btn btn-primary">Submit</button>
											<span class="margin-l-10">or <a href="#" class="link font-bold">Cancel</a></span>
										</div>
									</div>
								</form>
								<!--end::Form-->
							</div>
							<!--end::Portlet-->
						</div>
						<div class="col-md-6">
							<!--begin::Portlet-->
							<div class="portlet portlet--space">
								<div class="portlet__head">
									<div class="portlet__head-label">
										<h3 class="portlet__head-title">
											Layout With Space
										</h3>
									</div>
								</div>
								<!--begin::Form-->
								<form class="form">
									<div class="portlet__body">
										<div class="form-group">
											<label>Full Name:</label>
											<input type="email" class="form-control" placeholder="Enter full name">
											<span class="form-text text-muted">Please enter your full name</span>
										</div>
										<div class="form-group">
											<label>Email address:</label>
											<input type="email" class="form-control" placeholder="Enter email">
											<span class="form-text text-muted">We'll never share your email with anyone else</span>
										</div>
										<div class="form-group">
											<label>Communication:</label>
											<div class="checkbox-list">
												<label class="checkbox">
													<input type="checkbox"> Email
													<span></span>
												</label>
												<label class="checkbox">
													<input type="checkbox"> SMS
													<span></span>
												</label>
												<label class="checkbox">
													<input type="checkbox"> Phone
													<span></span>
												</label>
											</div>
										</div>
									</div>
									<div class="portlet__foot portlet__foot--fit">
										<div class="form__actions form__actions--right">
											<div class="row">
												<div class="col align-left">
													<button type="reset" class="btn btn-brand">Submit</button>
													<button type="reset" class="btn btn-secondary">Cancel</button>
												</div>
												<div class="col align-right">
													<button type="reset" class="btn btn-danger">Delete</button>
												</div>
											</div>
										</div>
									</div>
								</form>
								<!--end::Form-->
							</div>
							<!--end::Portlet-->

							<!--begin::Portlet-->
							<div class="portlet">
								<div class="portlet__head">
									<div class="portlet__head-label">
										<h3 class="portlet__head-title">
											Solid Bar
										</h3>
									</div>
								</div>
								<!--begin::Form-->
								<form class="form">
									<div class="portlet__body">
										<div class="form-group">
											<label>Full Name:</label>
											<input type="email" class="form-control" placeholder="Enter full name">
											<span class="form-text text-muted">Please enter your full name</span>
										</div>
										<div class="form-group">
											<label>Email address:</label>
											<input type="email" class="form-control" placeholder="Enter email">
											<span class="form-text text-muted">We'll never share your email with anyone else</span>
										</div>
										<div class="form-group">
											<label>Communication:</label>
											<div class="checkbox-list">
												<label class="checkbox">
													<input type="checkbox"> Email
													<span></span>
												</label>
												<label class="checkbox">
													<input type="checkbox"> SMS
													<span></span>
												</label>
												<label class="checkbox">
													<input type="checkbox"> Phone
													<span></span>
												</label>
											</div>
										</div>
									</div>
									<div class="portlet__foot portlet__foot--solid">
										<div class="form__actions form__actions--right">
											<button type="reset" class="btn btn-brand">Submit</button>
											<button type="reset" class="btn btn-secondary">Cancel</button>
										</div>
									</div>
								</form>
								<!--end::Form-->
							</div>
							<!--end::Portlet-->

							<!--begin::Portlet-->
							<div class="portlet">
								<div class="portlet__head">
									<div class="portlet__head-label">
										<h3 class="portlet__head-title">
											Top &amp; Bottom Actions Bars
										</h3>
									</div>
								</div>
								<!--begin::Form-->
								<form class="form">
									<div class="portlet__foot portlet__foot--top">
										<div class="form__actions form__actions--solid">
											<div class="row align-items-center">
												<div class="col align-left valign-middle">
													Top Actions:
												</div>
												<div class="col align-right">
													<button type="reset" class="btn btn-success">Submit</button>
													<button type="reset" class="btn btn-secondary">Cancel</button>
												</div>
											</div>
										</div>
									</div>
									<div class="portlet__body">
										<div class="form-group">
											<label>Full Name:</label>
											<input type="email" class="form-control" placeholder="Enter full name">
											<span class="form-text text-muted">Please enter your full name</span>
										</div>
										<div class="form-group">
											<label>Email address:</label>
											<input type="email" class="form-control" placeholder="Enter email">
											<span class="form-text text-muted">We'll never share your email with anyone else</span>
										</div>
										<div class="form-group">
											<label>Communication:</label>
											<div class="checkbox-list">
												<label class="checkbox">
													<input type="checkbox"> Email
													<span></span>
												</label>
												<label class="checkbox">
													<input type="checkbox"> SMS
													<span></span>
												</label>
												<label class="checkbox">
													<input type="checkbox"> Phone
													<span></span>
												</label>
											</div>
										</div>
									</div>
									<div class="portlet__foot portlet__foot--solid">
										<div class="form__actions form__actions--center">
											<button type="reset" class="btn btn-success">Submit</button>
											<button type="reset" class="btn btn-secondary">Cancel</button>
										</div>
									</div>
								</form>
								<!--end::Form-->
							</div>
							<!--end::Portlet-->

							<!--begin::Portlet-->
							<div class="portlet">
								<div class="portlet__head">
									<div class="portlet__head-label">
										<h3 class="portlet__head-title">
											Horizontal Form Layout
										</h3>
									</div>
								</div>
								<!--begin::Form-->
								<form class="form">
									<div class="portlet__body">
										<div class="form-group row">
											<label for="example-text-input" class="col-3 col-form-label">Full Name:</label>
											<div class="col-9">
												<input type="email" class="form-control" placeholder="Enter full name">
												<span class="form-text text-muted">Please enter your full name</span>
											</div>
										</div>
										<div class="form-group row">
											<label for="example-text-input" class="col-3 col-form-label">Email address:</label>
											<div class="col-9">
												<input type="email" class="form-control" placeholder="Enter email">
												<span class="form-text text-muted">We'll never share your email with anyone else</span>
											</div>
										</div>
										<div class="form-group row">
											<label for="example-text-input" class="col-3 col-form-label">Communication:</label>
											<div class="col-9">
												<div class="checkbox-inline">
													<label class="checkbox">
														<input type="checkbox"> Email
														<span></span>
													</label>
													<label class="checkbox">
														<input type="checkbox"> SMS
														<span></span>
													</label>
													<label class="checkbox">
														<input type="checkbox"> Phone
														<span></span>
													</label>
												</div>
											</div>
										</div>
									</div>
									<div class="portlet__foot portlet__foot--solid">
										<div class="form__actions">
											<div class="row">
												<div class="col-3">

												</div>
												<div class="col-9">
													<button type="reset" class="btn btn-brand">Submit</button>
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