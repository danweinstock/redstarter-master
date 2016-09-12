<?php
/**
 * Template part for displaying posts.
 *
 * @package RED_Starter_Theme
 */

?>
<?php if(is_post_type_archive( 'Journal')); ?>
<?php
$args = array('post_type'=>'Journal');

	$myposts=get_posts($args);
	?>

<article class="journal-archive-article" id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header journal-archive-header">
		<?php if ( 'post' === get_post_type() ) : ?>
		<?php endif; ?>
		<?php if ( has_post_thumbnail() ) : ?>
			<?php the_post_thumbnail( 'large' ); ?>
		<?php endif; ?>
		<div class="entry-meta journal-archive-meta">
			<?php red_starter_posted_on(); ?> / <?php comments_number( '0 Comments', '1 Comment', '% Comments' ); ?>/ BY <?php the_author()?>
		</div><!-- .entry-meta -->
		
		<?php the_title( '<h2 class="entry-title journal-archive-title">','</h2>' ); ?>
			
	
	</header><!-- .entry-header -->

<div class="entry-content journal-archive-content">
		<?php the_excerpt(); ?>
	</div><!-- .entry-content -->

<button class="read-button journal-archive-button"><a href="<?php the_permalink(); ?>">READ MORE </a><i class="fa fa-long-arrow-right" aria-hidden="true"></i>	</button>
</article><!-- #post-## -->
<?php  wp_reset_postdata(); ?>




