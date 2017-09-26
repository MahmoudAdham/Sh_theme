<?php
function styleTheme(){
    wp_enqueue_style('sh_STYLE', get_stylesheet_uri());
    wp_enqueue_style('sh_bootstrap', get_theme_file_uri('asset/css/bootstrap.min.css'));
    wp_enqueue_style('sh_fontawesom', get_theme_file_uri('asset/css/font-awesome.min.css'));
    wp_enqueue_style('sh_date', get_theme_file_uri('asset/css/bootstrap-datepicker.standalone.min.css'));
    wp_enqueue_style('sh_style2', get_theme_file_uri('asset/css/style.css'));
    wp_enqueue_script('sh_jquery', get_theme_file_uri('asset/js/jquery-3.1.1.min.js'));
    wp_enqueue_script('sh_tether_js', ('https://npmcdn.com/tether@1.2.4/dist/js/tether.min.js'));
    wp_enqueue_script('sh_bootstrap_js', get_theme_file_uri('asset/js/bootstrap.min.js'));
    wp_enqueue_script('sh_date_js', get_theme_file_uri('asset/js/bootstrap-datetimepicker.min.js'), array(),false,true);
    wp_enqueue_script('sh_nicescroll', get_theme_file_uri('asset/js/jquery.nicescroll.min.js'), array(),false, true);
    wp_enqueue_script('sh_js', get_theme_file_uri('asset/js/js.js'), array(),false, true);
    if (is_home()){
        wp_enqueue_script('sh_nav_js', get_theme_file_uri('asset/js/nav-home.js'), array(),false, true);
    }

    wp_enqueue_style('lightSlider_css', get_theme_file_uri('asset/css/lightslider.css'));
    wp_enqueue_script('lightSlider_js', get_theme_file_uri('asset/js/lightslider.js'), array(),false, true);

    if(ICL_LANGUAGE_CODE == 'en'){ //Ar
        wp_enqueue_style( 'ltr-style', get_theme_file_uri('asset/css/ltr-style.css'));
    }
}
add_action('wp_enqueue_scripts','styleTheme');