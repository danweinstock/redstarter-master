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

