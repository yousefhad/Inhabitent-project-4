<?php
/**
* Template part of the Main-page
*
* @package RED_Starter_Theme
*/
?>

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
