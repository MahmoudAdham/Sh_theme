<?php
function hotelPost(){
    $labels = array(
        'name'=>'Hotels',
        'singular_name'=>'Hotel',
    );

    $args = array(
        'labels'=> $labels,
        'public'=>true,
        'menu_position'=> 2,
        'supports' => array( 'title', 'editor', 'author', 'thumbnail', 'excerpt', 'comments','custom-fields'  )
    );
    register_post_type( 'hotels', $args );
}
add_action( 'init', 'hotelPost' );