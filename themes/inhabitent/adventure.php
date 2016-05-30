<?php
/**
 * Template Name: Adventure Template
 *
 * @package RED_Starter_Theme
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

		<?php while ( have_posts() ) : the_post(); ?>

			<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
				<header class="entry-header">
					<?php if ( has_post_thumbnail() ) : ?>
						<?php the_post_thumbnail( 'full' ); ?>
					<?php endif; ?>

					<?php the_title( '<h2 class="entry-title">', '</h2>' ); ?>

				</header><!-- .entry-header -->

				<div class="entry-content">

						<?php the_content(); ?>


					<footer class="entry-footer">
						<?php red_starter_entry_footer(); ?>
					</footer><!-- .entry-footer -->

						<div class="social-buttons">
							<button class="single-post-social"><i class="fa fa-facebook"></i> Like</button>
							<button class="single-post-social" ><i class="fa fa-twitter"></i> Tweet</button>
							<button class="single-post-social"><i class="fa fa-pinterest"></i> Pin</button>
						</div>

				 </div><!-- .entry-content -->


		<?php endwhile; // End of the loop. ?>

		</main><!-- #main -->

	</div><!-- #primary -->

		<?php get_footer(); ?>
