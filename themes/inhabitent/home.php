<?php
/**
 * The main template file.
 * Template Name: BlogPosts
 * @package RED_Starter_Theme
 */

get_header(); ?>

<div class="container">
	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
			
			<?php while ( have_posts() ) : the_post(); ?>

				<?php get_template_part( 'template-parts/content' ); ?>

			<?php endwhile; ?>

		</main><!-- #main -->
	</div><!-- #primary -->

		<div class="sidebar-widget">
		<?php get_sidebar(); ?>
		</div>
</div>
<?php get_footer(); ?>
