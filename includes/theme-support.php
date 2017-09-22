<?php

require_once('bs4navwalker.php');

add_theme_support( 'post-thumbnails' );


//Menu Locations
function sh_register_menu(){
    register_nav_menu( 'top_nave', 'Top Navigation' );
}
add_action('init','sh_register_menu');