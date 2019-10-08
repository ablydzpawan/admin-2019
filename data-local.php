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
							<h3 class="subheader__title">Local Data</h3>

							<div class="subheader__breadcrumbs">
								<a href="#" class="subheader__breadcrumbs-home"><i class="flaticon2-shelter"></i></a>
								<span class="subheader__breadcrumbs-separator"></span>
								<a href="" class="subheader__breadcrumbs-link">
									Crud </a>
								<span class="subheader__breadcrumbs-separator"></span>
								<a href="" class="subheader__breadcrumbs-link">
									FTDatatable </a>
								<span class="subheader__breadcrumbs-separator"></span>
								<a href="" class="subheader__breadcrumbs-link">
									Base </a>
								<span class="subheader__breadcrumbs-separator"></span>
								<a href="" class="subheader__breadcrumbs-link">
									Local Data </a>
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
					<div class="alert alert-light alert-elevate" role="alert">
						<div class="alert-icon"><i class="flaticon-warning font-brand"></i></div>
						<div class="alert-text">
							The FB-admin Datatable component supports local or remote data source. For the local data you can pass javascript array as data source. In this example the grid fetches its
							data from a javascript array data source. It also defines
							the schema model of the data source. In addition to the visualization, the Datatable provides built-in support for operations over data such as sorting, filtering and
							paging performed in user browser(frontend).
						</div>
					</div>

					<div class="portlet portlet--mobile">
						<div class="portlet__head portlet__head--lg">
							<div class="portlet__head-label">
								<span class="portlet__head-icon">
									<i class="font-brand flaticon2-line-chart"></i>
								</span>
								<h3 class="portlet__head-title">
									Local Datasource
								</h3>
							</div>
							<div class="portlet__head-toolbar">
								<div class="portlet__head-wrapper">
									<a href="#" class="btn btn-clean btn-icon-sm">
										<i class="la la-long-arrow-left"></i>
										Back
									</a>
									&nbsp;
									<div class="dropdown dropdown-inline">
										<button type="button" class="btn btn-brand btn-icon-sm" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
											<i class="flaticon2-plus"></i> Add New
										</button>
										<div class="dropdown-menu dropdown-menu-right">
											<ul class="nav">
												<li class="nav__section nav__section--first">
													<span class="nav__section-text">Choose an action:</span>
												</li>
												<li class="nav__item">
													<a href="#" class="nav__link">
														<i class="nav__link-icon flaticon2-open-text-book"></i>
														<span class="nav__link-text">Reservations</span>
													</a>
												</li>
												<li class="nav__item">
													<a href="#" class="nav__link">
														<i class="nav__link-icon flaticon2-calendar-4"></i>
														<span class="nav__link-text">Appointments</span>
													</a>
												</li>
												<li class="nav__item">
													<a href="#" class="nav__link">
														<i class="nav__link-icon flaticon2-bell-alarm-symbol"></i>
														<span class="nav__link-text">Reminders</span>
													</a>
												</li>
												<li class="nav__item">
													<a href="#" class="nav__link">
														<i class="nav__link-icon flaticon2-contract"></i>
														<span class="nav__link-text">Announcements</span>
													</a>
												</li>
												<li class="nav__item">
													<a href="#" class="nav__link">
														<i class="nav__link-icon flaticon2-shopping-cart-1"></i>
														<span class="nav__link-text">Orders</span>
													</a>
												</li>
												<li class="nav__separator nav__separator--fit">
												</li>
												<li class="nav__item">
													<a href="#" class="nav__link">
														<i class="nav__link-icon flaticon2-rocket-1"></i>
														<span class="nav__link-text">Projects</span>
													</a>
												</li>
												<li class="nav__item">
													<a href="#" class="nav__link">
														<i class="nav__link-icon flaticon2-chat-1"></i>
														<span class="nav__link-text">User Feedbacks</span>
													</a>
												</li>
											</ul>
										</div>
									</div>
								</div>
							</div>
						</div>

						<div class="portlet__body">
							<!--begin: Search Form -->
							<div class="form form--label-right margin-t-20 margin-b-10">
								<div class="row align-items-center">
									<div class="col-xl-8 order-2 order-xl-1">
										<div class="row align-items-center">
											<div class="col-md-4 margin-b-20-tablet-and-mobile">
												<div class="input-icon input-icon--left">
													<input type="text" class="form-control" placeholder="Search..." id="generalSearch">
													<span class="input-icon__icon input-icon__icon--left">
														<span><i class="la la-search"></i></span>
													</span>
												</div>
											</div>
											<div class="col-md-4 margin-b-20-tablet-and-mobile">
												<div class="form__group form__group--inline">
													<div class="form__label">
														<label>Status:</label>
													</div>
													<div class="form__control">
														<div class="dropdown bootstrap-select form-control"><select class="form-control bootstrap-select" id="form_status" tabindex="-98">
																<option value="">All</option>
																<option value="1">Pending</option>
																<option value="2">Delivered</option>
																<option value="3">Canceled</option>
																<option value="4">Success</option>
																<option value="5">Info</option>
																<option value="6">Danger</option>
															</select><button type="button" class="btn dropdown-toggle bs-placeholder btn-light" data-toggle="dropdown" role="button" data-id="form_status" title="All">
																<div class="filter-option">
																	<div class="filter-option-inner">
																		<div class="filter-option-inner-inner">All</div>
																	</div>
																</div>
															</button>
															<div class="dropdown-menu " role="combobox">
																<div class="inner show" role="listbox" aria-expanded="false" tabindex="-1">
																	<ul class="dropdown-menu inner show"></ul>
																</div>
															</div>
														</div>
													</div>
												</div>
											</div>
											<div class="col-md-4 margin-b-20-tablet-and-mobile">
												<div class="form__group form__group--inline">
													<div class="form__label">
														<label>Type:</label>
													</div>
													<div class="form__control">
														<div class="dropdown bootstrap-select form-control"><select class="form-control bootstrap-select" id="form_type" tabindex="-98">
																<option value="">All</option>
																<option value="1">Online</option>
																<option value="2">Retail</option>
																<option value="3">Direct</option>
															</select><button type="button" class="btn dropdown-toggle bs-placeholder btn-light" data-toggle="dropdown" role="button" data-id="form_type" title="All">
																<div class="filter-option">
																	<div class="filter-option-inner">
																		<div class="filter-option-inner-inner">All</div>
																	</div>
																</div>
															</button>
															<div class="dropdown-menu " role="combobox">
																<div class="inner show" role="listbox" aria-expanded="false" tabindex="-1">
																	<ul class="dropdown-menu inner show"></ul>
																</div>
															</div>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
									<div class="col-xl-4 order-1 order-xl-2 align-right">
										<a href="#" class="btn btn-default hidden">
											<i class="la la-cart-plus"></i> New Order
										</a>
										<div class="separator separator--border-dashed separator--space-lg d-xl-none"></div>
									</div>
								</div>
							</div>
							<!--end: Search Form -->
						</div>
						<div class="portlet__body portlet__body--fit">
							<!--begin: Datatable -->
							<div class="datatable datatable--default datatable--brand datatable--loaded" id="local_data" style="">
								<table class="datatable__table" style="display: block; min-height: 500px;">
									<thead class="datatable__head">
										<tr class="datatable__row" style="left: 0px;">
											<th data-field="RecordID" class="datatable__cell--center datatable__cell datatable__cell--check"><span style="width: 20px;"><label class="checkbox checkbox--single checkbox--all checkbox--solid"><input type="checkbox">&nbsp;<span></span></label></span></th>
											<th data-field="OrderID" class="datatable__cell datatable__cell--sort"><span style="width: 148px;">Order ID</span></th>
											<th data-field="Country" class="datatable__cell datatable__cell--sort"><span style="width: 148px;">Country</span></th>
											<th data-field="ShipDate" class="datatable__cell datatable__cell--sort"><span style="width: 148px;">Ship Date</span></th>
											<th data-field="CompanyName" class="datatable__cell datatable__cell--sort"><span style="width: 148px;">Company Name</span></th>
											<th data-field="Status" class="datatable__cell datatable__cell--sort"><span style="width: 148px;">Status</span></th>
											<th data-field="Type" data-autohide-disabled="false" class="datatable__cell datatable__cell--sort"><span style="width: 148px;">Type</span></th>
											<th data-field="Actions" data-autohide-disabled="false" class="datatable__cell datatable__cell--sort"><span style="width: 110px;">Actions</span></th>
										</tr>
									</thead>
									<tbody style="" class="datatable__body">
										<tr data-row="0" class="datatable__row" style="left: 0px;">
											<td class="datatable__cell--center datatable__cell datatable__cell--check" data-field="RecordID"><span style="width: 20px;"><label class="checkbox checkbox--single checkbox--solid"><input type="checkbox" value="1">&nbsp;<span></span></label></span></td>
											<td data-field="OrderID" class="datatable__cell"><span style="width: 148px;">0374-5070</span></td>
											<td data-field="Country" class="datatable__cell"><span style="width: 148px;">China CN</span></td>
											<td data-field="ShipDate" class="datatable__cell"><span style="width: 148px;">8/27/2017</span></td>
											<td data-field="CompanyName" class="datatable__cell"><span style="width: 148px;">Kris-Wehner</span></td>
											<td data-field="Status" class="datatable__cell"><span style="width: 148px;"><span class="badge  badge--danger badge--inline badge--pill">Danger</span></span></td>
											<td data-field="Type" data-autohide-disabled="false" class="datatable__cell"><span style="width: 148px;"><span class="badge badge--primary badge--dot"></span>&nbsp;<span class="font-bold font-primary">Retail</span></span></td>
											<td data-field="Actions" data-autohide-disabled="false" class="datatable__cell"><span style="overflow: visible; position: relative; width: 110px;">
													<div class="dropdown"> <a data-toggle="dropdown" class="btn btn-sm btn-clean btn-icon btn-icon-md"> <i class="la la-cog"></i> </a>
														<div class="dropdown-menu dropdown-menu-right"> <a href="#" class="dropdown-item"><i class="la la-edit"></i> Edit Details</a> <a href="#" class="dropdown-item"><i class="la la-leaf"></i> Update Status</a> <a href="#" class="dropdown-item"><i class="la la-print"></i> Generate Report</a> </div>
													</div> <a title="Edit details" class="btn btn-sm btn-clean btn-icon btn-icon-md"> <i class="la la-edit"></i> </a> <a title="Delete" class="btn btn-sm btn-clean btn-icon btn-icon-md"> <i class="la la-trash"></i> </a>
												</span></td>
										</tr>
										<tr data-row="1" class="datatable__row datatable__row--even" style="left: 0px;">
											<td class="datatable__cell--center datatable__cell datatable__cell--check" data-field="RecordID"><span style="width: 20px;"><label class="checkbox checkbox--single checkbox--solid"><input type="checkbox" value="2">&nbsp;<span></span></label></span></td>
											<td data-field="OrderID" class="datatable__cell"><span style="width: 148px;">63868-257</span></td>
											<td data-field="Country" class="datatable__cell"><span style="width: 148px;">Philippines PH</span></td>
											<td data-field="ShipDate" class="datatable__cell"><span style="width: 148px;">9/3/2017</span></td>
											<td data-field="CompanyName" class="datatable__cell"><span style="width: 148px;">Stanton, Friesen and Grant</span></td>
											<td data-field="Status" class="datatable__cell"><span style="width: 148px;"><span class="badge badge--brand badge--inline badge--pill">Pending</span></span></td>
											<td data-field="Type" data-autohide-disabled="false" class="datatable__cell"><span style="width: 148px;"><span class="badge badge--primary badge--dot"></span>&nbsp;<span class="font-bold font-primary">Retail</span></span></td>
											<td data-field="Actions" data-autohide-disabled="false" class="datatable__cell"><span style="overflow: visible; position: relative; width: 110px;">
													<div class="dropdown"> <a data-toggle="dropdown" class="btn btn-sm btn-clean btn-icon btn-icon-md"> <i class="la la-cog"></i> </a>
														<div class="dropdown-menu dropdown-menu-right"> <a href="#" class="dropdown-item"><i class="la la-edit"></i> Edit Details</a> <a href="#" class="dropdown-item"><i class="la la-leaf"></i> Update Status</a> <a href="#" class="dropdown-item"><i class="la la-print"></i> Generate Report</a> </div>
													</div> <a title="Edit details" class="btn btn-sm btn-clean btn-icon btn-icon-md"> <i class="la la-edit"></i> </a> <a title="Delete" class="btn btn-sm btn-clean btn-icon btn-icon-md"> <i class="la la-trash"></i> </a>
												</span></td>
										</tr>
										<tr data-row="2" class="datatable__row" style="left: 0px;">
											<td class="datatable__cell--center datatable__cell datatable__cell--check" data-field="RecordID"><span style="width: 20px;"><label class="checkbox checkbox--single checkbox--solid"><input type="checkbox" value="3">&nbsp;<span></span></label></span></td>
											<td data-field="OrderID" class="datatable__cell"><span style="width: 148px;">49288-0815</span></td>
											<td data-field="Country" class="datatable__cell"><span style="width: 148px;">Paraguay PY</span></td>
											<td data-field="ShipDate" class="datatable__cell"><span style="width: 148px;">4/23/2016</span></td>
											<td data-field="CompanyName" class="datatable__cell"><span style="width: 148px;">Cartwright, Hilpert and Hartmann</span></td>
											<td data-field="Status" class="datatable__cell"><span style="width: 148px;"><span class="badge  badge--info badge--inline badge--pill">Info</span></span></td>
											<td data-field="Type" data-autohide-disabled="false" class="datatable__cell"><span style="width: 148px;"><span class="badge badge--danger badge--dot"></span>&nbsp;<span class="font-bold font-danger">Online</span></span></td>
											<td data-field="Actions" data-autohide-disabled="false" class="datatable__cell"><span style="overflow: visible; position: relative; width: 110px;">
													<div class="dropdown"> <a data-toggle="dropdown" class="btn btn-sm btn-clean btn-icon btn-icon-md"> <i class="la la-cog"></i> </a>
														<div class="dropdown-menu dropdown-menu-right"> <a href="#" class="dropdown-item"><i class="la la-edit"></i> Edit Details</a> <a href="#" class="dropdown-item"><i class="la la-leaf"></i> Update Status</a> <a href="#" class="dropdown-item"><i class="la la-print"></i> Generate Report</a> </div>
													</div> <a title="Edit details" class="btn btn-sm btn-clean btn-icon btn-icon-md"> <i class="la la-edit"></i> </a> <a title="Delete" class="btn btn-sm btn-clean btn-icon btn-icon-md"> <i class="la la-trash"></i> </a>
												</span></td>
										</tr>
										<tr data-row="3" class="datatable__row datatable__row--even" style="left: 0px;">
											<td class="datatable__cell--center datatable__cell datatable__cell--check" data-field="RecordID"><span style="width: 20px;"><label class="checkbox checkbox--single checkbox--solid"><input type="checkbox" value="4">&nbsp;<span></span></label></span></td>
											<td data-field="OrderID" class="datatable__cell"><span style="width: 148px;">49288-0039</span></td>
											<td data-field="Country" class="datatable__cell"><span style="width: 148px;">Azerbaijan AZ</span></td>
											<td data-field="ShipDate" class="datatable__cell"><span style="width: 148px;">9/6/2017</span></td>
											<td data-field="CompanyName" class="datatable__cell"><span style="width: 148px;">Bednar-Grant</span></td>
											<td data-field="Status" class="datatable__cell"><span style="width: 148px;"><span class="badge badge--brand badge--inline badge--pill">Pending</span></span></td>
											<td data-field="Type" data-autohide-disabled="false" class="datatable__cell"><span style="width: 148px;"><span class="badge badge--primary badge--dot"></span>&nbsp;<span class="font-bold font-primary">Retail</span></span></td>
											<td data-field="Actions" data-autohide-disabled="false" class="datatable__cell"><span style="overflow: visible; position: relative; width: 110px;">
													<div class="dropdown"> <a data-toggle="dropdown" class="btn btn-sm btn-clean btn-icon btn-icon-md"> <i class="la la-cog"></i> </a>
														<div class="dropdown-menu dropdown-menu-right"> <a href="#" class="dropdown-item"><i class="la la-edit"></i> Edit Details</a> <a href="#" class="dropdown-item"><i class="la la-leaf"></i> Update Status</a> <a href="#" class="dropdown-item"><i class="la la-print"></i> Generate Report</a> </div>
													</div> <a title="Edit details" class="btn btn-sm btn-clean btn-icon btn-icon-md"> <i class="la la-edit"></i> </a> <a title="Delete" class="btn btn-sm btn-clean btn-icon btn-icon-md"> <i class="la la-trash"></i> </a>
												</span></td>
										</tr>
										<tr data-row="4" class="datatable__row" style="left: 0px;">
											<td class="datatable__cell--center datatable__cell datatable__cell--check" data-field="RecordID"><span style="width: 20px;"><label class="checkbox checkbox--single checkbox--solid"><input type="checkbox" value="5">&nbsp;<span></span></label></span></td>
											<td data-field="OrderID" class="datatable__cell"><span style="width: 148px;">59762-0009</span></td>
											<td data-field="Country" class="datatable__cell"><span style="width: 148px;">Brazil BR</span></td>
											<td data-field="ShipDate" class="datatable__cell"><span style="width: 148px;">10/28/2017</span></td>
											<td data-field="CompanyName" class="datatable__cell"><span style="width: 148px;">Feeney Inc</span></td>
											<td data-field="Status" class="datatable__cell"><span style="width: 148px;"><span class="badge  badge--info badge--inline badge--pill">Info</span></span></td>
											<td data-field="Type" data-autohide-disabled="false" class="datatable__cell"><span style="width: 148px;"><span class="badge badge--danger badge--dot"></span>&nbsp;<span class="font-bold font-danger">Online</span></span></td>
											<td data-field="Actions" data-autohide-disabled="false" class="datatable__cell"><span style="overflow: visible; position: relative; width: 110px;">
													<div class="dropdown"> <a data-toggle="dropdown" class="btn btn-sm btn-clean btn-icon btn-icon-md"> <i class="la la-cog"></i> </a>
														<div class="dropdown-menu dropdown-menu-right"> <a href="#" class="dropdown-item"><i class="la la-edit"></i> Edit Details</a> <a href="#" class="dropdown-item"><i class="la la-leaf"></i> Update Status</a> <a href="#" class="dropdown-item"><i class="la la-print"></i> Generate Report</a> </div>
													</div> <a title="Edit details" class="btn btn-sm btn-clean btn-icon btn-icon-md"> <i class="la la-edit"></i> </a> <a title="Delete" class="btn btn-sm btn-clean btn-icon btn-icon-md"> <i class="la la-trash"></i> </a>
												</span></td>
										</tr>
										<tr data-row="5" class="datatable__row datatable__row--even" style="left: 0px;">
											<td class="datatable__cell--center datatable__cell datatable__cell--check" data-field="RecordID"><span style="width: 20px;"><label class="checkbox checkbox--single checkbox--solid"><input type="checkbox" value="6">&nbsp;<span></span></label></span></td>
											<td data-field="OrderID" class="datatable__cell"><span style="width: 148px;">43419-020</span></td>
											<td data-field="Country" class="datatable__cell"><span style="width: 148px;">Honduras HN</span></td>
											<td data-field="ShipDate" class="datatable__cell"><span style="width: 148px;">4/6/2017</span></td>
											<td data-field="CompanyName" class="datatable__cell"><span style="width: 148px;">Bechtelar, Wisoky and Homenick</span></td>
											<td data-field="Status" class="datatable__cell"><span style="width: 148px;"><span class="badge  badge--info badge--inline badge--pill">Info</span></span></td>
											<td data-field="Type" data-autohide-disabled="false" class="datatable__cell"><span style="width: 148px;"><span class="badge badge--success badge--dot"></span>&nbsp;<span class="font-bold font-success">Direct</span></span></td>
											<td data-field="Actions" data-autohide-disabled="false" class="datatable__cell"><span style="overflow: visible; position: relative; width: 110px;">
													<div class="dropdown"> <a data-toggle="dropdown" class="btn btn-sm btn-clean btn-icon btn-icon-md"> <i class="la la-cog"></i> </a>
														<div class="dropdown-menu dropdown-menu-right"> <a href="#" class="dropdown-item"><i class="la la-edit"></i> Edit Details</a> <a href="#" class="dropdown-item"><i class="la la-leaf"></i> Update Status</a> <a href="#" class="dropdown-item"><i class="la la-print"></i> Generate Report</a> </div>
													</div> <a title="Edit details" class="btn btn-sm btn-clean btn-icon btn-icon-md"> <i class="la la-edit"></i> </a> <a title="Delete" class="btn btn-sm btn-clean btn-icon btn-icon-md"> <i class="la la-trash"></i> </a>
												</span></td>
										</tr>
										<tr data-row="6" class="datatable__row" style="left: 0px;">
											<td class="datatable__cell--center datatable__cell datatable__cell--check" data-field="RecordID"><span style="width: 20px;"><label class="checkbox checkbox--single checkbox--solid"><input type="checkbox" value="7">&nbsp;<span></span></label></span></td>
											<td data-field="OrderID" class="datatable__cell"><span style="width: 148px;">33261-641</span></td>
											<td data-field="Country" class="datatable__cell"><span style="width: 148px;">China CN</span></td>
											<td data-field="ShipDate" class="datatable__cell"><span style="width: 148px;">4/15/2017</span></td>
											<td data-field="CompanyName" class="datatable__cell"><span style="width: 148px;">Towne, MacGyver and Greenholt</span></td>
											<td data-field="Status" class="datatable__cell"><span style="width: 148px;"><span class="badge  badge--primary badge--inline badge--pill">Canceled</span></span></td>
											<td data-field="Type" data-autohide-disabled="false" class="datatable__cell"><span style="width: 148px;"><span class="badge badge--primary badge--dot"></span>&nbsp;<span class="font-bold font-primary">Retail</span></span></td>
											<td data-field="Actions" data-autohide-disabled="false" class="datatable__cell"><span style="overflow: visible; position: relative; width: 110px;">
													<div class="dropdown"> <a data-toggle="dropdown" class="btn btn-sm btn-clean btn-icon btn-icon-md"> <i class="la la-cog"></i> </a>
														<div class="dropdown-menu dropdown-menu-right"> <a href="#" class="dropdown-item"><i class="la la-edit"></i> Edit Details</a> <a href="#" class="dropdown-item"><i class="la la-leaf"></i> Update Status</a> <a href="#" class="dropdown-item"><i class="la la-print"></i> Generate Report</a> </div>
													</div> <a title="Edit details" class="btn btn-sm btn-clean btn-icon btn-icon-md"> <i class="la la-edit"></i> </a> <a title="Delete" class="btn btn-sm btn-clean btn-icon btn-icon-md"> <i class="la la-trash"></i> </a>
												</span></td>
										</tr>
										<tr data-row="7" class="datatable__row datatable__row--even" style="left: 0px;">
											<td class="datatable__cell--center datatable__cell datatable__cell--check" data-field="RecordID"><span style="width: 20px;"><label class="checkbox checkbox--single checkbox--solid"><input type="checkbox" value="8">&nbsp;<span></span></label></span></td>
											<td data-field="OrderID" class="datatable__cell"><span style="width: 148px;">68462-221</span></td>
											<td data-field="Country" class="datatable__cell"><span style="width: 148px;">France FR</span></td>
											<td data-field="ShipDate" class="datatable__cell"><span style="width: 148px;">6/13/2016</span></td>
											<td data-field="CompanyName" class="datatable__cell"><span style="width: 148px;">Lubowitz Inc</span></td>
											<td data-field="Status" class="datatable__cell"><span style="width: 148px;"><span class="badge  badge--danger badge--inline badge--pill">Danger</span></span></td>
											<td data-field="Type" data-autohide-disabled="false" class="datatable__cell"><span style="width: 148px;"><span class="badge badge--primary badge--dot"></span>&nbsp;<span class="font-bold font-primary">Retail</span></span></td>
											<td data-field="Actions" data-autohide-disabled="false" class="datatable__cell"><span style="overflow: visible; position: relative; width: 110px;">
													<div class="dropdown"> <a data-toggle="dropdown" class="btn btn-sm btn-clean btn-icon btn-icon-md"> <i class="la la-cog"></i> </a>
														<div class="dropdown-menu dropdown-menu-right"> <a href="#" class="dropdown-item"><i class="la la-edit"></i> Edit Details</a> <a href="#" class="dropdown-item"><i class="la la-leaf"></i> Update Status</a> <a href="#" class="dropdown-item"><i class="la la-print"></i> Generate Report</a> </div>
													</div> <a title="Edit details" class="btn btn-sm btn-clean btn-icon btn-icon-md"> <i class="la la-edit"></i> </a> <a title="Delete" class="btn btn-sm btn-clean btn-icon btn-icon-md"> <i class="la la-trash"></i> </a>
												</span></td>
										</tr>
										<tr data-row="8" class="datatable__row" style="left: 0px;">
											<td class="datatable__cell--center datatable__cell datatable__cell--check" data-field="RecordID"><span style="width: 20px;"><label class="checkbox checkbox--single checkbox--solid"><input type="checkbox" value="9">&nbsp;<span></span></label></span></td>
											<td data-field="OrderID" class="datatable__cell"><span style="width: 148px;">68084-555</span></td>
											<td data-field="Country" class="datatable__cell"><span style="width: 148px;">Mexico MX</span></td>
											<td data-field="ShipDate" class="datatable__cell"><span style="width: 148px;">11/14/2016</span></td>
											<td data-field="CompanyName" class="datatable__cell"><span style="width: 148px;">Larson Inc</span></td>
											<td data-field="Status" class="datatable__cell"><span style="width: 148px;"><span class="badge  badge--success badge--inline badge--pill">Success</span></span></td>
											<td data-field="Type" data-autohide-disabled="false" class="datatable__cell"><span style="width: 148px;"><span class="badge badge--primary badge--dot"></span>&nbsp;<span class="font-bold font-primary">Retail</span></span></td>
											<td data-field="Actions" data-autohide-disabled="false" class="datatable__cell"><span style="overflow: visible; position: relative; width: 110px;">
													<div class="dropdown"> <a data-toggle="dropdown" class="btn btn-sm btn-clean btn-icon btn-icon-md"> <i class="la la-cog"></i> </a>
														<div class="dropdown-menu dropdown-menu-right"> <a href="#" class="dropdown-item"><i class="la la-edit"></i> Edit Details</a> <a href="#" class="dropdown-item"><i class="la la-leaf"></i> Update Status</a> <a href="#" class="dropdown-item"><i class="la la-print"></i> Generate Report</a> </div>
													</div> <a title="Edit details" class="btn btn-sm btn-clean btn-icon btn-icon-md"> <i class="la la-edit"></i> </a> <a title="Delete" class="btn btn-sm btn-clean btn-icon btn-icon-md"> <i class="la la-trash"></i> </a>
												</span></td>
										</tr>
										<tr data-row="9" class="datatable__row datatable__row--even" style="left: 0px;">
											<td class="datatable__cell--center datatable__cell datatable__cell--check" data-field="RecordID"><span style="width: 20px;"><label class="checkbox checkbox--single checkbox--solid"><input type="checkbox" value="10">&nbsp;<span></span></label></span></td>
											<td data-field="OrderID" class="datatable__cell"><span style="width: 148px;">10565-013</span></td>
											<td data-field="Country" class="datatable__cell"><span style="width: 148px;">Greece GR</span></td>
											<td data-field="ShipDate" class="datatable__cell"><span style="width: 148px;">8/2/2017</span></td>
											<td data-field="CompanyName" class="datatable__cell"><span style="width: 148px;">Hoeger-Waelchi</span></td>
											<td data-field="Status" class="datatable__cell"><span style="width: 148px;"><span class="badge  badge--danger badge--inline badge--pill">Danger</span></span></td>
											<td data-field="Type" data-autohide-disabled="false" class="datatable__cell"><span style="width: 148px;"><span class="badge badge--danger badge--dot"></span>&nbsp;<span class="font-bold font-danger">Online</span></span></td>
											<td data-field="Actions" data-autohide-disabled="false" class="datatable__cell"><span style="overflow: visible; position: relative; width: 110px;">
													<div class="dropdown"> <a data-toggle="dropdown" class="btn btn-sm btn-clean btn-icon btn-icon-md"> <i class="la la-cog"></i> </a>
														<div class="dropdown-menu dropdown-menu-right"> <a href="#" class="dropdown-item"><i class="la la-edit"></i> Edit Details</a> <a href="#" class="dropdown-item"><i class="la la-leaf"></i> Update Status</a> <a href="#" class="dropdown-item"><i class="la la-print"></i> Generate Report</a> </div>
													</div> <a title="Edit details" class="btn btn-sm btn-clean btn-icon btn-icon-md"> <i class="la la-edit"></i> </a> <a title="Delete" class="btn btn-sm btn-clean btn-icon btn-icon-md"> <i class="la la-trash"></i> </a>
												</span></td>
										</tr>
									</tbody>
								</table>
								<div class="datatable__pager datatable--paging-loaded">
									<ul class="datatable__pager-nav">
										<li><a title="First" class="datatable__pager-link datatable__pager-link--first datatable__pager-link--disabled" data-page="1" disabled="disabled"><i class="flaticon2-fast-back"></i></a></li>
										<li><a title="Previous" class="datatable__pager-link datatable__pager-link--prev datatable__pager-link--disabled" data-page="1" disabled="disabled"><i class="flaticon2-back"></i></a></li>
										<li style=""></li>
										<li style="display: none;"><input type="text" class="pager-input form-control" title="Page number"></li>
										<li><a class="datatable__pager-link datatable__pager-link-number datatable__pager-link--active" data-page="1" title="1">1</a></li>
										<li><a class="datatable__pager-link datatable__pager-link-number" data-page="2" title="2">2</a></li>
										<li><a class="datatable__pager-link datatable__pager-link-number" data-page="3" title="3">3</a></li>
										<li><a class="datatable__pager-link datatable__pager-link-number" data-page="4" title="4">4</a></li>
										<li><a class="datatable__pager-link datatable__pager-link-number" data-page="5" title="5">5</a></li>
										<li></li>
										<li><a title="Next" class="datatable__pager-link datatable__pager-link--next" data-page="2"><i class="flaticon2-next"></i></a></li>
										<li><a title="Last" class="datatable__pager-link datatable__pager-link--last" data-page="10"><i class="flaticon2-fast-next"></i></a></li>
									</ul>
									<div class="datatable__pager-info">
										<div class="dropdown bootstrap-select datatable__pager-size" style="width: 60px;"><select class="selectpicker datatable__pager-size" title="Select page size" data-width="60px" data-selected="10" tabindex="-98">
												<option class="bs-title-option" value=""></option>
												<option value="10">10</option>
												<option value="20">20</option>
												<option value="30">30</option>
												<option value="50">50</option>
												<option value="100">100</option>
											</select><button type="button" class="btn dropdown-toggle btn-light" data-toggle="dropdown" role="button" title="Select page size">
												<div class="filter-option">
													<div class="filter-option-inner">
														<div class="filter-option-inner-inner">10</div>
													</div>
												</div>
											</button>
											<div class="dropdown-menu " role="combobox">
												<div class="inner show" role="listbox" aria-expanded="false" tabindex="-1">
													<ul class="dropdown-menu inner show"></ul>
												</div>
											</div>
										</div><span class="datatable__pager-detail">Showing 1 - 10 of 100</span>
									</div>
								</div>
							</div>
							<!--end: Datatable -->
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