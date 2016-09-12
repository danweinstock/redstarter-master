
<h2 class="content-heading">Shop Stuff</h2>
<div class="shop-posts flex space-around">
	<?php
		$terms = get_terms( 'type', array('hide_empty' => false) );
foreach ($terms as $t) {
     echo '<div class="shop-item">';
      echo '<img src="'.get_bloginfo("stylesheet_directory").'/images/product-type-icons/'.$t->slug.'.svg">'."<br>";
     echo $t->description ."<br>";
     echo '<button class="shop-button"><a href="'.get_term_link($t).'">'.$t->name." stuff".'</a></button>';
     echo '</div>';
}
   ?>
</div>