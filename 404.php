<?php get_header(); ?>

<div id="content" class="center clearfix">

	<h1>Page Not Found</h1>
		<p>Apologies, but the page you requested could not be found. Please use the menu above or go back to the <strong><a href="<?php bloginfo('url'); ?>">Home Page</a></strong></p>

	<script type="text/javascript">
		// focus on search field after it has loaded
		document.getElementById('s') && document.getElementById('s').focus();
	</script>
	
</div>

<?php get_footer(); ?>