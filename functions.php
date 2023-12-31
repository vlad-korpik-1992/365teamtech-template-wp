<?php
/**
 * teamtech functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package teamtech
 */

if ( ! defined( '_S_VERSION' ) ) {
	// Replace the version number of the theme on each release.
	define( '_S_VERSION', '1.0.0' );
}

/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function teamtech_setup() {
	/*
		* Make theme available for translation.
		* Translations can be filed in the /languages/ directory.
		* If you're building a theme based on teamtech, use a find and replace
		* to change 'teamtech' to the name of your theme in all the template files.
		*/
	load_theme_textdomain( 'teamtech', get_template_directory() . '/languages' );

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
	register_nav_menus(
		array(
			'menu-1' => esc_html__( 'Primary', 'teamtech' ),
		)
	);

	/*
		* Switch default core markup for search form, comment form, and comments
		* to output valid HTML5.
		*/
	add_theme_support(
		'html5',
		array(
			'search-form',
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
			'style',
			'script',
		)
	);

	// Set up the WordPress core custom background feature.
	add_theme_support(
		'custom-background',
		apply_filters(
			'teamtech_custom_background_args',
			array(
				'default-color' => 'ffffff',
				'default-image' => '',
			)
		)
	);

	// Add theme support for selective refresh for widgets.
	add_theme_support( 'customize-selective-refresh-widgets' );

	/**
	 * Add support for core custom logo.
	 *
	 * @link https://codex.wordpress.org/Theme_Logo
	 */
	add_theme_support(
		'custom-logo',
		array(
			'height'      => 250,
			'width'       => 250,
			'flex-width'  => true,
			'flex-height' => true,
		)
	);
}
add_action( 'after_setup_theme', 'teamtech_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function teamtech_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'teamtech_content_width', 640 );
}
add_action( 'after_setup_theme', 'teamtech_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function teamtech_widgets_init() {
	register_sidebar(
		array(
			'name'          => esc_html__( 'Sidebar', 'teamtech' ),
			'id'            => 'sidebar-1',
			'description'   => esc_html__( 'Add widgets here.', 'teamtech' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);
}
add_action( 'widgets_init', 'teamtech_widgets_init' );

/**
 * Enqueue scripts and styles.
 */

add_action('wp_enqueue_scripts', 'teamtech_scripts');
remove_action('wp_head', 'print_emoji_detection_script', 7);
remove_action('wp_print_styles', 'print_emoji_styles');

add_theme_support('post-thumbnails', array('post'));
 
function teamtech_scripts() {
	wp_enqueue_style( 'teamtech-style', get_stylesheet_uri(), array(), _S_VERSION );
	wp_deregister_script('jquery');
	wp_register_script('main-script', get_template_directory_uri() . '/assets/js/main.js', array(), null, true);

	wp_enqueue_script('main-script');

	if ( is_page_template('page-contacts.php')) {

		wp_register_script('main-form-script', get_template_directory_uri() . '/assets/js/main-form.js', array(), null, true);

		wp_enqueue_script('main-form-script');
	}

	if ( is_page_template('page-home.php')){

		wp_register_script( 'jquery-script', get_template_directory_uri() . '/assets/js/jquery-3.7.1.min.js', array(), null, true );

        wp_enqueue_script( 'jquery-script' );

		wp_enqueue_style( 'magnific-style', get_template_directory_uri() . '/assets/css/magnific-popup.css', array());

        wp_register_script( 'magnific-script', get_template_directory_uri() . '/assets/js/jquery.magnific-popup.min.js', array(), null, true );

        wp_enqueue_script( 'magnific-script' );

		wp_register_script( 'magnific-main-script', get_template_directory_uri() . '/assets/js/main-magnific.js', array(), null, true );

        wp_enqueue_script( 'magnific-main-script' );

    }
}
add_action( 'wp_enqueue_scripts', 'teamtech_scripts' );

function defer_parsing_of_js( $url ) {
    if ( is_user_logged_in() ) return $url;
    if ( FALSE === strpos( $url, '.js' ) ) return $url;
    if ( strpos( $url, 'jquery.js' ) ) return $url;
    return str_replace( ' src', ' defer src', $url );
}
add_filter( 'script_loader_tag', 'defer_parsing_of_js', 10 );

function disable_gutenberg_wp_enqueue_scripts() {
      
	wp_dequeue_style('wp-block-library');
	wp_dequeue_style('wp-block-library-theme');
	 
}
add_filter('wp_enqueue_scripts', 'disable_gutenberg_wp_enqueue_scripts', 100);

add_filter( 'login_errors', function($errors){
	global $errors;
	$error_codes = $errors->get_error_codes();
	if( in_array('incorrect_password', $error_codes) || (in_array('invalid_username', $error_codes)) ){
		$error = '<strong>Ошибка:</strong> Неправильное имя пользователя или пароль';
	}
	return $error;
});

/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Functions which enhance the theme by hooking into WordPress.
 */
require get_template_directory() . '/inc/template-functions.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
if ( defined( 'JETPACK__VERSION' ) ) {
	require get_template_directory() . '/inc/jetpack.php';
}

