<?php
	/**
	 * @Project: Virtual Airlines Manager (VAM)
	 * @Author: Alejandro Garcia
	 * @Web http://virtualairlinesmanager.net
	 * Copyright (c) 2013 - 2015 Alejandro Garcia
	 * VAM is licenced under the following license:
	 *   Creative Commons Attribution-NonCommercial-ShareAlike 4.0 International (CC BY-NC-SA 4.0)
	 *   View license.txt in the root, or visit http://creativecommons.org/licenses/by-nc-sa/4.0/
	 */
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title>Virtual Airlines Manager</title>
	<meta charset="utf-8">
	<meta name="keywords"
	      content="vam, virtual airlines manager , va , ivao, vatsim , airlines manager, prepar3d, aerosoft, pmdg,virtual pilot, piloto virtual, open source,xplane, flight simulator, flight simulation, flight, flying, fsx, fs9, flight simulator x, flight simulator 2004, simulators, simulator, simulation, flight enthusiasts, fsacars, fskeeper"/>
	<meta name="description"
	      content="VAM Virtual Airlines Manager is  free, open source web system for flight simulation enthusiasts, allowing them to create their own virtual airlines as a real one. Full airlines administration."/>
	<meta name="author" content="Alejandro Garcia">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel=”author” href=”https://plus.google.com/u/0/108665243705425046932/“
	      title="Virtual Airlines Manager on Google+"/>
	<link rel="shortcut icon" href="images/favicon.ico">
	<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
	<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
	<link rel="stylesheet" type="text/css" media="screen" href="css/bootstrap-datetimepicker.min.css"/>
	<script src="js/bootstrapValidator.min.js" type="text/javascript"></script>
	<script src="Charts/Chart.js"></script>
	<script src="js/vam.js" type="text/javascript"></script>
	<script src="js/jquery.confirm.min.js" type="text/javascript"></script>
	<!-- Custom styles for this template -->
	<link href="//maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">
	<link href="css/social-vam.css" rel="stylesheet">
	<link href="css/custom.css" rel="stylesheet">
</head>
<body>
<?php
	require('check_login.php');
	include('get_pilot_data.php');
?>
<nav class="navbar navbar-inverse" role=" navigation">
	<div class="container">
		<div class="navbar-header">
			<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar"
			        aria-expanded="false" aria-controls="navbar">
				<span class="sr-only">Toggle navigation</span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</button>
			<a class="navbar-brand" href="./index.php">Virtual Airlines Manager</a>
		</div>
		<div id="navbar" class="navbar-collapse collapse">
			<ul class="nav navbar-nav">
				<li class="active"><a href="./index_vam.php">Home</a></li>
				<li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">
						<?php echo ABOUT; ?><span class="caret"></span></a>
					<ul class="dropdown-menu">
						<li><a href="./index_vam_op.php?page=staff"><?php echo STAFF; ?></a></li>
						<li><a href="./index_vam_op.php?page=rules"><?php echo RULES; ?></a></li>
						<li><a href="#"><?php echo FORUM; ?></a></li>
					</ul>
				</li>
				<li><a href="./index_vam_op.php?page=pilot_options"><?php echo MENU; ?></a></li>
				<li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#"><?php echo OPERATIONS; ?>
						<span class="caret"></span></a>
					<ul class="dropdown-menu">
						<li><a href="./index_vam_op.php?page=fleet_public"><?php echo FLEET; ?></a></li>
						<li><a href="./index_vam_op.php?page=route_public"><?php echo ROUTES; ?></a></li>
						<li><a href="./index_vam_op.php?page=hubs"><?php echo HUBS; ?></a></li>
						<li><a href="./index_vam_op.php?page=tours"><?php echo TOURS; ?></a></li>
						<li><a href="./index_vam_op.php?page=ranks"><?php echo PILOT_RANKS; ?></a></li>
						<li><a href="./index_vam_op.php?page=awards"><?php echo AWARDS; ?></a></li>
						<li><a href="./index_vam_op.php?page=va_global_financial_report"><?php echo GLOBAL_FINANCES; ?></a></li>
					</ul>
				</li>
				<li><a href="./index_vam_op.php?page=pilots_public"><?php echo PILOTS; ?></a></li>
				<li><a href="./index_vam_op.php?page=stats"><?php echo STATS; ?></a></li>
			</ul>
			<ul class="nav navbar-nav navbar-right"><?php if ($_SESSION["access_administration_panel"] == 1) { ?>
				<li><a href="../vamcore/Gvausers"><span class="glyphicon glyphicon-briefcase"></span> <?php echo ADMIN; ?></a></li> <?php } ?>
				<li><a href="./logout.php"><span class="glyphicon glyphicon-log-out"></span> <?php echo 'Log out ' . $_SESSION["user"]; ?></a></li>
			</ul>
		</div>
	</div>
</nav>
<div class="container">
	<div class="row">
		<div class="col-md-12">
			<div id="carousel">
				<div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
					<!-- Indicators -->
					<ol class="carousel-indicators">
						<li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
						<li data-target="#carousel-example-generic" data-slide-to="1"></li>
						<li data-target="#carousel-example-generic" data-slide-to="2"></li>
						<li data-target="#carousel-example-generic" data-slide-to="3"></li>
						<li data-target="#carousel-example-generic" data-slide-to="4"></li>
					</ol>
					<!-- Wrapper for slides -->
					<div class="carousel-inner">
						<div class="item active"><img src="./images/slider/1.jpg" alt="...">

							<div class="carousel-caption"><h3>Virtual Airlines Manager</h3></div>
						</div>
						<div class="item"><img src="./images/slider/2.jpg" alt="...">

							<div class="carousel-caption"><h3>Virtual Airlines Manager</h3></div>
						</div>
						<div class="item"><img src="./images/slider/3.jpg" alt="...">

							<div class="carousel-caption"><h3>Virtual Airlines Manager</h3></div>
						</div>
						<div class="item"><img src="./images/slider/4.jpg" alt="...">

							<div class="carousel-caption"><h3>Virtual Airlines Manager</h3></div>
						</div>
						<div class="item"><img src="./images/slider/5.jpg" alt="...">

							<div class="carousel-caption"><h3>Virtual Airlines Manager</h3></div>
						</div>
					</div>
					<!-- Controls -->
					<a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev"> <span class="glyphicon glyphicon-chevron-left"></span> </a>
					<a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next"><span class="glyphicon glyphicon-chevron-right"></span> </a></div>
				<!-- Carousel -->
			</div>
		</div>
	</div>
	<br>

	<?php include('pilot_profile_row1.php'); ?>

	<?php $medal_pilot=$id; include( 'pilot_awards.php'); ?>

	<?php $medal_pilot=$id; include( 'pilot_tour_awards.php'); ?>

	<?php include( 'pilot_profile_row2.php'); ?>

	<?php include( 'pilot_profile_row3.php'); ?>
	<br/>
</body>
</html>
