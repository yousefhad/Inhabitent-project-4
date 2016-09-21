<?php
/**
 * Template Name: Front-page Template
 *
 * @package RED_Starter_Theme
 */
get_header(); ?>

	<div id="primary" class="front-area">
		<main id="main" class="sites-main" role="main">

		<section class="home-hero">
			<img src="<?php bloginfo('template_directory'); ?>/images/logos/inhabitent-logo-full.svg" alt="inhabitent full logo" />
		</section>

<!-- Shop Stuff -->
	<section class="shop-stuff">

		<?php get_template_part( 'template-main-page/content', 'front-shop' ); ?>

					<?php get_template_part( 'template-main-page/content', 'front-blog' ); ?>

					<?php get_template_part( 'template-main-page/content', 'front-adventure' ); ?>

			<div class="product-info container" >
				<h1>shop stuff</h1>
				<div class="product-type-blocks">
					<?php $terms = get_terms( array( 'taxonomy' => 'product-type'));?>
						<?php foreach ($terms as $term) : ?>
							<div class="product-type-wrapper">
					    <img class="logo" src="<?php bloginfo('template_directory'); ?>/images/product-type-icons/<?php echo $term->slug ?>.svg" alt="product-type" />
							<p class="shop-stuff-description"><?php echo $term->description; ?></p>
							<a href="<?php echo get_term_link($term, 'product-type') ?>"><button><?php echo $term-> name; ?> Stuff</button></a>
						</div>
						<?php endforeach; ?>
				</div>
			</div>
		</section>

<!-- Inhabitent Journal -->
		<section class="main-journal container">
			<div class="inhabitent-journals">
			 <h1>inhabitent journal</h1>
				<ul>
					<?php
					   $args = array( 'post_type' => 'post', 'posts_per_page' => 3);
					   $recent_posts = get_posts( $args ); // returns an array of posts
					?>
					<?php foreach ( $recent_posts as $post ) : setup_postdata( $post ); ?>
					<li>
						<div class="thumbnail-wrapper">
							<?php if ( has_post_thumbnail() ) : ?>
								<?php the_post_thumbnail( 'large' ); ?>
							<?php endif; ?>
						</div>
							<div class="post-info-wrapper">
								<span class="journal-meta"><?php if ( 'post' === get_post_type() ) : ?>
									<?php red_starter_posted_on(); ?> / <?php comments_number('0 Comments', '1 Comment', '% Comments'); ?>
								</span><!-- .entry-meta -->

						<?php the_title( sprintf( '<h2 class="journal-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h2>' ); ?>
						<a href="<?php echo esc_url( get_permalink() );?>"><button class="read-entry">Read Entry</button></a>
						<?php endif; ?>
						</div>
					</li>
						<?php endforeach; wp_reset_postdata(); ?>
			 </ul>
		 </div>
		</section>
		<!-- Latest Adventures -->
			<section class="main-adventure container">
				<div class="inhabitent-adventures">
				 <h1>Latest Adventures</h1>
				 <?php $args = array('post_type' => 'adventure',
			 											 'posts_per_page' => 4,
													   'order' => 'ASC');
							 $adventure_posts = get_posts($args); ?>

			<div class="latest-adventures">
				<div class="left-box">
					<div class="adventure-wrapper-one">
					<div class="header-one"><a class="title-one" href="<?php echo $adventure_posts[0]->guid;?>"><?php echo $adventure_posts[0]->post_title; ?></a>
					<a class="adventure-read-more" href="<?php echo $adventure_posts[0]->guid;?>">Read More</a></div>
					<?php echo get_the_post_thumbnail($adventure_posts[0]->ID, 'large');?>
					</div>
				</div><!--left-box-->

				<div class="right-box">
					<div class="adventure-wrapper-two">
					<div class="header-two"><a class="title-two" href="<?php echo $adventure_posts[1]->guid;?>"><?php echo $adventure_posts[1]->post_title; ?></a>
					<a class="adventure-read-more" href="<?php echo $adventure_posts[1]->guid;?>">Read More</a></div>
					<?php echo get_the_post_thumbnail($adventure_posts[1]->ID, 'large');?>
					</div>

					<div class="bottom-box">
						<div class="adventure-wrapper-three">
						<div class="header-three"><a class="title-three" href="<?php echo $adventure_posts[2]->guid;?>"><?php echo $adventure_posts[2]->post_title; ?></a>
						<a class="adventure-read-more" href="<?php echo $adventure_posts[2]->guid;?>">Read More</a></div>
						<?php echo get_the_post_thumbnail($adventure_posts[2]->ID, 'large');?>
						</div>

						<div class="adventure-wrapper-four">
						<div class="header-four"><a class="title-four" href="<?php echo $adventure_posts[3]->guid;?>"><?php echo $adventure_posts[3]->post_title; ?></a>
						<a class="adventure-read-more" href="<?php echo $adventure_posts[3]->guid;?>">Read More</a></div>
						<?php echo get_the_post_thumbnail($adventure_posts[3]->ID, 'large');?>
						</div>
					</div> <!--bottom-box-->
				</div> <!--right-box-->
			</div><!--latest-adventures-->

				<a href="<?php echo get_post_type_archive_link( 'adventure' ); ?>"><button class="more-adventures">More Adventures</button></a>

				</div>
			</section>

				</main><!-- #main -->
			</div><!-- #primary -->

<?php get_footer(); ?>
