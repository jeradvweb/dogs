<?php
/**
 * Template Name: Adoption
 */

get_header(); ?>


<div class="fixedsizingcontainer">
	<div class="">
    <h1 class="blogheader">Become a Hero, Adopt Today</h1>
	</div>

	<div class="">
	<?php
		while ( have_posts() ) : the_post();

		
			get_template_part( 'template-parts/content', 'adopt' );

		
		endwhile;
	?>
	</div>

</div>











<?php

get_footer();
