<?php
/**
 * Template part for displaying posts.
 *
 * @package RED_Starter_Theme
 */

?>

<article class="product-archive-article" id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
		<?php if ( has_post_thumbnail() ) : ?>
			<?php the_post_thumbnail( 'large' ); ?>
		<?php endif; ?>

		</header>
		<div class="product-archive-info">
			
		<?php the_title(  '<h2 class="entry-title"></h2>' ); ?>
		<?php echo CFS()->get('price');?>
		</div>
</article><!-- #post-## -->
