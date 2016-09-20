<?php
/**
 * The template for displaying all single joural posts.
 *
 * @package RED_Starter_Theme
 */
get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

		<?php while ( have_posts() ) : the_post(); ?>
			
			
			
		<?php get_template_part('template-parts/content', 'single-journal');?>

	

			<?php
				// If comments are open or we have at least one comment, load up the comment template.
				if ( comments_open() || get_comments_number() ) :
					comments_template();
				endif;
			?>

		<?php endwhile; // End of the loop. ?>

		</main><!-- #main -->
	</div><!-- #primary -->
<?php do_action('plugin_name_hook'); ?>
<!-- <?php get_sidebar(); ?> -->
<?php get_footer(); ?>
