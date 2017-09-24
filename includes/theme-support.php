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



function sh_excerpt_length($length){
    return 15;
}
add_filter('excerpt_length','sh_excerpt_length');

function sh_excerpt_change_dots(){
    return ' ...';
}
add_filter('excerpt_more','sh_excerpt_change_dots');

/************  Post Meta General Tours *********************/
function input_data(){

    $get_code = get_post_meta( get_the_ID(), 'code', true );
    $get_location = get_post_meta( get_the_ID(), 'location', true );
    $get_period = get_post_meta( get_the_ID(), 'period', true );
    $get_driver = get_post_meta( get_the_ID(), 'driver', true );
    $get_t_duration = get_post_meta( get_the_ID(), 't_duration', true );
    $get_price = get_post_meta( get_the_ID(), 'price', true );

    ?>


    <table>
        <tr>
            <th><label for="code">Code</label></th>
            <th><label for="location">Location</label></th>
            <th><label for="period">Period</label></th>
        </tr>
        <tr>
            <td><input type="text" name="code" id="code" value=" <?php echo $get_code ?> "></td>
            <td><input type="text" name="location" id="location" value=" <?php echo $get_location ?> "></td>
            <td><input type="text" name="period" id="period" value="<?php echo $get_period ?> "></td>
        </tr>
        <tr>
            <th><label for="driver">Driver</label></th>
            <th><label for="t_duration">Tour Duration</label></th>
            <th><label for="price">Price</label></th>
        </tr>
        <tr>
            <td><input type="text" name="driver" id="driver" value="<?php echo $get_driver ?> "></td>
            <td><input type="text" name="t_duration" id="t_duration" value=" <?php echo $get_t_duration ?>"></td>
            <td><input type="text" name="price" id="price" value=" <?php echo $get_price ?>"></td>
        </tr>
    </table>

    <?php
}

function generalTours_meta_box(){
    add_meta_box('generalTours_meta_box_id','General Data', 'input_data', 'tours', 'side', 'default', null);
}
add_action('add_meta_boxes', 'generalTours_meta_box');



function save_generalTours_meta_box($post_id){

    if (isset($_POST['code']) && isset($_POST['location']) && isset($_POST['period']) && isset($_POST['driver']) &&
        isset($_POST['t_duration']) && isset($_POST['price'])) {
        update_post_meta( $post_id, 'code', $_POST['code']);
        update_post_meta( $post_id, 'location', $_POST['location']);
        update_post_meta( $post_id, 'period', $_POST['period']);
        update_post_meta( $post_id, 'driver', $_POST['driver']);
        update_post_meta( $post_id, 't_duration', $_POST['t_duration']);
        update_post_meta( $post_id, 'price', $_POST['price']);
    }
}

add_action('save_post','save_generalTours_meta_box');