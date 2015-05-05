<?php
/**
 * Template Name: Our DJs - Editable
 *
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package Kuhl Entertainment
 */

get_header(); ?>
</div><!--end top_tier-->

<article class="bg_onyx">
	<header class="page_title bg_light">	
		<div class="wrap pad_v_half">
			<?php the_title( '<h2 class="txt_electric h3 txt_serif txt_light">', '</h2>' ); ?>
		</div>
	</header>
	
	<div class="wrap pad_n_t clearfix">
	<?php while ( have_posts() ) : the_post(); ?>
	<?php if( have_rows('dj') ): ?>
		<?php while( have_rows('dj') ): the_row(); ?>
		<article class="dj">
			<div class="dj_inner">
				<div class="dj_img">
					<img src="<?php the_sub_field('dj_photo'); ?>" />
				</div>
				<div class="dj_main">
					<header class="dj_head">
					<?php $dj_name = get_sub_field('dj_name');
						$dj_array = explode(" ", $dj_name); 		
						echo $dj_array[0]; ?>
						<div class="dj_head_info"> 
							<?php echo $dj_array[1]; ?><br>
							<span class="dj_head_sub">
								<?php the_sub_field('dj_job_title');?><br>
								<?php the_sub_field('dj_phone_number');?>
							</span>
						</div>
					</header>
					<div class="dj_main_body">
						<?php the_sub_field('dj_description');?>
					</div>
				</div>
			</div>
		</article>
		<?php endwhile; // end of the repeater. ?>
	<?php endif; ?>
	<?php endwhile; // end of the loop. ?>

			
			
			
	</div>
</article>

<?php get_footer(); ?>