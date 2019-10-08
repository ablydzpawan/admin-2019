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
	        <h3 class="subheader__title">Bootstrap Timepicker</h3>

	        	            <div class="subheader__breadcrumbs">
	                <a href="#" class="subheader__breadcrumbs-home"><i class="flaticon2-shelter"></i></a>
	                	                    <span class="subheader__breadcrumbs-separator"></span>
	                    <a href="" class="subheader__breadcrumbs-link">
	                        Crud	                    </a>
	                	                    <span class="subheader__breadcrumbs-separator"></span>
	                    <a href="" class="subheader__breadcrumbs-link">
	                        Forms &amp; Controls	                    </a>
	                	                    <span class="subheader__breadcrumbs-separator"></span>
	                    <a href="" class="subheader__breadcrumbs-link">
	                        Form Widgets	                    </a>
	                	                    <span class="subheader__breadcrumbs-separator"></span>
	                    <a href="" class="subheader__breadcrumbs-link">
	                        Timepicker	                    </a>
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
                Easily select a time for a text input using your mouse or keyboards arrow keys.
                <br>
                For more info please visit the plugin's <a class="link font-bold" href="http://jdewit.github.io/bootstrap-timepicker/" target="_blank">Demo Page</a> or <a class="link font-bold" href="https://github.com/jdewit/bootstrap-timepicker" target="_blank">Github Repo</a>.
            </div>
        </div>
    </div>
</div>

<!--begin::Portlet-->
<div class="portlet">
	<div class="portlet__head">
		<div class="portlet__head-label">
			<h3 class="portlet__head-title">
				Bootstrap Time Picker Examples
			</h3>
		</div>
	</div>
	<!--begin::Form-->
	<form class="form form--label-right">
		<div class="portlet__body">
			<div class="form-group row">
				<label class="col-form-label col-lg-3 col-sm-12">Minimum Setup</label>
				<div class="col-lg-4 col-md-9 col-sm-12">
					<input class="form-control" id="timepicker_1" readonly="" placeholder="Select time" type="text">
				</div>
			</div>
			<div class="form-group row">
				<label class="col-form-label col-lg-3 col-sm-12">Current Time</label>
				<div class="col-lg-4 col-md-9 col-sm-12">
					<div class="input-group timepicker">
						<input class="form-control" id="timepicker_2" readonly="" placeholder="Select time" type="text">
						<div class="input-group-append">
							<span class="input-group-text">
								<i class="la la-clock-o"></i>
							</span>
						</div>
					</div>
				</div>
			</div>
			<div class="form-group row">
				<label class="col-form-label col-lg-3 col-sm-12">Default Time</label>
				<div class="col-lg-4 col-md-9 col-sm-12">
					<div class="input-group timepicker">
						<div class="input-group-prepend">
							<span class="input-group-text">
								<i class="la la-clock-o"></i>
							</span>
						</div>
						<input class="form-control" id="timepicker_3" readonly="" placeholder="Select time" type="text">
					</div>
				</div>
			</div>
			<div class="form-group row">
				<label class="col-form-label col-lg-3 col-sm-12">Preset Time</label>
				<div class="col-lg-4 col-md-9 col-sm-12">
					<div class="input-group timepicker">
						<div class="input-group-prepend">
							<span class="input-group-text">
								<i class="la la-exclamation-circle"></i>
							</span>
						</div>
						<input class="form-control" id="timepicker_4" readonly="" value="10:30:20 AM" type="text">
					</div>
				</div>
			</div>
			<div class="form-group row">
				<label class="col-form-label col-lg-3 col-sm-12">Modal Demos</label>
				<div class="col-lg-4 col-md-9 col-sm-12">
					<a href="" class="btn btn-label-success" data-toggle="modal" data-target="#timepicker_modal">Launch modal timepickers</a>
				</div>
			</div>
		</div>
		<div class="portlet__foot">
			<div class="form__actions">
				<div class="row">
					<div class="col-lg-9 ml-lg-auto">
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

<!--begin::Modal-->
<div class="modal fade" id="timepicker_modal" tabindex="-1" role="dialog" aria-labelledby="" aria-hidden="true">
	<div class="modal-dialog modal-lg" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="">Bootstrap Time Picker Examples</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true" class="la la-remove"></span>
				</button>
			</div>
			<form class="form form--fit form--label-right">
				<div class="modal-body">
					<div class="form-group row margin-t-20">
						<label class="col-form-label col-lg-3 col-sm-12">Minimum Setup</label>
						<div class="col-lg-9 col-md-9 col-sm-12">
							<input class="form-control" id="timepicker_1_modal" readonly="" placeholder="Select time" type="text">
						</div>
					</div>
					<div class="form-group row">
						<label class="col-form-label col-lg-3 col-sm-12">Current Time</label>
						<div class="col-lg-9 col-md-9 col-sm-12">
							<div class="input-group timepicker">
								<input class="form-control" id="timepicker_2_modal" readonly="" placeholder="Select time" type="text">
								<div class="input-group-append">
									<span class="input-group-text">
										<i class="la la-clock-o"></i>
									</span>
								</div>
							</div>
						</div>
					</div>
					<div class="form-group row">
						<label class="col-form-label col-lg-3 col-sm-12">Default Time</label>
						<div class="col-lg-9 col-md-9 col-sm-12">
							<div class="input-group timepicker">
								<div class="input-group-prepend">
									<span class="input-group-text">
									<i class="la la-clock-o"></i>
									</span>
								</div>
								<input class="form-control" id="timepicker_3_modal" readonly="" placeholder="Select time" type="text">
							</div>
						</div>
					</div>
					<div class="form-group row margin-b-20">
						<label class="col-form-label col-lg-3 col-sm-12">Preset Time</label>
						<div class="col-lg-9 col-md-9 col-sm-12">
							<div class="input-group timepicker">
								<div class="input-group-prepend">
									<span class="input-group-text">
										<i class="la la-exclamation-circle"></i>
									</span>
								</div>
								<input class="form-control" id="timepicker_4_modal" readonly="" value="10:30:20 AM" type="text">
							</div>
						</div>
					</div>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-brand" data-dismiss="modal">Close</button>
					<button type="button" class="btn btn-secondary">Submit</button>
				</div>
			</form>
		</div>
	</div>
</div>
<!--end::Modal-->

<!--begin::Portlet-->
<div class="portlet">
	<div class="portlet__head">
		<div class="portlet__head-label">
			<h3 class="portlet__head-title">
				Validation State Examples
			</h3>
		</div>
	</div>
	<!--begin::Form-->
	<form class="form form--label-right">
		<div class="portlet__body">
			<div class="form-group row">
				<label class="col-form-label col-lg-3 col-sm-12">Valid State</label>
				<div class="col-lg-4 col-md-9 col-sm-12">
					<div class="input-group timepicker">
						<input class="form-control is-valid" id="timepicker_1_validate" readonly="" placeholder="Select time" type="text">
						<div class="input-group-append">
							<span class="input-group-text"><i class="la la-clock-o"></i></span>
						</div>
						<div class="valid-feedback">Success! You"ve done it.</div>
					</div>					
					<span class="form-text text-muted">Example help text that remains unchanged.</span>
				</div>
			</div>
			<div class="form-group row has-danger">
				<label class="col-form-label col-lg-3 col-sm-12">Error State</label>
				<div class="col-lg-4 col-md-9 col-sm-12">
					<div class="input-group timepicker">
						<input class="form-control is-invalid" id="timepicker_2_validate" readonly="" placeholder="Select time" type="text">
						<div class="input-group-append">
							<span class="input-group-text"><i class="la la-clock-o"></i></span>
						</div>
						<div class="invalid-feedback">Sorry, that username"s taken. Try another?</div>
					</div>
					<span class="form-text text-muted">Example help text that remains unchanged.</span>
				</div>
			</div>
		</div>
		<div class="portlet__foot">
			<div class="form__actions">
				<div class="row">
					<div class="col-lg-9 ml-lg-auto">
						<button type="reset" class="btn btn-primary">Submit</button>
						<button type="reset" class="btn btn-secondary">Cancel</button>
					</div>
				</div>
			</div>
		</div>
	</form>
	<!--end::Form-->
</div>
<!--end::Portlet-->	</div>
<!-- end:: Content -->						</div>
									</div>


		<?php
  include 'includes/footer.php';
?>
	</div>

</body>
<!-- end::Body -->

</html>