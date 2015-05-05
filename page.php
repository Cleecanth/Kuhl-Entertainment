<?php
/**
 * The template for displaying all pages.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * @package Kuhl Entertainment
 */

get_header(); ?>
</div><!--end top_tier-->

<article id="primary">
	<header class="page_title bg_light">	
		<div class="wrap pad_v_half">
			<?php the_title( '<h2 class="txt_electric h3 txt_serif txt_light">', '</h2>' ); ?>
		</div>
	</header>
	
	<div class="wrap clearfix">
		<main id="main" class="site-main site_main" role="main">

			<?php while ( have_posts() ) : the_post(); ?>

				<?php the_content(); ?>
				
				<!--php
					// If comments are open or we have at least one comment, load up the comment template
					if ( comments_open() || get_comments_number() ) :
						comments_template();
					endif;
				?>-->

			<?php endwhile; // end of the loop. ?>

		</main><!-- #main -->
	</div><!-- #primary -->
</article>
<!--php get_sidebar(); ?>-->
<?php get_footer(); ?>
