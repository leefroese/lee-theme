<?php get_header(); ?>

<?php if( in_category( 'jobs' )) { ?>

<div id="content" class="center clearfix">
	
		<section class="left full">
		
			<span id="arrow" class="hide-text">&rarr; </span>
			<h1 class="thick-underline page-title">Careers</h1>
			
			<h2><?php single_cat_title(); ?></h2>
			
			<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
			
				<article class="post">
			
					<a href="<?php the_permalink(); ?>">
						<time><?php the_date('F d, Y'); ?></time>
						<h5><?php the_title(); ?></h5>
					</a>
				
				</article>
	
			<?php endwhile; ?>
		
		</section>
        
</div>

<?php } else { ?>

<div id="content" class="center clearfix">
	
		<section class="left full">
		
			<span id="arrow" class="hide-text">&rarr; </span>
			<h1 class="thick-underline page-title"><?php single_cat_title(); ?></h1>
			
			<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
			
				<article class="post">
			
					<a href="<?php the_permalink(); ?>">
						<time><?php the_date('F d, Y'); ?></time>
						<h5><?php the_title(); ?></h5>
						<p>Posted in: <?php $category = get_the_category(); 
							echo $category[0]->cat_name; ?></p>
					</a>
				
				</article>
	
			<?php endwhile; ?>
		
		</section>
        
</div>


<?php } ?>
	
<?php get_footer(); ?>