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

								FAQ 1 </h3>

							<div class="subheader__breadcrumbs">
								<a href="#" class="subheader__breadcrumbs-home"><i class="flaticon2-shelter"></i></a>
								<span class="subheader__breadcrumbs-separator"></span>
								<a href="" class="subheader__breadcrumbs-link">
									Pages </a>
								<span class="subheader__breadcrumbs-separator"></span>
								<a href="" class="subheader__breadcrumbs-link">
									FAQ 1 </a>
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
					<!--begin::Portlet-->
					<div class="portlet faq-v1">
						<div class="portlet__head">
							<div class="portlet__head-label">
								<h3 class="portlet__head-title">
									FAQ Example
								</h3>
							</div>
						</div>
						<div class="portlet__body">
							<div class="row">
								<div class="col-xl-3">
									<ul class="nav nav--block" id="nav" role="tablist">
										<li class="nav__item  nav__item--active">
											<a class="nav__link" role="tab" id="nav_link_1" data-toggle="collapse" href="#nav_sub_1" aria-expanded="false">
												<span class="nav__link-text">eCommerce Orders</span>
												<span class="nav__link-arrow"></span>
											</a>
											<ul class="nav__sub show" id="nav_sub_1" role="tabpanel" aria-labelledby="m_nav_link_1" data-parent="#nav" style="">
												<li class="nav__item">
													<a href="#" class="nav__link">
														<span class="nav__link-bullet nav__link-bullet--line"><span></span></span>
														<span class="nav__link-text">New</span>
													</a>
												</li>
												<li class="nav__item">
													<a href="#" class="nav__link">
														<span class="nav__link-bullet nav__link-bullet--line"><span></span></span>
														<span class="nav__link-text">Pending</span>
													</a>
												</li>
												<li class="nav__item">
													<a href="#" class="nav__link">
														<span class="nav__link-bullet nav__link-bullet--line"><span></span></span>
														<span class="nav__link-text">Replied</span>
													</a>
												</li>
											</ul>
										</li>
										<li class="nav__item">
											<a href="#" class="nav__link">
												<span class="nav__link-text">User Account</span>
											</a>
										</li>
										<li class="nav__item">
											<a href="#" class="nav__link">
												<span class="nav__link-text">Delivery &amp; Shipping</span>
											</a>
										</li>
										<li class="nav__item">
											<a href="#" class="nav__link">
												<span class="nav__link-text">Customer Support</span>
											</a>
										</li>
										<li class="nav__item">
											<a href="#" class="nav__link">
												<span class="nav__link-text">Payment Methods</span>
											</a>
										</li>
										<li class="nav__item">
											<a href="#" class="nav__link">
												<span class="nav__link-text">Delivery Rules</span>
											</a>
										</li>
										<li class="nav__item">
											<a href="#" class="nav__link">
												<span class="nav__link-text">Refund Policy</span>
											</a>
										</li>
									</ul>
								</div>
								<div class="col-xl-9">
									<div class="accordion accordion-solid accordion-toggle-plus" id="accordionExample1">
										<div class="card">
											<div class="card-header" id="headingOne">
												<div class="card-title" data-toggle="collapse" data-target="#collapseOne1" aria-expanded="false" aria-controls="collapseOne1">
													Updates and bug fixes are included in the cost of ALL items.
												</div>
											</div>
											<div id="collapseOne1" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample1" style="">
												<div class="card-body">
													<p>
														Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of
													</p>
													<p>
														Type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into
													</p>
													<p>
														Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into
													</p>
													<p>
														Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into
													</p>
												</div>
											</div>
										</div>
										<div class="card">
											<div class="card-header" id="headingTwo">
												<div class="card-title collapsed" data-toggle="collapse" data-target="#collapseTwo1" aria-expanded="false" aria-controls="collapseTwo1">
													Impact on buyers who bought before the new item support policy.
												</div>
											</div>
											<div id="collapseTwo1" class="collapse" aria-labelledby="headingTwo1" data-parent="#accordionExample1">
												<div class="card-body">
													<p>
														Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of
													</p>
													<p>
														Type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into
													</p>
													<p>
														Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into
													</p>
													<p>
														Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into
													</p>
												</div>
											</div>
										</div>
										<div class="card">
											<div class="card-header" id="headingThree1">
												<div class="card-title collapsed" data-toggle="collapse" data-target="#collapseThree1" aria-expanded="false" aria-controls="collapseThree1">
													Extending and Renewing Item Support.
												</div>
											</div>
											<div id="collapseThree1" class="collapse" aria-labelledby="headingThree1" data-parent="#accordionExample1">
												<div class="card-body">
													<p>
														Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of
													</p>
													<p>
														Type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into
													</p>
													<p>
														Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into
													</p>
													<p>
														Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into
													</p>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<!--end::Portlet-->
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