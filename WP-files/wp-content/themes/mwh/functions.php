<?php
/**
 * MWH functions and definitions.
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package MWH
 */

if ( ! function_exists( 'mwh_setup' ) ) :
/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function mwh_setup() {
	/*
	 * Make theme available for translation.
	 * Translations can be filed in the /languages/ directory.
	 * If you're building a theme based on MWH, use a find and replace
	 * to change 'mwh' to the name of your theme in all the template files.
	 */
	load_theme_textdomain( 'mwh', get_template_directory() . '/languages' );

	// Add default posts and comments RSS feed links to head.
	add_theme_support( 'automatic-feed-links' );

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
	 * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
	 */
	add_theme_support( 'post-thumbnails' );

	// This theme uses wp_nav_menu() in one location.
	register_nav_menus( array(
		'primary' => esc_html__( 'Primary', 'mwh' ),
        'footer_menu' => esc_html__( 'Footer Menu', 'mwh' )
	) );

	/*
	 * Switch default core markup for search form, comment form, and comments
	 * to output valid HTML5.
	 */
	add_theme_support( 'html5', array(
		'search-form',
		'comment-form',
		'comment-list',
		'gallery',
		'caption',
	) );

	// Set up the WordPress core custom background feature.
	add_theme_support( 'custom-background', apply_filters( 'mwh_custom_background_args', array(
		'default-color' => 'ffffff',
		'default-image' => '',
	) ) );
}
endif;
add_action( 'after_setup_theme', 'mwh_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function mwh_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'mwh_content_width', 640 );
}
add_action( 'after_setup_theme', 'mwh_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function mwh_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar', 'mwh' ),
		'id'            => 'sidebar-1',
		'description'   => esc_html__( 'Add widgets here.', 'mwh' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
}
add_action( 'widgets_init', 'mwh_widgets_init' );

/**
 * Enqueue scripts and styles.
 */

if (!is_admin()) add_action("wp_enqueue_scripts", "my_jquery_enqueue", 11);
function my_jquery_enqueue() {
   wp_deregister_script('jquery');
   wp_register_script('jquery', "http" . ($_SERVER['SERVER_PORT'] == 443 ? "s" : "") . "://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js", true, null);
   wp_enqueue_script('jquery');
}
function mwh_scripts() {
    wp_enqueue_style( 'bootstrap', get_template_directory_uri() . '/css/bootstrap.css',false,'3.3.7','all');
	wp_enqueue_style( 'mwh-style', get_stylesheet_uri());
	wp_enqueue_script( 'mwh-bootstrap', get_template_directory_uri() . '/js/bootstrap.min.js', '', '', true );
	wp_enqueue_script( 'mwh-main', get_template_directory_uri() . '/js/main.js', '', '', true );
	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'mwh_scripts' );




/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Custom functions that act independently of the theme templates.
 */
require get_template_directory() . '/inc/extras.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
require get_template_directory() . '/inc/jetpack.php';

// Register Custom Navigation Walker
require_once('wp_bootstrap_navwalker.php');

/*
function wpdocs_codex_book_init() {
    $labels = array(
        'name'                  => _x( 'Capabilities', 'Post type general name', 'textdomain' ),
        'singular_name'         => _x( 'Capabilities', 'Post type singular name', 'textdomain' ),
        'menu_name'             => _x( 'Capabilities', 'Admin Menu text', 'textdomain' ),
        'name_admin_bar'        => _x( 'Capabilities', 'Add New on Toolbar', 'textdomain' ),
        'add_new'               => __( 'Add New', 'textdomain' ),
        'add_new_item'          => __( 'Add New capability', 'textdomain' ),
        'new_item'              => __( 'New capability', 'textdomain' ),
        'edit_item'             => __( 'Edit capability', 'textdomain' ),
        'view_item'             => __( 'View capability', 'textdomain' ),
        'all_items'             => __( 'All Capabilities', 'textdomain' ),
        'search_items'          => __( 'Search capability', 'textdomain' ),
        'parent_item_colon'     => __( 'Parent capability:', 'textdomain' ),
        'not_found'             => __( 'No capability found.', 'textdomain' ),
        'not_found_in_trash'    => __( 'No capability found in Trash.', 'textdomain' ),
        'featured_image'        => _x( 'capability Image', 'Overrides the “Featured Image” phrase for this post type. Added in 4.3', 'textdomain' ),
        'set_featured_image'    => _x( 'Set capability image', 'Overrides the “Set featured image” phrase for this post type. Added in 4.3', 'textdomain' ),
        'remove_featured_image' => _x( 'Remove capability image', 'Overrides the “Remove featured image” phrase for this post type. Added in 4.3', 'textdomain' )

    
    );
 
    $args = array(
        'labels'             => $labels,
        'menu_icon' => 'dashicons-hammer',
        'public'             => true,
        'publicly_queryable' => true,
        'show_ui'            => true,
        'show_in_menu'       => true,
        'query_var'          => true,
        'rewrite'            => array( 'slug' => 'capabilities' ),
        'capability_type'    => 'post',
        'has_archive'        => true,
        'hierarchical'       => false,
        'menu_position'      => null,
        'supports'           => array( 'title', 'editor', 'thumbnail' ),
        'taxonomies'          => array( 'category' )
    );
 
    register_post_type( 'capabilities', $args );
}
 
add_action( 'init', 'wpdocs_codex_book_init' );*/