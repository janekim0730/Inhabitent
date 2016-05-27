<?php
/**
 * Template Name: About Template
 *
 * @package RED_Starter_Theme
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
			<article class="hentry">

				<header class="about-header">
			    <div class="container">
			      <h1>about</h1>
			    </div>
				</header>

				<div class="container">
					<div class="about-content">

						<h1>our story</h1>
						<?php echo CFS()->get( 'our_story' ); ?>

						<h1>our team</h1>
						<?php echo CFS()->get( 'our_team' ); ?>
				  </div>

			  </div>
			</article>
		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>
