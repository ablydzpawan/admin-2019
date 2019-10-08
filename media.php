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
				<div class="subheader grid__item" id="subheader">
					<div class="container ">
						<div class="subheader__main">
							<h3 class="subheader__title">

								Media </h3>

							<div class="subheader__breadcrumbs">
								<a href="#" class="subheader__breadcrumbs-home"><i class="flaticon2-shelter"></i></a>
								<span class="subheader__breadcrumbs-separator"></span>
								<a href="" class="subheader__breadcrumbs-link">
									Components </a>
								<span class="subheader__breadcrumbs-separator"></span>
								<a href="" class="subheader__breadcrumbs-link">
									Custom </a>
								<span class="subheader__breadcrumbs-separator"></span>
								<a href="" class="subheader__breadcrumbs-link">
									Media </a>
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
						<div class="col-xl-6">
							<!--begin::Portlet-->
							<div class="portlet">
								<div class="portlet__head">
									<div class="portlet__head-label">
										<h3 class="portlet__head-title">
											Basic Examples
										</h3>
									</div>
								</div>
								<div class="portlet__body">
									<div class="section">
										<div class="section__desc">Image examples</div>
										<div class="section__content">
											<a href="#" class="media">
												<img src="media/users/100_1.jpg" alt="image">
											</a>
											<a href="#" class="media">
												<img src="media/users/100_2.jpg" alt="image">
											</a>
											<a href="#" class="media">
												<img src="media/users/100_3.jpg" alt="image">
											</a>
											<a href="#" class="media">
												<img src="media/users/100_4.jpg" alt="image">
											</a>
											<a href="#" class="media">
												<img src="media/users/100_5.jpg" alt="image">
											</a>
											<a href="#" class="media">
												<img src="media/users/100_6.jpg" alt="image">
											</a>
										</div>
									</div>

									<div class="separator separator--space-lg separator--border-dashed"></div>

									<div class="section">
										<div class="section__desc">Placeholder examples</div>
										<div class="section__content">
											<a href="#" class="media media--success">
												<span>AL</span>
											</a>
											<a href="#" class="media media--danger">
												<span>PO</span>
											</a>
											<a href="#" class="media media--warning">
												<span>KT</span>
											</a>
											<a href="#" class="media media--info">
												<span>FG</span>
											</a>
											<a href="#" class="media media--dark">
												<span>FG</span>
											</a>
											<a href="#" class="media media--brand">
												<span>ER</span>
											</a>
										</div>
									</div>
								</div>
							</div>
							<!--end::Portlet-->

							<!--begin::Portlet-->
							<div class="portlet">
								<div class="portlet__head">
									<div class="portlet__head-label">
										<h3 class="portlet__head-title">
											Sizing Options
										</h3>
									</div>
								</div>
								<div class="portlet__body">
									<div class="section">
										<div class="section__desc">Image examples</div>
										<div class="section__content">
											<a href="#" class="media media--xs media--circle">
												<img src="media/users/100_1.jpg" alt="image">
											</a>
											<a href="#" class="media media--sm media--circle">
												<img src="media/users/100_1.jpg" alt="image">
											</a>
											<a href="#" class="media media--circle">
												<img src="media/users/100_2.jpg" alt="image">
											</a>
											<a href="#" class="media media--lg media--circle">
												<img src="media/users/100_3.jpg" alt="image">
											</a>
											<a href="#" class="media media--xl media--circle">
												<img src="media/users/100_4.jpg" alt="image">
											</a>
										</div>
									</div>

									<div class="separator separator--space-lg separator--border-dashed"></div>

									<div class="section">
										<div class="section__desc">Placeholder examples</div>
										<div class="section__content">
											<a href="#" class="media media--xs media--circle media--success">
												<span>AL</span>
											</a>
											<a href="#" class="media media--sm media--circle media--success">
												<span>AL</span>
											</a>
											<a href="#" class="media media--circle media--danger">
												<span>PO</span>
											</a>
											<a href="#" class="media media--lg media--circle media--warning">
												<span>KT</span>
											</a>
											<a href="#" class="media media--xl media--circle media--info">
												<span>FG</span>
											</a>
										</div>
									</div>
								</div>
							</div>
							<!--end::Portlet-->

						</div>
						<div class="col-xl-6">
							<!--begin::Portlet-->
							<div class="portlet">
								<div class="portlet__head">
									<div class="portlet__head-label">
										<h3 class="portlet__head-title">
											Circle Style
										</h3>
									</div>
								</div>
								<div class="portlet__body">
									<div class="section">
										<div class="section__desc">Image examples</div>
										<div class="section__content">
											<a href="#" class="media media--circle">
												<img src="media/users/100_1.jpg" alt="image">
											</a>
											<a href="#" class="media media--circle">
												<img src="media/users/100_2.jpg" alt="image">
											</a>
											<a href="#" class="media media--circle">
												<img src="media/users/100_3.jpg" alt="image">
											</a>
											<a href="#" class="media media--circle">
												<img src="media/users/100_4.jpg" alt="image">
											</a>
											<a href="#" class="media media--circle">
												<img src="media/users/100_5.jpg" alt="image">
											</a>
											<a href="#" class="media media--circle">
												<img src="media/users/100_6.jpg" alt="image">
											</a>
										</div>
									</div>

									<div class="separator separator--space-lg separator--border-dashed"></div>

									<div class="section">
										<div class="section__desc">Placeholder examples</div>
										<div class="section__content">
											<a href="#" class="media  media--circle media--success">
												<span>AL</span>
											</a>
											<a href="#" class="media media--circle media--danger">
												<span>PO</span>
											</a>
											<a href="#" class="media media--circle media--warning">
												<span>KT</span>
											</a>
											<a href="#" class="media media--circle media--info">
												<span>FG</span>
											</a>
											<a href="#" class="media media--circle media--dark">
												<span>FG</span>
											</a>
											<a href="#" class="media media--circle media--brand">
												<span>ER</span>
											</a>
										</div>
									</div>
								</div>
							</div>
							<!--end::Portlet-->

							<!--begin::Portlet-->
							<div class="portlet">
								<div class="portlet__head">
									<div class="portlet__head-label">
										<h3 class="portlet__head-title">
											Media Group
										</h3>
									</div>
								</div>
								<div class="portlet__body">
									<div class="section">
										<div class="section__desc">Image examples</div>
										<div class="section__content">
											<div class="d-flex align-items-center">
												<div class="media-group">
													<a href="#" class="media media--sm media--circle" data-toggle="tooltip" data-skin="brand" data-placement="top" title="" data-original-title="John Myer">
														<img src="media/users/100_1.jpg" alt="image">
													</a>
													<a href="#" class="media media--sm media--circle" data-toggle="tooltip" data-skin="brand" data-placement="top" title="" data-original-title="John Myer">
														<img src="media/users/100_2.jpg" alt="image">
													</a>
													<a href="#" class="media media--sm media--circle" data-toggle="tooltip" data-skin="brand" data-placement="top" title="" data-original-title="John Myer">
														<img src="media/users/100_3.jpg" alt="image">
													</a>
													<a href="#" class="media media--sm media--circle" data-toggle="tooltip" data-skin="brand" data-placement="top" title="" data-original-title="John Myer">
														<img src="media/users/100_4.jpg" alt="image">
													</a>
													<a href="#" class="media media--sm media--circle" data-toggle="tooltip" data-skin="brand" data-placement="top" title="" data-original-title="John Myer">
														<img src="media/users/100_5.jpg" alt="image">
													</a>
													<a href="#" class="media media--sm media--circle" data-toggle="tooltip" data-skin="brand" data-placement="top" title="" data-original-title="John Myer">
														<img src="media/users/100_6.jpg" alt="image">
													</a>
													<a href="#" class="media media--sm media--circle" data-toggle="tooltip" data-skin="brand" data-placement="top" title="" data-original-title="John Myer">
														<span>6+</span>
													</a>
												</div>
												<div class="media-group margin-l-30">
													<a href="#" class="media media--circle">
														<img src="media/users/100_1.jpg" alt="image">
													</a>
													<a href="#" class="media  media--circle">
														<img src="media/users/100_2.jpg" alt="image">
													</a>
													<a href="#" class="media media--circle">
														<img src="media/users/100_3.jpg" alt="image">
													</a>
													<a href="#" class="media  media--circle">
														<img src="media/users/100_4.jpg" alt="image">
													</a>
													<a href="#" class="media media--circle">
														<img src="media/users/100_5.jpg" alt="image">
													</a>
													<a href="#" class="media  media--circle">
														<img src="media/users/100_6.jpg" alt="image">
													</a>
													<a href="#" class="media media--circle" data-toggle="tooltip" data-skin="brand" data-placement="top" title="" data-original-title="John Myer">
														<span>16+</span>
													</a>
												</div>
											</div>
										</div>
									</div>

									<div class="separator separator--space-lg separator--border-dashed"></div>

									<div class="section">
										<div class="section__desc">Placeholder examples</div>
										<div class="section__content">
											<div class="d-flex align-items-center">
												<div class="media-group">
													<a href="#" class="media media--sm media--circle media--success">
														<span>AL</span>
													</a>
													<a href="#" class="media media--sm media--circle media--danger">
														<span>PO</span>
													</a>
													<a href="#" class="media media--sm media--circle media--warning">
														<span>KT</span>
													</a>
													<a href="#" class="media media--sm media--circle media--info">
														<span>FG</span>
													</a>
													<a href="#" class="media media--sm media--circle media--dark">
														<span>FG</span>
													</a>
													<a href="#" class="media media--sm media--circle media--brand">
														<span>ER</span>
													</a>
												</div>
												<div class="media-group  margin-l-30">
													<a href="#" class="media  media--circle media--success">
														<span>AL</span>
													</a>
													<a href="#" class="media media--circle media--danger">
														<span>PO</span>
													</a>
													<a href="#" class="media media--circle media--warning">
														<span>KT</span>
													</a>
													<a href="#" class="media media--circle media--info">
														<span>FG</span>
													</a>
													<a href="#" class="media media--circle media--dark">
														<span>FG</span>
													</a>
													<a href="#" class="media media--circle media--brand">
														<span>ER</span>
													</a>
												</div>
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