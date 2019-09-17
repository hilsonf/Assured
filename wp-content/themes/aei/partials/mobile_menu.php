<div class="mobile__nav">
	<div class="mobile__nav__content">
		<?php 

		wp_nav_menu(

			array(
				'menu' => 'mobile-top-menu', 
				'container'=> 'ul', 
				'menu_class' => 'mobile__nav__list list-unstyled',
				'add_li_class'  => 'mobile__nav__list-item'
			)

		) 

		?>
	</div>
</div>

