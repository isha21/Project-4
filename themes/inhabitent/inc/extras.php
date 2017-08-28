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

function inhabitent_login_logo() { ?>
    <style type="text/css">
        #login h1 a, .login h1 a {
            background-image: url(<?php echo get_stylesheet_directory_uri(); ?>/images/inhabitent-logo-text-dark.svg);
		height:65px;
		width:320px;
		background-size: 320px 65px;
		background-repeat: no-repeat;
        	padding-bottom: 30px;
        }
    </style>
<?php }
add_action( 'login_enqueue_scripts', 'inhabitent_login_logo' );

function inhabitent_login_logo_url(){
	 return get_bloginfo('url');
}
add_filter('login_headerurl', 'inhabitent_login_logo_url');

// remove editor links from sub-menu
function inhabitent_remove_submenus() {
remove_submenu_page( 'themes.php', 'theme-editor.php' );
remove_submenu_page( 'plugins.php', 'plugin-editor.php' );
}
add_action( 'admin_menu', 'inhabitent_remove_submenus', 110 );




function inhabitent_dynamic_css() {
    if ( ! is_page_template( 'page-templates/about.php' ) ) {
        return;
    }
    
    $image = CFS()->get( 'about_header_image' );
    if ( ! $image ) {
        return;
    }
    $hero_css = ".page-template-about .entry-header {
        background:
            linear-gradient( to bottom, rgba(0,0,0,0.4) 0%, rgba(0,0,0,0.4) 100% ),
            url({$image}) no-repeat center bottom;
        background-size: cover, cover;
        height:100vh;
    }";
    wp_add_inline_style( 'tent-style', $hero_css );
}
add_action( 'wp_enqueue_scripts', 'inhabitent_dynamic_css' );

function inhabitent_limit_archive_posts($query){
    if ($query->is_archive) {
        $query->set('posts_per_page', 20);
        $query->set('order', 'ASC');
    }
    return $query;
}
add_filter('pre_get_posts', 'inhabitent_limit_archive_posts');


 function inhabitent_archive_title($title){
    if (is_post_type_archive ( 'product' ) ){
        $title = 'Shop Stuff';
    } elseif (is_tax('product-type')){
           $title = single_term_title('', false);
}
         return $title;
 }

add_filter( 'get_the_archive_title', 'inhabitent_archive_title' );

function inhabitent_excerpt_length( $length ) {
    return 50;
}
add_filter( 'excerpt_length', 'inhabitent_excerpt_length');