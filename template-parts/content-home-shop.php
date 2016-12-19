
<h2 class="content-heading">Shop Stuff</h2>
<div class="shop-posts flex space-around">
	<?php
		$terms = get_terms( 'type' );
foreach ($terms as $t) {
     echo '<div class="shop-item">';
      echo '<img src="'.get_bloginfo("stylesheet_directory").'/images/product-type-icons/'.$t->slug.'.svg">'."<br>";
     echo $t->description ."<br>";
     $term_name = ($t ->name);
     $term_link = strtolower(get_term_link($t->name, "type"));
    
     echo '<button class="shop-button"><a href="'.$term_link.'">'.$term_name." stuff".'</a></button>';
     echo '</div>';
}
   ?>
</div>

