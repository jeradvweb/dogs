<?php
/**
 * Template Name: About
 */

get_header(); ?>

<div class="aboutuscontainer">
	<div class="">
    <h1 class="aboutustype">Who We Are</h1>
	</div>

	<div class="">
		<?php
			while ( have_posts() ) : the_post();

		
				get_template_part( 'template-parts/content', 'about' );

		
			endwhile;
		?>

	</div>
</div>




<?php


get_footer();
