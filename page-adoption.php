<?php
/**
 * Template Name: Adoption
 */

get_header(); ?>



<?php
	while ( have_posts() ) : the_post();

		
		get_template_part( 'template-parts/content', 'blog' );

		
	endwhile;
?>



<?php

get_footer();
