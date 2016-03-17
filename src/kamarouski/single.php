<?php get_header(); ?>
<div>
  <?php while ( have_posts() ) : the_post(); ?>
    <?php get_template_part( 'content', get_post_format() ); ?>
    <nav class="single-nav">
        <span class="prev-post-nav"><?php previous_post_link();?></span>
        <span class="next-post-nav"><?php next_post_link();?></span>
    </nav>
    <div class="comments">
      <?php comments_template( '', true ); ?>
    </div>
  <?php endwhile; // end of the loop. ?>
  <div class="posts-navigation">
      <div class="next"><?php previous_posts_link('Next &raquo;'); ?></div>
      <div class="previous"><?php next_posts_link('&laquo; Prev'); ?></div>
  </div>

</div>
<?php get_footer();?>
