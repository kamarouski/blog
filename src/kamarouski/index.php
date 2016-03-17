<?php get_header(); ?>
        <div class="posts-latest">
          <?php while ( have_posts() ) : the_post(); ?>
      			<?php get_template_part( 'content', '' ); ?>
      		<?php endwhile; ?>
        </div>
<?php get_footer();?>
