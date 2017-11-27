<?php
/**
 * Template Name: Foster
 */

get_header(); ?>

<div class="blogtitlecontainer">
    <h1 class="blogheader">Become a Foster Parent Today!</h1>
</div>

<div class="adoptcontainer">	
			<?php
					while ( have_posts() ) : the_post();

		
						get_template_part( 'template-parts/content', 'foster' );

		
					endwhile;
			 ?>	
</div>




<?php

get_footer();
