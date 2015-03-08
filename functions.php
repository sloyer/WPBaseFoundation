<?php

//Enquing all Scripts here, Stylesheets, Foundation, Mean-Menu. You can place all jQuery in scripts.js or enque your own file.

function require_scripts() {  
    wp_enqueue_style( 'stylesheet', get_template_directory_uri() . '/stylesheets/app.css', true );
    /** 
    * We need to remove Wordpress loading in it's jQuery for conflicts.
    * I prefer to use the one tied to Foundations release.
    */
    if( !is_admin()){
        wp_deregister_script('jquery');
        wp_register_script('jquery', get_template_directory_uri() . '/javascripts/vendor/jquery.js', true ); 
        wp_enqueue_script('jquery');
    }
    wp_register_script('modernizr', get_template_directory_uri() . '/javascripts/vendor/modernizr.js', true );   
    wp_register_script('foundation', get_template_directory_uri() . '/javascripts/foundation/foundation.min.js', true ); 
    wp_register_script('scripts', get_template_directory_uri() . '/javascripts/scripts.js', true );
    wp_enqueue_script( 'stylesheet' );  
    wp_enqueue_script( 'jquery' ); 
    wp_enqueue_script( 'modernizr' );   
    wp_enqueue_script( 'foundation' );  
    wp_enqueue_script( 'scripts' );
}  

add_action( 'wp_enqueue_scripts', 'require_scripts', 5 );  

//Registering a Primary Menu and an Extra Menu

function wpbf_register_my_menus() {
  register_nav_menus(
    array(
      'primary' => __( 'Primary Menu' ),
      'extra-menu' => __( 'Extra Menu' )
    )
  );
}

add_action( 'init', 'wpbf_register_my_menus' );

/**
 * Foundation TopBar Implantation
 * https://gist.github.com/awshout/3943026
 * Big thanks to http://dobsondev.com/wordpress-menus-w-foundation/
 * They did all the hard work
 */


//Sets up the function below for customizing the menu output for TopBar
function display_primary_menu() {
    wp_nav_menu( array(
        'theme_location' => 'primary',
        'menu' => 'Primary Menu',
        'container' => false, // remove nav container
        'container_class' => '', // class of container
        'menu_class' => 'top-bar-menu right', // adding custom nav class
        'before' => '', // before each link <a>
        'after' => '', // after each link </a>
        'link_before' => '', // before each link text
        'link_after' => '', // after each link text
        'depth' => 5, // limit the depth of the nav
        'fallback_cb' => false, // fallback function (see below)
        'walker' => new top_bar_walker()
    ) );
}

//Customized menu output

class top_bar_walker extends Walker_Nav_Menu {

    function display_element( $element, &$children_elements, $max_depth, $depth=0, $args, &$output ) {
        $element->has_children = !empty( $children_elements[$element->ID] );
        $element->classes[] = ( $element->current || $element->current_item_ancestor ) ? 'active' : '';
        $element->classes[] = ( $element->has_children ) ? 'has-dropdown not-click' : '';

        parent::display_element( $element, $children_elements, $max_depth, $depth, $args, $output );
    }

    function start_el( &$output, $object, $depth = 0, $args = array(), $current_object_id = 0 ) {
        $item_html = '';
        parent::start_el( $item_html, $object, $depth, $args );

        $output .= ( $depth == 0 ) ? '<li class="divider"></li>' : '';

        $classes = empty( $object->classes ) ? array() : (array) $object->classes;
        if ( in_array('label', $classes) ) {
            $output .= '<li class="divider"></li>';
            $item_html = preg_replace( '/<a[^>]*>(.*)<\/a>/iU', '<label>$1</label>', $item_html );
        }

        if ( in_array('divider', $classes) ) {
            $item_html = preg_replace( '/<a[^>]*>( .* )<\/a>/iU', '', $item_html );
        }

        $output .= $item_html;
    }

    function start_lvl( &$output, $depth = 0, $args = array() ) {
        $output .= "\n<ul class=\"sub-menu dropdown\">\n";
    }

}


// Sidebars & Widgetizes Areas. There's 3 here, it's pretty simple to add another or remove.
function wpbf_register_sidebars() {

    register_sidebar(array(
        'id' => 'sidebar-1',
        'name' => __( 'Sidebar One' ),
        'description' => 'The first (primary) sidebar.',
        'before_widget' => '<div id="%1$s" class="widget %2$s">',
        'after_widget' => '</div>',
        'before_title' => '<h2 class="title">',
        'after_title' => '</h2>',
    ));
    register_sidebar(array(
        'id' => 'sidebar-2',
        'name' => __( 'Sidebar Two' ),
        'description' => 'The second (primary) sidebar.',
        'before_widget' => '<div id="%1$s" class="widget %2$s">',
        'after_widget' => '</div>',
        'before_title' => '<h2 class="title">',
        'after_title' => '</h2>',
    ));
        register_sidebar(array(
        'id' => 'sidebar-3',
        'name' => __( 'Sidebar Three' ),
        'description' => 'The third (primary) sidebar.',
        'before_widget' => '<div id="%1$s" class="widget %2$s">',
        'after_widget' => '</div>',
        'before_title' => '<h2 class="title">',
        'after_title' => '</h2>',
    ));
} 

add_action( 'widgets_init', 'wpbf_register_sidebars' );

//Adding Support for Post Thumbnails, because, you'll probally want them

add_theme_support( 'post-thumbnails' ); 

//ADDITIONAL FEATURES! Handy little things I use.

/***************************************************** 

//Adding Custom Image Sizes. Uncomment code to use.

add_image_size('featured', 1024, 350 , true);

*****************************************************/


/***************************************************** 
//Custom Exceprt Length. Uncomment code to use.

function wpbf_excerpt_length( $length ) {
    return 30;
}

add_filter( 'excerpt_length', 'wpbf_excerpt_length', 999 );

*****************************************************/


/***************************************************** 
// Add Readmore to end of excerpts

function wpbf_excerpt_more( $more ) {
    return ' <a class="read-more" href="'. get_permalink( get_the_ID() ) . '">Read More</a>';
}

add_filter( 'excerpt_more', 'wpbf_excerpt_more' );

*****************************************************/

?>