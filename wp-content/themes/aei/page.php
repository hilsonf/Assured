<?php get_header();?>

	<main id="main" class="container">

		<?php if (have_posts()) : while (have_posts()) : the_post();?>

			<?php the_content();?>

		<?php endwhile; endif;?>

	</main><!-- #main -->

<?php get_footer();?>
