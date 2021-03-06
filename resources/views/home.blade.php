<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1.0,maximum-scale=1">
		
		<title>Investments Lander</title>
		<!-- Loading third party fonts -->
		<link href="http://fonts.googleapis.com/css?family=Roboto+Condensed:300,400,700" rel="stylesheet" type="text/css">
		<link href="{{ url('/') }}/public/fonts/font-awesome.min.css" rel="stylesheet" type="text/css">
		<!-- Loading main css file -->
		<link rel="stylesheet" href="{{ url('/') }}/public/style.css">
		
		<!--[if lt IE 9]>
		<script src="js/ie-support/html5.js"></script>
		<script src="js/ie-support/respond.js"></script>
		<![endif]-->

	</head>


	<body>
		
		<div id="site-content">
			<header class="site-header">
				<div class="container">
					<a href="index.html" id="branding">
						<img src="{{ url('/') }}/public/images/logo.png" alt="Company Name" class="logo">
						<div class="branding-copy">
							<h1 class="site-title">Company name</h1>
							<small class="site-description">Slogan Goes Here</small>
						</div>
					</a> <!-- #branding -->

					<a href="#" class="pull-right button muted">Account login</a>
				</div> <!-- .container -->
			</header> <!-- .site-header -->

			<main class="main-content">
				<div class="hero" data-bg-image="{{ url('/') }}/public/dummy/bg.jpg">
					<div class="container">
						<div class="row">
							<div class="col-md-6">
								<h2 class="hero-title">Lipsum Invesments</h2>
								<p>Perspiciatis unde omnis iste natus error sit voluptatem. Accusantium doloremque laudantium totam rem aperiam.</p>
								<div class="rate-box">
									<div class="num">28.5%</div>
									<div class="label">Average Rate <br>of Return</div>
								</div>
								<ul class="check-list">
									<li><i class="fa fa-check"></i> Nemo enm ipsam voluptatem quia</li>
									<li><i class="fa fa-check"></i> Voluptas sit aspernatur consequuntur</li>
									<li><i class="fa fa-check"></i> Dolores eos qui ratione voluptatem</li>
									<li><i class="fa fa-check"></i> Sequi nesciunt neque porro quisquam</li>
								</ul>
							</div>
							<div class="col-md-5 col-md-offset-1">
								<div class="request-form">
									<h2>Request Form</h2>
									<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Molestiae distinctio commodi deserunt</p>
									<form action="#">
										<input type="text" class="form-name" placeholder="Full Name...">
										<input type="text" class="form-company" placeholder="Company Name...">
										<input type="text" class="form-email" placeholder="Email Address...">
										<input type="text" class="form-phone" placeholder="Phone Number...">
										<select name="#" id="#" class="form-country" placeholder="Select Country">
											<option value="united state">US</option>
										</select>

										<div class="action">
											<input type="submit" value="Send a request">
										</div>
									</form>
								</div>
							</div>
						</div>
					</div>
				</div>
				
				<div class="fullwidth-block cta">
					<div class="container">
						<img src="{{ url('/') }}/public/images/macbook-frame.png" alt="" class="screen">
						<h2 class="cta-text">Nunc aliquam condimentum sapien sit amet consectetur. Etiam ut dolor congue convallis malesuada nibh donec ultricies ornare.</h2>
						<a href="#" class="button">Send a request</a>
					</div>
				</div>

				<div class="fullwidth-block border-top-bottom">
					<div class="container">
						<img src="{{ url('/') }}/public/dummy/nytimes-logo.png" alt="">
						<img src="{{ url('/') }}/public/dummy/forbes-logo.png" alt="">
						<img src="{{ url('/') }}/public/dummy/wallstreetjournal-logo.png" alt="">
						<img src="{{ url('/') }}/public/dummy/bloomberg-logo.png" alt="">
					</div>
				</div>

			</main> <!-- .main-content -->

			<footer class="site-footer">
				<div class="container">
					<p class="copy">Copyright 2014 Company name. Designed by Themezy. All right reserved.</p>
				</div> <!-- .container -->
			</footer> <!-- .site-footer -->
		</div> <!-- #site-content -->
		
		<script src="{{ url('/') }}/public/js/jquery-1.11.1.min.js"></script>
		<script src="{{ url('/') }}/public/js/plugins.js"></script>
		<script src="{{ url('/') }}/public/js/app.js"></script>
	</body>

</html>