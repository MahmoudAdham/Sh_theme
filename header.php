<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>شام للسياحة</title>
    <!-- Bootstrap CSS -->

    <?php
    wp_head();

    $uri = get_theme_file_uri;
    ?>
</head>
<body data-spy="scroll" data-target=".navbar" >

<nav class="navbar navbar-toggleable-md fixed-top navbar-light <?php if(!is_home()){ echo "new-nav"; } ?> " id="navbar">
    <div class="container">
        <button class="navbar-toggler navbar-toggler-left" type="button" data-toggle="collapse"
                data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                aria-expanded="false" aria-label="Toggle navigation">
            <i class="fa fa-bars" aria-hidden="true"></i>
        </button>
        <a class="navbar-brand" href=".">
            <img src="<?php echo $uri('asset/images/logo.png') ?>" alt="logo" />
        </a>
        <?php

        wp_nav_menu(array( /* Add top menu */
            'theme_location'=> 'top_nave',
            'menu_class' => 'navbar-nav mr-auto',
            'container_class' =>'collapse navbar-collapse',
            'container_id' => 'navbarSupportedContent',
            'walker' => new bs4navwalker()
        ))
        ?>


    </div>
</nav>
<?php if( is_home() ) {?>
    <header id="home">
        <div class="overlay">
            <?php get_search_form(); ?>
        </div>
    </header>
<?php } else{?>
<header>

</header>
<?php } ?>
