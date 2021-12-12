<!DOCTYPE html>
<html>
<head>
	<title>Tonjoo | Archive</title>
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">

	<!-- CSS -->
	<link rel="stylesheet" href="http://code.jquery.com/ui/1.10.4/themes/smoothness/jquery-ui.css">
	<!-- <link rel="stylesheet" type="text/css" href="assets/scss/bootstrap/css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="assets/scss/style.css">
 -->
	<!-- Font -->
	<link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet">
	<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
	<?php wp_head();?>
</head>
<body>
	<!-- Header -->
	<div class="header">
		<div class="top-header">
			<div class="container">
				<div class="col-md-4 col-sm-4">
					<div class="icon">
						<i class="fa fa-map-marker" aria-hidden="true"></i>
					</div>
					<div class="info">
						<?= get_theme_mod('mastopp_topnav_address');?>
					</div>
				</div>
				<div class="col-md-4 col-sm-4">
					<div class="icon">
						<i class="fa fa-clock-o" aria-hidden="true"></i>
					</div>
					<div class="info">
						<?= get_theme_mod('mastopp_topnav_openhour');?>
					</div>
				</div>
				<div class="col-md-4 col-sm-4">
					<div class="icon">
						<i class="fa fa-phone" aria-hidden="true"></i>
					</div>
					<div class="info">
						<?= get_theme_mod('mastopp_topnav_contact');?>
					</div>
				</div>
			</div>
		</div>
		<div class="menu-header">
			<div class="container">
				<nav class="navbar">
				    <div class="navbar-header">
				      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
				        <span class="sr-only">Toggle navigation</span>
				        <span class="icon-bar"></span>
				        <span class="icon-bar"></span>
				        <span class="icon-bar"></span>
				      </button>
				      <a class="navbar-brand" href="<?= get_home_url();?>"><img src="<?php echo get_template_directory_uri().'/assets/images/logo-back-white.jpg';?>"></a>
				    </div>

				    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
				      <ul class="nav navbar-nav navbar-right">
				        <li><a href="<?= get_home_url();?>">Home</a></li>
				        <li><a href="<?= get_home_url();?>/house">Service</a></li>
				        <li><a href="#">Portfolio</a></li>
				        <li><a href="#">About</a></li>
				        <li><a href="#">Blog</a></li>
				        <li><a href="<?= get_home_url()?>/info-korona">Info Korona</a></li>
				      </ul>
				    </div>
				</nav>
			</div>
		</div>
	</div>

	<!-- Parallax -->
	<div class="hero-image">

	</div>