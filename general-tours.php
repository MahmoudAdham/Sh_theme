<?php /* Template Name: General Tours */
$uri = get_theme_file_uri;
get_header(); ?>
<section class="content">
    <div class="top-bg-offer"></div>
    <section class="data offers-section">
        <div class="title">
            <h1>برامجنا</h1>
        </div>
        <div class="container">
            <!-- Nav tabs -->
            <ul class="nav nav-tabs" role="tablist">
                <li class="nav-item">
                    <a class="nav-link active" data-toggle="tab" href="#home" role="tab">
                        <i class="fa fa-university" aria-hidden="true"></i>
                        برامج سياحية
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" data-toggle="tab" href="#profile" role="tab">
                        <i class="fa fa-plane" aria-hidden="true"></i>
         جولات خاصة</a>
                </li>
            </ul><!-- Tab panes -->
            <?php
            $args = array(
                'post_type' =>'tours',
                'posts_per_page' => 4,
            );
            $custom_query = new WP_Query( $args );
            if ( $custom_query->have_posts() ) {
            ?>
            <div class="tab-content">
                <div class="tab-pane active" id="home" role="tabpanel">
                    <?php
                    $i = 0;
                    while ( $custom_query->have_posts() ) {
                        $custom_query->the_post();
                        if ($i % 2 == 0){
                        ?>

                    <div class="card card-block">
                        <div class="row no-gutters">
                            <div class="col-md-6">
                                <h1 class="mt-5"><?php the_title(); ?></h1>
                                <p>قمنا بتصميم عرض لك لتبقى معنا لفترة أطول. احجز 21 يوما مقدما واحصل على خصم 15٪ على أفضل سعر متوفر</p>
                                <div class="price">
                                    <span class="apd">ابتداء من</span> <span class="from">298</span> <span class="currency">درهم اماراتى</span>
                                </div>
                                <div class="btn-group mt-5">
                                    <a href="#" class="btn">احجز الان</a>
                                    <a href="#" class="btn">اعرف أكثر</a>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <img src="<?php echo $uri('asset/images/3.jpg')?>">
                            </div>
                        </div>
                    </div>
                            <?php }
                            else{

                            ?>

                    <div class="card card-block">
                        <div class="row no-gutters">
                            <div class="col-md-6">
                                <img src="<?php echo $uri('asset/images/3.jpg')?>">
                            </div>
                            <div class="col-md-6">
                                <h1 class="mt-5"><?php the_title(); ?></h1>
                                <p>قمنا بتصميم عرض لك لتبقى معنا لفترة أطول. احجز 21 يوما مقدما واحصل على خصم 15٪ على أفضل سعر متوفر</p>
                                <div class="price">
                                    <span class="apd">ابتداء من</span> <span class="from">298</span> <span class="currency">درهم اماراتى</span>
                                </div>
                                <div class="btn-group mt-5">
                                    <a href="#" class="btn">احجز الان</a>
                                    <a href="#" class="btn">اعرف أكثر</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php }
                 $i++;   } ?>
                </div>


                <div class="tab-pane" id="profile" role="tabpanel">
                    ...
                </div>
            </div>
            <?php }
            ?>

        </div>
    </section>
</section><?php get_footer(); ?>
<script>
    var map;
    function initMap() {
        map = new google.maps.Map(document.getElementById('map'), {
            center: {lat: -34.397, lng: 150.644},
            zoom: 8
        });
    }
</script>
<script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCqgEcKPivfnQ3sYeTgWqJSgvXa_KG_8A8&callback=initMap">
</script>
