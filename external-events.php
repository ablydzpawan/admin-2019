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

								External Events </h3>

							<div class="subheader__breadcrumbs">
								<a href="#" class="subheader__breadcrumbs-home"><i class="flaticon2-shelter"></i></a>
								<span class="subheader__breadcrumbs-separator"></span>
								<a href="" class="subheader__breadcrumbs-link">
									Components </a>
								<span class="subheader__breadcrumbs-separator"></span>
								<a href="" class="subheader__breadcrumbs-link">
									Calendar </a>
								<span class="subheader__breadcrumbs-separator"></span>
								<a href="" class="subheader__breadcrumbs-link">
									External Events </a>
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
						<div class="col-lg-3">
							<!--begin::Portlet-->
							<div class="portlet" id="portlet">
								<div class="portlet__head">
									<div class="portlet__head-label">
										<span class="portlet__head-icon">
											<i class="flaticon-map-location"></i>
										</span>
										<h3 class="portlet__head-title">
											Events
										</h3>
									</div>
								</div>
								<div class="portlet__body">
									<div id="calendar_external_events" class="fc-unthemed">
										<div class="fc-draggable-handle badge badge--lg badge--primary badge--inline margin-b-15" data-color="fc-event-primary">Meeting</div><br>
										<div class="fc-draggable-handle badge badge--lg badge--brand badge--inline margin-b-15" data-color="fc-event-brand">Conference Call</div><br>
										<div class="fc-draggable-handle badge badge--lg badge--success badge--inline margin-b-15" data-color="fc-event-success">Dinner</div><br>
										<div class="fc-draggable-handle badge badge--lg badge--warning badge--inline margin-b-15" data-color="fc-event-warning">Product Launch</div><br>
										<div class="fc-draggable-handle badge badge--lg badge--danger badge--inline margin-b-15" data-color="fc-event-danger">Reporting</div><br>

										<div class="separator separator--border-dashed separator--space-md"></div>

										<div class="fc-draggable-handle badge badge--lg badge--success badge--inline margin-b-15" data-color="fc-event-success">Project Update</div><br>
										<div class="fc-draggable-handle badge badge--lg badge--info badge--inline margin-b-15" data-color="fc-event-info">Staff Meeting</div><br>
										<div class="fc-draggable-handle badge badge--lg badge--dark badge--inline margin-b-15" data-color="fc-event-dark">Lunch</div>

										<div class="separator separator--border-dashed separator--space-md"></div>

										<div>
											<label class="checkbox checkbox--brand">
												<input type="checkbox" id="calendar_external_events_remove"> Remove after drop
												<span></span>
											</label>
										</div>
									</div>
								</div>
							</div>
							<!--end::Portlet-->
						</div>
						<div class="col-lg-9">
							<!--begin::Portlet-->
							<div class="portlet">
								<div class="portlet__head">
									<div class="portlet__head-label">
										<span class="portlet__head-icon">
											<i class="flaticon-map-location"></i>
										</span>
										<h3 class="portlet__head-title">
											My Events
										</h3>
									</div>
									<div class="portlet__head-toolbar">
										<div class="portlet__head-group">
											<div class="btn-group">
												<button type="button" class="btn btn-elevate btn-danger dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
													<i class="la la-plus"></i> Add Event
												</button>
												<div class="dropdown-menu dropdown-menu-right">
													<a class="dropdown-item" href="#">Action</a>
													<a class="dropdown-item" href="#">Another action</a>
													<a class="dropdown-item" href="#">Something else here</a>
													<div class="dropdown-divider"></div>
													<a class="dropdown-item" href="#">Separated link</a>
												</div>
											</div>
										</div>
									</div>
								</div>
								<div class="portlet__body">
									<div id="calendar" class="fc fc-ltr fc-unthemed" style="">
										<div class="fc-toolbar fc-header-toolbar">
											<div class="fc-left">
												<div class="fc-button-group"><button type="button" class="fc-prev-button fc-button fc-button-primary" aria-label="prev"><span class="fc-icon fc-icon-chevron-left"></span></button><button type="button" class="fc-next-button fc-button fc-button-primary" aria-label="next"><span class="fc-icon fc-icon-chevron-right"></span></button></div><button type="button" class="fc-today-button fc-button fc-button-primary" disabled="">today</button>
											</div>
											<div class="fc-center">
												<h2>September 2019</h2>
											</div>
											<div class="fc-right">
												<div class="fc-button-group"><button type="button" class="fc-dayGridMonth-button fc-button fc-button-primary fc-button-active">month</button><button type="button" class="fc-timeGridWeek-button fc-button fc-button-primary">week</button><button type="button" class="fc-timeGridDay-button fc-button fc-button-primary">day</button></div>
											</div>
										</div>
										<div class="fc-view-container">
											<div class="fc-view fc-dayGridMonth-view fc-dayGrid-view" style="">
												<table class="">
													<thead class="fc-head">
														<tr>
															<td class="fc-head-container fc-widget-header">
																<div class="fc-row fc-widget-header">
																	<table class="">
																		<thead>
																			<tr>
																				<th class="fc-day-header fc-widget-header fc-sun"><span>Sun</span></th>
																				<th class="fc-day-header fc-widget-header fc-mon"><span>Mon</span></th>
																				<th class="fc-day-header fc-widget-header fc-tue"><span>Tue</span></th>
																				<th class="fc-day-header fc-widget-header fc-wed"><span>Wed</span></th>
																				<th class="fc-day-header fc-widget-header fc-thu"><span>Thu</span></th>
																				<th class="fc-day-header fc-widget-header fc-fri"><span>Fri</span></th>
																				<th class="fc-day-header fc-widget-header fc-sat"><span>Sat</span></th>
																			</tr>
																		</thead>
																	</table>
																</div>
															</td>
														</tr>
													</thead>
													<tbody class="fc-body">
														<tr>
															<td class="fc-widget-content">
																<div class="fc-scroller fc-day-grid-container" style="overflow: hidden; height: 740px;">
																	<div class="fc-day-grid">
																		<div class="fc-row fc-week fc-widget-content fc-rigid" style="height: 123px;">
																			<div class="fc-bg">
																				<table class="">
																					<tbody>
																						<tr>
																							<td class="fc-day fc-widget-content fc-sun fc-past" data-date="2019-09-01"></td>
																							<td class="fc-day fc-widget-content fc-mon fc-past" data-date="2019-09-02"></td>
																							<td class="fc-day fc-widget-content fc-tue fc-past" data-date="2019-09-03"></td>
																							<td class="fc-day fc-widget-content fc-wed fc-past" data-date="2019-09-04"></td>
																							<td class="fc-day fc-widget-content fc-thu fc-past" data-date="2019-09-05"></td>
																							<td class="fc-day fc-widget-content fc-fri fc-past" data-date="2019-09-06"></td>
																							<td class="fc-day fc-widget-content fc-sat fc-past" data-date="2019-09-07"></td>
																						</tr>
																					</tbody>
																				</table>
																			</div>
																			<div class="fc-content-skeleton">
																				<table>
																					<thead>
																						<tr>
																							<td class="fc-day-top fc-sun fc-past" data-date="2019-09-01"><a class="fc-day-number" data-goto="{&quot;date&quot;:&quot;2019-09-01&quot;,&quot;type&quot;:&quot;day&quot;}">1</a></td>
																							<td class="fc-day-top fc-mon fc-past" data-date="2019-09-02"><a class="fc-day-number" data-goto="{&quot;date&quot;:&quot;2019-09-02&quot;,&quot;type&quot;:&quot;day&quot;}">2</a></td>
																							<td class="fc-day-top fc-tue fc-past" data-date="2019-09-03"><a class="fc-day-number" data-goto="{&quot;date&quot;:&quot;2019-09-03&quot;,&quot;type&quot;:&quot;day&quot;}">3</a></td>
																							<td class="fc-day-top fc-wed fc-past" data-date="2019-09-04"><a class="fc-day-number" data-goto="{&quot;date&quot;:&quot;2019-09-04&quot;,&quot;type&quot;:&quot;day&quot;}">4</a></td>
																							<td class="fc-day-top fc-thu fc-past" data-date="2019-09-05"><a class="fc-day-number" data-goto="{&quot;date&quot;:&quot;2019-09-05&quot;,&quot;type&quot;:&quot;day&quot;}">5</a></td>
																							<td class="fc-day-top fc-fri fc-past" data-date="2019-09-06"><a class="fc-day-number" data-goto="{&quot;date&quot;:&quot;2019-09-06&quot;,&quot;type&quot;:&quot;day&quot;}">6</a></td>
																							<td class="fc-day-top fc-sat fc-past" data-date="2019-09-07"><a class="fc-day-number" data-goto="{&quot;date&quot;:&quot;2019-09-07&quot;,&quot;type&quot;:&quot;day&quot;}">7</a></td>
																						</tr>
																					</thead>
																					<tbody>
																						<tr>
																							<td class="fc-event-container"><a class="fc-day-grid-event fc-h-event fc-event fc-start fc-end fc-event-danger fc-event-solid-warning fc-draggable fc-resizable" data-original-title="" title="">
																									<div class="fc-content"> <span class="fc-title">All Day Event</span></div>
																									<div class="fc-resizer fc-end-resizer"></div>
																								</a></td>
																							<td class="fc-event-container"><a class="fc-day-grid-event fc-h-event fc-event fc-start fc-end fc-event-primary fc-draggable fc-resizable" data-original-title="" title="">
																									<div class="fc-content"> <span class="fc-title">Company Trip</span></div>
																									<div class="fc-resizer fc-end-resizer"></div>
																								</a></td>
																							<td class="fc-event-container" colspan="2"><a class="fc-day-grid-event fc-h-event fc-event fc-start fc-end fc-event-light fc-event-solid-primary fc-draggable fc-resizable" data-original-title="" title="">
																									<div class="fc-content"> <span class="fc-title">ICT Expo 2017 - Product Release</span></div>
																									<div class="fc-resizer fc-end-resizer"></div>
																								</a></td>
																							<td></td>
																							<td></td>
																							<td></td>
																						</tr>
																					</tbody>
																				</table>
																			</div>
																		</div>
																		<div class="fc-row fc-week fc-widget-content fc-rigid" style="height: 123px;">
																			<div class="fc-bg">
																				<table class="">
																					<tbody>
																						<tr>
																							<td class="fc-day fc-widget-content fc-sun fc-past" data-date="2019-09-08"></td>
																							<td class="fc-day fc-widget-content fc-mon fc-past" data-date="2019-09-09"></td>
																							<td class="fc-day fc-widget-content fc-tue fc-today " data-date="2019-09-10"></td>
																							<td class="fc-day fc-widget-content fc-wed fc-future" data-date="2019-09-11"></td>
																							<td class="fc-day fc-widget-content fc-thu fc-future" data-date="2019-09-12"></td>
																							<td class="fc-day fc-widget-content fc-fri fc-future" data-date="2019-09-13"></td>
																							<td class="fc-day fc-widget-content fc-sat fc-future" data-date="2019-09-14"></td>
																						</tr>
																					</tbody>
																				</table>
																			</div>
																			<div class="fc-content-skeleton">
																				<table>
																					<thead>
																						<tr>
																							<td class="fc-day-top fc-sun fc-past" data-date="2019-09-08"><a class="fc-day-number" data-goto="{&quot;date&quot;:&quot;2019-09-08&quot;,&quot;type&quot;:&quot;day&quot;}">8</a></td>
																							<td class="fc-day-top fc-mon fc-past" data-date="2019-09-09"><a class="fc-day-number" data-goto="{&quot;date&quot;:&quot;2019-09-09&quot;,&quot;type&quot;:&quot;day&quot;}">9</a></td>
																							<td class="fc-day-top fc-tue fc-today " data-date="2019-09-10"><a class="fc-day-number" data-goto="{&quot;date&quot;:&quot;2019-09-10&quot;,&quot;type&quot;:&quot;day&quot;}">10</a></td>
																							<td class="fc-day-top fc-wed fc-future" data-date="2019-09-11"><a class="fc-day-number" data-goto="{&quot;date&quot;:&quot;2019-09-11&quot;,&quot;type&quot;:&quot;day&quot;}">11</a></td>
																							<td class="fc-day-top fc-thu fc-future" data-date="2019-09-12"><a class="fc-day-number" data-goto="{&quot;date&quot;:&quot;2019-09-12&quot;,&quot;type&quot;:&quot;day&quot;}">12</a></td>
																							<td class="fc-day-top fc-fri fc-future" data-date="2019-09-13"><a class="fc-day-number" data-goto="{&quot;date&quot;:&quot;2019-09-13&quot;,&quot;type&quot;:&quot;day&quot;}">13</a></td>
																							<td class="fc-day-top fc-sat fc-future" data-date="2019-09-14"><a class="fc-day-number" data-goto="{&quot;date&quot;:&quot;2019-09-14&quot;,&quot;type&quot;:&quot;day&quot;}">14</a></td>
																						</tr>
																					</thead>
																					<tbody>
																						<tr>
																							<td rowspan="5"></td>
																							<td class="fc-event-container" colspan="2"><a class="fc-day-grid-event fc-h-event fc-event fc-start fc-end fc-event-brand fc-draggable fc-resizable" data-original-title="" title="">
																									<div class="fc-content"> <span class="fc-title">Conference</span></div>
																									<div class="fc-resizer fc-end-resizer"></div>
																								</a></td>
																							<td class="fc-event-container"><a class="fc-day-grid-event fc-h-event fc-event fc-start fc-end fc-event-solid-danger fc-event-light fc-draggable" data-original-title="" title="">
																									<div class="fc-content"><span class="fc-time">5a</span> <span class="fc-title">Dinner</span></div>
																								</a></td>
																							<td class="fc-event-container" rowspan="5"><a class="fc-day-grid-event fc-h-event fc-event fc-start fc-end fc-draggable fc-resizable" data-original-title="" title="">
																									<div class="fc-content"> <span class="fc-title">Dinner</span></div>
																									<div class="fc-resizer fc-end-resizer"></div>
																								</a></td>
																							<td rowspan="5"></td>
																							<td class="fc-event-container" rowspan="5"><a class="fc-day-grid-event fc-h-event fc-event fc-start fc-end fc-event-success fc-draggable" data-original-title="" title="">
																									<div class="fc-content"><span class="fc-time">1:30p</span> <span class="fc-title">Reporting</span></div>
																								</a></td>
																						</tr>
																						<tr>
																							<td class="fc-event-container" rowspan="4"><a class="fc-day-grid-event fc-h-event fc-event fc-start fc-end fc-event-danger fc-draggable" data-original-title="" title="">
																									<div class="fc-content"><span class="fc-time">4p</span> <span class="fc-title">Repeating Event</span></div>
																								</a></td>
																							<td class="fc-event-container fc-limited"><a class="fc-day-grid-event fc-h-event fc-event fc-start fc-end fc-draggable" data-original-title="" title="">
																									<div class="fc-content"><span class="fc-time">10:30a</span> <span class="fc-title">Meeting</span></div>
																								</a></td>
																							<td class="fc-more-cell" rowspan="1">
																								<div><a class="fc-more">+4 more</a></div>
																							</td>
																							<td class="fc-event-container" rowspan="4"><a class="fc-day-grid-event fc-h-event fc-event fc-start fc-end fc-event-primary fc-draggable" data-original-title="" title="">
																									<div class="fc-content"><span class="fc-time">7a</span> <span class="fc-title">Birthday Party</span></div>
																								</a></td>
																						</tr>
																						<tr class="fc-limited">
																							<td class="fc-event-container"><a class="fc-day-grid-event fc-h-event fc-event fc-start fc-end fc-event-info fc-draggable" data-original-title="" title="">
																									<div class="fc-content"><span class="fc-time">12p</span> <span class="fc-title">Lunch</span></div>
																								</a></td>
																						</tr>
																						<tr class="fc-limited">
																							<td class="fc-event-container"><a class="fc-day-grid-event fc-h-event fc-event fc-start fc-end fc-event-warning fc-draggable" data-original-title="" title="">
																									<div class="fc-content"><span class="fc-time">2:30p</span> <span class="fc-title">Meeting</span></div>
																								</a></td>
																						</tr>
																						<tr class="fc-limited">
																							<td class="fc-event-container"><a class="fc-day-grid-event fc-h-event fc-event fc-start fc-end fc-event-info fc-draggable" data-original-title="" title="">
																									<div class="fc-content"><span class="fc-time">5:30p</span> <span class="fc-title">Happy Hour</span></div>
																								</a></td>
																						</tr>
																					</tbody>
																				</table>
																			</div>
																		</div>
																		<div class="fc-row fc-week fc-widget-content fc-rigid" style="height: 123px;">
																			<div class="fc-bg">
																				<table class="">
																					<tbody>
																						<tr>
																							<td class="fc-day fc-widget-content fc-sun fc-future" data-date="2019-09-15"></td>
																							<td class="fc-day fc-widget-content fc-mon fc-future" data-date="2019-09-16"></td>
																							<td class="fc-day fc-widget-content fc-tue fc-future" data-date="2019-09-17"></td>
																							<td class="fc-day fc-widget-content fc-wed fc-future" data-date="2019-09-18"></td>
																							<td class="fc-day fc-widget-content fc-thu fc-future" data-date="2019-09-19"></td>
																							<td class="fc-day fc-widget-content fc-fri fc-future" data-date="2019-09-20"></td>
																							<td class="fc-day fc-widget-content fc-sat fc-future" data-date="2019-09-21"></td>
																						</tr>
																					</tbody>
																				</table>
																			</div>
																			<div class="fc-content-skeleton">
																				<table>
																					<thead>
																						<tr>
																							<td class="fc-day-top fc-sun fc-future" data-date="2019-09-15"><a class="fc-day-number" data-goto="{&quot;date&quot;:&quot;2019-09-15&quot;,&quot;type&quot;:&quot;day&quot;}">15</a></td>
																							<td class="fc-day-top fc-mon fc-future" data-date="2019-09-16"><a class="fc-day-number" data-goto="{&quot;date&quot;:&quot;2019-09-16&quot;,&quot;type&quot;:&quot;day&quot;}">16</a></td>
																							<td class="fc-day-top fc-tue fc-future" data-date="2019-09-17"><a class="fc-day-number" data-goto="{&quot;date&quot;:&quot;2019-09-17&quot;,&quot;type&quot;:&quot;day&quot;}">17</a></td>
																							<td class="fc-day-top fc-wed fc-future" data-date="2019-09-18"><a class="fc-day-number" data-goto="{&quot;date&quot;:&quot;2019-09-18&quot;,&quot;type&quot;:&quot;day&quot;}">18</a></td>
																							<td class="fc-day-top fc-thu fc-future" data-date="2019-09-19"><a class="fc-day-number" data-goto="{&quot;date&quot;:&quot;2019-09-19&quot;,&quot;type&quot;:&quot;day&quot;}">19</a></td>
																							<td class="fc-day-top fc-fri fc-future" data-date="2019-09-20"><a class="fc-day-number" data-goto="{&quot;date&quot;:&quot;2019-09-20&quot;,&quot;type&quot;:&quot;day&quot;}">20</a></td>
																							<td class="fc-day-top fc-sat fc-future" data-date="2019-09-21"><a class="fc-day-number" data-goto="{&quot;date&quot;:&quot;2019-09-21&quot;,&quot;type&quot;:&quot;day&quot;}">21</a></td>
																						</tr>
																					</thead>
																					<tbody>
																						<tr>
																							<td></td>
																							<td class="fc-event-container"><a class="fc-day-grid-event fc-h-event fc-event fc-start fc-end fc-draggable" data-original-title="" title="">
																									<div class="fc-content"><span class="fc-time">4p</span> <span class="fc-title">Repeating Event</span></div>
																								</a></td>
																							<td></td>
																							<td></td>
																							<td></td>
																							<td></td>
																							<td></td>
																						</tr>
																					</tbody>
																				</table>
																			</div>
																		</div>
																		<div class="fc-row fc-week fc-widget-content fc-rigid" style="height: 123px;">
																			<div class="fc-bg">
																				<table class="">
																					<tbody>
																						<tr>
																							<td class="fc-day fc-widget-content fc-sun fc-future" data-date="2019-09-22"></td>
																							<td class="fc-day fc-widget-content fc-mon fc-future" data-date="2019-09-23"></td>
																							<td class="fc-day fc-widget-content fc-tue fc-future" data-date="2019-09-24"></td>
																							<td class="fc-day fc-widget-content fc-wed fc-future" data-date="2019-09-25"></td>
																							<td class="fc-day fc-widget-content fc-thu fc-future" data-date="2019-09-26"></td>
																							<td class="fc-day fc-widget-content fc-fri fc-future" data-date="2019-09-27"></td>
																							<td class="fc-day fc-widget-content fc-sat fc-future" data-date="2019-09-28"></td>
																						</tr>
																					</tbody>
																				</table>
																			</div>
																			<div class="fc-content-skeleton">
																				<table>
																					<thead>
																						<tr>
																							<td class="fc-day-top fc-sun fc-future" data-date="2019-09-22"><a class="fc-day-number" data-goto="{&quot;date&quot;:&quot;2019-09-22&quot;,&quot;type&quot;:&quot;day&quot;}">22</a></td>
																							<td class="fc-day-top fc-mon fc-future" data-date="2019-09-23"><a class="fc-day-number" data-goto="{&quot;date&quot;:&quot;2019-09-23&quot;,&quot;type&quot;:&quot;day&quot;}">23</a></td>
																							<td class="fc-day-top fc-tue fc-future" data-date="2019-09-24"><a class="fc-day-number" data-goto="{&quot;date&quot;:&quot;2019-09-24&quot;,&quot;type&quot;:&quot;day&quot;}">24</a></td>
																							<td class="fc-day-top fc-wed fc-future" data-date="2019-09-25"><a class="fc-day-number" data-goto="{&quot;date&quot;:&quot;2019-09-25&quot;,&quot;type&quot;:&quot;day&quot;}">25</a></td>
																							<td class="fc-day-top fc-thu fc-future" data-date="2019-09-26"><a class="fc-day-number" data-goto="{&quot;date&quot;:&quot;2019-09-26&quot;,&quot;type&quot;:&quot;day&quot;}">26</a></td>
																							<td class="fc-day-top fc-fri fc-future" data-date="2019-09-27"><a class="fc-day-number" data-goto="{&quot;date&quot;:&quot;2019-09-27&quot;,&quot;type&quot;:&quot;day&quot;}">27</a></td>
																							<td class="fc-day-top fc-sat fc-future" data-date="2019-09-28"><a class="fc-day-number" data-goto="{&quot;date&quot;:&quot;2019-09-28&quot;,&quot;type&quot;:&quot;day&quot;}">28</a></td>
																						</tr>
																					</thead>
																					<tbody>
																						<tr>
																							<td></td>
																							<td></td>
																							<td></td>
																							<td></td>
																							<td></td>
																							<td></td>
																							<td class="fc-event-container"><a class="fc-day-grid-event fc-h-event fc-event fc-start fc-end fc-event-solid-info fc-event-light fc-draggable fc-resizable" href="http://google.com/" data-original-title="" title="">
																									<div class="fc-content"> <span class="fc-title">Click for Google</span></div>
																									<div class="fc-resizer fc-end-resizer"></div>
																								</a></td>
																						</tr>
																					</tbody>
																				</table>
																			</div>
																		</div>
																		<div class="fc-row fc-week fc-widget-content fc-rigid" style="height: 123px;">
																			<div class="fc-bg">
																				<table class="">
																					<tbody>
																						<tr>
																							<td class="fc-day fc-widget-content fc-sun fc-future" data-date="2019-09-29"></td>
																							<td class="fc-day fc-widget-content fc-mon fc-future" data-date="2019-09-30"></td>
																							<td class="fc-day fc-widget-content fc-tue fc-other-month fc-future" data-date="2019-10-01"></td>
																							<td class="fc-day fc-widget-content fc-wed fc-other-month fc-future" data-date="2019-10-02"></td>
																							<td class="fc-day fc-widget-content fc-thu fc-other-month fc-future" data-date="2019-10-03"></td>
																							<td class="fc-day fc-widget-content fc-fri fc-other-month fc-future" data-date="2019-10-04"></td>
																							<td class="fc-day fc-widget-content fc-sat fc-other-month fc-future" data-date="2019-10-05"></td>
																						</tr>
																					</tbody>
																				</table>
																			</div>
																			<div class="fc-content-skeleton">
																				<table>
																					<thead>
																						<tr>
																							<td class="fc-day-top fc-sun fc-future" data-date="2019-09-29"><a class="fc-day-number" data-goto="{&quot;date&quot;:&quot;2019-09-29&quot;,&quot;type&quot;:&quot;day&quot;}">29</a></td>
																							<td class="fc-day-top fc-mon fc-future" data-date="2019-09-30"><a class="fc-day-number" data-goto="{&quot;date&quot;:&quot;2019-09-30&quot;,&quot;type&quot;:&quot;day&quot;}">30</a></td>
																							<td class="fc-day-top fc-tue fc-other-month fc-future" data-date="2019-10-01"><a class="fc-day-number" data-goto="{&quot;date&quot;:&quot;2019-10-01&quot;,&quot;type&quot;:&quot;day&quot;}">1</a></td>
																							<td class="fc-day-top fc-wed fc-other-month fc-future" data-date="2019-10-02"><a class="fc-day-number" data-goto="{&quot;date&quot;:&quot;2019-10-02&quot;,&quot;type&quot;:&quot;day&quot;}">2</a></td>
																							<td class="fc-day-top fc-thu fc-other-month fc-future" data-date="2019-10-03"><a class="fc-day-number" data-goto="{&quot;date&quot;:&quot;2019-10-03&quot;,&quot;type&quot;:&quot;day&quot;}">3</a></td>
																							<td class="fc-day-top fc-fri fc-other-month fc-future" data-date="2019-10-04"><a class="fc-day-number" data-goto="{&quot;date&quot;:&quot;2019-10-04&quot;,&quot;type&quot;:&quot;day&quot;}">4</a></td>
																							<td class="fc-day-top fc-sat fc-other-month fc-future" data-date="2019-10-05"><a class="fc-day-number" data-goto="{&quot;date&quot;:&quot;2019-10-05&quot;,&quot;type&quot;:&quot;day&quot;}">5</a></td>
																						</tr>
																					</thead>
																					<tbody>
																						<tr>
																							<td></td>
																							<td></td>
																							<td></td>
																							<td></td>
																							<td></td>
																							<td></td>
																							<td></td>
																						</tr>
																					</tbody>
																				</table>
																			</div>
																		</div>
																		<div class="fc-row fc-week fc-widget-content fc-rigid" style="height: 125px;">
																			<div class="fc-bg">
																				<table class="">
																					<tbody>
																						<tr>
																							<td class="fc-day fc-widget-content fc-sun fc-other-month fc-future" data-date="2019-10-06"></td>
																							<td class="fc-day fc-widget-content fc-mon fc-other-month fc-future" data-date="2019-10-07"></td>
																							<td class="fc-day fc-widget-content fc-tue fc-other-month fc-future" data-date="2019-10-08"></td>
																							<td class="fc-day fc-widget-content fc-wed fc-other-month fc-future" data-date="2019-10-09"></td>
																							<td class="fc-day fc-widget-content fc-thu fc-other-month fc-future" data-date="2019-10-10"></td>
																							<td class="fc-day fc-widget-content fc-fri fc-other-month fc-future" data-date="2019-10-11"></td>
																							<td class="fc-day fc-widget-content fc-sat fc-other-month fc-future" data-date="2019-10-12"></td>
																						</tr>
																					</tbody>
																				</table>
																			</div>
																			<div class="fc-content-skeleton">
																				<table>
																					<thead>
																						<tr>
																							<td class="fc-day-top fc-sun fc-other-month fc-future" data-date="2019-10-06"><a class="fc-day-number" data-goto="{&quot;date&quot;:&quot;2019-10-06&quot;,&quot;type&quot;:&quot;day&quot;}">6</a></td>
																							<td class="fc-day-top fc-mon fc-other-month fc-future" data-date="2019-10-07"><a class="fc-day-number" data-goto="{&quot;date&quot;:&quot;2019-10-07&quot;,&quot;type&quot;:&quot;day&quot;}">7</a></td>
																							<td class="fc-day-top fc-tue fc-other-month fc-future" data-date="2019-10-08"><a class="fc-day-number" data-goto="{&quot;date&quot;:&quot;2019-10-08&quot;,&quot;type&quot;:&quot;day&quot;}">8</a></td>
																							<td class="fc-day-top fc-wed fc-other-month fc-future" data-date="2019-10-09"><a class="fc-day-number" data-goto="{&quot;date&quot;:&quot;2019-10-09&quot;,&quot;type&quot;:&quot;day&quot;}">9</a></td>
																							<td class="fc-day-top fc-thu fc-other-month fc-future" data-date="2019-10-10"><a class="fc-day-number" data-goto="{&quot;date&quot;:&quot;2019-10-10&quot;,&quot;type&quot;:&quot;day&quot;}">10</a></td>
																							<td class="fc-day-top fc-fri fc-other-month fc-future" data-date="2019-10-11"><a class="fc-day-number" data-goto="{&quot;date&quot;:&quot;2019-10-11&quot;,&quot;type&quot;:&quot;day&quot;}">11</a></td>
																							<td class="fc-day-top fc-sat fc-other-month fc-future" data-date="2019-10-12"><a class="fc-day-number" data-goto="{&quot;date&quot;:&quot;2019-10-12&quot;,&quot;type&quot;:&quot;day&quot;}">12</a></td>
																						</tr>
																					</thead>
																					<tbody>
																						<tr>
																							<td></td>
																							<td></td>
																							<td></td>
																							<td></td>
																							<td></td>
																							<td></td>
																							<td></td>
																						</tr>
																					</tbody>
																				</table>
																			</div>
																		</div>
																	</div>
																</div>
															</td>
														</tr>
													</tbody>
												</table>
											</div>
										</div>
									</div>
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