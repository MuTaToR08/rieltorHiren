<?php

require_once 'conf.php';

/**
 * Register and Enqueue Styles.
 */
function retail_register_styles() {

    $theme_version = wp_get_theme()->get( 'Version' );

    wp_enqueue_style( 'retail-style', get_template_directory_uri().'/assets/css/common.css', array(), $theme_version );
    wp_enqueue_style( 'retail-style-first', get_template_directory_uri().'/assets/css/main-page/first-screen.css', array(), $theme_version );
    // wp_enqueue_style( 'retail-style-menu', get_template_directory_uri().'/assets/css/main-page/sub-menu.css', array(), $theme_version );
    wp_enqueue_style( 'retail-style-advant', get_template_directory_uri().'/assets/css/main-page/advantages.css', array(), $theme_version );
    wp_enqueue_style( 'retail-style-about', get_template_directory_uri().'/assets/css/main-page/about.css', array(), $theme_version );
    wp_enqueue_style( 'retail-style-main', get_template_directory_uri().'/assets/css/main-page/main-page.css', array(), $theme_version );
    wp_enqueue_style( 'retail-style-service', get_template_directory_uri().'/assets/css/main-page/services.css', array(), $theme_version );

    wp_style_add_data( 'retail-style', 'rtl', 'replace' );
    wp_style_add_data( 'retail-style-first', 'rtl', 'replace' );
    // wp_style_add_data( 'retail-style-menu', 'rtl', 'replace' );
    wp_style_add_data( 'retail-style-advant', 'rtl', 'replace' );
    wp_style_add_data( 'retail-style-about', 'rtl', 'replace' );
    wp_style_add_data( 'retail-style-main', 'rtl', 'replace' );
    wp_style_add_data( 'retail-style-service', 'rtl', 'replace' );

    // Add output of Customizer settings as inline style.
//    wp_add_inline_style( 'twentytwenty-style', twentytwenty_get_customizer_css( 'front-end' ) );

    // Add print CSS.
#    wp_enqueue_style( 'twentytwenty-print-style', get_template_directory_uri() . '/print.css', null, $theme_version, 'print' );

}

add_action( 'wp_enqueue_scripts', 'retail_register_styles' );


if ( ! function_exists( 'wp_body_open' ) ) {

    /**
     * Shim for wp_body_open, ensuring backward compatibility with versions of WordPress older than 5.2.
     */
    function wp_body_open() {
        do_action( 'wp_body_open' );
    }
}


function retail_menus() {

    $locations = array(
        'primary'  => __( 'Top Head Menu', RETAIL_DOMAIN ),
        'main-top'  => __( 'Main central top menu', RETAIL_DOMAIN ),
        'main-bottom'  => __( 'Main central bottom menu', RETAIL_DOMAIN ),
    );

    register_nav_menus( $locations );
}

add_action( 'init', 'retail_menus' );



function my_post_templater($template){
    if( !is_single() )
        return $template;
    global $wp_query;
    $c_template = get_post_meta( $wp_query->post->ID, '_wp_page_template', true );
    return empty( $c_template ) ? $template : $c_template;
}

add_filter( 'template_include', 'my_post_templater' );

function give_my_posts_templates(){
    add_post_type_support( 'post', 'page-attributes' );
}

add_action( 'init', 'give_my_posts_templates' );
