<?php
/**
 * Template Name: Dogs
 */

get_header(); ?>



<?php
	while ( have_posts() ) : the_post();

		
		get_template_part( 'template-parts/content', 'dogs' );

		
	endwhile;
?>



<?php

get_footer();
