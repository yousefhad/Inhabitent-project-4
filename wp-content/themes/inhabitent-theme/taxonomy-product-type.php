<?php
/**
 * The template for displaying all pages.
 *
 * @package RED_Starter_Theme
 */

get_header(); ?>

<div id="primary" class="taxonomy-area">
	<div class="container">
		<main id="main" class="sites-main" role="main">

		<div class="page-header">
			<h1 class="page-header-title"><?php single_term_title(); ?></h1>
			<p><?php echo term_description(); ?></p>
		</div>

		<article class="product-grid" id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
			<?php while ( have_posts() ) : the_post(); ?>

				<div class="product-grid-item">
					<div class="thumbnail-wrapper">
						<a href='<?php echo esc_url( get_permalink() ); ?>'>
							<?php if ( has_post_thumbnail() ) : ?>
							<?php the_post_thumbnail( 'large' ); ?>
							<?php endif; ?>
						</a>
					</div>

					<div class="product-info">
						<span class="product-title"><?php echo get_the_title(); ?></span>
						<span class="price"><?php echo CFS()->get( 'price' ); ?></span>
					</div>
				</div>

				<?php endwhile; // End of the loop. ?>
			</article>

		</main>
	</div>
</div>

<?php get_footer(); ?>
