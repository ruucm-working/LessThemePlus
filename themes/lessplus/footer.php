<?php
	/*-----------------------------------------------------------------------------------*/
	/* Start Footer
	/*-----------------------------------------------------------------------------------*/
?>
<!-- Load Facebook SDK for JavaScript -->
	<script>
		(function(d, s, id) {
		    var js, fjs = d.getElementsByTagName(s)[0];
		    if (d.getElementById(id))
		        return;
		    js = d.createElement(s);
		    js.id = id;
		    js.src = "//connect.facebook.net/en_US/all.js";
		    fjs.parentNode.insertBefore(js, fjs);
		}(document, 'script', 'facebook-jssdk'));

		window.fbAsyncInit = function() {
		    FB.init({
		        appId: '210115759399043',  // Change appId 210115759399043 with your Facebook Application ID
		        status: true,
		        xfbml: true,
		        cookie: true
		    });
		};

		$(document).ready(function() {
		    $('.fb-share').click(function() {
		        FB.ui({
		            method: 'feed',
		            name: 'Share Test',
		            link: 'http://ruucm.me',
		            picture: 'https://scontent.xx.fbcdn.net/v/t1.0-1/c0.2.64.64/p64x64/14292291_1125309417538070_1126445235032104471_n.jpg?oh=0f60a255a25ffb3b9757f7158da696e0&oe=58CCA030',
		            description: 'PHP Share button Test'
		        });
		    });
		});
	</script>
<footer class="site-footer" role="contentinfo">
	<div class="site-info container">
		<?php do_action( 'break_credits' ); ?>
		<!-- Your share button code -->
		<a href="#" class="fb-share">Share on Facebook</a>
		<div id="fb-root"></div>
		<?php if(is_home() || is_archive()): ?>
			<div class="soc-buttons">
				<a target="_blank" href="//twitter.com/intent/tweet?text=<?php echo get_bloginfo('description'); ?>+@ruucm+<?php echo get_bloginfo('url'); ?>" class="soc-buttons-twitter"></a>
				<a data-href="http://www.facebook.com/sharer/sharer.php?u=<?php echo get_bloginfo('url'); ?>" class="soc-buttons-facebook fb-share">
				</a>
			</div>
		<?php else : ?>
			<div class="soc-buttons">
				<a target="_blank" href="//twitter.com/intent/tweet?text=<?php the_title(); ?>+@ruucm+<?php the_permalink(); ?>" class="soc-buttons-twitter"></a>
				<a target="_blank" href="http://www.facebook.com/sharer/sharer.php?u=<?php the_permalink(); ?>" class="soc-buttons-facebook fb-share">
				</a>
			</div>
		<?php endif; ?>
	</div><!-- .site-info -->
</footer><!-- #colophon .site-footer -->
<?php wp_footer(); ?>
