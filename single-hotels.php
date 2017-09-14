


<?php get_header();
$uri = get_theme_file_uri;
?>




<div class="row hotel-section">

    <div class="col-sm-6">

        <div class="hotel-slider" style="max-width:100%;">
            <div class="item" >
                <div class="clearfix" style="max-width:100%;">
                    <ul id="image-gallery" class="gallery list-unstyled cS-hidden">
                        <li data-thumb="<?php echo $uri('asset/images/44.jpg')?> ">
                            <img src="<?php echo $uri('asset/images/44.jpg')?>">
                        </li>
                        <li data-thumb="<?php echo $uri('asset/images/11.jpg')?> ">
                            <img src="<?php echo $uri('asset/images/11.jpg')?>">
                        </li>
                    </ul>
                </div>
            </div>


        </div>



    </div>

    <div class="col-sm-6">
<?php
while ( have_posts() ) {
    the_post();
    ?>


     <div class="hotel-details text-right">
            <div class="row hotel-title">
                <div class="col-sm-6">
                    <h1><?php the_title(); ?></h1>
                </div>

                <div class="col-sm-6 text-left">
                    <button class="btn btn-danger booking-btn">احجز الآن</button>
                </div>
            </div>

            <div class="row" style="padding-top: 10px">
                <div class="col-sm-4">
                    <div class="position">
                        <label>غزة, فلسطين</label>
                        <span><i class="fa fa-map-marker" aria-hidden="true"></i></span>
                    </div>
                </div>

                <div class="col-sm-4">
                    <div class="rate">
                        <label>التقييم</label>
                        <span><i class="fa fa-star" aria-hidden="true"></i></span>
                        <span><i class="fa fa-star" aria-hidden="true"></i></span>
                        <span><i class="fa fa-star" aria-hidden="true"></i></span>
                        <span><i class="fa fa-star-half-o" aria-hidden="true"></i></span>
                        <span><i class="fa fa-star-o" aria-hidden="true"></i></span>
                    </div>
                </div>

                <div class="col-sm-4">
                    <div class="call-num">
                        <label>+972594111333</label>
                        <span><i class="fa fa-phone" aria-hidden="true"></i></span>
                    </div>
                </div>

            </div>


            <div class="row">
                <div class="col-sm-12">
                    <h1>المميزات</h1>
                </div>
            </div>

            <div class="row" style="padding-top: 10px">
                <div class="col-sm-3">
                    <label>تكييف مركزي</label>
                    <i class="fa fa-snowflake-o" aria-hidden="true"></i>
                </div>
                <div class="col-sm-3">
                    <label>انترنت لاسلكي مجاني</label>
                    <i class="fa fa-wifi" aria-hidden="true"></i>
                </div>
                <div class="col-sm-3">
                    <label>مطعم وبوفيه افطار</label>
                    <i class="fa fa-cutlery" aria-hidden="true"></i>
                </div>

                <div class="col-sm-3">
                    <label>توصيل سيارات</label>
                    <i class="fa fa-car" aria-hidden="true"></i>
                </div>

            </div>


            <div class="row progress-row">
                <div class="col-sm-6">
                    <div class="progress-section">
                        <div class="row progress-title">
                            <h1>آراء الزبائن</h1>
                        </div>

                        <div class="row">
                            <div class="col-sm-3">
                                <span>ممتاز</span>
                            </div>
                            <div class="col-sm-9">
                                <div class="progress">
                                    <div class="progress-bar bg-info" role="progressbar" style="width: 70%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-sm-3">
                                <span>جيد جدا</span>
                            </div>
                            <div class="col-sm-9">
                                <div class="progress">
                                    <div class="progress-bar bg-info" role="progressbar" style="width: 55%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </div>
                        </div>


                        <div class="row">
                            <div class="col-sm-3">
                                <span>جيد</span>
                            </div>
                            <div class="col-sm-9">
                                <div class="progress">
                                    <div class="progress-bar bg-info" role="progressbar" style="width: 25%" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-sm-3">
                                <span>سيء</span>
                            </div>
                            <div class="col-sm-9">
                                <div class="progress">
                                    <div class="progress-bar bg-info" role="progressbar" style="width: 10%" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-sm-3">
                                <span>سيء جدا</span>
                            </div>
                            <div class="col-sm-9">
                                <div class="progress">
                                    <div class="progress-bar bg-info" role="progressbar" style="width: 5%" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </div>
                        </div>





                    </div>
                </div>

                <div class="col-sm-6">
                    <img src="<?php echo $uri('asset/images/map.png')?>" class="img-fluid">
                </div>

            </div>




        </div>
    </div>
    <?php } ?>

</div>



<?php get_footer();?>


