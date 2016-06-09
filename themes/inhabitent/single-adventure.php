<?php
/**
 * Template: Single Adventure Template
 *
 * @package RED_Starter_Theme
 */

get_header(); ?>

	<div id="primary" class="adventure-area">
		<main id="main" class="adventure-main" role="main">

			<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
				<header class="entry-header">
					<?php if ( has_post_thumbnail() ) : ?>
						<?php the_post_thumbnail( 'full' ); ?>
					<?php endif; ?>

					<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>

					<div class="entry-meta">
					 <span>by<?php the_author(); ?></span>
					</div><!-- .entry-meta -->
				</header><!-- .entry-header -->

				<div class="entry-content">
					<?php the_content(); ?>
					<?php
						wp_link_pages( array(
							'before' => '<div class="page-links">' . esc_html( 'Pages:' ),
							'after'  => '</div>',
						) );
					?>
				</div><!-- .entry-content -->
			</article><!-- #post-## -->

		<div class="social-buttons">
			<button class="single-post-social"><i class="fa fa-facebook"></i> Like</button>
			<button class="single-post-social"><i class="fa fa-twitter"></i> Tweet</button>
			<button class="single-post-social"><i class="fa fa-pinterest"></i> Pin</button>
		</div>

		</main><!-- #main -->
	</div><!-- #primary -->

<footer class="entry-footer">
<?php get_footer(); ?>
</footer>
