<?php
/**
 * Template part for displaying posts.
 *
 * @package RED_Starter_Theme
 */

?>
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header single-adventure-header">
		
	
		<?php if ( has_post_thumbnail() ) : ?>
			<?php the_post_thumbnail( 'large' ); ?>
		<?php endif; ?>
		
			<div class="single-adventure-title">
				<?php the_title(  '<h2 class="entry-title"></h2>' ); ?>
			</div>
			<div class="single-adventure-author">
				BY <?php the_author()?>
			</div>
		
	</header><!-- .entry-header -->
	<div class="single-adventure-content">
		
	<?php the_content()?>
<div class="social-buttons">
	<button><i class="fa fa-facebook" aria-hidden="true"></i>LIKE</button>
	<button><i class="fa fa-twitter" aria-hidden="true"></i>TWEET</button>
	<button><i class="fa fa-pinterest" aria-hidden="true"></i>PIN</button>
</div>
	</div>


</article><!-- #post-## -->
