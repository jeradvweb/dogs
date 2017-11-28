<?php
/**
 * Template Name: Foster
 */

get_header(); ?>

<div class="fixedsizingcontainer">
	<div class="">
    <h1 class="blogheader">Become a Foster Parent Today!</h1>
	</div>

	<div class="">	
				<?php
						while ( have_posts() ) : the_post();

			
							get_template_part( 'template-parts/content', 'foster' );

			
						endwhile;
				 ?>	
	</div>
</div>







<?php

get_footer();
