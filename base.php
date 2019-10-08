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
				
				Base Portlets			</h3>

	        	            <div class="subheader__breadcrumbs">
	                <a href="#" class="subheader__breadcrumbs-home"><i class="flaticon2-shelter"></i></a>
	                	                    <span class="subheader__breadcrumbs-separator"></span>
	                    <a href="" class="subheader__breadcrumbs-link">
	                        Components	                    </a>
	                	                    <span class="subheader__breadcrumbs-separator"></span>
	                    <a href="" class="subheader__breadcrumbs-link">
	                        Portlets	                    </a>
	                	                    <span class="subheader__breadcrumbs-separator"></span>
	                    <a href="" class="subheader__breadcrumbs-link">
	                        Base Portlets	                    </a>
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
   	<div class="col-lg-6">	
   		<!--begin::Portlet-->
   		<div class="portlet portlet--mobile">
			<div class="portlet__head">
				<div class="portlet__head-label">
					<h3 class="portlet__head-title">
						Basic Portlet <small>portlet sub title</small>
					</h3>
				</div>
			</div>
			<div class="portlet__body">
				Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled. Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled.
			</div>
		</div>	
		<!--end::Portlet-->

		<!--begin::Portlet-->
   		<div class="portlet portlet--bordered">
   			<div class="portlet__body">
   				<!--begin::Portlet-->
		   		<div class="portlet portlet--bordered">
					<div class="portlet__head">
						<div class="portlet__head-label">
							<h3 class="portlet__head-title">
								Bordered Style
							</h3>
						</div>
					</div>
					<div class="portlet__body">
						Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled. Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled.
					</div>
				</div>	
				<!--end::Portlet-->

				<!--begin::Portlet-->
		   		<div class="portlet portlet--bordered portlet--head--noborder">
					<div class="portlet__head">
						<div class="portlet__head-label">
							<h3 class="portlet__head-title">
								Semi Bordered Style
							</h3>
						</div>
					</div>
					<div class="portlet__body">
						Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled. Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled.
					</div>
				</div>	
				<!--end::Portlet-->
			</div>
		</div>
		<!--end::Portlet-->

		<!--begin::Portlet-->
		<div class="portlet portlet--head-lg portlet--mobile">
			<div class="portlet__head">
				<div class="portlet__head-label">
					<h3 class="portlet__head-title">
						Portlet Head Sizing <small>large head</small>
					</h3>
				</div>
				<div class="portlet__head-toolbar">
					<div class="dropdown dropdown-inline">
						<button type="button" class="btn btn-clean btn-icon" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
							<i class="flaticon-more-1"></i>
						</button>
						<div class="dropdown-menu dropdown-menu-right">
							<ul class="nav">
    <li class="nav__item">
        <a href="#" class="nav__link">
            <i class="nav__link-icon flaticon2-line-chart"></i>
            <span class="nav__link-text">Reports</span>
        </a>
    </li>
    <li class="nav__item">
        <a href="#" class="nav__link">
            <i class="nav__link-icon flaticon2-send"></i>
            <span class="nav__link-text">Messages</span>
        </a>
    </li>
    <li class="nav__item">
        <a href="#" class="nav__link">
            <i class="nav__link-icon flaticon2-pie-chart-1"></i>
            <span class="nav__link-text">Charts</span>
        </a>
    </li>
    <li class="nav__item">
        <a href="#" class="nav__link">
            <i class="nav__link-icon flaticon2-avatar"></i>
            <span class="nav__link-text">Members</span>
        </a>
    </li>
    <li class="nav__item">
        <a href="#" class="nav__link">
            <i class="nav__link-icon flaticon2-settings"></i>
            <span class="nav__link-text">Settings</span>
        </a>
    </li>
</ul>						</div>
					</div>
				</div>
			</div>
			<div class="portlet__body">
				Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled. Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled.
			</div>
		</div>	
		<!--end::Portlet-->

		<!--begin::Portlet-->
		<div class="portlet portlet--head-xl portlet--mobile">
			<div class="portlet__head">
				<div class="portlet__head-label">
					<h3 class="portlet__head-title">
						Portlet Head Sizing <small>extra large head</small>
					</h3>
				</div>
				<div class="portlet__head-toolbar">
					<div class="dropdown dropdown-inline">
						<a href="#" class="btn btn-default btn-icon" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
							<i class="flaticon-more-1"></i>
						</a>
						<div class="dropdown-menu dropdown-menu-right">
							<ul class="nav">
    <li class="nav__item">
        <a href="#" class="nav__link">
            <i class="nav__link-icon flaticon2-line-chart"></i>
            <span class="nav__link-text">Reports</span>
        </a>
    </li>
    <li class="nav__item">
        <a href="#" class="nav__link">
            <i class="nav__link-icon flaticon2-send"></i>
            <span class="nav__link-text">Messages</span>
        </a>
    </li>
    <li class="nav__item">
        <a href="#" class="nav__link">
            <i class="nav__link-icon flaticon2-pie-chart-1"></i>
            <span class="nav__link-text">Charts</span>
        </a>
    </li>
    <li class="nav__item">
        <a href="#" class="nav__link">
            <i class="nav__link-icon flaticon2-avatar"></i>
            <span class="nav__link-text">Members</span>
        </a>
    </li>
    <li class="nav__item">
        <a href="#" class="nav__link">
            <i class="nav__link-icon flaticon2-settings"></i>
            <span class="nav__link-text">Settings</span>
        </a>
    </li>
</ul>						</div>
					</div>
				</div>
			</div>
			<div class="portlet__body">
				Lorem Ipsum is simply dummy text of the printing and typesetting industry. 
				Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, 
				when an unknown printer took a galley of type and scrambled. Lorem Ipsum is 
				simply dummy text of the printing and typesetting industry. Lorem Ipsum has 
				been the industry's standard dummy text ever since the 1500s, 
				when an unknown printer took a galley of type and scrambled.
			</div>
		</div>	
		<!--end::Portlet-->
		
		<!--begin::Portlet-->
		<div class="portlet">
			<div class="portlet__head">
				<div class="portlet__head-label">
					<span class="portlet__head-icon">
						<i class="flaticon2-graph-1"></i>
					</span>
					<h3 class="portlet__head-title">
						Icon Title <small>portlet sub title</small>
					</h3>
				</div>
			</div>
			<div class="portlet__body">
				Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled. Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled.
			</div>
			<div class="portlet__foot hidden">
				<div class="row">
					<div class="col-lg-6">
						Portlet footer: 
					</div>
					<div class="col-lg-6">
						<button type="submit" class="btn btn-primary">Submit</button>
						<span class="margin-left-10">or <a href="#" class="link font-bold">Cancel</a></span>
					</div>
				</div>
			</div>
		</div>	
		<!--end::Portlet-->
    </div>
    <div class="col-lg-6">

		<!--begin::Portlet-->
   		<div class="portlet">
			<div class="portlet__head">
				<div class="portlet__head-label">
					<span class="portlet__head-icon">
						<i class="flaticon2-graph"></i>
					</span>
					<h3 class="portlet__head-title">
						Portlet Footer
					</h3>
				</div>
			</div>
			<div class="portlet__body">
				Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled. Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled.
			</div>
			<div class="portlet__foot">
				<div class="row align-items-center">
					<div class="col-lg-6 m--valign-middle">
						Portlet footer: 
					</div>
					<div class="col-lg-6 align-right">
						<button type="submit" class="btn btn-brand">Submit</button>
						<span class="margin-left-10">or <a href="#" class="link font-bold">Cancel</a></span>
					</div>
				</div>
			</div>
		</div>	
		<!--end::Portlet-->

		<!--begin::Portlet-->
   		<div class="portlet">
			<div class="portlet__head">
				<div class="portlet__head-label">
					<span class="portlet__head-icon">
						<i class="flaticon-multimedia"></i>
					</span>
					<h3 class="portlet__head-title">
						Scrollable Content
					</h3>
				</div>
			</div>
			<div class="portlet__body">
				<div class="scroll scroll-y" data-scroll="true" data-height="200" data-scrollbar-shown="true" style="height: 200px;" data-simplebar>
				Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled. Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled.
				Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled. Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled.
				Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled. Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled.
				 </div>
			</div>
			<div class="portlet__foot">
				<div class="row align-items-center">
					<div class="col-lg-12">
						<button type="submit" class="btn btn-success">Submit</button>
						<button type="submit" class="btn btn-secondary">Cancel</button>
					</div>
				</div>
			</div>
		</div>	
		<!--end::Portlet-->

		<!--begin::Portlet-->
		<div class="portlet">
			<div class="portlet__head">
				<div class="portlet__head-label">
					<span class="portlet__head-icon">
						<i class="flaticon-statistics"></i>
					</span>
					<h3 class="portlet__head-title">
						Portlet Action Icons
					</h3>
				</div>
				<div class="portlet__head-toolbar">
					<div class="portlet__head-actions">
						<a href="#" class="btn btn-clean btn-sm btn-icon btn-icon-md">
							<i class="flaticon2-add-1"></i>
						</a>
						<a href="#" class="btn btn-clean btn-sm btn-icon btn-icon-md">
							<i class="flaticon2-maps"></i>
						</a>
						<a href="#" class="btn btn-clean btn-sm btn-icon btn-icon-md">
							<i class="flaticon2-power"></i>
						</a>	
					</div>
				</div>
			</div>
			<div class="portlet__body">
				Lorem Ipsum is simply dummy text of the printing and  dummy text of the printing  dummy text of the printing typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled. Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled.
			</div>
		</div>	
		<!--end::Portlet-->

		<!--begin::Portlet-->
		<div class="portlet portlet--skin-solid bg-danger">
			<div class="portlet__head portlet__head--noborder">
				<div class="portlet__head-label">
					<span class="portlet__head-icon">
						<i class="flaticon2-graphic"></i>
					</span>
					<h3 class="portlet__head-title">
						Solid Skin
					</h3>
				</div>
				<div class="portlet__head-toolbar">
					<div class="portlet__head-actions">
						<a href="#" class="btn btn-outline-light btn-sm btn-icon btn-icon-md">
							<i class="flaticon2-add-1"></i>
						</a>
						<a href="#" class="btn btn-outline-light btn-sm btn-icon btn-icon-md">
							<i class="flaticon2-maps"></i>
						</a>
						<a href="#" class="btn btn-outline-light btn-sm btn-icon btn-icon-md">
							<i class="flaticon2-power"></i>
						</a>
					</div>
				</div>
			</div>
			<div class="portlet__body">
				Lorem Ipsum is simply dummy text of the printing and typesetting  dummy text of the printing  dummy text of the printing dummy text of the printing industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled. Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled.
			</div>
		</div>	
		<!--end::Portlet-->

		<!--begin::Portlet-->
		<div class="portlet portlet--skin-solid portlet-- bg-brand">
			<div class="portlet__head">
				<div class="portlet__head-label">
					<span class="portlet__head-icon">
						<i class="flaticon-notes"></i>
					</span>
					<h3 class="portlet__head-title">
						Skin Skin
					</h3>
				</div>
				<div class="portlet__head-toolbar">
					<div class="portlet__head-actions">
						<a href="#" class="btn btn-outline-light btn-pill btn-sm btn-icon btn-icon-md">
							<i class="flaticon2-lock"></i>
						</a>
						<a href="#" class="btn btn-outline-light btn-pill btn-sm btn-icon btn-icon-md">
							<i class="flaticon2-download-symbol"></i>
						</a>
						<a href="#" class="btn btn-outline-light btn-pill btn-sm btn-icon btn-icon-md">
							<i class="flaticon2-rocket-1"></i>
						</a>
					</div>
				</div>
			</div>
			<div class="portlet__body">
				Lorem Ipsum is simply dummy text of the printing  dummy text of the printing  dummy text of the printing  dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled. Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled.
			</div>
		</div>	
		<!--end::Portlet-->
    </div>
</div>	</div>
<!-- end:: Content -->						</div>
									</div>

		<?php
  include 'includes/footer.php';
?>
	</div>

</body>
<!-- end::Body -->

</html>