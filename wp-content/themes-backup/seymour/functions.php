<?php
/**
 * seymour functions and definitions
 *
 * @package seymour
 */

if ( ! function_exists( 'seymour_setup' ) ) :
    /**
     * Sets up theme defaults and registers support for various WordPress features.
     *
     * Note that this function is hooked into the after_setup_theme hook, which
     * runs before the init hook. The init hook is too late for some features, such
     * as indicating support for post thumbnails.
     */
function seymour_setup() {

        /*
         * Make theme available for translation.
         * Translations can be filed in the /languages/ directory.
         * If you're building a theme based on seymour, use a find and replace
         * to change 'seymour' to the name of your theme in all the template files
         */
        load_theme_textdomain( 'seymour', get_template_directory() . '/languages' );
        add_post_type_support( 'page','excerpt' );
        add_post_type_support( 'post-thumbnails',array('slider_manager'));
         /*
         * Let WordPress manage the document title.
         * By adding theme support, we declare that this theme does not use a
         * hard-coded <title> tag in the document head, and expect WordPress to
         * provide it for us.
         */
         add_theme_support( 'title-tag' );

        /*
         * Enable support for Post Thumbnails on posts and pages.
         *
         * @link http://codex.wordpress.org/Function_Reference/add_theme_support#Post_Thumbnails
         */

        // This theme uses wp_nav_menu() in one location.
        register_nav_menus( array(
            'primary' => __( 'Primary Menu', 'seymour' ),
            ) );


    }
endif; // seymour_setup
add_action( 'after_setup_theme', 'seymour_setup' );

/**
 * Register widget area.
 *
 * @link http://codex.wordpress.org/Function_Reference/register_sidebar
 */
add_theme_support( 'post-thumbnails' );
function seymour_widgets_init() {
    register_sidebar( array(
        'name'          => __( 'Sidebar', 'seymour' ),
        'id'            => 'sidebar-1',
        'description'   => '',
        'before_widget' => '<div class="s-heading">',
        'after_widget'  => '</div>',
        'before_title'  => '<h1 class="widget-title">',
        'after_title'   => '</h1>',
        ) );
    register_sidebar( array(
        'name'          => __( 'Accomodations Statement', 'seymour' ),
        'id'            => 'accomodation-statement',
        'description'   => '',
        'before_widget' => '<div class="s-heading">',
        'after_widget'  => '</div>',
        'before_title'  => '<h2 class="widget-title">',
        'after_title'   => '</h2>',
        ) );

    register_sidebar( array(
        'name'          => __( 'Google Map', 'seymour' ),
        'id'            => 'google-map',
        'description'   => '',
        'before_widget' => '<div class="s-heading">',
        'after_widget'  => '</div>',
        'before_title'  => '<h2 class="widget-title">',
        'after_title'   => '</h2>',
        ) );

    register_sidebar( array(
        'name'          => __( 'Socail Links', 'seymour' ),
        'id'            => 'social-links',
        'description'   => '',
        'before_widget' => '<div class="socials fixed hidden-xs">',
        'after_widget'  => '</div>',
        ) );


    register_sidebar( array(
        'name'          => __( 'Welcome Statement', 'seymour' ),
        'id'            => 'welcome',
        'description'   => '',
        'before_widget' => '<div class="s-heading">',
        'after_widget'  => '</div>',
        'before_title'  => '<h2>',
        'after_title'   => '</h2>',
        ) );

    register_sidebar( array(
        'name'          => __( 'Local Attractions Statement', 'seymour' ),
        'id'            => 'attraction-statement',
        'description'   => '',
        'before_widget' => '<div class="s-heading">',
        'after_widget'  => '</div>',
        'before_title'  => '<h2 class="widget-title">',
        'after_title'   => '</h2>',
        ) );
    register_sidebar( array(
        'name'          => __( 'Address', 'seymour' ),
        'id'            => 'address-statement',
        'description'   => '',
        'before_widget' => '<div class="s-heading">',
        'after_widget'  => '</div>',
        'before_title'  => '<h2 class="widget-title">',
        'after_title'   => '</h2>',
        ) );

    register_sidebar( array(
        'name'          => __( 'Socials', 'seymour' ),
        'id'            => 'social-links',
        'description'   => '',
        'before_widget' => '',
        'after_widget'  => '',
        'before_title'  => '',
        'after_title'   => '',
        ) );
}
add_action( 'widgets_init', 'seymour_widgets_init' );




add_action( 'init', 'seymour_news_events_init' );
/**
 * Register a News Events post type.
 *
 * @link https://codex.wordpress.org/Function_Reference/register_post_type
 */
function  seymour_news_events_init() {
    $labels = array(
        'name'               => _x( 'Accomodations', 'post type general name', '' ),
        'singular_name'      => _x( 'Accomodation', 'post type singular name', '' ),
        'menu_name'          => _x( 'Accomodations', 'admin menu', '' ),
        'name_admin_bar'     => _x( 'Accomodation', 'add new on admin bar', '' ),
        'add_new'            => _x( 'Add New', 'accomodation', '' ),
        'add_new_item'       => __( 'Add Accomodation', '' ),
        'new_item'           => __( 'New Accomodation', '' ),
        'edit_item'          => __( 'Edit Accomodation', '' ),
        'view_item'          => __( 'View  Accomodation', '' ),
        'all_items'          => __( 'All Accomodations', '' ),
        'search_items'       => __( 'Search Accomodations', '' ),
        'parent_item_colon'  => __( 'Parent Accomodations:', '' ),
        'not_found'          => __( 'No Accomodations & found.', '' ),
        'not_found_in_trash' => __( 'No Accomodations found in Trash.', '' ),
        );

    $args = array(
        'labels'             => $labels,
        'public'             => true,
        'publicly_queryable' => true,
        'show_ui'            => true,
        'show_in_menu'       => true,
        'query_var'          => true,
        'rewrite'            => array( 'slug' => 'accomodation' ),
        'capability_type'    => 'post',
        'has_archive'        => true,
        'hierarchical'       => false,
        'menu_position'      => null,
        'supports'           => array( 'title','editor','thumbnail', 'excerpt','post-formats')
        );

    register_post_type( 'accomodation', $args );

    $labels = array(
        'name'               => _x( 'Testimonial', 'post type general name', '' ),
        'singular_name'      => _x( 'Testimonial', 'post type singular name', '' ),
        'menu_name'          => _x( 'Testimonials', 'admin menu', '' ),
        'name_admin_bar'     => _x( 'Testimonial', 'add new on admin bar', '' ),
        'add_new'            => _x( 'Add New', 'testimonial', '' ),
        'add_new_item'       => __( 'Add Testimonial', '' ),
        'new_item'           => __( 'New Testimonial', '' ),
        'edit_item'          => __( 'Edit Testimonial', '' ),
        'view_item'          => __( 'View  Testimonial', '' ),
        'all_items'          => __( 'All Testimonials', '' ),
        'search_items'       => __( 'Search testimonials', '' ),
        'parent_item_colon'  => __( 'Parent Testimonials:', '' ),
        'not_found'          => __( 'No Testimonials & found.', '' ),
        'not_found_in_trash' => __( 'No Testimonials found in Trash.', '' ),
        
        );

    $args = array(
        'labels'             => $labels,
        'public'             => true,
        'publicly_queryable' => true,
        'show_ui'            => true,
        'show_in_menu'       => true,
        'query_var'          => true,
        'rewrite'            => array( 'slug' => 'testimonial' ),
        'capability_type'    => 'post',
        'has_archive'        => true,
        'hierarchical'       => false,
        'menu_position'      => null,
        'supports'           => array('title','page-attributes'),

        );

    register_post_type( 'testimonial', $args );
    /**
     *  Local Attraction Post Type
     */
    $labels = array(
        'name'               => _x( 'Local Attraction', 'post type general name', '' ),
        'singular_name'      => _x( 'Local Attraction', 'post type singular name', '' ),
        'menu_name'          => _x( 'Local Attractions', 'admin menu', '' ),
        'name_admin_bar'     => _x( 'Local Attraction', 'add new on admin bar', '' ),
        'add_new'            => _x( 'Add New', 'Local Attraction', '' ),
        'add_new_item'       => __( 'Add Local Attraction', '' ),
        'new_item'           => __( 'New Local Attractions', '' ),
        'edit_item'          => __( 'Edit Local Attraction', '' ),
        'view_item'          => __( 'View Local Attraction', '' ),
        'all_items'          => __( 'All Local Attraction', '' ),
        'search_items'       => __( 'Search Local Attraction ', '' ),
        'parent_item_colon'  => __( 'Parent Local Attraction:', '' ),
        'not_found'          => __( 'No Local Attractions & found.', '' ),
        'not_found_in_trash' => __( 'No Local Attractions found in Trash.', '' ),
        );

    $args = array(
        'labels'             => $labels,
        'public'             => true,
        'publicly_queryable' => true,
        'show_ui'            => true,
        'show_in_menu'       => true,
        'query_var'          => true,
        'rewrite'            => array( 'slug' => 'local-attraction' ),
        'capability_type'    => 'post',
        'has_archive'        => false,
        'hierarchical'       => false,
        'menu_position'      => null,
        );

    register_post_type( 'local-attraction', $args );
}
add_action('get_header', 'remove_admin_login_header');
function remove_admin_login_header() {
    remove_action('wp_head', '_admin_bar_bump_cb');
}

/* Get page name (template or post type) */
function seymour_wordpress_page_name() {

    global $post;

    $pageTemplate = substr( basename( get_page_template() ), 0, -4 );
    if( !$pageTemplate ) {

        if( get_post_type( $post ) === 'post' ) {
            return 'post-blog';
        } else {
            return 'post-' . get_post_type( $post );
        }

    } else {
        return $pageTemplate;
    }

}
/* Enqueue scripts */
function seymour_wordpress_scripts() {

    /* CSS */
    wp_enqueue_style( 'bootstrap', get_template_directory_uri() . '/css/bootstrap.css?include', array(), '1.01' );
    wp_enqueue_style( 'font-awesome', get_template_directory_uri() . '/css/font-awesome.css?include');
    wp_enqueue_style( 'scrollbar', get_template_directory_uri() . '/css/scrollbar.css?include', array(), '1.01' );

    
    /* JS */ 
    wp_enqueue_script( 'library', get_template_directory_uri() .'/js/library.min.js?include');
    wp_enqueue_script( 'easing', get_template_directory_uri() . '/js/jquery.easing.min.js?include');
    wp_enqueue_script( 'bootstrap-min-js', get_template_directory_uri() .'/js/bootstrap.min.js?include');

    wp_enqueue_script( 'scrollbar', get_template_directory_uri() . '/js/scrollbar.js?include');
    wp_enqueue_script( 'scrollbar', get_template_directory_uri() . '/js/touchSwipe.js?include');

    /* register css and jquert for home page... */
    
    if(is_home())
    {
        wp_enqueue_style( 'supersized', get_template_directory_uri() . '/css/supersized.css?include');
        wp_enqueue_style( 'supersized-shutter', get_template_directory_uri() .'/css/supersized.shutter.css?include');
        wp_enqueue_script( 'supersized', get_template_directory_uri() . '/js/supersized.3.2.7.min.js?async');
        wp_enqueue_script( 'supersized-shutter', get_template_directory_uri() . '/js/supersized.shutter.min.js?async');

    }

    /* Scripts for specific pages */
    switch ( seymour_wordpress_page_name() ) {

        /* Pages */
        case 'page-about': 

        wp_enqueue_script( 'util-min', get_template_directory_uri() . '/js/util.min.js?async');
        wp_enqueue_script( 'utilinitialize', get_template_directory_uri() . '/js/utilinitialize.min.js?async');
        wp_enqueue_script( 'masonry', get_template_directory_uri() . '/js/masonry.js?async');
        wp_enqueue_script( 'fancybox', get_template_directory_uri() . '/js/jquery.fancybox.js?async');
        wp_enqueue_script( 'images-loaded', get_template_directory_uri() . '/js/images-loaded.js?async');
        wp_enqueue_style( 'util', get_template_directory_uri() . '/css/util.css?include');
        wp_enqueue_style( 'masonry', get_template_directory_uri() . '/css/masonry.css?include');
        wp_enqueue_style( 'fancybox', get_template_directory_uri() . '/css/jquery.fancybox.css?include');
        break;

        case 'contact-us':
        wp_enqueue_script( 'google-map','http://maps.google.com/maps/api/js?sensor=false&v=3.5&ver=3.9.12');
        break;

        case 'page-book-now':
         wp_enqueue_style('datepicker','https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.4/themes/smoothness/jquery-ui.css',array(), '1.01');
          wp_enqueue_script( 'datepicker-js','https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.4/jquery-ui.min.js',array(), '1.01');
        break;
    }


    wp_enqueue_script( 'custom', get_template_directory_uri() . '/js/custom.js?include');



} 
add_action( 'wp_enqueue_scripts', 'seymour_wordpress_scripts' );

////function wpb_first_and_last_menu_class($items) {
////    $items[1]->classes[] = 'first';
////    $items[count($items)]->classes[] = 'bn';
////    return $items;
////}
//add_filter('wp_nav_menu_objects', 'wpb_first_and_last_menu_class');

wpcf7_add_form_tag('postdropdown', 'createbox',true);

function createbox(){
    if(isset($_POST['booking'])){
     $romm_id=$_POST['room_id'];
 }else{
    $romm_id="";
}
global $post;
$args = array('numberposts' => 0, 'post_type' => 'accomodation' );
$myposts = get_posts( $args );
$output = "<select name='room' id='room' class='form-control'><option>Choose Room Type</option>";
foreach ( $myposts as $post ) : setup_postdata($post);
$title = get_the_title();
$selectedId=(get_the_ID()==$romm_id)? "selected=selected":"";
$output .= "<option value='$title' $selectedId> $title </option>";

endforeach;
$output .= "</select>";
return $output;
}
