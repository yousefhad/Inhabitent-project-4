<?php
/**
 * Template Name: Archive-Adventure
 *
 * @package RED_Starter_Theme
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="adventure-main" role="main">

			<?php $args = array('post_type' => 'adventure',
 	 											 'posts_per_page' => 4,
 											   'order' => 'ASC');
 					 $adventure_posts = get_posts($args); ?>

 	<div class="container">

		<header class="page-header">
		<h1 class="adventure-archive-title"><?php post_type_archive_title('Latest ', 'Adventures'); ?></h1>
		</header><!-- .page-header -->

<div class="latest-archive-adventure">
	<div class="adventure-item">
		<div class="adventure-wrapper">
		<div class="adventure-header"><a href="<?php echo $adventure_posts[0]->guid;?>"><p class="adventures-title"><?php echo $adventure_posts[0]->post_title; ?></a></p>
		<a class="adventures-read-more" href="<?php echo $adventure_posts[0]->guid;?>">Read More</a></div>
		<div class="adventure-images"><?php echo get_the_post_thumbnail($adventure_posts[0]->ID, 'full');?></div>
		</div>
	</div>


	<div class="adventure-item">
		<div class="adventure-wrapper">
		<div class="adventure-header"><a href="<?php echo $adventure_posts[1]->guid;?>"><p class="adventures-title"><?php echo $adventure_posts[1]->post_title; ?></a></p>
		<a class="adventures-read-more" href="<?php echo $adventure_posts[1]->guid;?>">Read More</a></div>
		<div class="adventure-images"><?php echo get_the_post_thumbnail($adventure_posts[1]->ID, 'full');?></div>
		</div>
	</div>


	<div class="adventure-item">
		<div class="adventure-wrapper">
		<div class="adventure-header"><a href="<?php echo $adventure_posts[2]->guid;?>"><p class="adventures-title"><?php echo $adventure_posts[2]->post_title; ?></a></p>
		<a class="adventures-read-more" href="<?php echo $adventure_posts[2]->guid;?>">Read More</a></div>
		<div class="adventure-images"><?php echo get_the_post_thumbnail($adventure_posts[2]->ID, 'full');?></div>
		</div>
	</div>

	<div class="adventure-item">
		<div class="adventure-wrapper">
		<div class="adventure-header"><a href="<?php echo $adventure_posts[3]->guid;?>"><p class="adventures-title"><?php echo $adventure_posts[3]->post_title; ?></a></p>
		<a class="adventures-read-more" href="<?php echo $adventure_posts[3]->guid;?>">Read More</a></div>
		<div class="adventure-images"><?php echo get_the_post_thumbnail($adventure_posts[3]->ID, 'full');?></div>
		</div>
	</div>
</div>

<!--latest-archive-adventure-->

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>
