<?php
/**
 * The template for displaying all pages.
 *
 * @package RED_Starter_Theme
 */

get_header(); ?>

	<div id="primary" class="taxonomy-area">
    <div class="container">
  		<main id="main" class="site-main" role="main">
        <h1 class="page-header"><?php single_term_title(); ?></h1>

        <p><?php echo term_description(); ?></p>


  			<?php while ( have_posts() ) : the_post(); ?>
          <?php if ( has_post_thumbnail() ) : ?>
            <?php the_post_thumbnail( 'large' ); ?>
          <?php endif; ?>
          <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
            <div>
          	<header class="entry-header">
          		<?php the_title( '<p class="entry-title">', '</p>' ); ?>
          	</header><!-- .entry-header -->
            <span class="price"><?php echo CFS()->get( 'price' ); ?></span>
          	</div><!-- .entry-content -->
          </article><!-- #post-## -->

  			<?php endwhile; // End of the loop. ?>

  		</main><!-- #main -->
    </div>
	</div><!-- #primary -->

<?php get_footer(); ?>
