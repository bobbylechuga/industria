<?php
/**
 * _s functions and definitions.
 *
 * @package _s
 */

if ( ! function_exists( '_s_setup' ) ) :
/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function _s_setup() {
	/*
	 * Make theme available for translation.
	 * Translations can be filed in the /languages/ directory.
	 * If you're building a theme based on _s, use a find and replace
	 * to change '_s' to the name of your theme in all the template files.
	 */
	load_theme_textdomain( '_s', get_template_directory() . '/languages' );

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

	/*
	 * Enable support for Post Formats.
	 * See https://developer.wordpress.org/themes/functionality/post-formats/
	 */
	add_theme_support( 'post-formats', array(
		'aside',
		'image',
		'video',
		'quote',
		'link',
	) );

	// Set up the WordPress core custom background feature.
	add_theme_support( 'custom-background', apply_filters( '_s_custom_background_args', array(
		'default-color' => 'ffffff',
		'default-image' => '',
	) ) );
}
endif; // _s_setup
add_action( 'after_setup_theme', '_s_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function _s_content_width() {
	$GLOBALS['content_width'] = apply_filters( '_s_content_width', 640 );
}
add_action( 'after_setup_theme', '_s_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function _s_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar', '_s' ),
		'id'            => 'sidebar-1',
		'description'   => '',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
}
add_action( 'widgets_init', '_s_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function _s_scripts() {
	wp_enqueue_style( '_s-style', get_stylesheet_uri() );
	
	wp_enqueue_style('bootstrap', get_template_directory_uri() . '/css/bootstrap.css');
	wp_enqueue_style('chocolat', get_template_directory_uri() . '/css/chocolat.css');
	wp_enqueue_style('style', get_template_directory_uri() . '/style.css');
	wp_enqueue_style('swipebox', get_template_directory_uri() . '/css/swipebox.css');
	

	wp_enqueue_script( '_s-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20130115', true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}

    wp_enqueue_script( 'bootstrap', get_template_directory_uri() . '/bootstrap/js/bootstrap.min.js', array( 'jquery' ), 'v3.3.5', true );
    
    wp_enqueue_script( 'modernizr', get_template_directory_uri() . '/js/modernizr.custom.js', array( 'jquery' ), 'v3.3.5', true );
    wp_enqueue_script( 'move-top', get_template_directory_uri() . '/js/move-top.js', array( 'jquery' ), 'v3.3.5', true );
    wp_enqueue_script( 'easing', get_template_directory_uri() . '/js/easing.js', array( 'jquery' ), 'v3.3.5', true );
    wp_enqueue_script( 'responsiveslides', get_template_directory_uri() . '/js/responsiveslides.min.js', array( 'jquery' ), 'v3.3.5', true );
    wp_enqueue_script( 'swipebox', get_template_directory_uri() . '/js/jquery.swipebox.min.js', array( 'jquery' ), 'v3.3.5', true );
    
}
add_action( 'wp_enqueue_scripts', '_s_scripts' );


function load_fonts() {
        wp_register_style('et-googleFonts', 'http://fonts.googleapis.com/css?family=Righteous');
        wp_enqueue_style( 'et-googleFonts');
        
    }
add_action('wp_print_styles', 'load_fonts');

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

/**
* Bootstrap integration
*/
require get_template_directory() . '/inc/functions-strap.php';

/*CHJ: Eliminar barra de men� de Wordpress  */

add_filter('show_admin_bar',__RETURN_FALSE);

/*CHJ: funcion para agregar soporte para men�es personalizados en el tema:
   */
   


function registro_menu_temas() {
  register_nav_menus(array(
       'header-menu' => __('Header Menu'),
       'footer-menu' => __('Footer Menu')    
    )
  );	
}

add_action('init','registro_menu_temas');

/* C�digo para agregar opciones al backend para Tel�fono y Direcci�n CHJ */

function theme_settings_page()
{
    ?>
	    <div class="wrap">
	    <h1>Datos de empresa</h1>
	    <form method="post" action="options.php">
	        <?php
	            settings_fields("section");
	            do_settings_sections("theme-options");      
	            submit_button(); 
	        ?>          
	    </form>
		</div>
	<?php
}

function add_theme_menu_item()
{
	add_menu_page("Datos de empresa", "Datos de empresa", "manage_options", "theme-panel", "theme_settings_page", null, 99);
}

add_action("admin_menu", "add_theme_menu_item");

function muestra_telefono()
{
	?>
    	<input type="text" name="telf" id="telf" value="<?php echo get_option('telf'); ?>" />
    <?php
}

function muestra_direccion()
{
	?>
    	<input type="text" name="direccion" id="direccion" value="<?php echo get_option('direccion'); ?>" />
    <?php
}	

function display_theme_panel_fields()
{
	add_settings_section("section", "All Settings", null, "theme-options");
	
	add_settings_field("telf", "N�mero de Tel�fono", "muestra_telefono", "theme-options", "section");
    add_settings_field("direccion", "Direcci�n", "muestra_direccion", "theme-options", "section");

    register_setting("section", "telf");
    register_setting("section", "direccion");
}

add_action("admin_init", "display_theme_panel_fields");