<?php
/**
 * Template Name: Donate
 */

get_header(); ?>

<div class="donateframe">
	<?php
		while ( have_posts() ) : the_post();

		
			get_template_part( 'template-parts/content', 'donate' );

		
		endwhile;
	?>
</div>





<?php

get_footer();
