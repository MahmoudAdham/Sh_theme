<?php
/**
 * Created by PhpStorm.
 * User: Geek
 * Date: 8/18/2017
 * Time: 9:23 PM
 */
require_once('bs4navwalker.php');
add_theme_support( 'post-thumbnails' );
/************************* Start Function Style ****************/
function styleTheme(){
    wp_enqueue_style('sh_STYLE', get_stylesheet_uri());
    wp_enqueue_style('sh_bootstrap', get_theme_file_uri('asset/css/bootstrap.min.css'));
    wp_enqueue_style('sh_fontawesom', get_theme_file_uri('asset/css/font-awesome.min.css'));
    wp_enqueue_style('sh_date', get_theme_file_uri('asset/css/bootstrap-datepicker.standalone.min.css'));
    wp_enqueue_style('sh_style2', get_theme_file_uri('asset/css/style.css'));
    wp_enqueue_script('sh_jquery', get_theme_file_uri('asset/js/jquery-3.1.1.min.js'));
    wp_enqueue_script('sh_bootstrap_js', get_theme_file_uri('asset/js/bootstrap.min.js'));
    wp_enqueue_script('sh_date_js', get_theme_file_uri('asset/js/bootstrap-datetimepicker.min.js'), array(),false,true);
    wp_enqueue_script('sh_nicescroll', get_theme_file_uri('asset/js/jquery.nicescroll.min.js'), array(),false, true);
    wp_enqueue_script('sh_js', get_theme_file_uri('asset/js/js.js'), array(),false, true);
    if (is_home()){
        wp_enqueue_script('sh_nav_js', get_theme_file_uri('asset/js/nav-home.js'), array(),false, true);
    }
}
add_action('wp_enqueue_scripts','styleTheme');

/************************* End Function Style ****************/
/////////////////////////////////////////////////////////////////////

/************************* Start Function for top_nav ****************/

function sh_register_menu(){
    register_nav_menu( 'top_nave', 'Top Navigation' );
}
add_action('init','sh_register_menu');


function My_Theme_nav_menu_link_atts( $atts) {
    $new_atts = array( 'class' => 'nav-link' .' '.'scroll' );
    if ( isset( $atts['href'] ) ) {
        $new_atts['href'] = $atts['href'];
    }

    return $new_atts;
}
add_filter( 'nav_menu_link_attributes', 'My_Theme_nav_menu_link_atts');

/************************* End Function for top_nav ****************/
/////////////////////////////////////////////////////////////////////
/************************* Start Offers Custom Post ****************/

function offersPost(){
    $labels = array(
        'name'=>'Offers',
        'singular_name'=>'Offer',
         'menu_name'             => __( 'offers', 'text_domain' ),
        'name_admin_bar'        => __( 'Post Type', 'text_domain' ),
        'archives'              => __( 'Item Archives', 'text_domain' ),
        'attributes'            => __( 'Item Attributes', 'text_domain' ),
        'parent_item_colon'     => __( 'Parent Item:', 'text_domain' ),
        'all_items'             => __( 'All Items', 'text_domain' ),
        'add_new_item'          => __( 'Add New Item', 'text_domain' ),
        'add_new'               => __( 'Add New', 'text_domain' ),
        'new_item'              => __( 'New Item', 'text_domain' ),
        'edit_item'             => __( 'Edit Item', 'text_domain' ),
        'update_item'           => __( 'Update Item', 'text_domain' ),
        'view_item'             => __( 'View Item', 'text_domain' ),
        'view_items'            => __( 'View Items', 'text_domain' ),
        'search_items'          => __( 'Search Item', 'text_domain' ),
        'not_found'             => __( 'Not found', 'text_domain' ),
        'not_found_in_trash'    => __( 'Not found in Trash', 'text_domain' ),
        'featured_image'        => __( 'Featured Image', 'text_domain' ),
        'set_featured_image'    => __( 'Set featured image', 'text_domain' ),
        'remove_featured_image' => __( 'Remove featured image', 'text_domain' ),
        'use_featured_image'    => __( 'Use as featured image', 'text_domain' ),
        'insert_into_item'      => __( 'Insert into item', 'text_domain' ),
        'uploaded_to_this_item' => __( 'Uploaded to this item', 'text_domain' ),
        'items_list'            => __( 'Items list', 'text_domain' ),
        'items_list_navigation' => __( 'Items list navigation', 'text_domain' ),
        'filter_items_list'     => __( 'Filter items list', 'text_domain' ),
    );

    $args = array(
        'labels'=> $labels,
        'public'=>true,
         'taxonomies'            => array( 'category', 'post_tag' ),
        'hierarchical'          => false,
        'public'                => true,
        'show_ui'               => true,
        'show_in_menu'          => true,
        'menu_position'         => 5,
        'show_in_admin_bar'     => true,
        'show_in_nav_menus'     => true,
        'can_export'            => true,
        'has_archive'           => true,
        'exclude_from_search'   => false,
        'publicly_queryable'    => true,
        'capability_type'       => 'page',
        'supports' => array( 'title', 'editor', 'author', 'thumbnail', 'excerpt', 'comments','custom-fields' )
    );
    register_post_type( 'offers', $args );
}
add_action( 'init', 'offersPost' );
/************************* End Offers Custom Post ****************/
/////////////////////////////////////////////////////////////////////
/************************* Start Hotel Custom Post ****************/
function hotelPost(){
    $labels = array(
        'name'=>'Hotels',
        'singular_name'=>'Hotel',
    );

    $args = array(
        'labels'=> $labels,
        'public'=>true,
        'menu_position'=> 5,
        'supports' => array( 'title', 'editor', 'author', 'thumbnail', 'excerpt', 'comments','custom-fields'  )
    );
    register_post_type( 'hotels', $args );
}
add_action( 'init', 'hotelPost' );


/************************* End Hotel Custom Post ****************/
/////////////////////////////////////////////////////////////////
/************************* Start Services Custom Post ****************/

// Register Custom Post Type
function Services() {

    $labels = array(
        'name'                  => _x( 'Post Services', 'Post Type General Name', 'text_domain' ),
        'singular_name'         => _x( 'Post Service', 'Post Type Singular Name', 'text_domain' ),
        'menu_name'             => __( 'Services', 'text_domain' ),
        'name_admin_bar'        => __( 'Post Type', 'text_domain' ),
        'archives'              => __( 'Item Archives', 'text_domain' ),
        'attributes'            => __( 'Item Attributes', 'text_domain' ),
        'parent_item_colon'     => __( 'Parent Item:', 'text_domain' ),
        'all_items'             => __( 'All Items', 'text_domain' ),
        'add_new_item'          => __( 'Add New Item', 'text_domain' ),
        'add_new'               => __( 'Add New', 'text_domain' ),
        'new_item'              => __( 'New Item', 'text_domain' ),
        'edit_item'             => __( 'Edit Item', 'text_domain' ),
        'update_item'           => __( 'Update Item', 'text_domain' ),
        'view_item'             => __( 'View Item', 'text_domain' ),
        'view_items'            => __( 'View Items', 'text_domain' ),
        'search_items'          => __( 'Search Item', 'text_domain' ),
        'not_found'             => __( 'Not found', 'text_domain' ),
        'not_found_in_trash'    => __( 'Not found in Trash', 'text_domain' ),
        'featured_image'        => __( 'Featured Image', 'text_domain' ),
        'set_featured_image'    => __( 'Set featured image', 'text_domain' ),
        'remove_featured_image' => __( 'Remove featured image', 'text_domain' ),
        'use_featured_image'    => __( 'Use as featured image', 'text_domain' ),
        'insert_into_item'      => __( 'Insert into item', 'text_domain' ),
        'uploaded_to_this_item' => __( 'Uploaded to this item', 'text_domain' ),
        'items_list'            => __( 'Items list', 'text_domain' ),
        'items_list_navigation' => __( 'Items list navigation', 'text_domain' ),
        'filter_items_list'     => __( 'Filter items list', 'text_domain' ),
    );
    $args = array(
        'label'                 => __( 'Post Service', 'text_domain' ),
        'description'           => __( 'this post is for the services section.', 'text_domain' ),
        'labels'                => $labels,
        'supports'              => array( 'title', 'editor', 'thumbnail', ),
        'taxonomies'            => array( 'category', 'post_tag' ),
        'hierarchical'          => false,
        'public'                => true,
        'show_ui'               => true,
        'show_in_menu'          => true,
        'menu_position'         => 5,
        'show_in_admin_bar'     => true,
        'show_in_nav_menus'     => true,
        'can_export'            => true,
        'has_archive'           => true,
        'exclude_from_search'   => false,
        'publicly_queryable'    => true,
        'capability_type'       => 'page',
        'supports' => array( 'title', 'editor', 'author', 'thumbnail', 'excerpt', 'comments' )
    );
    register_post_type( 'service_post', $args );

}
add_action( 'init', 'Services', 0 );



 function custom_pagination($numpages = '', $pagerange = '', $paged='') {
    if (empty($pagerange)) {
        $pagerange = 1;
    }

    global $paged;
    if (empty($paged)) {
        $paged = 1;
    }
    if ($numpages == '') {
        global $wp_query;
        $numpages = $wp_query->max_num_pages;
        if(!$numpages) {
            $numpages = 1;
        }
    }
    $pagination_args = array(
        'base'            => get_pagenum_link(1) . '%_%',
        'format'          => 'page/%#%',
        'total'           => $numpages,
        'current'         => $paged,
        'show_all'        => False,
        'end_size'        => 1,
        'mid_size'        => $pagerange,
        'prev_next'       => True,
        'prev_text'       => __('&laquo;'),
        'next_text'       => __('&raquo;'),
        'type'            => 'plain',
        'add_args'        => false,
        'add_fragment'    => ''
    );

    $paginate_links = paginate_links($pagination_args);

    if ($paginate_links) {

        echo "<nav class='custom-pagination'>";
        echo $paginate_links;
        echo "</nav>";
    }

}



function sh_footer_widget(){
    $arg = array(
        'name'=>'Footer Widget',
        'id'=>'footer_widget',
    );
    register_sidebar ($arg);
}
add_action( 'widgets_init', 'sh_footer_widget' );


function touristic_places() {

    $labels = array(
        'name'                  => _x( 'touristic_places', 'Post Type General Name', 'text_domain' ),
        'singular_name'         => _x( 'touristic_place', 'Post Type Singular Name', 'text_domain' ),
        'menu_name'             => __( 'Touristic_places', 'text_domain' ),
        'name_admin_bar'        => __( 'Post Type', 'text_domain' ),
        'archives'              => __( 'Item Archives', 'text_domain' ),
        'attributes'            => __( 'Item Attributes', 'text_domain' ),
        'parent_item_colon'     => __( 'Parent Item:', 'text_domain' ),
        'all_items'             => __( 'All Items', 'text_domain' ),
        'add_new_item'          => __( 'Add New Item', 'text_domain' ),
        'add_new'               => __( 'Add New', 'text_domain' ),
        'new_item'              => __( 'New Item', 'text_domain' ),
        'edit_item'             => __( 'Edit Item', 'text_domain' ),
        'update_item'           => __( 'Update Item', 'text_domain' ),
        'view_item'             => __( 'View Item', 'text_domain' ),
        'view_items'            => __( 'View Items', 'text_domain' ),
        'search_items'          => __( 'Search Item', 'text_domain' ),
        'not_found'             => __( 'Not found', 'text_domain' ),
        'not_found_in_trash'    => __( 'Not found in Trash', 'text_domain' ),
        'featured_image'        => __( 'Featured Image', 'text_domain' ),
        'set_featured_image'    => __( 'Set featured image', 'text_domain' ),
        'remove_featured_image' => __( 'Remove featured image', 'text_domain' ),
        'use_featured_image'    => __( 'Use as featured image', 'text_domain' ),
        'insert_into_item'      => __( 'Insert into item', 'text_domain' ),
        'uploaded_to_this_item' => __( 'Uploaded to this item', 'text_domain' ),
        'items_list'            => __( 'Items list', 'text_domain' ),
        'items_list_navigation' => __( 'Items list navigation', 'text_domain' ),
        'filter_items_list'     => __( 'Filter items list', 'text_domain' ),
    );
    $args = array(
        'label'                 => __( 'touristic_place', 'text_domain' ),
        'description'           => __( 'Post Type Description', 'text_domain' ),
        'labels'                => $labels,
        'supports'              => array( 'title', 'editor', 'excerpt', 'thumbnail', 'custom-fields', 'page-attributes', ),
        'taxonomies'            => array( 'category', 'post_tag' ),
        'hierarchical'          => false,
        'public'                => true,
        'show_ui'               => true,
        'show_in_menu'          => true,
        'menu_position'         => 5,
        'show_in_admin_bar'     => true,
        'show_in_nav_menus'     => true,
        'can_export'            => true,
        'has_archive'           => true,        
        'exclude_from_search'   => false,
        'publicly_queryable'    => true,
        'capability_type'       => 'page',
    );
    register_post_type( 'touristic_places', $args );

}
add_action( 'init', 'touristic_places', 0 );
