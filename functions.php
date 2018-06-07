<?php
/**
 * abentindileva functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package abentindileva
 */

if ( ! function_exists( 'abentindileva_setup' ) ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function abentindileva_setup() {
		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on abentindileva, use a find and replace
		 * to change 'abentindileva' to the name of your theme in all the template files.
		 */
		load_theme_textdomain( 'abentindileva', get_template_directory() . '/languages' );

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
			'menu-1' => esc_html__( 'Primary', 'abentindileva' ),
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
		add_theme_support( 'custom-background', apply_filters( 'abentindileva_custom_background_args', array(
			'default-color' => 'ffffff',
			'default-image' => '',
		) ) );

		// Add theme support for selective refresh for widgets.
		add_theme_support( 'customize-selective-refresh-widgets' );

		/**
		 * Add support for core custom logo.
		 *
		 * @link https://codex.wordpress.org/Theme_Logo
		 */
		add_theme_support( 'custom-logo', array(
			'height'      => 250,
			'width'       => 250,
			'flex-width'  => true,
			'flex-height' => true,
		) );
	}
endif;
add_action( 'after_setup_theme', 'abentindileva_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function abentindileva_content_width() {
	// This variable is intended to be overruled from themes.
	// Open WPCS issue: {@link https://github.com/WordPress-Coding-Standards/WordPress-Coding-Standards/issues/1043}.
	// phpcs:ignore WordPress.NamingConventions.PrefixAllGlobals.NonPrefixedVariableFound
	$GLOBALS['content_width'] = apply_filters( 'abentindileva_content_width', 640 );
}
add_action( 'after_setup_theme', 'abentindileva_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function abentindileva_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar', 'abentindileva' ),
		'id'            => 'sidebar-1',
		'description'   => esc_html__( 'Add widgets here.', 'abentindileva' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
}
add_action( 'widgets_init', 'abentindileva_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function abentindileva_scripts() {
	wp_enqueue_style( 'abentindileva-style', get_stylesheet_uri() );

    wp_enqueue_style( 'abentindileva-bootstrap', 'https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css' );

    wp_enqueue_script( 'abentindileva-jquery', 'https://code.jquery.com/jquery-3.3.1.min.js', array(), '20151215', true );

    wp_enqueue_script( 'abentindileva-bootstrap', 'https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js', array(), '20151215', true );

    wp_enqueue_script( 'abentindileva-navigation', get_template_directory_uri() . '/js/navigation.js', array(), '20151215', true );

    wp_enqueue_script( 'abentindileva-main', get_template_directory_uri() . '/js/main.js', array(), '20151215', true );

	wp_enqueue_script( 'abentindileva-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20151215', true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'abentindileva_scripts' );

function abentindileva_scripts_admin() {

	wp_enqueue_script( 'abentindileva-main', get_template_directory_uri() . '/js/main.js', array(), '20151215', true );

}
add_action( 'admin_enqueue_scripts', 'abentindileva_scripts_admin' );

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

function abentin_customize_register( $wp_customize ) {

    $wp_customize->add_section('estudio' , array(
	  'title' => __('Pagina Estudio','abentindileva'),
	));

    $wp_customize->add_setting('hero_img');
    $wp_customize->add_control(new WP_Customize_Upload_Control($wp_customize,'hero_img',array(
    'label'      => __('Hero Image', 'abentindileva'),
    'section'    => 'static_front_page',
    'settings'   => 'hero_img',
    )));

    $wp_customize->add_setting('estudio_img');
    $wp_customize->add_control(new WP_Customize_Upload_Control($wp_customize,'estudio_img',array(
    'label'      => __('Estudio Image', 'abentindileva'),
    'section'    => 'estudio',
    'settings'   => 'estudio_img',
    )));

}
add_action( 'customize_register', 'abentin_customize_register' );

function add_fields_meta_box() {
	add_meta_box(
		'custom_fields', // $id
		'Imagen de Portada', // $title
		'show_custom_fields', // $callback
		'post', // $screen
		'normal', // $context
		'high' // $priority
	);
}
add_action( 'add_meta_boxes', 'add_fields_meta_box' );

function show_custom_fields() {
	global $post;
	$meta = get_post_meta( $post->ID, 'custom_img', true ); ?>

	<input type="hidden" name="img_nonce" value="<?php echo wp_create_nonce( basename(__FILE__) ); ?>">

    <p>
    	<label for="custom_img">Subir Imagen</label><br>
    	<input type="text" name="custom_img" id="custom_img" class="meta-image regular-text" value="<?php echo $meta; ?>">
    	<input type="button" class="button image-upload" value="Browse">
    </p>
    <div class="image-preview"><img src="<?php echo $meta; ?>" style="max-width: 250px;"></div>

<?php }

function save_fields_meta( $post_id ) {
	// verify nonce
	if ( !wp_verify_nonce( $_POST['img_nonce'], basename(__FILE__) ) ) {
		return $post_id;
	}
	// check autosave
	if ( defined( 'DOING_AUTOSAVE' ) && DOING_AUTOSAVE ) {
		return $post_id;
	}
	// check permissions
	if ( 'page' === $_POST['post_type'] ) {
		if ( !current_user_can( 'edit_page', $post_id ) ) {
			return $post_id;
		} elseif ( !current_user_can( 'edit_post', $post_id ) ) {
			return $post_id;
		}
	}

	$old = get_post_meta( $post_id, 'custom_img', true );
	$new = $_POST['custom_img'];

	if ( $new && $new !== $old ) {
		update_post_meta( $post_id, 'custom_img', $new );
	} elseif ( '' === $new && $old ) {
		delete_post_meta( $post_id, 'custom_img', $old );
	}
}
add_action( 'save_post', 'save_fields_meta' );
