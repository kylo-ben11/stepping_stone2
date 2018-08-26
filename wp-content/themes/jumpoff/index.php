<?php get_header(); ?>
<div class="main">
    <div class="main__inner">
        <div class="main__content">
            <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
                <em>index.php</em>
                <br/><br/>

                <h1>Motherfucking headline test</h1>

                <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
                <?php the_excerpt(); ?>
                <a href="<?php the_permalink() ?>">Read More</a>
                <br/><br/>
                <hr/>
            <?php endwhile;
            else: ?>
                <p>Sorry, no posts to list</p>
            <?php endif; ?>
        </div>
    </div>
</div>
<?php get_footer(); ?>





<?php
$paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
$args = array(
    'post_type' => 'post',
    'orderby' => 'menu_order title',
    'order' => 'ASC',
    'posts_per_page' => 7,
    'paged'=>$paged
);
$query = new WP_Query($args);
?>
<?php if ($query->have_posts()) : ?>
    <?php while ($query->have_posts()) : $query->the_post() ?>


        <div class="row recipeBlock">
            <div class="col-md-4">
                <?php the_post_thumbnail(); ?>
            </div>
            <div class="col-md-8">
                <h2 class="entry-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
                <?php the_excerpt(); ?>
            </div>
        </div>


    <?php endwhile ?>
<?php endif ?>
<?php wp_reset_postdata(); ?>

<?php
if(function_exists('wp_pagenavi'))
{
    wp_pagenavi(array(  'query' => $query) );
    wp_reset_postdata();
}
?>
