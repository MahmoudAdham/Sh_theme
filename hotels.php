<?php /* Template Name: Hotel */

  get_header(); ?>
<section class="content">

    <div class="bg-title">
        <div class="container">
            <h3 class="title-sc">الفنادق الموصى بها</h3>
            <div class="p-sc">
                هنا نص تجريبي هنا نص تجريبي هنا نص تجريبي هنا نص تجريبي هنا نص تجريبي هنا نص تجريبي
            </div>
        </div>
    </div>
    <div class="container">
        <div class="search-item">
            <form>
                <div class="row">
                    <div class="col-md-2">
                        <h4>ترتيب الفنادق حسب: </h4>
                    </div>
                    <div class="col-md-2">
                        <select class="form-control custom-select">
                            <option>الدولة</option>
                            <option>فلسطين</option>
                            <option>مصر</option>
                            <option>السعودية</option>
                        </select>
                    </div>
                    <div class="col-md-2">
                        <select class="form-control custom-select">
                            <option>السعر</option>
                            <option>من أعلى سعر إلى أقل سعر</option>
                            <option>من أقل سعر إلى أعلى سعر</option>
                        </select>
                    </div>
                    <div class="col-md-3">
                        <div class="rate">
                            <i class="fa fa-star" aria-hidden="true"></i>
                            <i class="fa fa-star" aria-hidden="true"></i>
                            <i class="fa fa-star" aria-hidden="true"></i>
                            <i class="fa fa-star" aria-hidden="true"></i>
                            <i class="fa fa-star" aria-hidden="true"></i>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="switch">
                            <a href="javascript:;" id="grid" class="">
                                <i class="fa fa-th" aria-hidden="true"></i>
                            </a>
                            <a href="javascript:;" id="list" class="active">
                                <i class="fa fa-th-list " aria-hidden="true"></i>
                            </a>
                        </div>
                    </div>
                </div>
                <!-- <div class="line"></div> -->
            </form>
        </div>
    </div>

    <section class="data">
        <div class="container">

            <?php
            $paged = ( get_query_var('paged') ) ? get_query_var('paged') : 1;

            $custom_args = array(
                'post_type' => 'hotels',
                'posts_per_page' => 4,
                'paged' => $paged
            );

            $custom_query = new WP_Query( $custom_args );

            if ( $custom_query->have_posts() ) {

                while ( $custom_query->have_posts() ) {
                    $custom_query->the_post(); ?>
                    <div class="row mr-b-5">
                        <div class="col-12">
                            <div class="bg-contant no-padding">
                                <div class="row no-gutters">
                                    <div class="col-md-4">
                                        <?php echo get_the_post_thumbnail(); ?>
                                    </div>
                                    <div class="col-md-8">
                                        <div class="row no-gutters">
                                            <div class="col-md-9">
                                                <div class="data-hotel">
                                                    <h4 class="b-inline">
                                                        <a href="#"><?php the_title(); ?></a>
                                                    </h4>
                                                    <div class="rate b-inline">
                                                        <i class="fa fa-star" aria-hidden="true"></i>
                                                        <i class="fa fa-star" aria-hidden="true"></i>
                                                        <i class="fa fa-star" aria-hidden="true"></i>
                                                        <i class="fa fa-star" aria-hidden="true"></i>
                                                        <i class="fa fa-star" aria-hidden="true"></i>
                                                    </div>
                                                    <p class="some-details">
                                                        <?php the_content() ?>
                                                    </p>
                                                    <a href="#" class="btn btn-more">المزيد</a>
                                                </div>
                                            </div>
                                            <div class="col-md-3">
                                                <div class="room_price">
                                                    <div class="room_price_inner">
                                                        <span class="room_price_number"> $89,00  </span>
                                                        <small class="upper"> في الليلة </small>
                                                        <a href="room.html" class="btn button upper btn_book">حجز الآن</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                <?php   }
                if (function_exists(custom_pagination)) {
                    custom_pagination($custom_query->max_num_pages,"",$paged);
                }
                wp_reset_postdata();
            }

            else {
                echo "Sorry No Post";
            }

    ?>

        </div>
    </section>



</section>


<?php get_footer(); ?>
<script>
    var map;
    function initMap() {
        map = new google.maps.Map(document.getElementById('map'), {
            center: {lat: -34.397, lng: 150.644},
            zoom: 8
        });
    }
</script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCqgEcKPivfnQ3sYeTgWqJSgvXa_KG_8A8&callback=initMap"
        async defer></script>
</body>
</html>

