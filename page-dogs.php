<?php
/**
 * Template Name: Dogs
 */

get_header(); ?>

<div class="blogtitlecontainer">
    <h1 class="blogheader">Meet the Dogs</h1>
</div>

<div class="postcontainersize">
	


	<?php
		while ( have_posts() ) : the_post();

			
			get_template_part( 'template-parts/content', 'dogs' );

			
		endwhile;
	?>

</div>

<div class="dogfooternote"> 
	<p>Please reference the <b>Name and ID Number</b> when filling out forms.</p>
</div>

<?php

get_footer();
