<?php
/**
 * Template Name: Adoption
 */

get_header(); ?>

<div class="blogtitlecontainer">
    <h1 class="blogheader">Become a Hero, Adopt Today</h1>
</div>


<div class="adoptcontainer">
	<?php
		while ( have_posts() ) : the_post();

		
			get_template_part( 'template-parts/content', 'adopt' );

		
		endwhile;
	?>
</div>





<?php

get_footer();
