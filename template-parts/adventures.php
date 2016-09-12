<?php if(is_singular( 'Adventure' )); ?>
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header single-adventure-header">
		

		<?php if ( has_post_thumbnail() ) : ?>
			<?php the_post_thumbnail( 'large' ); ?>
		<?php endif; ?>
		
		<div class="single-adventure-title">
			
		<?php the_title(  '<h2 class="entry-title"></h2>' ); ?>
		</div>
		<div class="adventure-author">
		BY <?php the_author()?>
			
		</div>
		
	</header><!-- .entry-header -->
	<div class="single-adventure-content">
		
	<?php the_content()?>
	</div>
	<?php endif ?>
	<!--  -->
	