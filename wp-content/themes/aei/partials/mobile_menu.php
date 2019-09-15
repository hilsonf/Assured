<div class="nav">
	<div class="nav__content">
		<?php 

		wp_nav_menu(

			array(
				'menu' => 'mobile-top-menu', 
				'container'=> 'ul', 
				'menu_class' => 'nav__list list-unstyled',
				'add_li_class'  => 'nav__list-item'
			)

		) 

		?>
	</div>
</div>

