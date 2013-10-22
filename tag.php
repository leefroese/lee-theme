<?php get_header(); ?>
	
		<div id="content-post" class="content-top clearfix">
        
		<h1><?php printf( __( 'Tag Archives: %s', 'starkers' ), '' . single_tag_title( '', false ) . '' ); ?></h1> 
                
        	<section id="col-left">
            	

				<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

				<article class="post">
				
                	<header><time><?php the_time('F d, Y'); ?> |</time><h2><?php the_title(); ?></h2></header>
                    
                    <div class="red-line"></div>
                    
                    <?php the_content(); ?>
                    
                    <footer> <?php the_tags(); ?></footer>
                
				</article><!-- #post-## -->

				<?php endwhile; else: ?><?php endif; ?>

				<?php if(function_exists('wp_paginate')) { wp_paginate(); } ?>
                
             </section>
             
             <section id="col-right">
                
                <aside>
                
                	<?php get_sidebar(); ?>
                    
                </aside>

			</section>
			
	</div>

<?php get_footer(); ?>