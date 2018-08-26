<?php get_header(); ?>
    <div class="main">
      <div class="main__inner">
        <div class="main__content">
          <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
            <em>single.php</em>
            <br/><br/>
            <h2><?php the_title() ;?></h2>
            <?php the_content(); ?>
          <?php endwhile; else: ?>
            <p>Sorry, no posts to list</p>
          <?php endif; ?>
        </div>
      </div>
   </div> 
<?php get_footer(); ?>