<?php if(is_single()) { ?>
<?php if ( has_post_thumbnail() ) : ?>
	<?php the_post_thumbnail( 'large' ); ?>
<?php endif; ?>
<div class="adventure-single-text">
	<div class="adventure-single-title"><?php the_title() ?></div>
		BY <?php the_author()?>
		<?php the_content() ?>
	<div class="social-buttons">
		<button><i class="fa fa-facebook" aria-hidden="true"></i>LIKE</button>
		<button><i class="fa fa-twitter" aria-hidden="true"></i>TWEET</button>
		<button><i class="fa fa-pinterest" aria-hidden="true"></i>PIN</button>
	</div>
</div>	
<?php } else { ?>
	
	<div class="adventure-archive-content ">
	<?php if ( has_post_thumbnail() ) : ?>
			<?php the_post_thumbnail( 'large' ); ?>
			<div class="overlay-color"></div>
	<?php endif; ?>
	<div class="adventure-archive-title">	<?php the_title( '<h2 class="entry-title">','</h2>' ); ?></div>
	<button class="read-button adventure-archive-button"><a href="<?php the_permalink(); ?>">READ MORE </a>	</button>
		
	</div>

<?php } ?>
