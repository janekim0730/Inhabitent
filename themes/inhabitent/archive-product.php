<?php
/**
 * The template for displaying archive pages.
 *
 * @package RED_Starter_Theme
 * Template Name: Archive Product Template
 */

get_header(); ?>

	<div id="primary" class="content-area container">
		<main id="main" class="site-main" role="main">

	<div class="shop-header">
    <h1>shop stuff</h1>
    <div class="shop-nav-container">
      <nav class="shop-nav">
      <?php $terms = get_terms( array ( 'taxonomy' => 'product-type'));?>
      <?php foreach ($terms as $term) : ?>
      <a href="<?php echo get_term_link($term, 'product-type') ?>"><?php echo $term-> name; ?></a>
    <?php endforeach; wp_reset_postdata(); ?>
      </nav>
    </div>
  </div>

  <section class="main-shop container">
    <div class="inhabitent-shop">
      <ul>
        <?php
           $args = array( 'post_type' => 'product',
                          'posts_per_page' => 16);
           $recent_products = get_posts( $args ); // returns an array of posts
        ?>
        <?php foreach ( $recent_products as $post ) : setup_postdata( $post ); ?>
        <li>
          <div class="product-thumbnail-wrapper">
            <a href='<?php echo esc_url( get_permalink() ); ?>'>
              <?php if ( has_post_thumbnail() ) : ?>
                <?php the_post_thumbnail( 'medium' ); ?>
                <?php ?>
              <?php endif; ?>
            </a>
          </div>
            <div class="product-info-wrapper">
            <?php echo get_the_title(); ?>
            <?php echo CFS()->get( 'price' ); ?>
            </div>
        </li>
          <?php endforeach; wp_reset_postdata(); ?>
     </ul>
   </div>
  </section>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>
