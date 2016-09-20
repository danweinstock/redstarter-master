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
<div class="social-buttons">
	<button><i class="fa fa-facebook" aria-hidden="true"></i>LIKE</button>
	<button><i class="fa fa-twitter" aria-hidden="true"></i>TWEET</button>
	<button><i class="fa fa-pinterest" aria-hidden="true"></i>PIN</button>
</div>
<h3>Categories</h3>
<?php $cats = get_the_terms(get_the_ID(), "categories"); 

 foreach($cats as $catterm){
 	echo ($catterm->name);
 	echo "<br><br>";
 }
 ?>

 <h3>Tags</h3>
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
