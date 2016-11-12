<?php
	/*-----------------------------------------------------------------------------------*/
	/* Start Footer
	/*-----------------------------------------------------------------------------------*/
?>
<!-- Load Facebook SDK for JavaScript -->
<footer class="site-footer" role="contentinfo">
	<div class="site-info container">
		<?php do_action( 'break_credits' ); ?>
		<!-- Your share button code -->
		<?php if(is_home() || is_archive()): ?>
			<div class="soc-buttons">
				<a target="_blank" href="//twitter.com/intent/tweet?text=<?php echo get_bloginfo('description'); ?>+@ruucm+<?php echo get_bloginfo('url'); ?>" class="soc-buttons-twitter"></a>
				<a class="soc-buttons-facebook fb-share">
				</a>
			</div>
			<div id="fb-root"></div>
		<?php endif; ?>
	</div><!-- .site-info -->
</footer><!-- #colophon .site-footer -->
<?php wp_footer(); ?>
