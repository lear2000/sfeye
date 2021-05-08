<?php
// INC
// include 'inc/breadcrumb.php';
// include 'nofollow/nofollow.php';
// include 'inc/media-uploader.php';
// include 'inc/acfsrcset.php';
// include 'inc/speedup.php';
include 'inc/acf-functions.php';



//full sized images
add_filter('jpeg_quality', function($arg){return 100;});


/**
 * Register new Navigation menu
 */
function register_my_menus() {
  register_nav_menus( array( 'header-menu' => __( 'Header Menu' ) ) );
}
add_action( 'init', 'register_my_menus' );


/**
 * Proper way to enqueue scripts and styles.
 */
function wpdocs_theme_name_scripts() {

    wp_enqueue_style( 'mainstyle', get_template_directory_uri().'/style.css' );
    // if (!is_front_page()) {
    //   wp_enqueue_style( 'insidestyle', get_template_directory_uri().'/inside.css' );
    // }

    //REMOVE JQUERY
   	wp_deregister_script( 'jquery' );
    wp_register_script('jquery', get_template_directory_uri() . '/js/jquery.min.js', false, '2', true);
    wp_enqueue_script( 'slick', get_template_directory_uri() . '/js/slick.min.js', array('jquery'), '1.0.0', true );
    wp_enqueue_script( 'lazysizes', get_template_directory_uri() . '/js/lazysizes.min.js', array('jquery'), '', true );
		wp_enqueue_script( 'scripts', get_template_directory_uri() . '/js/scripts.js', array('jquery'), time(), true );

		 $wpa_main_js_vars = [
  		'image_path' => get_template_directory_uri() . '/images',
 		];
		wp_localize_script('scripts', 'js_theme_vars', $wpa_main_js_vars);


}
add_action( 'wp_enqueue_scripts', 'wpdocs_theme_name_scripts' );



// remove all from excerpt
function new_excerpt_more( $more ) {
    return '...';
}
add_filter('excerpt_more', 'new_excerpt_more');



// BODY CLASS
add_filter( 'body_class', 'custom_class' );
function custom_class( $classes ) {


    if (is_page() && !is_front_page() && !is_home()) {
      global $post;
      $classes[] = 'page-'.$post->post_name;
      $classes[] = 'insidepage';
      preg_replace('/\s+/', '', strtolower(get_the_title( $post->post_parent )));
      $classes[] = 'thispage-' . preg_replace('/\s+/', '', strtolower(get_the_title( $post->post_parent )));;
    }

    if (is_home() || is_single()) {
        $classes[] = $post->post_name;
        $classes[] = 'insidepage';

    }

    if (is_archive('rmg-category') || is_singular( 'rmg-category' ) || is_singular( "rmg-case" )) {
      $classes[] = 'gallerypage';
    }

    if (is_404()) {
        $classes[] = 'insidepage';
    }

    return $classes;
}


// LOGIN
function my_login_logo() { ?>
    <style type="text/css">
        #login h1 a, .login h1 a {
            background-image: url(<?php echo get_stylesheet_directory_uri(); ?>/custom-login-logo.png);
        height:65px;
        width:320px;
        background-size: contain;
        background-repeat: no-repeat;
            padding-bottom: 30px;
        }
    </style>
<?php }
add_action( 'login_enqueue_scripts', 'my_login_logo' );


// CONVERT HEX TO RGBA
function hex2rgb($hex) {
$hex = str_replace("#", "", $hex);

if(strlen($hex) == 3) {
$r = hexdec(substr($hex,0,1).substr($hex,0,1));
$g = hexdec(substr($hex,1,1).substr($hex,1,1));
$b = hexdec(substr($hex,2,1).substr($hex,2,1));
} else {
$r = hexdec(substr($hex,0,2));
$g = hexdec(substr($hex,2,2));
$b = hexdec(substr($hex,4,2));
}
$rgb = array($r, $g, $b);

return $rgb; // returns an array with the rgb values
}


// STANDARD BUTTON shortcode
function orange_button( $atts , $content = null) {
  $atts = shortcode_atts( array(
  'href' => '#'
  ), $atts );

  return '<a class="standardbtn button" href="' . esc_attr($atts['href']) . '">' . $content . '</a>';
}
add_shortcode( 'standardbtn','orange_button' );





/*
*
* Walker for the main menu
*
*/
// function add_arrow( $output, $item, $depth, $args ){
// //Only add class to 'top level' items on the 'primary' menu.
// if('Home Header' == $args->menu && $depth === 0 ){
//     // if (in_array("menu-item-has-children", $item->classes)) {
//     //     $output .='<button class="arrow"><img src="'.get_template_directory_uri().'/images/downarrow.svg"/></button>';
//     // }
//     /* wraps the no dropdown */

//     // if (in_array("nodrop", $item->classes)) {
//     //     $output = '<a href="'. $item->url .'" title="'. $item->attr_title .'"><span>'.$item->title.'</span></a>';
//     // }


// }
//     return $output;
// }
// add_filter( 'walker_nav_menu_start_el', 'add_arrow',10,4);





// REVIEW STARS
function stars($stars){
  switch ($stars) {
    case '1':
      echo "<span>&#9733;</span>";
      break;
    case '2':
      echo "<span>&#9733;</span><span>&#9733;</span>";
      break;

    case '3':
      echo "<span>&#9733;</span><span>&#9733;</span><span>&#9733;</span>";
      break;

    case '4':
      echo "<span>&#9733;</span><span>&#9733;</span><span>&#9733;</span><span>&#9733;</span>";
      break;

    case '5':
      echo "<span>&#9733;</span><span>&#9733;</span><span>&#9733;</span><span>&#9733;</span><span>&#9733;</span>";
      break;

    default:
      # code...
      break;
  }

}




?>
