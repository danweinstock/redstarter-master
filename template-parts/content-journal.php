<?php if(is_single()) { ?>
<div class="journal-single-upper">
<div class="journal-single-title"><?php the_title() ?></div>
<div class="journal-single-pic">
	<?php if ( has_post_thumbnail() ) : ?>
			<?php the_post_thumbnail( 'large' ); ?>
<?php endif; ?>
</div>
<div class="journal-single-info">
	<?php red_starter_posted_on(); ?> / <?php comments_number( '0 Comments', '1 Comment', '% Comments' ); ?> / BY <?php the_author()?>
</div>
</div>
<?php the_content() ?>
<div class="flex">
	
<div class="journal-category flex">
<div class="posted-in">POSTED IN &#8594;</div>
	
<div class="category-content">
	
<?php $cats = get_the_terms(get_the_ID(), "categories"); 

 foreach($cats as $catterm){
 	echo ($catterm->name);
 	echo "<br><br>";
 }

 ?>
</div>

</div>
 <div class="tagged">TAGGED &#8594;</div>
 <div class="tag-content">
	 <?php $tags = get_the_terms(get_the_ID(), "tags"); 
	 $i = 1;
	 $amt = count($tags);

	 foreach($tags as $tagterm){
	 	echo ($tagterm->name);
	 	if($i != $amt){
	 		echo ",";
	 	}
	 	$i++;
	 	echo " ";
	 }
	 ?>
		<?php echo "<br><br>"; ?>
 	
 </div>
</div>
<div class="social-buttons">
	<button><i class="fa fa-facebook" aria-hidden="true"></i>LIKE</button>
	<button><i class="fa fa-twitter" aria-hidden="true"></i>TWEET</button>
	<button><i class="fa fa-pinterest" aria-hidden="true"></i>PIN</button>
</div>
<?php } else { ?> 
	<div class="journal-archive-upper">
		<div class="journal-archive-image">
			<?php the_post_thumbnail( 'large' ); ?>
		</div>
		<div class="journal-archive-info">
		<?php red_starter_posted_on(); ?> / <?php comments_number( '0 Comments', '1 Comment', '% Comments' ); ?>/ BY <?php the_author()?>
			
		</div>
		<div class="journal-archive-title">
			<?php the_title() ?>
		</div>
	</div>
	<?php the_excerpt(); ?>
	<button> <a href="<?php the_permalink(); ?>">READ MORE </a><i class="fa fa-long-arrow-right" aria-hidden="true"></i>	</button>

<?php } ?>

