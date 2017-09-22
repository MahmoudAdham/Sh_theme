 <?php get_header();
 $uri = get_theme_file_uri;
 if (ICL_LANGUAGE_CODE == 'en'){
     include_once 'lang/en.php';
 }
 else{
     include_once 'lang/ar.php';
 }
 ?>

<section class="hotels" id="hotels">
    <div class="container">
        <h3><?php echo $lang['hotel']; ?></h3>
        <div class="row">

            <?php
            $args = array(
                    'post_type' =>'hotels',
                'posts_per_page' => 3

            );
                $hotel = new WP_Query( $args );

            if ( $hotel->have_posts() ) {

                while ( $hotel->have_posts() ) {
                    $hotel->the_post(); ?>
                    <div class="col-md-4 mb-4">
                        <div class="card">
                            <?php echo get_the_post_thumbnail(); ?>
                            <div class="card-block">
                                <h4 class="card-title">
                                    <a href="<?php echo get_permalink(); ?>"><?php the_title(); ?></a>
                                </h4>
                                <p class="card-text"> <?php  the_content(); ?> </p>
                                <a href="#" class="btn btn-primary">حجز</a>
                            </div>
                        </div>
                    </div>
             <?php   }

                wp_reset_postdata();
            } else {
              echo "Sorry No Post";
            }
            ?>

        </div>
    </div>
</section>

 <!-- get post touristicplaces -->
 <?php
            $args = array(
                'post_type' =>'touristic_places',
                'posts_per_page' => 8,
            );
            $places = new WP_Query( $args );
 ?>
<section class="places" id="places">
    <div class="container">
        <h3>أماكن سياحية</h3>
        <div class="row">
            <?php
            if ( $places->have_posts() ) {
               while($places->have_posts()) {
                   $places->the_post(); ?>
                <div class="col-md-3">
                    <?php echo get_the_post_thumbnail(); ?>
                    <a href="#"><?php the_title(); ?></a>
                </div>
                <?php
               }
            }
            else{
                echo "Sorry, No Post";
            }
            ?>

        </div>
    </div>
</section>

<section class="services" id="services">
    <div class="container">
        <h3>خدماتنا</h3>
        <div class="row no-gutters">
            <div class="col-md-4">
                <div class="item-offers text-left">
                    <?php
                    $args = array(
                        'post_type' =>'service_post',
                        'posts_per_page' => 6,
                    );
                    $the_services = new WP_Query( $args );

                    if ( $the_services->have_posts() ) {

                        while ( $the_services->have_posts() ) {
                            $the_services->the_post();
                            if ($the_services->current_post % 2 == 0){ ?>
                            <div class="media">
                                <div class="media-body">
                                    <h5 class="mt-0">
                                        <a href=""><?php the_title(); ?></a>
                                    </h5>
                                    <p class="mb-0">
                                        <?php the_content() ?>
                                    </p>
                                </div>
                                <i class="fa fa-plane fa-2x align-self-start mr-3" aria-hidden="true"></i>
                            </div>

                        <?php }}
                        wp_reset_postdata();
                    }else {
                       echo "Sorry, No Post";
                    }
                    ?>
                </div>
            </div>
            <div class="col-md-4">
                <div class="img-2">
                    <img src="<?php echo $uri('asset/images/offer-img.png')?>" alt="mobile" class="img-fluid">
                </div>
            </div>
            <div class="col-md-4">
                <div class="item-offers">


                    <?php


                    if ( $the_services->have_posts() ) {
                            $i = 0;
                        while ( $the_services->have_posts() ) {
                            $the_services->the_post();
                            if ($i % 2 != 0){
                                ?>
                                <div class="media">
                                    <i class="fa fa-plane fa-2x align-self-start ml-3" aria-hidden="true"></i>
                                    <div class="media-body">
                                        <h5 class="mt-0">
                                            <a href=""><?php the_title(); ?></a>
                                        </h5>
                                        <p class="mb-0">
                                            <?php the_content(); ?>
                                        </p>
                                    </div>
                                </div>

                            <?php
                        } $i++;}
                        wp_reset_postdata();
                    } else {
                        echo "Sorry, No Post";
                    }
                    ?>


                </div>
            </div>
        </div>
    </div>
</section>

<section class="offer" id="offer">

    <?php
    $args = array(
        'post_type' =>'tours',
        'posts_per_page' => 3,
    );
    $tours = new WP_Query( $args );
    ?>
    <div class="container">
        <h3>برامج سياحية</h3>
        <div class="item-offer text-center">
            <input id="item-type-all" name="radio-set-1" type="radio" class="item-type-all" checked="checked">
            <label for="item-type-all" class="label-type-all">الكل</label>

            <?php
            if ( $tours->have_posts() ) {
//            while ( $tours->have_posts() ) {
//            $tours->the_post();
//            ?>
<!--            <input id="item-type-all" name="radio-set-1" type="radio" class="item-type-all">-->
<!--            <label for="item-type-all" class="label-type-all">--><?php //the_category(',');  ?><!--</label>-->
<!--            --><?php //} ?>

            <div class="row items">
                <?php
                while ( $tours->have_posts() ) {
                $tours->the_post();
                ?>
                <div class="col-md-4 col-sm-6 item item-type-1">
                    <div class="card">
                        <img class="img-fluid" src="<?php echo $uri('asset/images/1.jpg')?>" alt="Card image cap">
                        <div class="card-block">
                            <h4 class="card-title"><?php the_title() ?></h4>
                             <hr>
                            <ul class="list-unstyled">
                                <div class="row">
                                    <li class="col-sm-6">
                                        <i class="fa fa-map-marker" aria-hidden="true"></i>
                                        <?php echo get_post_meta(get_the_ID(),'location',true); ?>
                                    </li>
                                    <li class="col-sm-6">
                                        <i class="fa fa-calendar" aria-hidden="true"></i>
                                        <?php echo get_post_meta(get_the_ID(),'period',true); ?>
                                    </li>
                                    <li class="col-sm-6">
                                        <i class="fa fa-car" aria-hidden="true"></i>
                                        <?php echo get_post_meta(get_the_ID(),'driver',true); ?>
                                    </li>
                                    <li class="col-sm-6">
                                        <i class="fa fa-clock-o" aria-hidden="true"></i>
                                        <?php echo get_post_meta(get_the_ID(),'tour',true); ?>
                                    </li>
                                    <li>
                                        <i class="fa fa-usd" aria-hidden="true"></i>
                                        <?php echo get_post_meta(get_the_ID(),'price',true); ?>
                                    </li>
                                </div>

                            </ul>
                            <hr>
                            <a href="#">احجز الآن</a>
                        </div>
                    </div>
                </div>

                    <?php
                }
                wp_reset_postdata();

                ?>

            </div>
<?php
            } else {
                echo "Sorry, No Post";
            }
?>
        </div>
    </div>
</section>

<section class="said">
    <div class="overlay">
        <div class="container">
            <h3>قالوا عنا</h3>
            <div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel">
                <div class="carousel-inner" role="listbox">
                    <div class="carousel-item active">
                        <div class="carousel-caption d-md-block">
                            <div class="img-said">
                                <img src="<?php echo $uri('asset/images/9.jpg')?>">
                            </div>
                            <p>
                                <i class="fa fa-quote-right"></i>
                                هنا نص تجريبي هنا نص تجريبي هنا نص تجريبي هنا نص تجريبي هنا نص تجريبي هنا نص تجريبي
                                هنا نص تجريبي هنا نص تجريبي هنا نص تجريبي هنا نص تجريبي هنا نص تجريبي هنا نص تجريبي
                                تجريبي هنا نص تجريبي هنا نص تجريبي هنا نص تجريبي
                                <i class="fa fa-quote-left"></i>
                            </p>
                            <h4>محمود الأدهم</h4>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="carousel-caption d-md-block">
                            <div class="img-said">
                                <img src="<?php echo $uri('asset/images/9.jpg')?>">
                            </div>
                            <p>
                                <i class="fa fa-quote-right"></i>
                                هنا نص تجريبي هنا نص تجريبي هنا نص تجريبي هنا نص تجريبي هنا نص تجريبي هنا نص تجريبي
                                هنا نص تجريبي هنا نص تجريبي هنا نص تجريبي هنا نص تجريبي هنا نص تجريبي هنا نص تجريبي
                                تجريبي هنا نص تجريبي هنا نص تجريبي هنا نص تجريبي
                                <i class="fa fa-quote-left"></i>
                            </p>
                            <h4>محمود الأدهم</h4>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="carousel-caption d-md-block">
                            <div class="img-said">
                                <img src="<?php echo $uri('asset/images/9.jpg')?>">
                            </div>
                            <p>
                                <i class="fa fa-quote-right"></i>
                                هنا نص تجريبي هنا نص تجريبي هنا نص تجريبي هنا نص تجريبي هنا نص تجريبي هنا نص تجريبي
                                هنا نص تجريبي هنا نص تجريبي هنا نص تجريبي هنا نص تجريبي هنا نص تجريبي هنا نص تجريبي
                                تجريبي هنا نص تجريبي هنا نص تجريبي هنا نص تجريبي
                                <i class="fa fa-quote-left"></i>
                            </p>
                            <h4>محمود الأدهم</h4>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>



<section class="contacts" id="contacts">
    <div class="container">
        <h3 class="mb-5">تواصل معنا</h3>
        <div class="row mb-5">
            <div class="col-md-6">
                <div id="map"></div>
            </div>
            <div class="col-md-6">
                <div class="address">
                    <h4>
                        عنوان الشركة
                    </h4>
                    <ul class="list-unstyled">
                        <li>
                            <i class="fa fa-map-marker" aria-hidden="true"></i>
                            الولايات المتحدة الامريكية ولاية سانفرانسيسكو ميدان الاوبرا
                        </li>
                        <li>
                            <i class="fa fa-map-marker" aria-hidden="true"></i>
                            الامارات العربية المتحدة في منطقة بن راشد
                        </li>
                    </ul>
                </div>
            </div>
        </div>

        <div class="form text-center">
            <h4 class="mb-5">
                ارسل لنا رسالة
            </h4>

            <form class="row">
                <div class="form-group col-sm-6">
                    <input type="text" class="form-control" placeholder="الاسم" required>
                </div>
                <div class="form-group col-sm-6">
                    <input type="email" class="form-control" placeholder="البريد الالكترونى" required>
                </div>
                <div class="form-group col-sm-12">
                    <textarea class="form-control" placeholder="الرسالة" required></textarea>
                </div>
                <button type="submit" class="btn">
                    ارسال
                </button>
            </form>
        </div>
    </div>
</section>

 <div></div>

<?php get_footer(); ?>

