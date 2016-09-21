<?php
/**
* Template part of the Main-page
*
* @package RED_Starter_Theme
*/
?>

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
