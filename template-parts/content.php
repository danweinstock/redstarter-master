<?php
/**
 * Template part for displaying posts.
 *
 * @package RED_Starter_Theme
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
		<?php if ( 'post' === get_post_type() ) : ?>
		<?php endif; ?>

		<?php if ( has_post_thumbnail() ) : ?>
			<?php the_post_thumbnail( 'large' ); ?>
		<?php endif; ?>
		<div class="entry-meta">
			<?php red_starter_posted_on(); ?> / <?php comments_number( '0 Comments', '1 Comment', '% Comments' ); ?>
		</div><!-- .entry-meta -->

		<?php the_title(  '<h2 class="entry-title"></h2>' ); ?>
		<?php if ( is_home() && is_front_page() ) : ?><br>
		<button class="read-button"><a href="<?php the_permalink(); ?>">READ ENTRY</a>	</button>
		<?php endif ?>
	</header><!-- .entry-header -->
	<?php if (! is_front_page() ) : ?>
<div class="entry-content">
		<?php the_excerpt(); ?>
	</div><!-- .entry-content -->
<?php endif ?>
</article><!-- #post-## -->
