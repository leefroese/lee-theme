<?php get_header(); ?>

<div id="content" class="center clearfix">

	<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
	
	<section class="left full">

		<span id="arrow" class="hide-text">&rarr; </span>
		<h1 class="thick-underline page-title"><?php echo empty( $post->post_parent ) ? get_the_title( $post->ID ) : get_the_title( $post->post_parent ); ?></h1>
		
		<?php if ( is_page() && $post->post_parent ) { ?>
			<h2><?php the_title(); ?></h2>
    	<?php } ?>
		
		<article id="post" class="left full thin-underline">
			<?php the_content(); ?>
		</article>
		
		<a href="<?php bloginfo('url'); ?>/pas-news">&larr; Back to News</a>
	
	</section>
	
	<?php endwhile; ?>
        
</div>  

<?php get_footer(); ?>