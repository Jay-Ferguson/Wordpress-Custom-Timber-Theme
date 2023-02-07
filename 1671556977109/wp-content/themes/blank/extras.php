<?php

/**
 * The template for displaying all pages.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * To generate specific templates for your pages you can use:
 * /mytheme/templates/page-mypage.twig
 * (which will still route through this PHP file)
 * OR
 * /mytheme/page-mypage.php
 * (in which case you'll want to duplicate this file and save to the above path)
 *
 * Methods for TimberHelper can be found in the /lib sub-directory
 *
 * @package  WordPress
 * @subpackage  Timber
 * @since    Timber 0.1
 */

// class StarterSite extends Timber\Site {
//     public function __construct(){
//         add_action('after_setup_theme', array($this, 'theme_supports'));
//         add_action('timber/context', array($this, 'add_to_context'));
//         add_action('timber/twig', array($this, 'add_to_twig'));
//         add_action('init', array($this, 'register_post_types'));
//         add_action('init', array($this, 'register_taxonomies'));
//         parent::__construct();
//     }
//     public function register_menus(){
//         register_nav_menus(
//             array(
//                 'primary' => 'Primiary Menu',
//                 'footer' => 'Footer Menu'
//             )
//             );
//     }

//     public function register_post_types(){
        
//     }

//     public function register_taxonomies(){

//     }

//     public function add_to_context($context) {
//         $context['menu_primary'] = new Timber\Menu('menu-primary');
//         $context['menu_footer'] = new Timber\Menu('mefooter');
//         $context['site'] = $this;
//         return $context;
//     }


// }



// if ( ! function_exists( 'mytheme_register_nav_menu' ) ) {

// 	function mytheme_register_nav_menu(){
// 		register_nav_menus( array(
// 	    	'primary_menu' => __( 'Primary Menu', 'text_domain' ),
// 	    	'footer_menu'  => __( 'Footer Menu', 'text_domain' ),
// 		) );
// 	}
// 	add_action( 'after_setup_theme', 'mytheme_register_nav_menu', 0 );

//     $args = array(
//         'depth' => 2,
//     );
//     $menu = new Timber\Menu( 'primary_menu', $args );
//     $footerMenu = new Timber\Menu('footer_menu', $args);
// }




// /** This is where you can add your own functions to twig.
//      *
//      * @param string $twig get extension.
// **/

// add_filter('timber/context', 'add_to_context');

// add_theme_support('menus');
// add_theme_support('post-thumbnails');
// add_theme_support('title-tag');


// register_nav_menus(
//     array(
//       'primary' => esc_html__('primary-navigation'),
//       'menu-2' => esc_html__('footer-navigation'),
//     )
//     );



// //initialize timber

// $timber = new \Timber\Timber();
// \Timber\Timber::$autoescape = true;
// \Timber\Timber::$dirname = ['views', 'templates'];


//  //add Menus to timber context 

//  function add_to_context($context){
//     $context['primary_menu'] = new \Timber\Menu( 'primary-menu' );
//     $context['footer_menu'] = new \Timber\Menu( 'footer-menu' );

//     return $context;
//    }


//  function add_to_twig($twig)
//     {
//         $twig->addFunction(new Timber\Twig_Function('add_script', function () {
//             echo get_template_directory_uri() . 'assets/js/app.js';
//                 wp_register_script(
//                   'script',
//                   get_template_directory_uri() . 'assets/js/app.js',
//                   [],
//                   '0.01'
//                 );
//                 wp_enqueue_script('script');
//         }));

//         //  $twig->addExtension( new Twig\Extension\StringLoaderExtension() );
//         //  $twig->addFilter( new Twig\TwigFilter( 'myfoo', array( $this, 'myfoo' ) ) );

//         return $twig;
//     }

//     add_filter('timber/context', 'add_to_context');

   


// // navigation menu for WP admin





// function google_fonts() {
//     wp_enqueue_style( 'google-fonts', 'https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,400;0,700;1,400;1,700&display=swap', false );
//     wp_enqueue_style( 'google-fonts', 'https://fonts.googleapis.com/css?family=Josefin+Sans:300,400,400i|Nunito:300,300i', false );
//     wp_enqueue_style( 'google-fonts', 'https://fonts.googleapis.com/css2?family=Rubik:ital,wght@0,800;1,800&family=Space+Grotesk:wght@400;500&family=Space+Mono:ital@0;1&display=swap', false );

// }
// add_action( 'wp_enqueue_scripts', 'google_fonts' );


// add_filter( 'timber/context', 'add_to_context' );


// //Load Timber Context - NavMenu
// require get_template_directory() . '/wp-content/themes/blank/templates/menuFunc.php';