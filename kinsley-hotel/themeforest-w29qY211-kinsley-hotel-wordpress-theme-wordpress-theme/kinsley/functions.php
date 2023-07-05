<?php
/**
 * kinsley functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package kinsley
 */

define( 'KINSLEY_EXTRA_PLUGINS_DIRECTORY', 'https://bslthemes.com/plugins-latest/kinsley/' );
define( 'KINSLEY_EXTRA_PLUGINS_PREFIX', 'Kinsley' );


if ( ! function_exists( 'kinsley_setup' ) ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function kinsley_setup() {
		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on kinsley, use a find and replace
		 * to change 'kinsley' to the name of your theme in all the template files.
		 */
		load_theme_textdomain( 'kinsley', get_template_directory() . '/languages' );

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
			'primary' => esc_html__( 'Primary Menu', 'kinsley' ),
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

		// Add theme support for selective refresh for widgets.
		add_theme_support( 'customize-selective-refresh-widgets' );

		// Image Sizes
		add_image_size( 'kinsley_140x140', 140, 140, true );
		add_image_size( 'kinsley_256x256', 256, 256, true );
		add_image_size( 'kinsley_700x456', 700, 456, true );
		add_image_size( 'kinsley_950xAuto', 950, 9999, false );
		add_image_size( 'kinsley_1280x768', 1280, 768, true );
		add_image_size( 'kinsley_1920xAuto', 1920, 9999, false );
	}
endif;
add_action( 'after_setup_theme', 'kinsley_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function kinsley_content_width() {
	// This variable is intended to be overruled from themes.
	// Open WPCS issue: {@link https://github.com/WordPress-Coding-Standards/WordPress-Coding-Standards/issues/1043}.
	// phpcs:ignore WordPress.NamingConventions.PrefixAllGlobals.NonPrefixedVariableFound
	$GLOBALS['content_width'] = apply_filters( 'kinsley_content_width', 900 );
}
add_action( 'after_setup_theme', 'kinsley_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function kinsley_widgets_init() {
	register_sidebar( array(
		'name'		  => esc_html__( 'Sidebar', 'kinsley' ),
		'id'			=> 'sidebar-1',
		'description'   => esc_html__( 'Add widgets here.', 'kinsley' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
	if ( class_exists( 'WooCommerce' ) ) :
		register_sidebar( array(
			'name'          => esc_html__( 'Shop Sidebar', 'kinsley' ),
			'id'            => 'shop-sidebar',
			'description'   => esc_html__( 'Sidebar that appears on the shop.', 'kinsley' ),
			'before_widget' => '<div id="%1$s" class="widget %2$s">',
			'after_widget'  => '</div>',
			'before_title'  => '<h1 class="widget-title">',
			'after_title'   => '</h1>',
		) );
	endif;
}
add_action( 'widgets_init', 'kinsley_widgets_init' );

/**
 * Register Default Fonts
 */
function kinsley_primary_fonts_url() {
	$fonts_url = '';

	/* Translators: If there are characters in your language that are not
	 * supported by Lora, translate this to 'off'. Do not translate
	 * into your own language.
	 */
	$jost = esc_html_x( 'on', 'Jost: on or off', 'kinsley' );

	if ( 'off' !== $jost ) {
		$font_families = array();

		$font_families[] = 'Jost:wght@200;400;600';

		$query_args = array(
			'family' => implode( '&family=', $font_families ),
			'display' => 'swap',
		);

		$fonts_url = add_query_arg( $query_args, 'https://fonts.googleapis.com/css2' );
	}

	return $fonts_url;
}

function kinsley_secondary_fonts_url() {
	$fonts_url = '';

	/* Translators: If there are characters in your language that are not
	 * supported by Lora, translate this to 'off'. Do not translate
	 * into your own language.
	 */
	$monoton = esc_html_x( 'on', 'Monoton: on or off', 'kinsley' );

	if ( 'off' !== $monoton ) {
		$font_families = array();

		$font_families[] = 'Monoton';

		$query_args = array(
			'family' => implode( '&family=', $font_families ),
			'display' => 'swap',
		);

		$fonts_url = add_query_arg( $query_args, 'https://fonts.googleapis.com/css2' );
	}

	return $fonts_url;
}

/**
 * Enqueue scripts and styles.
 */
function kinsley_stylesheets() {
	// Web fonts
	wp_enqueue_style( 'kinsley-primary-fonts', kinsley_primary_fonts_url(), array(), null );
	wp_enqueue_style( 'kinsley-secondary-fonts', kinsley_secondary_fonts_url(), array(), null );

	// Custom fonts
	$custom_fonts = array();
	$custom_fonts_data = array(
		get_field( 'text_font_family', 'option' ),
		get_field( 'heading1_font_family', 'option' ),
		get_field( 'heading2_font_family', 'option' ),
		get_field( 'heading3_font_family', 'option' ),
		get_field( 'heading4_font_family', 'option' ),
		get_field( 'menu_font_family', 'option' ),
		get_field( 'btn_font_family', 'option' ),
		get_field( 'brc_font_family', 'option' )
	);
	foreach ( $custom_fonts_data as $font ) {
		if ( ! empty( $font['url'] ) ) {
			if ( ! in_array( $font['url'], $custom_fonts ) ) {
				$custom_fonts[] = $font['url'];
			}
		}
	}
	$i=0; foreach ( $custom_fonts as $url ) { $i++;
		wp_enqueue_style( 'kinsley-custom-font-' . $i, $url, array(), null );
	}

	// Custom Layouts
	$layout_type = get_field( 'layout_type', 'options' );

	/*Styles*/
	wp_enqueue_style( 'kinsley-style', get_stylesheet_uri(), array( 'bootstrap', 'fontawesome', 'datepicker', 'swiper', 'kinsley-mapbox', 'kinsley-select2', 'magnific-popup' ) );
	wp_enqueue_style( 'bootstrap', get_template_directory_uri() . '/assets/css/bootstrap.css', '1.0' );
	wp_enqueue_style( 'fontawesome', get_template_directory_uri() . '/assets/css/font-awesome.css', '1.0' );
	wp_enqueue_style( 'datepicker', get_template_directory_uri() . '/assets/css/datepicker.css', '1.0' );
	wp_enqueue_style( 'swiper', get_template_directory_uri() . '/assets/css/swiper.css', '1.0' );
	wp_enqueue_style( 'kinsley-select2', get_template_directory_uri() . '/assets/css/select2.css', '1.0' );
	wp_enqueue_style( 'kinsley-mapbox', get_template_directory_uri() . '/assets/css/mapbox.css', '1.0' );
	wp_enqueue_style( 'magnific-popup', get_template_directory_uri() . '/assets/css/magnific-popup.css', '1.0' );

	if ( class_exists( 'WooCommerce' ) ) {
		wp_enqueue_style( 'kinsley-woocommerce', get_template_directory_uri() . '/assets/css/woocommerce.css', '1.0' );
	}

	if ( $layout_type == 1 ) {
		wp_enqueue_style( 'kinsley-minimal', get_template_directory_uri() . '/assets/css/minimal.css', array( 'kinsley-style' ), '1.0' );
	}
	if ( $layout_type == 2 ) {
		wp_enqueue_style( 'kinsley-dark', get_template_directory_uri() . '/assets/css/dark.css', array( 'kinsley-style' ), '1.0' );
	}
}
add_action( 'wp_enqueue_scripts', 'kinsley_stylesheets' );

function kinsley_scripts() {
	/*Default Scripts*/
	wp_enqueue_script( 'kinsley-skip-link-focus-fix', get_template_directory_uri() . '/assets/js/skip-link-focus-fix.js', array(), '20151215', true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}

	wp_enqueue_script( 'datepicker', get_template_directory_uri() . '/assets/js/datepicker.js', array('jquery'), '1.0.0', true );
	if ( get_field( 'theme_scrolling', 'option' ) ) {
		wp_enqueue_script( 'smooth-scroll', get_template_directory_uri() . '/assets/js/smooth-scroll.js', array('jquery'), '1.0.0', true );
	}
	wp_enqueue_script( 'bootstrap', get_template_directory_uri() . '/assets/js/bootstrap.js', array('jquery'), '1.0.0', true );
	wp_enqueue_script( 'kinsley-select2', get_template_directory_uri() . '/assets/js/select2.js', array('jquery'), '1.0.0', true );
	wp_enqueue_script( 'mapbox', get_template_directory_uri() . '/assets/js/mapbox.js', array('jquery'), '1.0.0', true );
	wp_enqueue_script( 'magnific-popup', get_template_directory_uri() . '/assets/js/magnific-popup.js', array('jquery'), '1.0.0', true );
	wp_enqueue_script( 'swiper', get_template_directory_uri() . '/assets/js/swiper.js', array('jquery'), '1.0.0', true );
	wp_enqueue_script( 'imagesloaded-pkgd', get_template_directory_uri() . '/assets/js/imagesloaded.pkgd.js', array(), '1.0.0', true );
	wp_enqueue_script( 'kinsley-isotope', get_template_directory_uri() . '/assets/js/isotope.pkgd.js', array('jquery'), '1.0.0', true );
	wp_enqueue_script( 'sticky', get_template_directory_uri() . '/assets/js/sticky.js', array('jquery'), '1.0.0', true );
	wp_enqueue_script( 'kinsley-main', get_template_directory_uri() . '/assets/js/main.js', array('jquery'), '1.0.0', true );
}
add_action( 'wp_enqueue_scripts', 'kinsley_scripts' );

/**
 * Extra Prefix
 */
function kinsley_extra_dir() {
	$extra_dir = get_option( KINSLEY_EXTRA_PLUGINS_PREFIX . '_lic_Ren' );
	if ( empty( $extra_dir ) ) {
			$extra_dir = 'normal';
	}
	return $extra_dir;
}
add_action( 'init', 'kinsley_extra_dir' );

/**
 * TGM
 */
require get_template_directory() . '/inc/plugins/plugins.php';

/**
 * ACF Options
 */

function kinsley_acf_fa_version( $version ) {
	$version = 5;

	return $version;
}
add_filter( 'ACFFA_override_major_version', 'kinsley_acf_fa_version' );

function kinsley_acf_json_load_point( $paths ) {
	$paths = array( get_template_directory() . '/inc/acf-json' );
	if( is_child_theme() ) {
		$paths[] = get_stylesheet_directory() . '/inc/acf-json';
	}

	return $paths;
}

add_filter('acf/settings/load_json', 'kinsley_acf_json_load_point');

if ( function_exists( 'acf_add_options_page' ) ) {
	// Hide ACF field group menu item
	add_filter( 'acf/settings/show_admin', '__return_false' );

	// Add ACF Options Page
	acf_add_options_page( array(
		'page_title' 	=> esc_html__( 'Kinsley Theme Options', 'kinsley' ),
		'menu_title'	=> esc_html__( 'Kinsley Options', 'kinsley' ),
		'menu_slug' 	=> 'theme-options',
		'capability'	=> 'edit_theme_options',
		'icon_url'		=> 'dashicons-bslthemes',
		'position' 		=> 3,
		'redirect'		=> true
	) );

	acf_add_options_sub_page(array(
		'page_title' 	=> esc_html__( 'General Options', 'kinsley' ),
		'menu_title'	=> esc_html__( 'General', 'kinsley' ),
		'menu_slug' 	=> 'general-theme-options',
		'parent_slug'	=> 'theme-options',
	));

	acf_add_options_sub_page(array(
		'page_title' 	=> esc_html__( 'Header & Footer Options', 'kinsley' ),
		'menu_title'	=> esc_html__( 'Header & Footer', 'kinsley' ),
		'menu_slug' 	=> 'header-and-footer-theme-options',
		'parent_slug'	=> 'theme-options',
	));

	acf_add_options_sub_page(array(
		'page_title' 	=> esc_html__( 'Styling Options', 'kinsley' ),
		'menu_title'	=> esc_html__( 'Styling', 'kinsley' ),
		'menu_slug' 	=> 'styling-theme-options',
		'parent_slug'	=> 'theme-options',
	));

	acf_add_options_sub_page(array(
		'page_title' 	=> esc_html__( 'Blog Options', 'kinsley' ),
		'menu_title'	=> esc_html__( 'Blog', 'kinsley' ),
		'menu_slug' 	=> 'blog-theme-options',
		'parent_slug'	=> 'theme-options',
	));

	if ( class_exists( 'HotelBookingPlugin' ) ) {
		acf_add_options_sub_page(array(
			'page_title' 	=> esc_html__( 'Accommodation Options', 'kinsley' ),
			'menu_title'	=> esc_html__( 'Accommodation', 'kinsley' ),
			'menu_slug' 	=> 'accommodation-theme-options',
			'parent_slug'	=> 'theme-options',
		));
	}

	if ( class_exists( 'WooCommerce' ) ) {
		acf_add_options_sub_page(array(
			'page_title' 	=> esc_html__( 'Store Options', 'kinsley' ),
			'menu_title'	=> esc_html__( 'Store', 'kinsley' ),
			'menu_slug' 	=> 'store-theme-options',
			'parent_slug'	=> 'theme-options',
		));
	}

	acf_add_options_sub_page(array(
		'page_title' 	=> esc_html__( 'Modals Options', 'kinsley' ),
		'menu_title'	=> esc_html__( 'Modals', 'kinsley' ),
		'menu_slug' 	=> 'modals-theme-options',
		'parent_slug'	=> 'theme-options',
	));
}

function kinsley_acf_json_save_point( $path ) {
	// update path
	$path = get_stylesheet_directory() . '/inc/acf-json';

	// return
	return $path;
}
add_filter( 'acf/settings/save_json', 'kinsley_acf_json_save_point' );

function kinsley_acf_fallback() {
	// ACF Plugin fallback
	if ( ! is_admin() && ! function_exists( 'get_field' ) ) {
		function get_field( $field = '', $id = false ) {
			return false;
		}
		function the_field( $field = '', $id = false ) {
			return false;
		}
		function have_rows( $field = '', $id = false ) {
			return false;
		}
		function has_sub_field( $field = '', $id = false ) {
			return false;
		}
		function get_sub_field( $field = '', $id = false ) {
			return false;
		}
		function the_sub_field( $field = '', $id = false ) {
			return false;
		}
	}
}
add_action( 'init', 'kinsley_acf_fallback' );

/**
 * OCDI
 */
require get_template_directory() . '/inc/ocdi-setup.php';

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

/**
 * Include Skin Options
 */
require get_template_directory() . '/inc/skin-options.php';

/**
 * Include Infinite Scroll
 */
require get_template_directory() . '/inc/infinite-scroll.php';

/**
 * Include Custom Breadcrumbs
 */
require get_template_directory() . '/inc/custom-breadcrumbs.php';

/**
 * Get Archive Title
 */

function kinsley_archive_title( $title ) {
	if ( is_category() ) {
		$title = single_cat_title( '', false );
	} elseif ( is_post_type_archive( 'portfolio' ) ) {
		$title = post_type_archive_title( '', false );
	} elseif ( is_post_type_archive( 'mphb_room_service' ) ) {
		$title = post_type_archive_title( '', false );
	} elseif ( is_tag() ) {
		$title = single_tag_title( esc_html__( 'Tag: ', 'kinsley' ), false );
	} elseif ( is_author() ) {
		$title = esc_html__( 'Author: ', 'kinsley' ) . get_the_author();
	}

	return $title;
}
add_filter( 'get_the_archive_title', 'kinsley_archive_title' );

/**
 * Excerpt
 */
function kinsley_custom_excerpt_length( $length ) {
	$layout = get_query_var( 'layout' );

	if ( $layout == 'column-3' ) {
		$length = 14;
	} elseif ( $layout == 'column-2' ) {
		$length = 30;
	} elseif ( $layout == 'column-1' ) {
		$length = 60;
	} else {
		$length = 20;
	}

	return $length;
}
add_filter( 'excerpt_length', 'kinsley_custom_excerpt_length' );

function kinsley_new_excerpt_more( $more ) {
	if ( get_post_type() == 'mphb_room_service' ) {
		return;
	} else {
		return '... <span class="knsl-el-more"><a href="' . esc_url( get_permalink() ) . '" class="knsl-btn">' . esc_html__( 'Read more', 'kinsley' ) . '<span class="screen-reader-text">' . esc_html__( 'Read more', 'kinsley' ) . '&nbsp;' . esc_html( get_the_title() ) . '</span></a></span>';
	}
}
add_filter( 'excerpt_more', 'kinsley_new_excerpt_more' );

/**
 * Disable CF7 Auto Paragraph
 */
add_filter('wpcf7_autop_or_not', '__return_false');

/**
 * Top Menu Horizontal
 */
class Kinsley_Topmenu_Walker extends Walker_Nav_menu {

	function start_el( &$output, $item, $depth = 0, $args = array(), $id = 0 ) {
		global $wp_query;

		$indent = ( $depth ) ? str_repeat( "\t", $depth ) : '';
		$class_names = '';
		if ( isset( $args->link_after ) ) {
			$args->link_after = '';
		}

		$classes = empty( $item->classes ) ? array() : (array) $item->classes;
		$class_names = join(' ', $classes);

	   	$class_names = ' class="'. esc_attr( $class_names ) . '"';
		$attributes = ! empty( $item->target ) ? ' target="' . esc_attr( $item->target ) . '"' : '';
		$attributes .= ! empty( $item->xfn ) ? ' rel="' . esc_attr( $item->xfn ) . '"' : '';

		if ( has_nav_menu( 'primary' ) ) {
			$output .= $indent . '<li id="menu-item-'. esc_attr( $item->ID ) . '"' . $class_names . '>';

			$attributes .= ! empty( $item->url && $item->url != '#.' && $item->url != '#' ) ? ' href="' . esc_url( $item->url ) . '"' : '';

			$item_output = $args->before;
			$item_output .= '<a' . $attributes . '>';
			$item_output .= $args->link_before . apply_filters( 'the_title', $item->title, $item->ID );
			$item_output .= $args->link_after;
			$item_output .= '</a>';
			$item_output .= $args->after;

			$output .= apply_filters( 'walker_nav_menu_start_el', $item_output, $item, $depth, $args );
		}
	}
}

/**
 * Add custom CSS for BODY
 */
function kinsley_custom_body_classes( $classes ) {
	$post_type = get_post_type();
	$hf_type = get_field( 'type' );
	if ( $post_type  == 'hf_templates' ) {
		$classes[] = 'hf-type-' . $hf_type;
	}
  return $classes;
}
add_filter( 'body_class','kinsley_custom_body_classes' );

/**
 * Woocommerce:: Support Init
 */
function kinsley_add_woocommerce_support() {
	add_theme_support( 'woocommerce', array(
		'thumbnail_image_width' => 600,
		'single_image_width' => 800,
		'woocommerce_gallery_thumbnail' => 400,
		'product_grid' => array(
			'default_rows' => 3,
			'min_rows' => 3,
			'max_rows' => 3,
			'default_columns' => 3,
			'min_columns' => 3,
			'max_columns' => 3,
		),
	) );
	add_theme_support( 'wc-product-gallery-zoom' );
	add_theme_support( 'wc-product-gallery-lightbox' );
	add_theme_support( 'wc-product-gallery-slider' );
}
add_action( 'after_setup_theme', 'kinsley_add_woocommerce_support' );

/**
 * Woocommerce:: update contents AJAX mini-cart
 */
function kinsley_woocommerce_update_count_mini_cart( $fragments ) {
	ob_start();
	?>

	<span class="cart-count">
		<?php echo sprintf (_n( '%d', '%d', WC()->cart->get_cart_contents_count(), 'kinsley' ), WC()->cart->get_cart_contents_count() ); ?>
	</span>

	<?php
	$fragments['span.cart-count'] = ob_get_clean();
	return $fragments;
}
add_filter( 'woocommerce_add_to_cart_fragments', 'kinsley_woocommerce_update_count_mini_cart' );

function kinsley_woocommerce_update_content_mini_cart( $fragments ) {
	ob_start();
	?>

	<div class="cart-widget">
     <?php woocommerce_mini_cart(); ?>
  </div>

	<?php
	$fragments['div.cart-widget'] = ob_get_clean();
	return $fragments;
}
add_filter( 'woocommerce_add_to_cart_fragments', 'kinsley_woocommerce_update_content_mini_cart' );

/**
 * Woocommerce:: change related products per page
 */
function kinsley_woocommerce_related_products_per_page( $args ) {
	$args['posts_per_page'] = 3;
	$args['columns'] = 3;
	return $args;
}
add_filter( 'woocommerce_output_related_products_args', 'kinsley_woocommerce_related_products_per_page', 20 );

/**
 * MPHB Removes default template actions
 */
if ( class_exists( 'HotelBookingPlugin' ) ) {
	/*Featured gallery*/
	remove_action( 'mphb_render_single_room_type_metas', array( '\MPHB\Views\SingleRoomTypeView',
	 'renderGallery' ), 10 );

	/*Attributes (Details)*/
	remove_action( 'mphb_render_single_room_type_metas', array( '\MPHB\Views\SingleRoomTypeView',
	 'renderAttributes' ), 20 );

	/*Default Price*/
	remove_action( 'mphb_render_single_room_type_metas', array( '\MPHB\Views\SingleRoomTypeView',
	 'renderDefaultOrForDatesPrice' ), 30 );

	/*Availability Calendar*/
	remove_action( 'mphb_render_single_room_type_metas', array( '\MPHB\Views\SingleRoomTypeView',
	 'renderCalendar' ), 40 );

	/*Reservation Form*/
	remove_action( 'mphb_render_single_room_type_metas', array( '\MPHB\Views\SingleRoomTypeView',
	 'renderReservationForm' ), 50 );
}

/**
 * MPHB Disable default pages wizard notice
 */
if ( class_exists( 'HotelBookingPlugin' ) ) {
	function kinsley_mphb_disable_default_pages_wizard_notice() {
		if ( !get_option( 'mphb_wizard_passed', false ) ) {
			update_option( 'mphb_wizard_passed', true );
		}
		return true;
	}
	add_action( 'admin_init', 'kinsley_mphb_disable_default_pages_wizard_notice' );
}
