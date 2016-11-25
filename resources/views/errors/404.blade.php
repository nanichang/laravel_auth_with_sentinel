
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="description" content="">
		<meta name="author" content="">
		<meta name="keyword" content="">
		<link rel="shortcut icon" href="img/favicon.png">

		<title>404</title>

		<!-- Bootstrap core CSS -->
		<link href="assets/css/bootstrap.min.css" rel="stylesheet">
		<link href="assets/css/bootstrap-reset.css" rel="stylesheet">
		<!--external css-->
		<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
		<!-- Custom styles for this template -->
		<link href="assets/css/style.css" rel="stylesheet">
		<link href="assets/css/style-responsive.css" rel="stylesheet" />

		<!-- HTML5 shim and Respond.js IE8 support of HTML5 tooltipss and media queries -->
		<!--[if lt IE 9]>
		<script src="js/html5shiv.js"></script>
		<script src="js/respond.min.js"></script>
		<![endif]-->
	</head>
	<body class="body-404">
		<div class="error-head"> </div>

		<div class="container ">
			<section class="error-wrapper text-center">
					<h1><img src="assets/images/404.png" alt=""></h1>
					<div class="error-desk">
						<h2>page not found</h2>
						<p class="nrml-txt">We Couldn’t Find This Page</p>
					</div>
					<a href="{{ route('dashboard') }}" class="back-btn"><i class="fa fa-home"></i> Back To Home</a>
			</section>
		</div>
	</body>
</html>
