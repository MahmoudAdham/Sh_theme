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
            <div id="carousel_header" class="carousel slide" data-ride="carousel">
              <div class="carousel-inner" role="listbox">
                <div class="carousel-item active" style="
                    background-image: url('<?php echo $uri('asset/images/slider/1.jpg') ?>');
                ">
                 <div class="carousel-caption d-none d-md-block">
                    <h3>أقم أكثر وأدفع أقل</h3>
                    <p>احجز 5 ليالي أو أكثر واحصل على خصم 20%</p>
                    <a href="#">اقراء المزيد</a>
                  </div>
                </div>
                <!--  <div class="carousel-item " style="
                    background-image: url('<?php echo $uri('asset/images/slider/2.jpg') ?>');
                ">
                </div> -->
              </div>
              <a class="carousel-control-prev" href="#carousel_header" role="button" data-slide="prev">
                 <img src="<?php echo $uri('asset/images/slider/left.png') ?>" width="35">
                <span class="sr-only">Previous</span>
              </a>
              <a class="carousel-control-next" href="#carousel_header" role="button" data-slide="next">
                <img src="<?php echo $uri('asset/images/slider/right.png') ?>" width="35">
                <span class="sr-only">Next</span>
              </a>
            </div>

            <?php get_search_form(); ?>
        </div>
    </header>
<?php } else{?>
<header>

</header>
<?php } ?>
