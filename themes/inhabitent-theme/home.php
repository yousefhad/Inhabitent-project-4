<?php
/**
 * Template Name: home Template
 *
 * @package RED_Starter_Theme
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

			<?php while ( have_posts() ) : the_post(); ?>
<?php get_template_part( 'template-parts/content' ); ?>
				

			<?php endwhile; ?>

		</main><!-- #main -->


	  	<?php get_sidebar(); ?>

	</div>

	  	<?php get_footer(); ?>

