<?php
get_header();
?>

<section class="content">
    <div class="top-bg-offer"></div>
    <div class="data offers-section">
        <div class="title">
            <h1>برامجنا</h1>
        </div>
    </div>
    <div class="container">
        <?php
        while ( have_posts() ) {
            the_post();
        ?>

    <h2 class="title-post-tours">
            <i class="fa fa-bus" aria-hidden="true"></i>
            <?php the_title(); ?>
            <span> <?php echo get_post_meta(get_the_ID(),'Code',true); ?></span>
        </h2>
            <?php } ?>
    </div>
</section>


<?php get_footer(); ?>