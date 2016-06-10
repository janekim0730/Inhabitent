<?php
/**
 * Template Name: Archive-Adventure
 *
 * @package RED_Starter_Theme
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="sites-main" role="main">

			<?php $args = array('post_type' => 'adventure',
 	 											 'posts_per_page' => 4,
 											   'order' => 'ASC');
 					 $adventure_posts = get_posts($args); ?>

 	<div class="container">

		<header class="page-header">
			<?php
				the_archive_title( '<h1 class="page-title">', '</h1>' );
			?>
		</header><!-- .page-header -->

 			<div class="adventure-wrapper">
 			<div class="adventure-header"><a href="<?php echo $adventure_posts[0]->guid;?>"><?php echo $adventure_posts[0]->post_title; ?></a>
 			<a class="adventure-read-more" href="<?php echo $adventure_posts[0]->guid;?>">Read More</a></div>
 			<?php echo get_the_post_thumbnail($adventure_posts[0]->ID, 'large');?>
 			</div>

 			<div class="adventure-wrapper">
 			<div class="adventure-header"><a href="<?php echo $adventure_posts[1]->guid;?>"><?php echo $adventure_posts[1]->post_title; ?></a>
 			<a class="adventure-read-more" href="<?php echo $adventure_posts[1]->guid;?>">Read More</a></div>
 			<?php echo get_the_post_thumbnail($adventure_posts[1]->ID, 'large');?>
 			</div>

 			<div class="adventure-wrapper">
 			<div class="adventure-header"><a href="<?php echo $adventure_posts[2]->guid;?>"><?php echo $adventure_posts[2]->post_title; ?></a>
 			<a class="adventure-read-more" href="<?php echo $adventure_posts[2]->guid;?>">Read More</a></div>
 			<?php echo get_the_post_thumbnail($adventure_posts[2]->ID, 'large');?>
 			</div>

 			<div class="adventure-wrapper">
 			<div class="adventure-header"><a href="<?php echo $adventure_posts[3]->guid;?>"><?php echo $adventure_posts[3]->post_title; ?></a>
 			<a class="adventure-read-more" href="<?php echo $adventure_posts[3]->guid;?>">Read More</a></div>
 			<?php echo get_the_post_thumbnail($adventure_posts[3]->ID, 'large');?>
 			</div>
 	</div><!--latest-adventures-->

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>
