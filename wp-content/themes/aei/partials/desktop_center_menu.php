
<?php 

wp_nav_menu(

	array(
		'menu' => 'desktop-center-menu', 
		'theme_location' => 'top-center-menu',
		'container'=> 'ul', 
		'menu_class' => 'navbar-nav w-100 px-3',
		'add_li_class'  => 'nav-item',
		'add_a_class'  => 'nav-link px-3'
	)

) 

?>
