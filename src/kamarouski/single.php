<?php get_header(); ?>
<div>
  <?php while ( have_posts() ) : the_post(); ?>
    <?php get_template_part( 'content', get_post_format() ); ?>
    <nav class="post-nav" style="margin-top: 20px;">
        <span class="prev-post-nav"><?php previous_post_link('%link','<button><i class="material-icons">arrow_back</i></button><div>Older</div>');?></span>
        <span class="next-post-nav"><?php next_post_link('%link', '<div>Newer</div><button><i class="material-icons">arrow_forward</i></button>');?></span>
    </nav>
    <div class="comments">
      <div id="disqus_thread"></div>
<script>
  (function() {  // REQUIRED CONFIGURATION VARIABLE: EDIT THE SHORTNAME BELOW
        var d = document, s = d.createElement('script');

        s.src = '//kamarouski.disqus.com/embed.js';  // IMPORTANT: Replace EXAMPLE with your forum shortname!

        s.setAttribute('data-timestamp', +new Date());
        (d.head || d.body).appendChild(s);
    })();
</script>

    </div>
  <?php endwhile; // end of the loop. ?>
</div>
<?php get_footer();?>
