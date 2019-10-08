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
							<h3 class="subheader__title">Pagination Options Examples</h3>

							<div class="subheader__breadcrumbs">
								<a href="#" class="subheader__breadcrumbs-home"><i class="flaticon2-shelter"></i></a>
								<span class="subheader__breadcrumbs-separator"></span>
								<a href="" class="subheader__breadcrumbs-link">
									Crud </a>
								<span class="subheader__breadcrumbs-separator"></span>
								<a href="" class="subheader__breadcrumbs-link">
									Datatables.net </a>
								<span class="subheader__breadcrumbs-separator"></span>
								<a href="" class="subheader__breadcrumbs-link">
									Basic </a>
								<span class="subheader__breadcrumbs-separator"></span>
								<a href="" class="subheader__breadcrumbs-link">
									Pagination Options </a>
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
							The default page control presented by DataTables (forward and backward buttons with up to 7 page numbers in-between) is fine for most situations.
						</div>
					</div>

					<div class="portlet portlet--mobile">
						<div class="portlet__head portlet__head--lg">
							<div class="portlet__head-label">
								<span class="portlet__head-icon">
									<i class="font-brand flaticon2-line-chart"></i>
								</span>
								<h3 class="portlet__head-title">
									Extended Pagination
								</h3>
							</div>
							<div class="portlet__head-toolbar">
								<div class="portlet__head-wrapper">
									<div class="portlet__head-actions">
										<div class="dropdown dropdown-inline">
											<button type="button" class="btn btn-default btn-icon-sm dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
												<i class="la la-download"></i> Export
											</button>
											<div class="dropdown-menu dropdown-menu-right">
												<ul class="nav">
													<li class="nav__section nav__section--first">
														<span class="nav__section-text">Choose an option</span>
													</li>
													<li class="nav__item">
														<a href="#" class="nav__link">
															<i class="nav__link-icon la la-print"></i>
															<span class="nav__link-text">Print</span>
														</a>
													</li>
													<li class="nav__item">
														<a href="#" class="nav__link">
															<i class="nav__link-icon la la-copy"></i>
															<span class="nav__link-text">Copy</span>
														</a>
													</li>
													<li class="nav__item">
														<a href="#" class="nav__link">
															<i class="nav__link-icon la la-file-excel-o"></i>
															<span class="nav__link-text">Excel</span>
														</a>
													</li>
													<li class="nav__item">
														<a href="#" class="nav__link">
															<i class="nav__link-icon la la-file-text-o"></i>
															<span class="nav__link-text">CSV</span>
														</a>
													</li>
													<li class="nav__item">
														<a href="#" class="nav__link">
															<i class="nav__link-icon la la-file-pdf-o"></i>
															<span class="nav__link-text">PDF</span>
														</a>
													</li>
												</ul>
											</div>
										</div>
										&nbsp;
										<a href="#" class="btn btn-brand btn-elevate btn-icon-sm">
											<i class="la la-plus"></i>
											New Record
										</a>
									</div>
								</div>
							</div>
						</div>

						<div class="portlet__body">
							<!--begin: Datatable -->
							<div id="table_1_wrapper" class="dataTables_wrapper dt-bootstrap4 no-footer">
								<div class="row">
									<div class="col-sm-12 col-md-6">
										<div class="dataTables_length" id="table_1_length"><label>Show <select name="table_1_length" aria-controls="table_1" class="custom-select custom-select-sm form-control form-control-sm">
													<option value="10">10</option>
													<option value="25">25</option>
													<option value="50">50</option>
													<option value="100">100</option>
												</select> entries</label></div>
									</div>
									<div class="col-sm-12 col-md-6">
										<div id="table_1_filter" class="dataTables_filter"><label>Search:<input type="search" class="form-control form-control-sm" placeholder="" aria-controls="table_1"></label></div>
									</div>
								</div>
								<div class="row">
									<div class="col-sm-12">
										<table class="table table-striped- table-bordered table-hover table-checkable dataTable no-footer dtr-inline" id="table_1" role="grid" aria-describedby="table_1_info" style="width: 1274px;">
											<thead>
												<tr role="row">
													<th class="sorting_asc" tabindex="0" aria-controls="table_1" rowspan="1" colspan="1" style="width: 55.25px;" aria-sort="ascending" aria-label="Record ID: activate to sort column descending">Record ID</th>
													<th class="sorting" tabindex="0" aria-controls="table_1" rowspan="1" colspan="1" style="width: 60.25px;" aria-label="Order ID: activate to sort column ascending">Order ID</th>
													<th class="sorting" tabindex="0" aria-controls="table_1" rowspan="1" colspan="1" style="width: 80.25px;" aria-label="Country: activate to sort column ascending">Country</th>
													<th class="sorting" tabindex="0" aria-controls="table_1" rowspan="1" colspan="1" style="width: 95.25px;" aria-label="Ship City: activate to sort column ascending">Ship City</th>
													<th class="sorting" tabindex="0" aria-controls="table_1" rowspan="1" colspan="1" style="width: 116.25px;" aria-label="Ship Address: activate to sort column ascending">Ship Address</th>
													<th class="sorting" tabindex="0" aria-controls="table_1" rowspan="1" colspan="1" style="width: 98.25px;" aria-label="Company Agent: activate to sort column ascending">Company Agent</th>
													<th class="sorting" tabindex="0" aria-controls="table_1" rowspan="1" colspan="1" style="width: 137.25px;" aria-label="Company Name: activate to sort column ascending">Company Name</th>
													<th class="sorting" tabindex="0" aria-controls="table_1" rowspan="1" colspan="1" style="width: 56.25px;" aria-label="Ship Date: activate to sort column ascending">Ship Date</th>
													<th class="sorting" tabindex="0" aria-controls="table_1" rowspan="1" colspan="1" style="width: 46.25px;" aria-label="Status: activate to sort column ascending">Status</th>
													<th class="sorting" tabindex="0" aria-controls="table_1" rowspan="1" colspan="1" style="width: 32.25px;" aria-label="Type: activate to sort column ascending">Type</th>
													<th class="sorting_disabled" rowspan="1" colspan="1" style="width: 69.5px;" aria-label="Actions">Actions</th>
												</tr>
											</thead>

											<tbody>










												<tr role="row" class="odd">
													<td tabindex="0" class="sorting_1">1</td>
													<td>61715-075</td>
													<td>China</td>
													<td>Tieba</td>
													<td>746 Pine View Junction</td>
													<td>Nixie Sailor</td>
													<td>Gleichner, Ziemann and Gutkowski</td>
													<td>2/12/2018</td>
													<td><span class="badge  badge--primary badge--inline badge--pill">Canceled</span></td>
													<td><span class="badge badge--primary badge--dot"></span>&nbsp;<span class="font-bold font-primary">Retail</span></td>
													<td nowrap="">
														<span class="dropdown">
															<a href="#" class="btn btn-sm btn-clean btn-icon btn-icon-md" data-toggle="dropdown" aria-expanded="true">
																<i class="la la-ellipsis-h"></i>
															</a>
															<div class="dropdown-menu dropdown-menu-right">
																<a class="dropdown-item" href="#"><i class="la la-edit"></i> Edit Details</a>
																<a class="dropdown-item" href="#"><i class="la la-leaf"></i> Update Status</a>
																<a class="dropdown-item" href="#"><i class="la la-print"></i> Generate Report</a>
															</div>
														</span>
														<a href="#" class="btn btn-sm btn-clean btn-icon btn-icon-md" title="View">
															<i class="la la-edit"></i>
														</a></td>
												</tr>
												<tr role="row" class="even">
													<td tabindex="0" class="sorting_1">2</td>
													<td>63629-4697</td>
													<td>Indonesia</td>
													<td>Cihaur</td>
													<td>01652 Fulton Trail</td>
													<td>Emelita Giraldez</td>
													<td>Rosenbaum-Reichel</td>
													<td>8/6/2017</td>
													<td><span class="badge  badge--danger badge--inline badge--pill">Danger</span></td>
													<td><span class="badge badge--success badge--dot"></span>&nbsp;<span class="font-bold font-success">Direct</span></td>
													<td nowrap="">
														<span class="dropdown">
															<a href="#" class="btn btn-sm btn-clean btn-icon btn-icon-md" data-toggle="dropdown" aria-expanded="true">
																<i class="la la-ellipsis-h"></i>
															</a>
															<div class="dropdown-menu dropdown-menu-right">
																<a class="dropdown-item" href="#"><i class="la la-edit"></i> Edit Details</a>
																<a class="dropdown-item" href="#"><i class="la la-leaf"></i> Update Status</a>
																<a class="dropdown-item" href="#"><i class="la la-print"></i> Generate Report</a>
															</div>
														</span>
														<a href="#" class="btn btn-sm btn-clean btn-icon btn-icon-md" title="View">
															<i class="la la-edit"></i>
														</a></td>
												</tr>
												<tr role="row" class="odd">
													<td tabindex="0" class="sorting_1">3</td>
													<td>68084-123</td>
													<td>Argentina</td>
													<td>Puerto Iguazú</td>
													<td>2 Pine View Park</td>
													<td>Ula Luckin</td>
													<td>Kulas, Cassin and Batz</td>
													<td>5/26/2016</td>
													<td><span class="badge badge--brand badge--inline badge--pill">Pending</span></td>
													<td><span class="badge badge--primary badge--dot"></span>&nbsp;<span class="font-bold font-primary">Retail</span></td>
													<td nowrap="">
														<span class="dropdown">
															<a href="#" class="btn btn-sm btn-clean btn-icon btn-icon-md" data-toggle="dropdown" aria-expanded="true">
																<i class="la la-ellipsis-h"></i>
															</a>
															<div class="dropdown-menu dropdown-menu-right">
																<a class="dropdown-item" href="#"><i class="la la-edit"></i> Edit Details</a>
																<a class="dropdown-item" href="#"><i class="la la-leaf"></i> Update Status</a>
																<a class="dropdown-item" href="#"><i class="la la-print"></i> Generate Report</a>
															</div>
														</span>
														<a href="#" class="btn btn-sm btn-clean btn-icon btn-icon-md" title="View">
															<i class="la la-edit"></i>
														</a></td>
												</tr>
												<tr role="row" class="even">
													<td tabindex="0" class="sorting_1">4</td>
													<td>67457-428</td>
													<td>Indonesia</td>
													<td>Talok</td>
													<td>3050 Buell Terrace</td>
													<td>Evangeline Cure</td>
													<td>Pfannerstill-Treutel</td>
													<td>7/2/2016</td>
													<td><span class="badge badge--brand badge--inline badge--pill">Pending</span></td>
													<td><span class="badge badge--success badge--dot"></span>&nbsp;<span class="font-bold font-success">Direct</span></td>
													<td nowrap="">
														<span class="dropdown">
															<a href="#" class="btn btn-sm btn-clean btn-icon btn-icon-md" data-toggle="dropdown" aria-expanded="true">
																<i class="la la-ellipsis-h"></i>
															</a>
															<div class="dropdown-menu dropdown-menu-right">
																<a class="dropdown-item" href="#"><i class="la la-edit"></i> Edit Details</a>
																<a class="dropdown-item" href="#"><i class="la la-leaf"></i> Update Status</a>
																<a class="dropdown-item" href="#"><i class="la la-print"></i> Generate Report</a>
															</div>
														</span>
														<a href="#" class="btn btn-sm btn-clean btn-icon btn-icon-md" title="View">
															<i class="la la-edit"></i>
														</a></td>
												</tr>
												<tr role="row" class="odd">
													<td tabindex="0" class="sorting_1">5</td>
													<td>31722-529</td>
													<td>Austria</td>
													<td>Sankt Andrä-Höch</td>
													<td>3038 Trailsway Junction</td>
													<td>Tierney St. Louis</td>
													<td>Dicki-Kling</td>
													<td>5/20/2017</td>
													<td><span class="badge  badge--danger badge--inline badge--pill">Delivered</span></td>
													<td><span class="badge badge--success badge--dot"></span>&nbsp;<span class="font-bold font-success">Direct</span></td>
													<td nowrap="">
														<span class="dropdown">
															<a href="#" class="btn btn-sm btn-clean btn-icon btn-icon-md" data-toggle="dropdown" aria-expanded="true">
																<i class="la la-ellipsis-h"></i>
															</a>
															<div class="dropdown-menu dropdown-menu-right">
																<a class="dropdown-item" href="#"><i class="la la-edit"></i> Edit Details</a>
																<a class="dropdown-item" href="#"><i class="la la-leaf"></i> Update Status</a>
																<a class="dropdown-item" href="#"><i class="la la-print"></i> Generate Report</a>
															</div>
														</span>
														<a href="#" class="btn btn-sm btn-clean btn-icon btn-icon-md" title="View">
															<i class="la la-edit"></i>
														</a></td>
												</tr>
												<tr role="row" class="even">
													<td tabindex="0" class="sorting_1">6</td>
													<td>64117-168</td>
													<td>China</td>
													<td>Rongkou</td>
													<td>023 South Way</td>
													<td>Gerhard Reinhard</td>
													<td>Gleason, Kub and Marquardt</td>
													<td>11/26/2016</td>
													<td><span class="badge  badge--info badge--inline badge--pill">Info</span></td>
													<td><span class="badge badge--success badge--dot"></span>&nbsp;<span class="font-bold font-success">Direct</span></td>
													<td nowrap="">
														<span class="dropdown">
															<a href="#" class="btn btn-sm btn-clean btn-icon btn-icon-md" data-toggle="dropdown" aria-expanded="true">
																<i class="la la-ellipsis-h"></i>
															</a>
															<div class="dropdown-menu dropdown-menu-right">
																<a class="dropdown-item" href="#"><i class="la la-edit"></i> Edit Details</a>
																<a class="dropdown-item" href="#"><i class="la la-leaf"></i> Update Status</a>
																<a class="dropdown-item" href="#"><i class="la la-print"></i> Generate Report</a>
															</div>
														</span>
														<a href="#" class="btn btn-sm btn-clean btn-icon btn-icon-md" title="View">
															<i class="la la-edit"></i>
														</a></td>
												</tr>
												<tr role="row" class="odd">
													<td tabindex="0" class="sorting_1">7</td>
													<td>43857-0331</td>
													<td>China</td>
													<td>Baiguo</td>
													<td>56482 Fairfield Terrace</td>
													<td>Englebert Shelley</td>
													<td>Jenkins Inc</td>
													<td>6/28/2016</td>
													<td><span class="badge  badge--danger badge--inline badge--pill">Delivered</span></td>
													<td><span class="badge badge--success badge--dot"></span>&nbsp;<span class="font-bold font-success">Direct</span></td>
													<td nowrap="">
														<span class="dropdown">
															<a href="#" class="btn btn-sm btn-clean btn-icon btn-icon-md" data-toggle="dropdown" aria-expanded="true">
																<i class="la la-ellipsis-h"></i>
															</a>
															<div class="dropdown-menu dropdown-menu-right">
																<a class="dropdown-item" href="#"><i class="la la-edit"></i> Edit Details</a>
																<a class="dropdown-item" href="#"><i class="la la-leaf"></i> Update Status</a>
																<a class="dropdown-item" href="#"><i class="la la-print"></i> Generate Report</a>
															</div>
														</span>
														<a href="#" class="btn btn-sm btn-clean btn-icon btn-icon-md" title="View">
															<i class="la la-edit"></i>
														</a></td>
												</tr>
												<tr role="row" class="even">
													<td tabindex="0" class="sorting_1">8</td>
													<td>64980-196</td>
													<td>Croatia</td>
													<td>Vinica</td>
													<td>0 Elka Street</td>
													<td>Hazlett Kite</td>
													<td>Streich LLC</td>
													<td>8/5/2016</td>
													<td><span class="badge  badge--danger badge--inline badge--pill">Danger</span></td>
													<td><span class="badge badge--danger badge--dot"></span>&nbsp;<span class="font-bold font-danger">Online</span></td>
													<td nowrap="">
														<span class="dropdown">
															<a href="#" class="btn btn-sm btn-clean btn-icon btn-icon-md" data-toggle="dropdown" aria-expanded="true">
																<i class="la la-ellipsis-h"></i>
															</a>
															<div class="dropdown-menu dropdown-menu-right">
																<a class="dropdown-item" href="#"><i class="la la-edit"></i> Edit Details</a>
																<a class="dropdown-item" href="#"><i class="la la-leaf"></i> Update Status</a>
																<a class="dropdown-item" href="#"><i class="la la-print"></i> Generate Report</a>
															</div>
														</span>
														<a href="#" class="btn btn-sm btn-clean btn-icon btn-icon-md" title="View">
															<i class="la la-edit"></i>
														</a></td>
												</tr>
												<tr role="row" class="odd">
													<td tabindex="0" class="sorting_1">9</td>
													<td>0404-0360</td>
													<td>Colombia</td>
													<td>San Carlos</td>
													<td>38099 Ilene Hill</td>
													<td>Freida Morby</td>
													<td>Haley, Schamberger and Durgan</td>
													<td>3/31/2017</td>
													<td><span class="badge  badge--danger badge--inline badge--pill">Delivered</span></td>
													<td><span class="badge badge--danger badge--dot"></span>&nbsp;<span class="font-bold font-danger">Online</span></td>
													<td nowrap="">
														<span class="dropdown">
															<a href="#" class="btn btn-sm btn-clean btn-icon btn-icon-md" data-toggle="dropdown" aria-expanded="true">
																<i class="la la-ellipsis-h"></i>
															</a>
															<div class="dropdown-menu dropdown-menu-right">
																<a class="dropdown-item" href="#"><i class="la la-edit"></i> Edit Details</a>
																<a class="dropdown-item" href="#"><i class="la la-leaf"></i> Update Status</a>
																<a class="dropdown-item" href="#"><i class="la la-print"></i> Generate Report</a>
															</div>
														</span>
														<a href="#" class="btn btn-sm btn-clean btn-icon btn-icon-md" title="View">
															<i class="la la-edit"></i>
														</a></td>
												</tr>
												<tr role="row" class="even">
													<td tabindex="0" class="sorting_1">10</td>
													<td>52125-267</td>
													<td>Thailand</td>
													<td>Maha Sarakham</td>
													<td>8696 Barby Pass</td>
													<td>Obed Helian</td>
													<td>Labadie, Predovic and Hammes</td>
													<td>1/26/2017</td>
													<td><span class="badge badge--brand badge--inline badge--pill">Pending</span></td>
													<td><span class="badge badge--success badge--dot"></span>&nbsp;<span class="font-bold font-success">Direct</span></td>
													<td nowrap="">
														<span class="dropdown">
															<a href="#" class="btn btn-sm btn-clean btn-icon btn-icon-md" data-toggle="dropdown" aria-expanded="true">
																<i class="la la-ellipsis-h"></i>
															</a>
															<div class="dropdown-menu dropdown-menu-right">
																<a class="dropdown-item" href="#"><i class="la la-edit"></i> Edit Details</a>
																<a class="dropdown-item" href="#"><i class="la la-leaf"></i> Update Status</a>
																<a class="dropdown-item" href="#"><i class="la la-print"></i> Generate Report</a>
															</div>
														</span>
														<a href="#" class="btn btn-sm btn-clean btn-icon btn-icon-md" title="View">
															<i class="la la-edit"></i>
														</a></td>
												</tr>
											</tbody>
										</table>
									</div>
								</div>
								<div class="row">
									<div class="col-sm-12 col-md-5">
										<div class="dataTables_info" id="table_1_info" role="status" aria-live="polite">Showing 1 to 10 of 50 entries</div>
									</div>
									<div class="col-sm-12 col-md-7">
										<div class="dataTables_paginate paging_full_numbers" id="table_1_paginate">
											<ul class="pagination">
												<li class="paginate_button page-item first disabled" id="table_1_first"><a href="#" aria-controls="table_1" data-dt-idx="0" tabindex="0" class="page-link"><i class="la la-angle-double-left"></i></a></li>
												<li class="paginate_button page-item previous disabled" id="table_1_previous"><a href="#" aria-controls="table_1" data-dt-idx="1" tabindex="0" class="page-link"><i class="la la-angle-left"></i></a></li>
												<li class="paginate_button page-item active"><a href="#" aria-controls="table_1" data-dt-idx="2" tabindex="0" class="page-link">1</a></li>
												<li class="paginate_button page-item "><a href="#" aria-controls="table_1" data-dt-idx="3" tabindex="0" class="page-link">2</a></li>
												<li class="paginate_button page-item "><a href="#" aria-controls="table_1" data-dt-idx="4" tabindex="0" class="page-link">3</a></li>
												<li class="paginate_button page-item "><a href="#" aria-controls="table_1" data-dt-idx="5" tabindex="0" class="page-link">4</a></li>
												<li class="paginate_button page-item "><a href="#" aria-controls="table_1" data-dt-idx="6" tabindex="0" class="page-link">5</a></li>
												<li class="paginate_button page-item next" id="table_1_next"><a href="#" aria-controls="table_1" data-dt-idx="7" tabindex="0" class="page-link"><i class="la la-angle-right"></i></a></li>
												<li class="paginate_button page-item last" id="table_1_last"><a href="#" aria-controls="table_1" data-dt-idx="8" tabindex="0" class="page-link"><i class="la la-angle-double-right"></i></a></li>
											</ul>
										</div>
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