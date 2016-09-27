<?php
/**
* Template part of the Main-page
*
* @package RED_Starter_Theme
*/
?>


<div class="product-info container" >
  <h1>shop stuff</h1>
  <div class="product-type-blocks">
    <?php $terms = get_terms( array( 'taxonomy' => 'product-type'));?>
      <?php foreach ($terms as $term) : ?>
        <div class="product-type-wrapper">
<<<<<<< HEAD
        <img class="logo" src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/product-type-icons/<?php echo $term->slug ?>.svg" alt="product-type" >
=======
        <img class="logo" src="<?php bloginfo('template_directory'); ?>/images/product-type-icons/<?php echo $term->slug ?>.svg" alt="product-type" />
>>>>>>> f0bc35d72707ac5bb2fbddc4e1af97f405f981f5
        <p class="shop-stuff-description"><?php echo $term->description; ?></p>
        <a href="<?php echo get_term_link($term, 'product-type') ?>"><button><?php echo $term-> name; ?> Stuff</button></a>
      </div>
      <?php endforeach; ?>
  </div>
</div>
</section>
