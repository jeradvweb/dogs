<?php 
	the_post_thumbnail('full', ['class' => 'img-fluid']);?>
	

<?php the_content(); ?>


<?php

// check if the repeater field has rows of data
if( have_rows('dog') ): ?>

 	
   <?php while ( have_rows('dog') ) : the_row(); ?>

       
<?php 

$image = get_sub_field('picture');

if( !empty($image) ): ?>

	<img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />

<?php endif; ?>

       
        <?php the_sub_field('name'); ?>

 <?php   endwhile;

else :

    // no rows found

endif;

?>










