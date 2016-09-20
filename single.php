<?php
/**
 * The template for displaying all single posts.
 *
 * @package RED_Starter_Theme
 */
get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

		<?php while ( have_posts() ) : the_post(); ?>
		
			
			
		<?php get_template_part('template-parts/content', get_post_type());?>
		
			<?php	

				// If comments are open or we have at least one comment, load up the comment template.

				if ((get_post_type()=="Journal" && comments_open() || get_comments_number())) :
					comments_template();
				endif;
			?>

		<?php endwhile; // End of the loop. ?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php if (get_post_type()=="journal"){
	get_sidebar();
	}?>



<?php get_footer(); ?>

