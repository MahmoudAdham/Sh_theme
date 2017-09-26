<?php get_header(); ?>
<section class="tour-places">

    <div class="row tour-title ">
        <div class="col-sm-12 tour-slider-col ">
            <div class="tour-slider ">
                <h1>اشهر الاماكن السياحية في <span>قطر</span></h1>

            </div>
        </div>
    </div>

    <div class="tour-content" >
        <div class="container">

            <div class="row">
<?php
while ( have_posts() ) {
    the_post();

    the_content();}
    ?>

    </div>


        </div>

    </div>


</section>

<?php get_footer(); ?>