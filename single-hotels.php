<?php
/**
 * Created by PhpStorm.
 * User: Geek
 * Date: 9/7/2017
 * Time: 1:02 AM
 */


		// Start the loop.
		while ( have_posts() ) {
             the_post();

           ?> <h2><?php  the_title();?></h2>
         <?php } ?>