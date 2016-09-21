<?php
/**
 * Template Name: Archive Product 
 *
 * @package RED_Starter_Theme
 *
 */

get_header(); ?>

	<div id="primary" class="archive-product-area container">
		<main id="main" class="sites-main" role="main">

			<div class="page-header">
		    <h1>shop stuff</h1>
		    



        <div class="shop-nav-container">
        
		      <nav class="shop-nav">
		      <?php $terms = get_terms( array ( 'taxonomy' => 'product-type'));?>
		      <?php foreach ($terms as $term) : ?>
		      <a href="<?php echo get_term_link($term, 'product-type') ?>"><?php echo $term-> name; ?></a>
		    <?php endforeach; wp_reset_postdata(); ?>
		      </nav>
		    </div>
		  </div>

      <div class="product-grid">
        <?php
           $args = array( 'post_type' => 'product',
                          'posts_per_page' => 16,
												  'order' => 'ASC',
												  'orderby' => 'title' );
           $recent_products = get_posts( $args ); // returns an array of posts
        ?>
        <?php foreach ( $recent_products as $post ) : setup_postdata( $post ); ?>
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
          <?php endforeach; wp_reset_postdata(); ?>
     </div>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>
