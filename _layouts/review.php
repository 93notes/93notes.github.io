<?php get_header(); ?>

<div id="content_area" class="grid">
  <div class="page">
    <div id="content">

			<?php while ( have_posts() ) : the_post(); ?>

				<?php get_template_part( 'content', 'page' ); ?>

			<?php endwhile; // end of the loop. ?>
    </div><!-- #content_area -->
  </div>
</div><!-- #content_area -->

<?php get_footer(); ?>
