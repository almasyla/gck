<!DOCTYPE html>
<html lang="en"> 
<head>
		<title>GCK</title>
		<!--Meta Tag-->
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, minimum-scale=1">
		<!--Favicon-->
		<link rel="shortcut icon" type="image/x-icon" href="favicon.ico"/>
		<!--Bootstrap Style Sheet -->
		<link rel="stylesheet" type="text/css" href="plugins/bootstrap/css/bootstrap.min.css"/>
		<link rel="stylesheet" type="text/css" href="plugins/bootstrap/css/bootstrap-theme.min.css"/>
		<!--Cascading Style Sheet -->
		<link rel="stylesheet" type="text/css" href="css/style.css"/>
		<link rel="stylesheet" type="text/css" href="css/font-awesome.css"/>
		<!-- BxSlider Style Sheet -->
		<link rel="stylesheet" type="text/css" href="plugins/bxslider/jquery.bxslider.css"/>
		<link href='https://fonts.googleapis.com/css?family=Lato:400,100,100italic,300,300italic,400italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>
		<link href='https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700' rel='stylesheet' type='text/css'>
		<!--Script-->
		<script src="js/jquery-1.11.3.min.js"></script>
		<script src="js/modernizr.custom.js"></script>
		<script src="js/jquery.easing.1.3.js"></script>
	</head>
	<body>
		<div class="header">
			<nav class="navbar">
			  <div class="container">
			    <div class="navbar-header">
			      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
			        <span class="icon-bar"></span>
			        <span class="icon-bar"></span>
			        <span class="icon-bar"></span>                        
			      </button>
			      <a class="navbar-brand" href="/GCK/public"><img src="images/logo.png"></a>
			    </div>
			    <div class="collapse navbar-collapse" id="myNavbar">
			      <ul class="nav navbar-nav navbar-right">
			        <li><a href="/GCK/public">Home</a></li>
			        <li><a href="about.html">About</a></li> 
			        <li><a href="events">Events</a></li>
			        <li><a href="news">News</a></li> 
			        <li><a href="contact">Contact</a></li>
			      </ul>
			    </div>
			  </div>
			</nav>
		</div>


		@yield('content')



				<footer>
			<div class="container">
				<div class="foo-border row">
					<div class="col-md-4  col-xs-12">
						<h2>About Us</h2>
						<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Consectetur adipiscing elit</p>
						<h2>Subscribe Us</h2>
						<form class="subs">
							<button type="submit"><i class="fa fa-envelope"></i></button>
							<input type="text" name="subscribe" placeholder="Your e-mail"/>
						</form>
					</div>
					<div class="col-md-4  col-xs-12">
						<h2>Latest Tweets</h2>
						<p><i class="fa fa-twitter"></i>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Consectetur adipiscing elit</p>
						<p><i class="fa fa-twitter"></i>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Consectetur adipiscing elit</p>
					</div>
					<div class="col-md-4  col-xs-12">
						<h2>Instagram</h2>
						<div class="ins row">
							<div class="col-md-3 col-xs-3">
								<img src="images/insta8.png" class="img-rounded"> 
							</div>
							<div class="col-md-3 col-xs-3">
								<img src="images/insta7.png" class="img-rounded" > 
							</div>
							<div class="col-md-3 col-xs-3">
								<img src="images/insta6.png" class="img-rounded" > 
							</div>
							<div class="col-md-3 col-xs-3">
								<img src="images/insta5.png" class="img-rounded" > 
							</div>
						</div>
						<div class="ins row">
							<div class="col-md-3 col-xs-3">
								<img src="images/insta4.png" class="img-rounded" > 
							</div>
							<div class="col-md-3 col-xs-3">
								<img src="images/insta3.png" class="img-rounded" > 
							</div>
							<div class="col-md-3 col-xs-3">
								<img src="images/insta2.png" class="img-rounded" > 
							</div>
							<div class="col-md-3 col-xs-3">
								<img src="images/insta1.png" class="img-rounded" > 
							</div>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-md-6 col-sm-6 col-xs-12">
						<ul class="foo-nav">
						 <li><a href="/">Home</a></li>
				        <li><a href="about.html">About</a></li> 
				        <li><a href="/events">Events</a></li>
				        <li><a href="/news">News</a></li> 
				        <li><a href="contact.html">Contact</a></li>
						</ul>
					</div>
					<div class="col-md-6 col-sm-6 col-xs-12">
						<ul class="foo-list">
							<li>GCK <i class="fa fa-copyright"></i> Girls Coding Kosova Team</li>
							<li>Copyright <i class="fa fa-copyright"></i> GCK.com</li>
						</ul>
					</div>
				</div>
			</div>
		</footer>
		@yield('scripts')
	</body>
</html>