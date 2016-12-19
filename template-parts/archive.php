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
			<?php if (get_post_type()=="journal") :?>
				<?php while ( have_posts() ) : the_post(); ?>
				
				<?php get_template_part('template-parts/content', get_post_type());?>

			<?php endwhile; ?>
				<?php endif ?>
		
			<?php if (get_post_type()=="products"): ?>
				<div class="shop-heading">
				<h2>SHOP STUFF</h2>
					
				</div>
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
			<div class="flex flex-wrap space-around archive-product-area">
			<?php while ( have_posts() ) : the_post(); ?>
				<?php get_template_part('template-parts/content', get_post_type());?>

			<?php endwhile; ?>
				
			</div>
			<?php endif ?>


			<?php if (get_post_type()=="adventures"): ?>
				<h2 class="adventure-page-title">Latest Adventures</h2>
				<div class="flex flex-center flex-wrap">
				<?php while ( have_posts() ) : the_post(); ?>
				
				<?php get_template_part('template-parts/content', get_post_type());?>

			<?php endwhile; ?>
					
				</div>
			<?php endif ?>
				
			<?php else : ?>

			<?php get_template_part( 'template-parts/content', 'none' ); ?>

		<?php endif; ?>

		</main><!-- #main -->
	</div><!-- #primary -->
<?php if (get_post_type()=="journal") :?>
<?php get_sidebar(); ?>
<?php endif ?>
<?php get_footer(); ?>
