<html <?php language_attributes(); ?>>
<head>
<meta name="viewport" content="width=device-width" />
<?php get_header(); ?>
</head>
<body <?php body_class(); ?>>

<?php
	/*-----------------------------------------------------------------------------------*/
	/* Start Page loop
	/*-----------------------------------------------------------------------------------*/
	if( is_page()) {
?>
	<div class="container">
		<div id="primary">
			<div id="content" role="main">
			<?php if ( have_posts() ) : ?>

				<?php while ( have_posts() ) : the_post(); ?>

					<article class="post">
					
						<h1 class="title"><?php the_title() ?></h1>
						
						<div class="the-content">
							<?php the_content(); ?>
							
							<?php wp_link_pages(); ?>
						</div><!-- the-content -->
						
					</article>

				<?php endwhile; ?>

			<?php else : ?>
				
				<article class="post error">
					<h1 class="404">Nothing posted yet</h1>
				</article>

			<?php endif; ?>

	<?php } // end is_page(); ?>

			</div><!--.content-->
		</div><!--.primary-->

	</div><!--.container-->
</body>
<?php get_footer(); ?>
</html>
