<?php
/**
 * culture2015 functions and definitions
 *
 * @package culture2015
 */

/**
 * Set the content width based on the theme's design and stylesheet.
 */
if ( ! isset( $content_width ) )
	$content_width = 640; /* pixels */

if ( ! function_exists( 'culture2015_setup' ) ) :
/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which runs
 * before the init hook. The init hook is too late for some features, such as indicating
 * support post thumbnails.
 */
function culture2015_setup() {

	/**
	 * Make theme available for translation
	 * Translations can be filed in the /languages/ directory
	 * If you're building a theme based on culture2015, use a find and replace
	 * to change 'culture2015' to the name of your theme in all the template files
	 */
	load_theme_textdomain( 'culture2015', get_template_directory() . '/languages' );

	/**
	 * Add default posts and comments RSS feed links to head
	 */
	add_theme_support( 'automatic-feed-links' );

	/**
	 * Enable support for Post Thumbnails on posts and pages
	 *
	 * @link http://codex.wordpress.org/Function_Reference/add_theme_support#Post_Thumbnails
	 */
	//add_theme_support( 'post-thumbnails' );

	/**
	 * This theme uses wp_nav_menu() in one location.
	 */
	register_nav_menus( array(
		'primary' => __( 'Primary Menu', 'culture2015' ),
	) );

	/**
	 * Enable support for Post Formats
	 */
	add_theme_support( 'post-formats', array( 'aside', 'image', 'video', 'quote', 'link' ) );

	/**
	 * Setup the WordPress core custom background feature.
	 */
	add_theme_support( 'custom-background', apply_filters( 'culture2015_custom_background_args', array(
		'default-color' => 'ffffff',
		'default-image' => '',
	) ) );
}
endif; // culture2015_setup
add_action( 'after_setup_theme', 'culture2015_setup' );

/**
 * Register widgetized area and update sidebar with default widgets
 */
function culture2015_widgets_init() {
	register_sidebar( array(
		'name'          => __( 'Sidebar', 'culture2015' ),
		'id'            => 'sidebar-1',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h3 class="widget-title">',
		'after_title'   => '</h1>',
	) );
}

if ( function_exists('register_sidebar') ) {
register_sidebar(array(
'name' => 'Ambassador Sidebar',
'id' => 'ambassador-sidebar',
'description' => 'Sidebar on the ambassador page',
'before_widget' => '<aside id="%1$s" class="widget %2$s">',
'after_widget' => '</aside>',
'before_title' => '<h2 class="widget-title">',
'after_title' => '</h1>',
));
}


add_action( 'widgets_init', 'culture2015_widgets_init' );

/**
 * Enqueue scripts and styles
 */
function culture2015_scripts() {
	wp_enqueue_style( 'culture2015-style', get_stylesheet_uri() );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}

}
add_action( 'wp_enqueue_scripts', 'culture2015_scripts' );

/**
 * Implement the Custom Header feature.
 */
//require get_template_directory() . '/inc/custom-header.php';

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


// First, create a function that includes the path to your favicon
function add_favicon_to_admin() {
  $favicon_url = 'http://culturecamp2015.s3.amazonaws.com/assets/favicon-admin.png';
	echo '<link rel="shortcut icon" href="' . $favicon_url . '" type="image/x-icon"/>';
}
  

// Now, just make sure that function runs when you're on the login page and admin pages  
add_action('login_head', 'add_favicon_to_admin');
add_action('admin_head', 'add_favicon_to_admin');
