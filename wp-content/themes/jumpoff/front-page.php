<?php get_header(); ?>






<h1>This is a motherf*cking heading b*tch!</h1>




<?php if ( have_rows( 'home_sections' ) ): ?>
	<?php while ( have_rows( 'home_sections' ) ) : the_row(); ?>

		<?php get_template_part( 'flex-content/content', 'blocks' ); ?>


	<?php endwhile; ?>
<?php endif; ?>

<?php get_footer(); ?>
