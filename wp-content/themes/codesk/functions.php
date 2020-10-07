<?php
/**
 * $Desc
 *
 * @author     Gaviasthemes Team     
 * @copyright  Copyright (C) 2020 gaviasthemes. All Rights Reserved.
 * @license    GNU/GPL v2 or later http://www.gnu.org/licenses/gpl-2.0.html
 * 
 */

define( 'CODESK_THEMER_DIR', get_template_directory() );
define( 'CODESK_THEME_URL', get_template_directory_uri() );

/*
 * Include list of files from Gavias Framework.
 */
require_once(CODESK_THEMER_DIR . '/includes/theme-functions.php'); 
require_once(CODESK_THEMER_DIR . '/includes/template.php'); 
require_once(CODESK_THEMER_DIR . '/includes/theme-hook.php'); 
require_once(CODESK_THEMER_DIR . '/includes/theme-layout.php'); 
require_once(CODESK_THEMER_DIR . '/includes/metaboxes.php'); 
require_once(CODESK_THEMER_DIR . '/includes/custom-styles.php'); 
require_once(CODESK_THEMER_DIR . '/includes/menu/megamenu.php'); 
require_once(CODESK_THEMER_DIR . '/includes/sample/init.php');
require_once(CODESK_THEMER_DIR . '/includes/elementor/hooks.php');

//Load Woocommerce
if( in_array( 'woocommerce/woocommerce.php', apply_filters( 'active_plugins', get_option( 'active_plugins' ) ) ) ){
  add_theme_support( "woocommerce" );
  require_once(CODESK_THEMER_DIR . '/includes/woocommerce/functions.php'); 
  require_once(CODESK_THEMER_DIR . '/includes/woocommerce/hooks.php'); 
}

// Load Redux - Theme options framework
if( class_exists( 'Redux' ) ){
  require( CODESK_THEMER_DIR . '/includes/options/init.php' );
  require_once(CODESK_THEMER_DIR . '/includes/options/opts-general.php'); 
  require_once(CODESK_THEMER_DIR . '/includes/options/opts-header.php'); 
  require_once(CODESK_THEMER_DIR . '/includes/options/opts-breadcrumb.php'); 
  require_once(CODESK_THEMER_DIR . '/includes/options/opts-footer.php'); 
  require_once(CODESK_THEMER_DIR . '/includes/options/opts-styling.php'); 
  require_once(CODESK_THEMER_DIR . '/includes/options/opts-typography.php'); 
  require_once(CODESK_THEMER_DIR . '/includes/options/opts-blog.php'); 
  require_once(CODESK_THEMER_DIR . '/includes/options/opts-page.php'); 
  require_once(CODESK_THEMER_DIR . '/includes/options/opts-woo.php'); 
  require_once(CODESK_THEMER_DIR . '/includes/options/opts-portfolio.php'); 
  require_once(CODESK_THEMER_DIR . '/includes/options/opts-event.php'); 
  require_once(CODESK_THEMER_DIR . '/includes/options/opts-service.php'); 
  require_once(CODESK_THEMER_DIR . '/includes/options/opts-socials.php'); 
} 

// TGM plugin activation
if ( is_admin() ) {
  require_once( CODESK_THEMER_DIR . '/includes/tgmpa/class-tgm-plugin-activation.php' );
  require( CODESK_THEMER_DIR . '/includes/tgmpa/config.php' );
}
load_theme_textdomain( 'codesk', get_template_directory() . '/languages' );

//-------- Register sidebar default in theme -----------
//------------------------------------------------------
function codesk_widgets_init() {
    
    register_sidebar( array(
        'name' => esc_html__( 'Default Sidebar', 'codesk' ),
        'id' => 'default_sidebar',
        'description' => esc_html__( 'Appears in the Default Sidebar section of the site.', 'codesk' ),
        'before_widget' => '<aside id="%1$s" class="widget clearfix %2$s">',
        'after_widget' => '</aside>',
        'before_title' => '<h3 class="widget-title"><span>',
        'after_title' => '</span></h3>',
    ) );
    register_sidebar( array(
        'name' => esc_html__( 'WooCommerce Sidebar', 'codesk' ),
        'id' => 'woocommerce_sidebar',
        'description' => esc_html__( 'Appears in the Plugin WooCommerce section of the site.', 'codesk' ),
        'before_widget' => '<aside id="%1$s" class="widget clearfix %2$s">',
        'after_widget' => '</aside>',
        'before_title' => '<h3 class="widget-title"><span>',
        'after_title' => '</span></h3>',
    ) );
    register_sidebar( array(
        'name' => esc_html__( 'WooCommerce Single', 'codesk' ),
        'id' => 'woocommerce_single_summary',
        'description' => esc_html__( 'Appears in the WooCommerce Single Page like social, description text ...', 'codesk' ),
        'before_widget' => '<aside id="%1$s" class="widget clearfix %2$s">',
        'after_widget' => '</aside>',
        'before_title' => '<h3 class="widget-title"><span>',
        'after_title' => '</span></h3>',
    ) );
    register_sidebar( array(
        'name' => esc_html__( 'Portfolio Sidebar', 'codesk' ),
        'id' => 'portfolio_sidebar',
        'description' => esc_html__( 'Appears in the Portfolio Page section of the site.', 'codesk' ),
        'before_widget' => '<aside id="%1$s" class="widget clearfix %2$s">',
        'after_widget' => '</aside>',
        'before_title' => '<h3 class="widget-title"><span>',
        'after_title' => '</span></h3>',
    ) );
    register_sidebar( array(
        'name' => esc_html__( 'After Offcanvas Mobile', 'codesk' ),
        'id' => 'offcanvas_sidebar_mobile',
        'description' => esc_html__( 'Appears in the Offcanvas section of the site.', 'codesk' ),
        'before_widget' => '<aside id="%1$s" class="widget clearfix %2$s">',
        'after_widget' => '</aside>',
        'before_title' => '<h3 class="widget-title"><span>',
        'after_title' => '</span></h3>',
    ) );
    register_sidebar( array(
        'name' => esc_html__( 'Service Sidebar', 'codesk' ),
        'id' => 'service_sidebar',
        'description' => esc_html__( 'Appears in the Sidebar section of the Service Page.', 'codesk' ),
        'before_widget' => '<aside id="%1$s" class="widget clearfix %2$s">',
        'after_widget' => '</aside>',
        'before_title' => '<h3 class="widget-title"><span>',
        'after_title' => '</span></h3>',
    ) );
    register_sidebar( array(
        'name' => esc_html__( 'Blog Sidebar', 'codesk' ),
        'id' => 'blog_sidebar',
        'description' => esc_html__( 'Appears in the Blog sidebar section of the site.', 'codesk' ),
        'before_widget' => '<aside id="%1$s" class="widget clearfix %2$s">',
        'after_widget' => '</aside>',
        'before_title' => '<h3 class="widget-title"><span>',
        'after_title' => '</span></h3>',
    ) );
    register_sidebar( array(
        'name' => esc_html__( 'Page Sidebar', 'codesk' ),
        'id' => 'other_sidebar',
        'description' => esc_html__( 'Appears in the Page Sidebar section of the site.', 'codesk' ),
        'before_widget' => '<aside id="%1$s" class="widget clearfix %2$s">',
        'after_widget' => '</aside>',
        'before_title' => '<h3 class="widget-title"><span>',
        'after_title' => '</span></h3>',
    ) );
    register_sidebar( array(
        'name' => esc_html__( 'Footer first', 'codesk' ),
        'id' => 'footer-sidebar-1',
        'description' => esc_html__( 'Appears in the Footer first section of the site.', 'codesk' ),
        'before_widget' => '<aside id="%1$s" class="widget clearfix %2$s">',
        'after_widget' => '</aside>',
        'before_title' => '<h3 class="widget-title"><span>',
        'after_title' => '</span></h3>',
    ) );
    register_sidebar( array(
        'name' => esc_html__( 'Footer second', 'codesk' ),
        'id' => 'footer-sidebar-2',
        'description' => esc_html__( 'Appears in the Footer second section of the site.', 'codesk' ),
        'before_widget' => '<aside id="%1$s" class="widget clearfix %2$s">',
        'after_widget' => '</aside>',
        'before_title' => '<h3 class="widget-title"><span>',
        'after_title' => '</span></h3>',
    ) );
    register_sidebar( array(
        'name' => esc_html__( 'Footer third', 'codesk' ),
        'id' => 'footer-sidebar-3',
        'description' => esc_html__( 'Appears in the Footer third section of the site.', 'codesk' ),
        'before_widget' => '<aside id="%1$s" class="widget clearfix %2$s">',
        'after_widget' => '</aside>',
        'before_title' => '<h3 class="widget-title"><span>',
        'after_title' => '</span></h3>',
    ) );
    register_sidebar( array(
        'name' => esc_html__( 'Footer four', 'codesk' ),
        'id' => 'footer-sidebar-4',
        'description' => esc_html__( 'Appears in the Footer four section of the site.', 'codesk' ),
        'before_widget' => '<aside id="%1$s" class="widget clearfix %2$s">',
        'after_widget' => '</aside>',
        'before_title' => '<h3 class="widget-title"><span>',
        'after_title' => '</span></h3>',
    ) );
}
add_action( 'widgets_init', 'codesk_widgets_init' );


if ( ! function_exists( 'codesk_fonts_url' ) ) :
/**
 *
 * @return string Google fonts URL for the theme.
 */
function codesk_fonts_url() {
  $fonts_url = '';
  $fonts     = array();
  $subsets   = '';
  $protocol = is_ssl() ? 'https' : 'http';
  /*
   * Translators: If there are characters in your language that are not supported
   * by Noto Sans, translate this to 'off'. Do not translate into your own language.
   */
  if ( 'off' !== _x( 'on', 'Barlow font: on or off', 'codesk' ) ) {
    $fonts[] = 'Montserrat:400,500,600,700,900';
  }

  /*
   * Translators: To add an additional character subset specific to your language,
   * translate this to 'greek', 'cyrillic', 'devanagari' or 'vietnamese'. Do not translate into your own language.
   */
  $subset = _x( 'no-subset', 'Add new subset (greek, cyrillic, devanagari, vietnamese)', 'codesk' );

  if ( 'cyrillic' == $subset ) {
    $subsets .= ',cyrillic,cyrillic-ext';
  } elseif ( 'greek' == $subset ) {
    $subsets .= ',greek,greek-ext';
  } elseif ( 'devanagari' == $subset ) {
    $subsets .= ',devanagari';
  } elseif ( 'vietnamese' == $subset ) {
    $subsets .= ',vietnamese';
  }

  if ( $fonts ) {
    $fonts_url = add_query_arg( array(
      'family' => ( implode( '%7C', $fonts ) ),
      'subset' => ( $subsets ),
    ),  $protocol.'://fonts.googleapis.com/css' );
  }

  return $fonts_url;
}
endif;

function codesk_custom_styles() {
  $custom_css = get_option( 'codesk_theme_custom_styles' );
  if($custom_css){
    wp_enqueue_style(
      'codesk-custom-style',
      get_template_directory_uri() . '/css/custom_script.css'
    );
    wp_add_inline_style( 'codesk-custom-style', $custom_css );
  }
}


function codesk_init_scripts(){
  global $post;
  $protocol = is_ssl() ? 'https' : 'http';
  if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ){
    wp_enqueue_script( 'comment-reply' );
  }

  wp_enqueue_style( 'codesk-fonts', codesk_fonts_url(), array(), null );
  wp_enqueue_script('bootstrap', get_template_directory_uri().'/js/bootstrap.js', array('jquery') );
  wp_enqueue_script('scrollbar', get_template_directory_uri() . '/js/perfect-scrollbar.jquery.min.js');
  wp_enqueue_script('magnific', get_template_directory_uri() .'/js/magnific/jquery.magnific-popup.min.js');
  wp_enqueue_script('cookie', get_template_directory_uri() . '/js/jquery.cookie.js', array('jquery'));
  wp_enqueue_script('lightgallery', get_template_directory_uri() . '/js/lightgallery/js/lightgallery.min.js' );
  wp_enqueue_script('sticky', get_template_directory_uri() . '/js/sticky.js', array('elementor-waypoints'));
  wp_enqueue_script('owl-carousel', get_template_directory_uri() . '/js/owl-carousel/owl.carousel.min.js');
  wp_enqueue_script('codesk-main', get_template_directory_uri() . '/js/main.js', array('imagesloaded', 'jquery-masonry'));
  wp_enqueue_script('codesk-woocommerce', get_template_directory_uri() . '/js/woocommerce.js');

  if(codesk_woocommerce_activated() ){
    wp_dequeue_script('wc-add-to-cart');
    wp_register_script( 'wc-add-to-cart', CODESK_THEME_URL . '/js/add-to-cart.js' , array( 'jquery' ) );
    wp_enqueue_script('wc-add-to-cart');
  }

  wp_enqueue_style('lightgallery', get_template_directory_uri() . '/js/lightgallery/css/lightgallery.min.css');
  wp_enqueue_style('lightgallery', get_template_directory_uri() . '/js/lightgallery/css/lg-transitions.min.css');
  wp_enqueue_style('owl-carousel', get_template_directory_uri() .'/js/owl-carousel/assets/owl.carousel.css');
  wp_enqueue_style('magnific', get_template_directory_uri() .'/js/magnific/magnific-popup.css');
  wp_enqueue_style('fontawesome', get_template_directory_uri() . '/css/fontawesome/css/all.css');
  wp_enqueue_style('codesk-icons', get_template_directory_uri() . '/css/icon-custom.css');
  wp_enqueue_style('codesk-style', get_template_directory_uri() . '/style.css');

  $skin = codesk_get_option('skin_color', '');
  if(isset($_GET['gskin']) && $_GET['gskin']){
      $skin = $_GET['gskin'];
  }
  if(!empty($skin)){
      $skin = 'skins/' . $skin . '/'; 
  }
  wp_enqueue_style('bootstrap', get_template_directory_uri(). '/css/' . $skin . 'bootstrap.css', array(), '1.0.0' , 'all'); 
  wp_enqueue_style('codesk-woocoomerce', get_template_directory_uri(). '/css/' . $skin . 'woocommerce.css', array(), '1.0.0' , 'all'); 
  wp_enqueue_style('codesk-template', get_template_directory_uri().'/css/' . $skin . 'template.css', array(), '1.0.0' , 'all');
}
add_action('wp_enqueue_scripts', 'codesk_init_scripts', 99);

function cc_mime_types($mimes) {
 $mimes['svg'] = 'image/svg+xml';
 return $mimes;
}
add_filter('upload_mimes', 'cc_mime_types');