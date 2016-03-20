<?php
function ako_excerpt_more($more){
  global $post;
  return '<a href="'.get_permalink($post->ID).'">Read More...</a>';
}

add_filter('excerpt_more', 'ako_excerpt_more', 100000);

function ako_read_more_link(){
  return '<div class="more-link-wrapper"><a class="more-link" href="'.get_permalink().'"><span>More&nbsp;&nbsp;</span><button><i class="material-icons">arrow_forward</i></button></a></div>';
}

add_filter('the_content_more_link', 'ako_read_more_link');
?>
