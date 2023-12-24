<?php
/**
 * OneAngrySkull functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package OneAngrySkull
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
function oneangryskull_setup() {
	/*
		* Make theme available for translation.
		* Translations can be filed in the /languages/ directory.
		* If you're building a theme based on OneAngrySkull, use a find and replace
		* to change 'oneangryskull' to the name of your theme in all the template files.
		*/
	load_theme_textdomain( 'oneangryskull', get_template_directory() . '/languages' );

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
			'menu-1' => esc_html__( 'Primary', 'oneangryskull' ),
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
			'oneangryskull_custom_background_args',
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
add_action( 'after_setup_theme', 'oneangryskull_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function oneangryskull_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'oneangryskull_content_width', 640 );
}
add_action( 'after_setup_theme', 'oneangryskull_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
 
 
function display_home_products(){
    $args = array(
        'post_type' => 'product',
        'posts_per_page' => 6,
    );
    $loop = new WP_Query($args);
    if ($loop->have_posts()) {
        while ($loop->have_posts()) : $loop->the_post();
            global $product;
            $image_id = $product->get_image_id();
            $image_url = wp_get_attachment_url($image_id);
      
            echo '<div class="col-xs-6 col-sm-4 col-lg-2">';
            echo '<article>';
            echo '<a  href="' . get_permalink() . '">' ;
            echo '</a>';
            echo '<div class="info">';
            echo '<span class="add-favorite">';
            echo '<a href="javascript:void(0);" data-title="Add to favorites" data-title-added="Added to favorites list"><i class="icon icon-heart"></i></a>';
            echo '</span>';
            echo '<span>';
            echo '<a href="#' . get_the_title() . '" class="mfp-open" data-title="Quick wiew"><i class="icon icon-eye"></i></a>';
            echo '</span>';
            echo '</div>';
             echo '<div class="btn btn-add">';
            echo '<i class="icon icon-cart"></i>';
            echo '</div>';
            echo '<div class="figure-grid">'
            ;
            echo '<div class="image">';
            echo '<a  href="#' . get_the_title() . '"> <img src="' . $image_url . '" alt="' . get_the_title() . '" width="360">';
             echo '</a>';
            echo '</div>';
            echo '<div class="text">';
            echo '<h2 class="title h5">
            <a class="mfp-open"  href="' . get_permalink() . '">' . get_the_title() . '</a></h2>';
            echo '<span class="price">' . $product->get_price_html() . '</span>';
            echo '</div>';
           
            
           
            echo '</div>';
            echo '</article>';
            echo '</div>';

			echo '<div class="popup-main mfp-hide" id="' . get_the_title() . '">';



			echo '<div class="product">';



        echo '<div class="popup-title">';
           echo '<div class="h1 title">';
             echo  ' ' . get_the_title() . '';
              echo  '<small>product category</small>';
            echo '</div>';
        echo '</div>';


        echo '<div class="owl-product-gallery">';
            echo '<img src="" alt="" width="640" />';
        echo '</div>';


        echo '<div class="popup-content">';
           echo '<div class="product-info-wrapper">';
                echo '<div class="row">';


                    echo '<div class="col-sm-6">';
                    echo '<div class="info-box">';
                    echo  '<strong>Maifacturer</strong>';
                    echo '<span>Brand name</span>';
                    echo '</div>';
                    echo '<div class="info-box">';
                    echo   '<strong>Materials</strong>';
                    echo  '<span>Wood, Leather, Acrylic</span>';
                    echo  '</div>
                        <div class="info-box">
                        <strong>Availability</strong>
                            <span><i class="fa fa-check-square-o"></i> in stock</span>
                        </div>
                    </div>';


                  echo ' <div class="col-sm-6">
                        <div class="info-box">
                            <strong>Available Colors</strong>
                            <div class="product-colors clearfix">
                                <span class="color-btn color-btn-red"></span>
                                <span class="color-btn color-btn-blue checked"></span>
                                <span class="color-btn color-btn-green"></span>
                                <span class="color-btn color-btn-gray"></span>
                                <span class="color-btn color-btn-biege"></span>
                            </div>
                        </div>
                        <div class="info-box">
                            <strong>Choose size</strong>
                            <div class="product-colors clearfix">
                                <span class="color-btn color-btn-biege">S</span>
                                <span class="color-btn color-btn-biege checked">M</span>
                                <span class="color-btn color-btn-biege">XL</span>
                                <span class="color-btn color-btn-biege">XXL</span>
                            </div>
                        </div>
                    </div>

                </div>
            </div> 
        </div> ';


       echo '<div class="popup-table">
            <div class="popup-cell">
                <div class="price">
                    <span class="h3">' . $product->get_price_html() . '</span>
                </div>
            </div>
            <div class="popup-cell">
                <div class="popup-buttons">
                    <a href="product.html"><span class="icon icon-eye"></span> <span class="hidden-xs">View more</span></a>
                    <a href="javascript:void(0);"><span class="icon icon-cart"></span> <span class="hidden-xs">Buy</span></a>
                </div>
            </div>
        </div>

    </div>
</div>';
        endwhile;
    } else {
        echo '<p>No products found</p>';
    }
    wp_reset_postdata();
}

add_shortcode('display_home_products', 'display_home_products'); 


function oneangryskull_widgets_init() {
	register_sidebar(
		array(
			'name'          => esc_html__( 'Sidebar', 'oneangryskull' ),
			'id'            => 'sidebar-1',
			'description'   => esc_html__( 'Add widgets here.', 'oneangryskull' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);
}
add_action( 'widgets_init', 'oneangryskull_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function oneangryskull_scripts() {
	wp_enqueue_style( 'oneangryskull-style', get_stylesheet_uri(), array(), _S_VERSION );
	wp_style_add_data( 'oneangryskull-style', 'rtl', 'replace' );

	wp_enqueue_script( 'oneangryskull-navigation', get_template_directory_uri() . '/js/navigation.js', array(), _S_VERSION, true );


// new style and css   my custom
/*
wp_enqueue_style( 'theme', get_template_directory_uri() . '/css/theme.css', false, '1.1', 'all');
wp_enqueue_style( 'animate', get_template_directory_uri() . '/css/animate.css', false, '1.1', 'all');
wp_enqueue_style( 'bootstrap', get_template_directory_uri() . '/css/bootstrap.css', false, '1.1', 'all');
wp_enqueue_style( 'font_awesome', get_template_directory_uri() . '/css/font-awesome.css', false, '1.1', 'all');
wp_enqueue_style( 'ion-range-slider', get_template_directory_uri() . '/css/ion-range-slider.css', false, '1.1', 'all');
wp_enqueue_style( 'linear-icons', get_template_directory_uri() . '/css/linear-icons.css', false, '1.1', 'all');
wp_enqueue_style( 'magnific-popup', get_template_directory_uri() . '/css/magnific-popup.css', false, '1.1', 'all');
wp_enqueue_style( 'owlcarousel', get_template_directory_uri() . '/css/owl.carousel.css', false, '1.1', 'all');



wp_enqueue_script( 'script', get_template_directory_uri() . '/js/jquery.min.js', array( 'jquery' ), 1.1, true);
wp_enqueue_script( 'script', get_template_directory_uri() . '/js/jquery.bootstrap.js', array( 'jquery' ), 1.1, true);
wp_enqueue_script( 'script', get_template_directory_uri() . '/js/jquery.magnific-popup.js', array( 'jquery' ), 1.1, true);
wp_enqueue_script( 'script', get_template_directory_uri() . '/js/jquery.owl.carousel.js', array( 'jquery' ), 1.1, true);
wp_enqueue_script( 'script', get_template_directory_uri() . '/js/jquery.ion.rangeSlider.js', array( 'jquery' ), 1.1, true);
wp_enqueue_script( 'script', get_template_directory_uri() . '/js/main.js', array( 'jquery' ), 1.1, true);
*/
//End my customfiles


	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}


}
add_action( 'wp_enqueue_scripts', 'oneangryskull_scripts' );

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

/**
 * Load WooCommerce compatibility file.
 */
if ( class_exists( 'WooCommerce' ) ) {
	require get_template_directory() . '/inc/woocommerce.php';
}

// remove action
remove_action( 'woocommerce_before_main_content', 'woocommerce_output_content_wrapper', 10);
remove_action( 'woocommerce_after_main_content', 'woocommerce_output_content_wrapper_end', 10);



// single page details
add_action('woocommerce_before_main_content', 'my_theme_wrapper_start', 10);
add_action('woocommerce_after_main_content', 'my_theme_wrapper_end', 10);


function my_theme_wrapper_start() {
    echo '<section id="main">';
}
function my_theme_wrapper_end() {
    echo '</section>';
}




/*
add_action( 'woocommerce_before_add_to_cart_form', 'brand_name', 5 );
function brand_name(){
	echo 'Sample Brand name';
}
add_action( 'woocommerce_before_add_to_cart_form', 'brand_meterial', 5 );
function brand_meterial(){
	echo 'Sample Materials';
}
add_action( 'woocommerce_single_variation', 'woocommerce_single_variation', 10 );
function woocommerce_single_variation(){
	echo '$ 1999,00';
}

add_action( 'woocommerce_after_shop_loop_item', 'woocommerce_template_loop_add_to_cart', 11 );
function woocommerce_template_loop_add_to_cart(){
	echo ' <button type="submit" class="btn btn-buy" data-text="Buy"></button>';
}
*/
// Change add to cart text on single product page





add_theme_support('wc-product-gallery-zoom');
add_theme_support('wc-product-gallery-lightbox');
add_theme_support('wc-product-gallery-slider');



