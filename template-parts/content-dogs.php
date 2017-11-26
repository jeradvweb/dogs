<?php 
	the_post_thumbnail('full', ['class' => 'img-fluid']);?>
	

<?php the_content(); ?>


<?php

// check if the repeater field has rows of data
if( have_rows('dog') ): ?>

 	
   <?php while ( have_rows('dog') ) : the_row(); ?>

<div class="dogbox">      
	
		<div class="">
			<?php 

			$image = get_sub_field('picture');

			if( !empty($image) ): ?>
		         <!-- <div class="">
				  <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
		         </div> -->
			<?php endif; ?>
		</div>
		<div class="">
				
                  <div class="doginformation">
				    	<img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
		          

					      <div class="descriptionshift">
					        <p class="extratypename"><b>Name:</b> <?php the_sub_field('name'); ?></p>
					        <p><b>ID:</b> <?php the_sub_field('id'); ?></p>
					        <p><b>Breed:</b> <?php the_sub_field('breed'); ?></p>
					        <p><b>Sex:</b> <?php the_sub_field('sex'); ?></p>
					        <br>
					        <p><b>Info:</b> <?php the_sub_field('info'); ?></p>
						  </div>
				  </div>
			 <?php   endwhile;

			else :

			    // no rows found

			endif;

			?>
		</div>
</div> 











