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
		<div class="navbar navbar-expand-lg bg_dark">
			<div class="container">
			<a href="/" class="navbar-brand"><img src="/wp-content/themes/aei/images/logo.webp" alt="logo" class="img-fluid"></a>

			<div class="d-lg-none ml-auto">
				<div class="menu-icon">
					<span class="menu-icon__line menu-icon__line-left"></span>
					<span class="menu-icon__line"></span>
					<span class="menu-icon__line menu-icon__line-right"></span>
				</div>
			</div>

				<div class="flex-column ml-auto d-none d-lg-block" id="main-nav1">
					<?php get_template_part('./partials/desktop_top_menu'); ?>
				</div>

			</div>

		</div>

		<div class="navbar navbar-expand-lg bg_shade_dark">
			<div class="container">
				<div class="flex-column ml-auto d-none d-lg-block" id="main-nav2">
					<?php get_template_part('./partials/desktop_center_menu'); ?>
				</div>
			</div>
		</div>

	<?php get_template_part('./partials/mobile_menu'); ?>


	</nav>


