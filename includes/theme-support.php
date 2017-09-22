<?php

require_once('bs4navwalker.php');

add_theme_support( 'post-thumbnails' );


//Menu Locations
function sh_register_menu(){
    register_nav_menu( 'top_nave', 'Top Navigation' );
}
add_action('init','sh_register_menu');


//pagination
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