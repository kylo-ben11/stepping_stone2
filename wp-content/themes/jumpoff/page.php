<?php get_header(); ?>
<main class="main main-2col">
	<div class="main__inner">
		<div class="main__content">
        <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
              <em>page.php</em>
              <br/><br/>
              <h2><?php the_title() ;?></h2>
               <?php the_content(); ?>
        <?php endwhile; else: ?>
          <p>Sorry, no posts to list</p>
        <?php endif; ?>
		</div>
		<aside class="main__aside">
			<?php get_template_part( 'components/sidebars/recentPosts'); ?>
		</aside>
	</div>
</main>
<?php get_footer(); ?>