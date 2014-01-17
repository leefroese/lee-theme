<?php get_header(); ?>

	<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
	
	
	<?php echo (++$j % 2 == 0) ? 'even' : 'odd'; ?>
	
	
	
	<?php endwhile; ?>
        
<?php get_footer(); ?>