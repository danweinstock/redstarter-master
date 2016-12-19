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

		<?php if ( have_posts() ) : ?>

			<header class="page-header">
				<?php
					// the_archive_title( '<h1 class="page-title">', '</h1>' );
					// the_archive_description( '<div class="taxonomy-description">', '</div>' );
				?>
			</header><!-- .page-header -->
				<h2 class="archive-product-title">SHOP STUFF</h2>
				<div class="product-terms">
				<?php $terms = get_terms("type");
					foreach($terms as $typeterm){
					$type_name = ($typeterm ->name);
					echo " ";
					$type_link = strtolower(get_term_link($typeterm ->name, "type"));
					// echo($type_link);
					echo"<a href = '".$type_link."'>".$type_name."</a>";
					}
				?>
			</div>
			<?php /* Start the Loop */ ?>
			
				
			<?php while ( have_posts() ) : the_post(); ?>

				
					<?php get_template_part('template-parts/content', get_post_type());?>
				

			<?php endwhile; ?>
			
		
			<?php the_posts_navigation(); ?>

		<?php else : ?>

			<?php get_template_part( 'template-parts/content', 'none' ); ?>

		<?php endif; ?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>
