<?php
/**
 * The template for displaying archive pages.
 *Template Name: Archives
 *
 * @package RED_Starter_Theme
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
		<h2 class="adventure-archive-top">LATEST ADVENTURES</h2>
		<?php if ( have_posts() ) : ?>

			<header class="page-header">
				<?php
					the_archive_title( '<h1 class="archive-title">', '</h1>' );
					the_archive_description( '<div class="taxonomy-description">', '</div>' );
				?>
			</header><!-- .page-header -->

			<?php /* Start the Loop */ ?>
			<div class="flex flex-wrap flex-center adventure-screen">
				
			
			<?php while ( have_posts() ) : the_post(); ?>

				<?php
					get_template_part( 'template-parts/content','archive-adventures' );
				?>

			<?php endwhile; ?>
				</div>
			<?php the_posts_navigation(); ?>

		<?php else : ?>

			<?php get_template_part( 'template-parts/content', 'none' ); ?>

		<?php endif; ?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>
