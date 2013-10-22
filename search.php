<?php get_header(); ?>

<section class="content clearfix">

	<section class="content-inner clearfix">

<?php if ( have_posts() ) : ?>

	
        
        <h1 class="pagetitle">Search Result for <?php /* Search Count */ $allsearch = &new WP_Query("s=$s&showposts=-1"); $key = wp_specialchars($s, 1); $count = $allsearch->post_count; _e(''); _e('<span class="search-terms">'); echo $key; _e('</span>'); _e(' &mdash; '); echo $count . ' '; _e('articles'); wp_reset_query(); ?></h1>
        
        <?php global $wp_query; $total_pages = $wp_query->max_num_pages; if ( $total_pages > 1 ) { ?>
        
        
       
	   
<?php } ?>  


<?php while ( have_posts() ) : the_post() ?>

	<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<h3 class="ruled"><a href="<?php the_permalink(); ?>" title="<?php printf( __('Permalink to %s', 'your-theme'), the_title_attribute('echo=0') ); ?>" rel="bookmark"><?php the_title(); ?></a></h3>
    
<?php if ( $post->post_type == 'post' ) { ?>        

           <header>

            <span class="meta-prep meta-prep-entry-date"><?php _e('Published ', 'your-theme'); ?></span>

            <span class="entry-date"><abbr class="published" title="<?php the_time('Y-m-d\TH:i:sO') ?>"><?php the_time( get_option( 'date_format' ) ); ?></abbr></span>
 
           </header>

      <?php } ?>

      <?php the_excerpt( __( 'Continue reading <span class="meta-nav">&raquo;</span>', 'your-theme' )  ); ?>


      <?php if ( $post->post_type == 'post' ) { ?>        

           <footer>

            <span class="cat-links"><span class="entry-utility-prep entry-utility-prep-cat-links"><?php _e( 'Posted in ', 'your-theme' ); ?></span><?php echo get_the_category_list(', '); ?></span>

           </footer>

      <?php } ?>    

          </article><!-- #post-<?php the_ID(); ?> -->


      <?php endwhile; ?>

       

      <?php global $wp_query; $total_pages = $wp_query->max_num_pages; if ( $total_pages > 1 ) { ?>

          <div id="nav-below" class="navigation">

           <?php if(function_exists('wp_pagenavi')) { wp_pagenavi(); } ?> 

          </div><!-- #nav-below -->
          
          
          </section>

      <?php } ?>  

       

      <?php else : ?>


           <h3 class="entry-title"><?php _e( 'Nothing Found', 'your-theme' ) ?></h3>

            <p><?php _e( 'Sorry, but nothing matched your search criteria. Please try again with some different keywords.', 'your-theme' ); ?></p>

       <?php get_search_form(); ?>      
          
          </section>
       

      <?php endif; ?>

	</section>
</section>
<?php get_footer(); ?>