<?php
/**
 * Template part for displaying posts
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 * @package fourohfive
 */

?>




<div>

 
	   	<div class="bg-white linksettings">
			
			<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
			
			
			
			<header class="blogposttype titleadjust posttypeheader grid">
				<div class=" thumbnailsize">
					<?php
				/**
				 * Gets the featured image.
				 * @link https://developer.wordpress.org/reference/functions/the_post_thumbnail/
				 */
				the_post_thumbnail('full', ['class' => 'img-fluid']);
				?>
				</div>

				<div class="movetoleft">
					<?php

							/**
							 * The Title
							 *
							 * If this is an individual post, then show the title as an <h1>
							 * Otherwise, if it's on the homepage, or an archive/search results, then
							 * show it as an <h2>
							 */
							if ( is_singular() ) :
								the_title( '<h1>', '</h1>' );
							else :
								the_title( '<h2><a href="' . esc_url( get_permalink() ) . '">', '</a></h2>' );
							endif;

						?>

						<p class="movetoleft">By <?php the_author(); ?> on <?php the_date(); ?></p>
				</div>
						
			</header>

			<?php
				/**
				 * The <div> below is surrounding your post content. You can change it from a <div>
				 * to something else if you wish. You can also add classes to it, etc. It all
				 * depends on how you want to format things
				 */
			?>


			<div class="blogposttype">
				<?php

					/* This is your post content. */
					the_content();

					/**
					 * Display page numbers for entries that are split into multiple pages.
					 * The before/after array keys determine what content, if any, is used
					 * to wrap your page numbers.
					 *
					 * @link https://codex.wordpress.org/Function_Reference/wp_link_pages
					 */
					wp_link_pages( array(
						'before' => '<div>',
						'after'  => '</div>',
					) );

					/* Adds an Edit Post link. */
					edit_post_link('Edit Post', '<p>', '</p>');

				?>
			</div>
   
			<footer class="blogposttype">
					<p>Tags: <?php the_category( ', ' ); ?></p>

					
			</footer>

		    </article>
  
		</div>

</div>	










