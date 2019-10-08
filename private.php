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
				<div class="subheader   grid__item" id="subheader" style="" hidden-height="120">
					<div class="container ">
						<div class="subheader__main">
							<h3 class="subheader__title">Private </h3>
							<div class="subheader__breadcrumbs">
								<a href="#" class="subheader__breadcrumbs-home"><i class="flaticon2-shelter"></i></a>
								<span class="subheader__breadcrumbs-separator"></span>
								<a href="" class="subheader__breadcrumbs-link">
									Apps </a>
								<span class="subheader__breadcrumbs-separator"></span>
								<a href="" class="subheader__breadcrumbs-link">
									Chat </a>
								<span class="subheader__breadcrumbs-separator"></span>
								<a href="" class="subheader__breadcrumbs-link">
									Private </a>
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
				<div class="container">
					<!--Begin::App-->
					<div class="row chat">


						<!--Begin:: App Aside-->
						<div class="col-lg-4 chat__aside" id="chat_aside" data-close-on-click-outside="chat_aside">
							<!--begin::Portlet-->
							<div class="portlet portlet--last">
								<div class="portlet__body">
									<!--Begin:: App Aside Mobile Toggle-->
									<button class="btn btn-outline-brand btn-elevate btn-icon btn-sm app__aside-close d-flex d-lg-none mb-3" id="chat_aside_close" data-target-close="chat_aside">
										<i class="la la-remove"></i>
									</button>
									<!--End:: App Aside Mobile Toggle-->
									<div class="searchbar">
										<div class="input-group">
											<div class="input-group-prepend"><span class="input-group-text" id="basic-addon1"><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1" class="svg-icon">
														<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
															<rect x="0" y="0" width="24" height="24"></rect>
															<path d="M14.2928932,16.7071068 C13.9023689,16.3165825 13.9023689,15.6834175 14.2928932,15.2928932 C14.6834175,14.9023689 15.3165825,14.9023689 15.7071068,15.2928932 L19.7071068,19.2928932 C20.0976311,19.6834175 20.0976311,20.3165825 19.7071068,20.7071068 C19.3165825,21.0976311 18.6834175,21.0976311 18.2928932,20.7071068 L14.2928932,16.7071068 Z" fill="#000000" fill-rule="nonzero" opacity="0.3"></path>
															<path d="M11,16 C13.7614237,16 16,13.7614237 16,11 C16,8.23857625 13.7614237,6 11,6 C8.23857625,6 6,8.23857625 6,11 C6,13.7614237 8.23857625,16 11,16 Z M11,18 C7.13400675,18 4,14.8659932 4,11 C4,7.13400675 7.13400675,4 11,4 C14.8659932,4 18,7.13400675 18,11 C18,14.8659932 14.8659932,18 11,18 Z" fill="#000000" fill-rule="nonzero"></path>
														</g>
													</svg></span></div>
											<input type="text" class="form-control" placeholder="Search" aria-describedby="basic-addon1">
										</div>
									</div>
									<div class="widget widget--users mt-20 scroll" data-simplebar>
										<div class="widget__items">
											<div class="widget__item">
												<span class="media media--circle">
													<img src="media/users/300_9.jpg" alt="image">
												</span>
												<div class="widget__info">
													<div class="widget__section">
														<a href="#" class="widget__username">Matt Pears</a>
														<span class="badge badge--success badge--dot"></span>
													</div>

													<span class="widget__desc">
														Head of Development
													</span>
												</div>
												<div class="widget__action">
													<span class="widget__date">36 Mines</span>
													<span class="badge badge--success font-bold">7</span>
												</div>
											</div>

											<div class="widget__item">
												<span class="media media--circle">
													<img src="media/users/100_7.jpg" alt="image">
												</span>

												<div class="widget__info">
													<div class="widget__section">
														<a href="#" class="widget__username">Charlie Stone</a>
														<span class="badge badge--success badge--dot"></span>
													</div>

													<span class="widget__desc">
														Art Director
													</span>
												</div>

												<div class="widget__action">
													<span class="widget__date">5 Hours</span>
													<span class="badge badge--success font-bold">2</span>
												</div>
											</div>

											<div class="widget__item">
												<span class="media media--circle">
													<img src="media/users/100_12.jpg" alt="image">
												</span>

												<div class="widget__info">
													<div class="widget__section">
														<a href="#" class="widget__username">Jason Muller</a>
														<span class="badge badge--success badge--dot"></span>
													</div>

													<span class="widget__desc">
														Python Developer
													</span>
												</div>

												<div class="widget__action">
													<span class="widget__date">2 Days</span>
												</div>
											</div>

											<div class="widget__item">
												<span class="media media--circle">
													<img src="media/users/100_4.jpg" alt="image">
												</span>

												<div class="widget__info">
													<div class="widget__section">
														<a href="#" class="widget__username">Teresa Fox</a>
													</div>

													<span class="widget__desc">
														PR Executive
													</span>
												</div>

												<div class="widget__action">
													<span class="widget__date">4 Days</span>
												</div>
											</div>

											<div class="widget__item">
												<span class="media media--circle">
													<img src="media/users/100_8.jpg" alt="image">
												</span>

												<div class="widget__info">
													<div class="widget__section">
														<a href="#" class="widget__username">Giannis Nelson</a>
													</div>

													<span class="widget__desc">
														Lead Cowboy
													</span>
												</div>

												<div class="widget__action">
													<span class="widget__date">1 Week</span>
												</div>
											</div>

											<div class="widget__item">
												<span class="media media--circle">
													<img src="media/users/300_10.jpg" alt="image">
												</span>

												<div class="widget__info">
													<div class="widget__section">
														<a href="#" class="widget__username">Lisa Moss</a>
													</div>

													<span class="widget__desc">
														QA Manager
													</span>
												</div>

												<div class="widget__action">
													<span class="widget__date">3 Week</span>
												</div>
											</div>

											<div class="widget__item">
												<span class="media media--circle">
													<img src="media/users/300_13.jpg" alt="image">
												</span>

												<div class="widget__info">
													<div class="widget__section">
														<a href="#" class="widget__username">Carles Puyol</a>
													</div>

													<span class="widget__desc">
														Defence Officer
													</span>
												</div>

												<div class="widget__action">
													<span class="widget__date">2 Month</span>
												</div>
											</div>

											<div class="widget__item">
												<span class="media media--circle">
													<img src="media/users/300_21.jpg" alt="image">
												</span>

												<div class="widget__info">
													<div class="widget__section">
														<a href="#" class="widget__username">Luka Doncic</a>
													</div>

													<span class="widget__desc">
														Dose whatever he wants
													</span>
												</div>

												<div class="widget__action">
													<span class="widget__date">1 Year</span>
												</div>
											</div>

											<div class="widget__item">
												<span class="media media--circle">
													<img src="media/users/300_9.jpg" alt="image">
												</span>

												<div class="widget__info">
													<div class="widget__section">
														<a href="#" class="widget__username">Matt Pears</a>
														<span class="badge badge--success badge--dot"></span>
													</div>

													<span class="widget__desc">
														Head of Development
													</span>
												</div>

												<div class="widget__action">
													<span class="widget__date">36 Mines</span>
													<span class="badge badge--success font-bold">7</span>
												</div>
											</div>

											<div class="widget__item">
												<span class="media media--circle">
													<img src="media/users/100_7.jpg" alt="image">
												</span>

												<div class="widget__info">
													<div class="widget__section">
														<a href="#" class="widget__username">Charlie Stone</a>
														<span class="badge badge--success badge--dot"></span>
													</div>

													<span class="widget__desc">
														Art Director
													</span>
												</div>

												<div class="widget__action">
													<span class="widget__date">5 Hours</span>
													<span class="badge badge--success font-bold">2</span>
												</div>
											</div>

											<div class="widget__item">
												<span class="media media--circle">
													<img src="media/users/100_12.jpg" alt="image">
												</span>

												<div class="widget__info">
													<div class="widget__section">
														<a href="#" class="widget__username">Jason Muller</a>
														<span class="badge badge--success badge--dot"></span>
													</div>

													<span class="widget__desc">
														Python Developer
													</span>
												</div>

												<div class="widget__action">
													<span class="widget__date">2 Days</span>
												</div>
											</div>

											<div class="widget__item">
												<span class="media media--circle">
													<img src="media/users/100_4.jpg" alt="image">
												</span>

												<div class="widget__info">
													<div class="widget__section">
														<a href="#" class="widget__username">Teresa Fox</a>
													</div>

													<span class="widget__desc">
														PR Executive
													</span>
												</div>

												<div class="widget__action">
													<span class="widget__date">4 Days</span>
												</div>
											</div>

											<div class="widget__item">
												<span class="media media--circle">
													<img src="media/users/100_8.jpg" alt="image">
												</span>

												<div class="widget__info">
													<div class="widget__section">
														<a href="#" class="widget__username">Giannis Nelson</a>
													</div>

													<span class="widget__desc">
														Lead Cowboy
													</span>
												</div>

												<div class="widget__action">
													<span class="widget__date">1 Week</span>
												</div>
											</div>

											<div class="widget__item">
												<span class="media media--circle">
													<img src="media/users/300_10.jpg" alt="image">
												</span>

												<div class="widget__info">
													<div class="widget__section">
														<a href="#" class="widget__username">Lisa Moss</a>
													</div>

													<span class="widget__desc">
														QA Manager
													</span>
												</div>

												<div class="widget__action">
													<span class="widget__date">3 Week</span>
												</div>
											</div>

											<div class="widget__item">
												<span class="media media--circle">
													<img src="media/users/300_13.jpg" alt="image">
												</span>

												<div class="widget__info">
													<div class="widget__section">
														<a href="#" class="widget__username">Carles Puyol</a>
													</div>

													<span class="widget__desc">
														Defence Officer
													</span>
												</div>

												<div class="widget__action">
													<span class="widget__date">2 Month</span>
												</div>
											</div>

											<div class="widget__item">
												<span class="media media--circle">
													<img src="media/users/300_21.jpg" alt="image">
												</span>

												<div class="widget__info">
													<div class="widget__section">
														<a href="#" class="widget__username">Luka Doncic</a>
													</div>

													<span class="widget__desc">
														Dose whatever he wants
													</span>
												</div>

												<div class="widget__action">
													<span class="widget__date">1 Year</span>
												</div>
											</div>
										</div>



									</div>
								</div>
							</div>
							<!--end::Portlet-->
						</div>
						<!--End:: App Aside-->
						<!--Begin:: App Content-->
						<div class="col-lg-12 col-xl-8 chat__content" id="chat_content">
							<div class="portlet portlet--head-lg portlet--last">
								<div class="portlet__head">
									<div class="chat__head ">
										<div class="chat__left">
											<!--begin:: Aside Mobile Toggle -->
											<button type="button" class="btn btn-clean btn-sm btn-icon btn-icon-md hidden-desktop" id="chat_aside_mobile_toggle" data-trigger="chat_aside">
												<i class="flaticon2-open-text-book"></i>
											</button>
											<!--end:: Aside Mobile Toggle-->
											<div class="dropdown dropdown-inline">
												<button type="button" class="btn btn-clean btn-sm btn-icon btn-icon-md" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
													<i class="flaticon-more-1"></i>
												</button>
												<div class="dropdown-menu dropdown-menu-fit dropdown-menu-left dropdown-menu-md" x-placement="bottom-start" style="position: absolute; will-change: transform; top: 0px; left: 0px; transform: translate3d(0px, 33px, 0px);">
													<!--begin::Nav-->
													<ul class="nav nav--block">
														<li class="nav__item">
															<a href="#" class="nav__link">
																<i class="nav__link-icon flaticon2-group"></i>
																<span class="nav__link-text">New Group</span>
															</a>
														</li>
														<li class="nav__item">
															<a href="#" class="nav__link">
																<i class="nav__link-icon flaticon2-open-text-book"></i>
																<span class="nav__link-text">Contacts</span>
															</a>
														</li>
														<li class="nav__item">
															<a href="#" class="nav__link">
																<i class="nav__link-icon flaticon2-rocket-1"></i>
																<span class="nav__link-text">Groups</span>
																<span class="nav__link-badge">
																	<span class="badge badge--brand badge--inline">new</span>
																</span>
															</a>
														</li>
														<li class="nav__item">
															<a href="#" class="nav__link">
																<i class="nav__link-icon flaticon2-bell-2"></i>
																<span class="nav__link-text">Calls</span>
															</a>
														</li>
														<li class="nav__item">
															<a href="#" class="nav__link">
																<i class="nav__link-icon flaticon2-dashboard"></i>
																<span class="nav__link-text">Settings</span>
															</a>
														</li>
														<li class="nav__separator"></li>
														<li class="nav__item">
															<a href="#" class="nav__link">
																<i class="nav__link-icon flaticon2-protected"></i>
																<span class="nav__link-text">Help</span>
															</a>
														</li>
														<li class="nav__item">
															<a href="#" class="nav__link">
																<i class="nav__link-icon flaticon2-bell-2"></i>
																<span class="nav__link-text">Privacy</span>
															</a>
														</li>
													</ul>
													<!--end::Nav-->
												</div>
											</div>
										</div>

										<div class="chat__center">
											<div class="chat__label">
												<a href="#" class="chat__title">Jason Muller</a>
												<span class="chat__status">
													<span class="badge badge--dot badge--success"></span> Active
												</span>
											</div>

											<div class="chat__pic hidden">
												<span class="media media--sm media--circle" data-toggle="tooltip" data-placement="right" title="" data-original-title="Jason Muller">
													<img src="media/users/300_12.jpg" alt="image">
												</span>
												<span class="media media--sm media--circle" data-toggle="tooltip" data-placement="right" title="" data-original-title="Nick Bold">
													<img src="media/users/300_11.jpg" alt="image">
												</span>
												<span class="media media--sm media--circle" data-toggle="tooltip" data-placement="right" title="" data-original-title="Milano Esco">
													<img src="media/users/100_14.jpg" alt="image">
												</span>
												<span class="media media--sm media--circle" data-toggle="tooltip" data-placement="right" title="" data-original-title="Teresa Fox">
													<img src="media/users/100_4.jpg" alt="image">
												</span>
											</div>
										</div>

										<div class="chat__right">
											<div class="dropdown dropdown-inline">
												<button type="button" class="btn btn-clean btn-sm btn-icon btn-icon-md" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
													<i class="flaticon2-add-1"></i>
												</button>
												<div class="dropdown-menu dropdown-menu-fit dropdown-menu-right dropdown-menu-md" x-placement="bottom-end" style="position: absolute; will-change: transform; top: 0px; left: 0px; transform: translate3d(32px, 33px, 0px);">
													<!--begin::Nav-->
													<ul class="nav nav--block">
														<li class="nav__head">
															Messaging
															<i class="flaticon2-information" data-toggle="tooltip" data-placement="right" title="" data-original-title="Click to learn more..."></i>
														</li>
														<li class="nav__separator"></li>
														<li class="nav__item">
															<a href="#" class="nav__link">
																<i class="nav__link-icon flaticon2-group"></i>
																<span class="nav__link-text">New Group</span>
															</a>
														</li>
														<li class="nav__item">
															<a href="#" class="nav__link">
																<i class="nav__link-icon flaticon2-open-text-book"></i>
																<span class="nav__link-text">Contacts</span>
																<span class="nav__link-badge">
																	<span class="badge badge--brand  badge--rounded-">5</span>
																</span>
															</a>
														</li>
														<li class="nav__item">
															<a href="#" class="nav__link">
																<i class="nav__link-icon flaticon2-bell-2"></i>
																<span class="nav__link-text">Calls</span>
															</a>
														</li>
														<li class="nav__item">
															<a href="#" class="nav__link">
																<i class="nav__link-icon flaticon2-dashboard"></i>
																<span class="nav__link-text">Settings</span>
															</a>
														</li>
														<li class="nav__item">
															<a href="#" class="nav__link">
																<i class="nav__link-icon flaticon2-protected"></i>
																<span class="nav__link-text">Help</span>
															</a>
														</li>
														<li class="nav__separator"></li>
														<li class="nav__foot">
															<a class="btn btn-label-brand btn-bold btn-sm" href="#">Upgrade plan</a>
															<a class="btn btn-clean btn-bold btn-sm" href="#" data-toggle="tooltip" data-placement="right" title="" data-original-title="Click to learn more...">Learn more</a>
														</li>
													</ul>
													<!--end::Nav-->
												</div>
											</div>
										</div>
									</div>
								</div>

								<div class="portlet__body">
									<div class="scroll scroll--pull ps ps--active-y" data-mobile-height="300" style="height: 114px; overflow: hidden;">
										<div class="chat__messages">
											<div class="chat__message">
												<div class="chat__user">
													<span class="media media--circle media--sm">
														<img src="media/users/100_12.jpg" alt="image">
													</span>
													<a href="#" class="chat__username">Jason Muller</a>
													<span class="chat__datetime">2 Hours</span>
												</div>
												<div class="chat__text bg-light-success">
													How likely are you to recommend our company <br>to your friends and family?
												</div>
											</div>
											<div class="chat__message chat__message--right">
												<div class="chat__user">
													<span class="chat__datetime">30 Seconds</span>
													<a href="#" class="chat__username">You</a>
													<span class="media media--circle media--sm">
														<img src="media/users/300_21.jpg" alt="image">
													</span>
												</div>
												<div class="chat__text bg-light-brand">
													Hey there, we’re just writing to let you know <br>that you’ve been subscribed to a repository on GitHub.
												</div>
											</div>
											<div class="chat__message">
												<div class="chat__user">
													<span class="media media--circle media--sm">
														<img src="media/users/100_12.jpg" alt="image">
													</span>
													<a href="#" class="chat__username">Jason Muller</a>
													<span class="chat__datetime">30 Seconds</span>
												</div>
												<div class="chat__text bg-light-success">
													Ok, Understood!
												</div>
											</div>
											<div class="chat__message chat__message--right">
												<div class="chat__user">
													<span class="chat__datetime">Just Now</span>
													<a href="#" class="chat__username">You</a>
													<span class="media media--circle media--sm">
														<img src="media/users/300_21.jpg" alt="image">
													</span>
												</div>
												<div class="chat__text bg-light-brand">
													You’ll receive notifications for all issues, pull requests!
												</div>
											</div>
											<div class="chat__message">
												<div class="chat__user">
													<span class="media media--circle media--sm">
														<img src="media/users/100_12.jpg" alt="image">
													</span>
													<a href="#" class="chat__username">Jason Muller</a>
													<span class="chat__datetime">2 Hours</span>
												</div>
												<div class="chat__text bg-light-success">
													You were automatically <b class="font-brand">subscribed</b> <br>because you’ve been given access to the repository
												</div>
											</div>
											<div class="chat__message chat__message--right">
												<div class="chat__user">
													<span class="chat__datetime">30 Seconds</span>
													<a href="#" class="chat__username">You</a>
													<span class="media media--circle media--sm">
														<img src="media/users/300_21.jpg" alt="image">
													</span>
												</div>
												<div class="chat__text bg-light-brand">
													You can unwatch this repository immediately <br>by clicking here: <a href="#" class="font-bold link">https://github.com</a>
												</div>
											</div>
											<div class="chat__message">
												<div class="chat__user">
													<span class="media media--circle media--sm">
														<img src="media/users/100_12.jpg" alt="image">
													</span>
													<a href="#" class="chat__username">Jason Muller</a>
													<span class="chat__datetime">30 Seconds</span>
												</div>
												<div class="chat__text bg-light-success">
													Discover what students who viewed Learn Figma - UI/UX Design <br>Essential Training also viewed
												</div>
											</div>
											<div class="chat__message chat__message--right">
												<div class="chat__user">
													<span class="chat__datetime">Just Now</span>
													<a href="#" class="chat__username">You</a>
													<span class="media media--circle media--sm">
														<img src="media/users/300_21.jpg" alt="image">
													</span>
												</div>
												<div class="chat__text bg-light-brand">
													Most purchased Business courses during this sale!
												</div>
											</div>
										</div>
										<div class="ps__rail-x" style="left: 0px; bottom: 0px;">
											<div class="ps__thumb-x" tabindex="0" style="left: 0px; width: 0px;"></div>
										</div>
										<div class="ps__rail-y" style="top: 0px; height: 114px; right: -2px;">
											<div class="ps__thumb-y" tabindex="0" style="top: 0px; height: 40px;"></div>
										</div>
									</div>
								</div>

								<div class="portlet__foot">
									<div class="chat__input">
										<div class="chat__editor">
											<textarea style="height: 50px" placeholder="Type here..."></textarea>
										</div>
										<div class="chat__toolbar">
											<div class="chat__tools">
												<a href="#"><i class="flaticon2-link"></i></a>
												<a href="#"><i class="flaticon2-photograph"></i></a>
												<a href="#"><i class="flaticon2-photo-camera"></i></a>
											</div>
											<div class="chat__actions">
												<button type="button" class="btn btn-brand btn-md btn-upper btn-bold chat__reply">reply</button>
											</div>
										</div>
									</div>
								</div>
							</div>

						</div>
						<!--End:: App Content-->
					</div>
					<!--End::App-->
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