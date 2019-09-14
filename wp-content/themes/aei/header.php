<!DOCTYPE html>
<html>
<head>
	<?php wp_head();?>
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
  	<meta name="viewport" content="width=device-width, initial-scale=1">
  	<meta http-equiv="Cache-control" content="no-cache">
  	<link href="https://fonts.googleapis.com/icon?family=Material+Icons"
      rel="stylesheet">
	<title></title>
</head>
<body <?php body_class();?> >

	<nav class="sticky-top">
		<div class="navbar navbar-expand-lg navbar-dark bg-dark">
			<div class="container">
			<a href="#" class="navbar-brand">Auto hiding navbar</a>

			<div class="d-lg-none ml-auto">
				<div class="menu-icon">
					<span class="menu-icon__line menu-icon__line-left"></span>
					<span class="menu-icon__line"></span>
					<span class="menu-icon__line menu-icon__line-right"></span>
				</div>
			</div>
				


				<div class="flex-column ml-auto d-none d-lg-block" id="main-nav1">

					<ul class="navbar-nav w-100 px-3">
						<ul class="navbar-nav mr-auto"></ul>  
						<li class="nav-item">
							<a class="nav-link" href="">Schedule Demo</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="">Contact</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="">My Account</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="">
								<i class="material-icons">search</i>
							</a>
						</li>
					</ul>

				</div>

			</div>

		</div>

		<div class="navbar navbar-expand-lg bg-secondary">
			<div class="container">
				<div class="flex-column ml-auto d-none d-lg-block" id="main-nav2">
					<ul class="navbar-nav w-100 bg-secondary px-3">
						<ul class="navbar-nav mr-auto"></ul>  
						<li class="nav-item">
							<a class="nav-link" href="">Solutions</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="">Products</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="">Resources</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="/about">About</a>
						</li>
					</ul>
				</div>
			</div>
		</div>
		
	<?php get_template_part('mobile_menu'); ?>


	</nav>


