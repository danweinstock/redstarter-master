<?php
$args = array('posts_per_page' =>4,'post_type'=>'Adventures');
	$myposts=get_posts($args);
	$i=1;
	$class= new get_adv_class();
	?>

<?php 
class get_adv_class{
	public $count;
	public function get_class(){
	if($this->count==1){
		$class = "full-adventure";
	}elseif ($this->count==2) {
		$class="half-adventure";
	}else{
		$class="quarter-adventure";
	}	
	return $class;
	}
}
?>

<?php foreach ( $myposts  as $post ) : setup_postdata( $post );   ?>
	<?php $class->count=$i; ?>
	<div class="adventure-item <?php echo $class->get_class(); ?>" style="background-image:url(<?php the_post_thumbnail_url()?>)" >
					<div class="post-info-wrapper">
						<?php the_title( sprintf( '<h2 class="adventure-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h2>' ); ?>
							<a class="adventure-read" href="<?php echo esc_url( get_permalink() );?>"><button class="read-adventure">Read Entry</button></a>
					</div>
	</div>
	<?php $i++; ?>
<?php endforeach; wp_reset_postdata(); ?>
