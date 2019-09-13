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
				<button class="navbar-toggler ml-auto" type="button" data-toggle="collapse" data-target=".main-nav" aria-expanded="false" aria-controls="main-nav1 main-nav2"><i class="material-icons">menu</i></button>
				<div class="collapse navbar-collapse flex-column main-nav" id="main-nav1">

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
				<div class="collapse navbar-collapse flex-column main-nav" id="main-nav2">
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
	</nav>


