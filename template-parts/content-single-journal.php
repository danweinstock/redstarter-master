<?php
/**
 * Template part for displaying posts.
 *
 * @package RED_Starter_Theme
 */

?>

<article class="single-journal-post" id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
		<?php if ( 'post' === get_post_type() ) : ?>
		<?php endif; ?>
		<?php if ( has_post_thumbnail() ) : ?>
			<?php the_post_thumbnail( 'large' ); ?>
		<?php endif; ?>

		<?php the_title( '<h2 class="entry-title single-journal-title">','</h2>' ); ?>
		<div class="entry-meta single-journal-meta">
			<?php red_starter_posted_on(); ?> / <?php comments_number( '0 Comments', '1 Comment', '% Comments' ); ?> / BY <?php the_author()?>
		</div><!-- .entry-meta -->
		
	</header><!-- .entry-header -->
<div class="entry-content single-journal-entry">
		<?php the_content(); ?>
	</div><!-- .entry-content -->
<!-- <?php $tags = get_the_terms(get_the_ID(), "tags");?>
<?php var_dump($tags); ?> -->
<div class="social-buttons">
	<button><i class="fa fa-facebook" aria-hidden="true"></i>LIKE</button>
	<button><i class="fa fa-twitter" aria-hidden="true"></i>TWEET</button>
	<button><i class="fa fa-pinterest" aria-hidden="true"></i>PIN</button>
</div>


</article><!-- #post-## -->
