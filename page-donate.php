<?php
/**
 * Template Name: Donate
 */

get_header(); ?>

<div class="blogtitlecontainer">
    <h1 class="blogheader">Donate</h1>
</div>

<div class="adoptcontainer">
	<?php
		while ( have_posts() ) : the_post();

		
			get_template_part( 'template-parts/content', 'donate' );

		
		endwhile;
	?>
</div>





<?php

get_footer();
