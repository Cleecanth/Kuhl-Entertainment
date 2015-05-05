<?php
/**
 * Template Name: Our DJs - Editable - v2
 *
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package Kuhl Entertainment
 */

get_header(); ?>
</div><!--end top_tier-->

<article class="bg_onyx">
<!--
	<header class="page_title bg_light">	
		<div class="wrap pad_v_half">
			<?php the_title( '<h2 class="txt_electric h3 txt_serif txt_light">', '</h2>' ); ?>
		</div>
	</header>
-->
	
	<div class="wrap pad_n_t clearfix">
	<?php while ( have_posts() ) : the_post(); ?>
	<?php if( have_rows('dj') ): ?>
	<?php $rows = get_field('dj');
		$dj_count = count($rows);
		$iteration = 1;
		$dj_row = 1;
	?>
		<?php while( have_rows('dj') ): the_row();
			$dj_name = get_sub_field('dj_name'); 
			$dj_array = explode(" ", $dj_name); ?>
		<article class="dj" data-dj-id="#<?php echo strtolower($dj_array[0].$dj_array[1].$iteration) ?>" >
				<div class="dj_outer">
					<div class="dj_img">
						<img src="<?php the_sub_field('dj_photo'); ?>" />
					</div>
					<div class="dj_name">
						<h1 class="h4 space_n_b">
							<?php echo $dj_array[0]; ?>
						</h1>
					</div>
				</div>
				
				<div class="dj_inner">
					<div id="<?php echo strtolower($dj_array[0].$dj_array[1].$iteration); ?>" class="dj_main_body" data-dj-expand="#expand_<?php echo $dj_row; ?>">
						<div class="row dj_inner_row">
								<div class="dj_description column">
									<div class="dj_name_full">
										<h2 class="h4 space_n_b txt_blue">
											<?php echo $dj_name;?>
										</h2>
									</div>
								<div class="dj_head_sub space_b">
										<?php the_sub_field('dj_job_title');?><br>
										<?php the_sub_field('dj_phone_number');?>
								</div>
								<div class="dj_blurb">
									<?php the_sub_field('dj_description');?>
								</div>
							</div>
							<?php if( have_rows('additional_info') ):?>
							<div class="dj_additional column">
								<div class="dj_additional_inner">
								<?php while( have_rows('additional_info')): the_row(); ?>
								<?php the_sub_field('additional_info_child');?>
								<?php endwhile; ?>
								</div>
							</div>
							<?php endif; ?>
						</div>
					</div>
				</div>
		</article>
		
		<?php if(  $iteration % 3 == 0 ): ?>
				<div class="dj_expand" id="expand_<?php echo $dj_row; ?>" style="display:none;">
				</div>
			<?php $dj_row ++; ?>
		<?php endif; ?>
		<?php $iteration ++;?>
		<?php endwhile; // end of the repeater. ?>
		
	<?php endif; ?>
	<?php endwhile; // end of the loop. ?>

			
			
			
	</div>
</article>

<?php get_footer(); ?>