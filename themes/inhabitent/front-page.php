<?php
/*  @package RED_Starter_Theme  */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

		<section class="home-hero">
			<img src="<?php bloginfo('template_directory'); ?>/images/logos/inhabitent-logo-full.svg" alt="inhabitent full logo" />
		</section>

		<section class="shop-stuff">
			<div class="product-info container" >
				<h2>Shop Stuff</h2>
				<div class="product-type-blocks">
					<div class="product-type-wrapper">
						<img src="../images/product-type-icons/do.svg" class="logo" alt="Do Stuff"/>
						<p>Get back to nature with all the tools and toys you need to enjoy the great outdoors.</p>
						<p><a href="" class="btn">Do Stuff</a></p>
					</div>
					<div class="product-type-wrapper">
						<img src="images/product-type-icons/eat.svg" class="logo" alt="Eat Stuff"/>
						<p>Nothing beats food cooked over a fire. We have all you need for good camping eats.</p>
						<p><a href="" class="btn">Eat Stuff</a></p>
					</div>
					<div class="product-type-wrapper">
						<img src="images/product-type-icons/sleep.svg" class="logo" alt="Sleep Stuff"/>
						<p>Get a good night's rest in the wild in a home away from home that travels well.</p>
						<p><a href="" class="btn">Sleep Stuff</a></p>
					</div>
					<div class="product-type-wrapper">
						<img src="images/product-type-icons/wear.svg" class="logo" alt="Wear Stuff"/>
						<p>From flannel shirts to toques, look the part while roughing it in the great outdoors.</p>
						<p><a href="" class="btn">Wear Stuff</a></p>
					</div>
				</div>
			</div>
		</section>

		<section class="main-journal container">
			<div class="inahabitent-journals">
				<h1>Inhabitent Journal</h1>
				<?php
				   $args = array( 'post_type' => 'post', 'posts_per_page' => 3);
				   $recent_posts = get_posts( $args ); // returns an array of posts
				?>
				<?php foreach ( $recent_posts as $post ) : setup_postdata( $post ); ?>
					<?php if ( has_post_thumbnail() ) : ?>
						<?php the_post_thumbnail( 'large' ); ?>
					<?php endif; ?>

					<?php the_title( sprintf( '<h2 class="entry-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h2>' ); ?>

					<?php if ( 'post' === get_post_type() ) : ?>
					<div class="entry-meta">
						<?php red_starter_posted_on(); ?> / <?php comments_number('0 Comments', '1 Comment', '% Comments'); ?>
					</div><!-- .entry-meta -->
					<?php endif; ?>
				<?php endforeach; wp_reset_postdata(); ?>
			</div>
		</section>

		</main><!-- #main -->
	</div><!-- #primary -->


<?php get_footer(); ?>
