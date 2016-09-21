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
        <img class="logo" src="<?php bloginfo('template_directory'); ?>/images/product-type-icons/<?php echo $term->slug ?>.svg" alt="product-type" />
        <p class="shop-stuff-description"><?php echo $term->description; ?></p>
        <a href="<?php echo get_term_link($term, 'product-type') ?>"><button><?php echo $term-> name; ?> Stuff</button></a>
      </div>
      <?php endforeach; ?>
  </div>
</div>
</section>
