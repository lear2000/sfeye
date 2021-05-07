<?php
// ACF JSON

add_filter('acf/settings/save_json', 'my_acf_json_save_point');

function my_acf_json_save_point( $path ) {

    // update path
    $path = get_stylesheet_directory() . '/acf-json';


    // return
    return $path;

}

// ACF OPTIONS

if( function_exists('acf_add_options_page') ) {

  acf_add_options_page(array(
    'page_title'  => 'Theme Settings',
    'menu_title'  => 'Theme Settings',
    'menu_slug'   => 'theme-general-settings',
    'capability'  => 'edit_posts',
    'redirect'    => false
  ));


}


//register blocks
add_action('acf/init', 'fs_acf_init_block_types');
function fs_acf_init_block_types() {
    // Check function exists.
       if( function_exists('acf_register_block_type') ) {


//sources with cite
   acf_register_block_type(array(
       'name'              => 'sources',
       'title'             => __('Sources Cite - ACF'),
       'description'       => __('Sources Cite'),
       'category'          => 'formatting',
       'icon'              => 'yes-alt',
       'keywords'          => array( 'cite','sources' ,'acf','layout' ),
       'render_template'   => 'tmpl/cite-block.php',
       'mode'              => 'edit',
       'enqueue_script'    => get_template_directory_uri() . '/assets/blocks.js'
   ));



    }// Check function exists.
}


?>