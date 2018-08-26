<?php get_header(); ?>





<<<<<<< HEAD
<h1>This is a heading b*tch!</h1>
=======

>>>>>>> b0299b8c296ea22e257e9024b003ef034c47da8c

<?php if ( have_rows( 'home_sections' ) ): ?>
	<?php while ( have_rows( 'home_sections' ) ) : the_row(); ?>

		<?php get_template_part( 'flex-content/content', 'blocks' ); ?>


	<?php endwhile; ?>
<?php endif; ?>

<?php get_footer(); ?>
