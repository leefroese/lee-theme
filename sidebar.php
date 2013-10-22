<aside>
	
	<ul>

	<?php
	if ( ! dynamic_sidebar( 'primary-widget-area' ) ) : ?>

		<li>
			<h3><?php _e( 'Archives', 'starkers' ); ?></h3>
			<ul>
				<?php wp_get_archives( 'type=monthly' ); ?>
			</ul>
		</li>

        <li>
        <h3>Popular Tags</h3>
            <ul id="tags">
            <?php wp_tag_cloud('smallest=10&largest=22'); ?>
            </ul>
        </li>

		<li>
        <h3>Quick Links</h3>
        <?php wp_list_bookmarks('title_li=&title_before=<h2>&title_after=</h2>'); ?>
        </li>

	<?php endif; ?>
	
	</ul>
        
</aside>