
<?php 

wp_nav_menu(

	array(
		'menu' 				=> 'desktop-top-menu', 
		'theme_location' 	=> 'top-menu',
		'container'			=> 'ul', 
		'menu_class' 		=> 'navbar-nav w-100 px-3',
		'add_li_class'  	=> 'nav-item',
		'add_a_class'  		=> 'nav-link px-3'
	)

) 

?>
