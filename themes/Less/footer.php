<?php
	/*-----------------------------------------------------------------------------------*/
	/* Start Footer
	/*-----------------------------------------------------------------------------------*/
?>
<footer class="site-footer" role="contentinfo">
	<div class="site-info container">
		<?php do_action( 'break_credits' ); ?>
		<div class="soc-buttons">
			<a target="_blank" href="//twitter.com/intent/tweet?text=<?php the_title(); ?>+@ruucm+<?php the_permalink(); ?>" class="soc-buttons-twitter"></a>
			<a target="_blank" href="http://www.facebook.com/sharer/sharer.php?u=<?php the_permalink(); ?>" class="soc-buttons-facebook">
			</a>
		</div>
	</div><!-- .site-info -->
</footer><!-- #colophon .site-footer -->
<?php wp_footer(); ?>
