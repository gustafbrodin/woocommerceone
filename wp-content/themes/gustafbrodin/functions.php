<?php


function my_theme_enqueue_styles() {
    $parenthandle = 'parent-style'; // This is 'twentyfifteen-style' for the Twenty Fifteen theme.
    $theme = wp_get_theme();
    wp_enqueue_style( $parenthandle, get_template_directory_uri() . '/style.css', 
        array(),  // if the parent theme code has a dependency, copy it to here
        $theme->parent()->get('Version')
    );
    wp_enqueue_style( 'child-style', get_stylesheet_uri(),
        array( $parenthandle ),
        $theme->get('Version') // this only works if you have Version in the style header
    );


    $wooparenthandle = 'kota-woocommerce-style'; 
    $theme = wp_get_theme();
    wp_enqueue_style( $wooparenthandle, get_template_directory_uri() . '/woocommerce.css', 
        
    );
    wp_enqueue_style( 'woo-child-style', get_stylesheet_directory_uri() . '/woocommerce-child.css',
        array( $wooparenthandle ),
        $theme->get('Version') 
    );
    

    }

add_action( 'wp_enqueue_scripts', 'my_theme_enqueue_styles' );

add_theme_support( 'woocommerce' );

add_filter( 'woocommerce_product_subcategories_hide_empty', 'ts_hide_empty_categories', 10, 1 );

function ts_hide_empty_categories ( $hide_empty ) 
{ 
$hide_empty = FALSE;
}

function my_load_jquery() {
    wp_enqueue_script('script', get_stylesheet_directory_uri() . '/js/script.js', array('jquery'), false); 
};
add_action( 'wp_enqueue_scripts', 'my_load_jquery' );


 function add_aos_animation() {
     wp_enqueue_style('AOS_animate', 'https://cdn.rawgit.com/michalsnik/aos/2.1.1/dist/aos.css', false, null);
     wp_enqueue_script('AOS', 'https://cdn.rawgit.com/michalsnik/aos/2.1.1/dist/aos.js', false, null, true);
     wp_enqueue_script('theme-js', get_template_directory_uri() . '/../gustafbrodin/js/theme.js', array( 'AOS' ), null, true);
 }
add_action( 'wp_enqueue_scripts', 'add_aos_animation' );

function wpb_widgets_init() {
 
    register_sidebar( array(
        'name'          => 'Custom Header Widget Area',
        'id'            => 'custom-header-widget',
        'before_widget' => '<div class="chw-widget">',
        'after_widget'  => '</div>',
        'before_title'  => '<h2 class="chw-title">',
        'after_title'   => '</h2>',
    ) );
 
}
add_action( 'widgets_init', 'wpb_widgets_init' );





?>

