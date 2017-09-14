<?php /* Template Name: touristic_places */

  get_header(); ?>
<section class="content">

<!--
    <div class="bg-title">
        <div class="container">
            <h3 class="title-sc">الأماكن السياحية المشهورة </h3>
            <div class="p-sc">
أكثر الوجهات السياحية زيارةً            </div>
        </div>
    </div>
  
-->


    <section class="data">
        
         <!-- Page Content -->
    <div class="container">

      <h1 class="my-4 text-center text-lg-center mb-5">أكثر الوجهات السياحية زيارةً   </h1>

        <div class=" jumbotron jumbotron-fluid">
          <?php
            $paged = ( get_query_var('paged') ) ? get_query_var('paged') : 1;

            $custom_args = array(
                'post_type' => 'touristic_places',
                'posts_per_page' => 4,
                'paged' => $paged
            );

            $custom_query = new WP_Query( $custom_args );

            if ( $custom_query->have_posts() ) {

                while ( $custom_query->have_posts() ) {
                    $custom_query->the_post(); ?>
                  
            
         <div class="row m-5">
          <?php echo the_post_thumbnail( 'thumbnail', array( 'class' => 'col-md-4 col-xs-12 rounded float-left' )); ?>
<!--            <img src="http://placehold.it/400x300" class=" col-md-4 col-xs-12 rounded float-left" alt="...">-->
                <div class="col-md-4 col-xs-12 text-center">
                    <h2 style="color:red;"><?php the_title(); ?> </h2>
                    <p>
                        <?php the_content() ?>

                    </p>
                    <p>ابحث عن فندق الليلة في<span> : اسم المدينة  </span>   </p>
                </div>
                                                    <?php echo the_post_thumbnail( 'thumbnail', array( 'class' => 'col-md-4 col-xs-12 rounded float-right' )); ?>

<!--            <img src="http://placehold.it/400x300" class="col-md-4 col-xs-12 rounded float-right" alt="...">-->
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
     
       
        
    </div>
    <!-- /.container -->

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

