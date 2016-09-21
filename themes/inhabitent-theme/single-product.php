<?php
/**
 * Template Name: Single Product Template
 *
 * @package RED_Starter_Theme
 *
 */

get_header(); ?>

	<div id="primary" class="single-product-area">
		<main id="main" class="single-product-main" role="main">

		<?php while ( have_posts() ) : the_post(); ?>

      <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

      		<div class="product-image-wrapper"><?php if ( has_post_thumbnail() ) : ?>
      		<?php the_post_thumbnail( 'large' ); ?>
					<?php endif; ?></div>

      	<div class="product-content-wrapper">
						<div class="single-product-header">
							<?php the_title( '<h1 class="single-product-title">', '</h1>' ); ?>
						</div><!-- .entry-header -->
          <span class="single-price"><?php echo CFS()->get( 'price' ); ?></span><!--Price-->
      		<?php the_content(); ?>

					<div class="social-buttons">
						<button class="single-post-social"><i class="fa fa-facebook"></i> Like</button>
						<button class="single-post-social"><i class="fa fa-twitter"></i> Tweet</button>
						<button class="single-post-social"><i class="fa fa-pinterest"></i> Pin</button>
					</div>
      	</div><!-- .entry-content -->

      </article><!-- #post-## -->

		<?php endwhile; // End of the loop. ?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>
