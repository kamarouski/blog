<?php
function ako_excerpt_more($more){
  global $post;
  return '<a href="'.get_permalink($post->ID).'">Read More...</a>';
}

add_filter('excerpt_more', 'ako_excerpt_more', 100000);
?>
