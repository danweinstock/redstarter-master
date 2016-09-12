<?php
/**
 * Template part for displaying posts.
 *
 * @package RED_Starter_Theme
 */

?>

<?php
$args = array('post_type'=>'Adenture');

	$myposts=get_posts($args);
	?>

	
<article class="adventure-archive-article" id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header adventure-archive-header">
		<?php if ( 'post' === get_post_type() ) : ?>
		<?php endif; ?>
		<?php if ( has_post_thumbnail() ) : ?>
			<?php the_post_thumbnail( 'small' ); ?>
		<?php endif; ?>
		<div class="adventure-archive-title">
		<?php the_title( '<h2 class="entry-title">','</h2>' ); ?>
		</div>
			
	
	</header><!-- .entry-header -->
<button class="read-button adventure-archive-button"><a href="<?php the_permalink(); ?>">READ MORE </a>	</button>
	
</article>
<?php  wp_reset_postdata(); ?>
