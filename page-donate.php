<?php
/**
 * Template Name: Donate
 */

get_header(); ?>


<div class="fixedsizingcontainer">
	<div class="">
    <h1 class="blogheader">Donate</h1>
	</div>

	<div class="">
		<?php
			while ( have_posts() ) : the_post();

			
				get_template_part( 'template-parts/content', 'donate' );

			
			endwhile;
		?>
	</div>
</div>






<?php

get_footer();
