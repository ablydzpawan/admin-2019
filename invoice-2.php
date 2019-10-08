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

								Invoice 2 </h3>

							<div class="subheader__breadcrumbs">
								<a href="#" class="subheader__breadcrumbs-home"><i class="flaticon2-shelter"></i></a>
								<span class="subheader__breadcrumbs-separator"></span>
								<a href="" class="subheader__breadcrumbs-link">
									Pages </a>
								<span class="subheader__breadcrumbs-separator"></span>
								<a href="" class="subheader__breadcrumbs-link">
									Invoice 2 </a>
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
					<div class="portlet">
						<div class="portlet__body portlet__body--fit">
							<div class="invoice-2">
								<div class="invoice__head">
									<div class="invoice__container">
										<div class="invoice__brand">
											<h1 class="invoice__title">INVOICE</h1>

											<div href="#" class="invoice__logo">
												<a href="#"><img src="media/company-logos/logo_client_color.png"></a>

												<span class="invoice__desc">
													<span>Cecilia Chapman, 711-2880 Nulla St, Mankato</span>
													<span>Mississippi 96522</span>
												</span>
											</div>
										</div>

										<div class="invoice__items">
											<div class="invoice__item">
												<span class="invoice__subtitle">DATA</span>
												<span class="invoice__text">Dec 12, 2017</span>
											</div>
											<div class="invoice__item">
												<span class="invoice__subtitle">INVOICE NO.</span>
												<span class="invoice__text">GS 000014</span>
											</div>
											<div class="invoice__item">
												<span class="invoice__subtitle">INVOICE TO.</span>
												<span class="invoice__text">Iris Watson, P.O. Box 283 8562 Fusce RD.<br>Fredrick Nebraska 20620</span>
											</div>
										</div>
									</div>
								</div>
								<div class="invoice__body">
									<div class="invoice__container">
										<div class="table-responsive">
											<table class="table">
												<thead>
													<tr>
														<th>DESCRIPTION</th>
														<th>HOURS</th>
														<th>RATE</th>
														<th>AMOUNT</th>
													</tr>
												</thead>
												<tbody>
													<tr>
														<td>Creative Design</td>
														<td>80</td>
														<td>$40.00</td>
														<td class="font-danger font-lg">$3200.00</td>
													</tr>
													<tr>
														<td>Front-End Development</td>
														<td>120</td>
														<td>$40.00</td>
														<td class="font-danger font-lg">$4800.00</td>
													</tr>
													<tr>
														<td>Back-End Development</td>
														<td>210</td>
														<td>$60.00</td>
														<td class="font-danger font-lg">$12600.00</td>
													</tr>
												</tbody>
											</table>
										</div>
									</div>
								</div>

								<div class="invoice__footer">
									<div class="invoice__container">
										<div class="table-responsive">
											<table class="table">
												<thead>
													<tr>
														<th>BANK</th>
														<th>ACC.NO.</th>
														<th>DUE DATE</th>
														<th>TOTAL AMOUNT</th>
													</tr>
												</thead>
												<tbody>
													<tr>
														<td>BARCLAYS UK</td>
														<td>12345678909</td>
														<td>Jan 07, 2018</td>
														<td class="font-danger font-xl font-boldest">20,600.00</td>
													</tr>
												</tbody>
											</table>
										</div>
									</div>
								</div>

								<div class="invoice__actions">
									<div class="invoice__container">
										<button type="button" class="btn btn-label-brand btn-bold" onclick="window.print();">Download Invoice</button>
										<button type="button" class="btn btn-brand btn-bold" onclick="window.print();">Print Invoice</button>
									</div>
								</div>
							</div>
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