<h2 class="content-heading">Inhabitent Journal</h2>

<?php
$args = array('posts_per_page' =>3,'post_type'=>'Journal');

	$myposts=get_posts($args);
	?>
<!-- 	foreach ($myposts as $posts): setup_postdata($posts) {
		?> -->
<div class="flex">
<?php foreach ( $myposts  as $post ) : setup_postdata( $post ); ?>
	<div class="adventure-main">
		<ul>
			<li>
				<div class="thumbnail-wrapper">
					<?php if ( has_post_thumbnail() ) : ?>
						<?php the_post_thumbnail( 'large' ); ?>
					<?php endif; ?>
				</div>
					<div class="post-info-wrapper">
						<span class="journal-meta">
							<?php red_starter_posted_on(); ?> / <?php comments_number('0 Comments', '1 Comment', '% Comments'); ?>
						</span><!-- .entry-meta -->

				<?php the_title( sprintf( '<h2 class="journal-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h2>' ); ?>
				<a class="journal-read" href="<?php echo esc_url( get_permalink() );?>"><button class="read-journal">Read Entry</button></a>
				</div>
			</li>
		</ul>
	</div>
<?php endforeach; wp_reset_postdata(); ?>
</div>