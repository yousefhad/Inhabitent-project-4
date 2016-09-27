<?php
/**
 * Custom functions that act independently of the theme templates.
 *
 * @package RED_Starter_Theme
 */

/**
 * Adds custom classes to the array of body classes.
 *
 * @param array $classes Classes for the body element.
 * @return array
 */
function red_starter_body_classes( $classes ) {
	// Adds a class of group-blog to blogs with more than 1 published author.
	if ( is_multi_author() ) {
		$classes[] = 'group-blog';
	}

	return $classes;
}
add_filter( 'body_class', 'red_starter_body_classes' );

//remove submenus
function inhabitent_remove_submenus() {
    remove_submenu_page( 'themes.php', 'theme-editor.php' );
    remove_submenu_page( 'plugins.php', 'plugin-editor.php' );
}
add_action( 'admin_init', 'inhabitent_remove_submenus', 102 );

//custom login for theme
function inhabitent_custom_login() {
  echo '<link rel="stylesheet" type="text/css" href="' . get_stylesheet_directory_uri() . '/build/css/customlogin.css" >';
}

add_action('login_head', 'inhabitent_custom_login');

// add function that removes "powered by wordpress"
function inhabitent_login_caption(){
	return 'Return to home page';
}
add_filter( 'login_headertitle', 'inhabitent_login_caption');


//change the url linked on the log-in logo to home page instead of WordPress site
function inhabitent_login_url( $url ){
	return home_url();
}
add_filter( 'login_headerurl', 'inhabitent_login_url' );

//custom function for "about page header"
function inhabitent_about_header() {

		if(!is_page_template( 'about.php' )){
			return;
}
        $imageUrl= CFS()->get('hero_image');
        $custom_css = "
              .about-header{
                        background: linear-gradient(to bottom, rgba(0,0,0,0.4) 0%, rgba(0,0,0,0.4) 100%),
												url('$imageUrl') no-repeat center bottom;
												background-size: cover;
                }";
        wp_add_inline_style( 'inhbitent-style', $custom_css );
}
add_action( 'wp_enqueue_scripts', 'inhabitent_about_header' );

// show more than 10products and in alphabetical order (default: 10, list by date)
function inhabitent_filter_product_query( $query ) {

    if ( (is_post_type_archive('product') || is_tax('product_type') ) && !is_admin() && $query->is_main_query() ) {
        $query->set( 'orderby', 'title' );
        $query->set( 'order', 'ASC' );
        $query->set( 'posts_per_page', 16 );
    }
}

add_action( 'pre_get_posts', 'inhabitent_filter_product_query' );
 /**
  * Customize excerpt length and style.
  *
  * @param  string The raw post content.
  * @return string
  */
 function red_wp_trim_excerpt( $text ) {
 	$raw_excerpt = $text;

 	if ( '' == $text ) {
 		// retrieve the post content
 		$text = get_the_content('');

 		// delete all shortcode tags from the content
 		$text = strip_shortcodes( $text );

 		$text = apply_filters( 'the_content', $text );
 		$text = str_replace( ']]>', ']]&gt;', $text );

 		// indicate allowable tags
 		$allowed_tags = '<p>,<a>,<em>,<strong>,<blockquote>,<cite>';
 		$text = strip_tags( $text, $allowed_tags );

 		// change to desired word count
 		$excerpt_word_count = 50;
 		$excerpt_length = apply_filters( 'excerpt_length', $excerpt_word_count );

 		// create a custom "more" link
 		$excerpt_end = '<span>[...]</span><p><a href="' . get_permalink() . '" class="read-more">Read more &rarr;</a></p>'; // modify excerpt ending
 		$excerpt_more = apply_filters( 'excerpt_more', ' ' . $excerpt_end );

 		// add the elipsis and link to the end if the word count is longer than the excerpt
 		$words = preg_split( "/[\n\r\t ]+/", $text, $excerpt_length + 1, PREG_SPLIT_NO_EMPTY );

 		if ( count( $words ) > $excerpt_length ) {
 			array_pop( $words );
 			$text = implode( ' ', $words );
 			$text = $text . $excerpt_more;
 		} else {
 			$text = implode( ' ', $words );
 		}
 	}

 	return apply_filters( 'wp_trim_excerpt', $text, $raw_excerpt );
 }

 remove_filter( 'get_the_excerpt', 'wp_trim_excerpt' );
 add_filter( 'get_the_excerpt', 'red_wp_trim_excerpt' );
