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
	<link href="css/loginv2.css" rel="stylesheet" type="text/css" />
	<!--end::Layout Skins -->
	<link rel="shortcut icon" href="images/favicon.ico" />
</head>
<!-- end::Head -->
<!-- begin::Body -->

<body class="is-login login-2">
	<div id="particles-js"></div>
	<figure class="logo">
		<a href="index.php"><img title="Yo!Kart" src="media/logos/logo.png" alt="Yo!Kart"></a></figure>
	<div class="login-page">
		<div class="container">
			<div class="row align-item-center justify-content-center">
				<div class="col-md-5">
					<div class="text-center mb-3">
						<h1><strong>Login</strong></h1>
					</div>
					<div class="portlet ml-5 mr-5">
						<div class="portlet__body p-5">
							<form class="form p-3">
								<div class="form-group"><label>Username</label>
									<input class="form-control" title="Username" placeholder="Username" type="text" value="">
								</div>
								<div class="form-group"><label>Password</label>
									<input class="form-control" title="Password" placeholder="Password" type="password" value="">
								</div>
								<div class="row">
									<div class="col-md-12">
										<div class="form-group">
											<input disabled title="" type="submit" value="Login" class="btn btn-primary btn-lg btn-block not-allowed"></div>
									</div>
								</div>
								<div class="row">
									<div class="col-md-12">
										<div class="form-group text-center">
											<a href="" class="link">Forgot Password?</a>
										</div>
									</div>
								</div>
							</form>
						</div>
					</div>
					<p class="version text-white text-center mt-5"><strong>Admin version 2019</strong></p>
				</div>
			</div>
		</div>
	</div>

	<script src="js/vendors/particles.min.js"></script>
	<script src="js/vendors/script.js"></script>
</body>
<!-- end::Body -->

</html>