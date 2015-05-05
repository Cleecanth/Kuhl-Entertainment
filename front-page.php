<?php
/**
 * The front-page template file.
 *
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package Kuhl Entertainment
 */

get_header(); ?>

	<div class="hero">
		<div class="wrap space_neg_t_2">	
			<header class="space_l i_bl hero_promise">
				<h2 class="visually_hidden">Wedding DJs with Class</h2>
			</header>
		</div>
	</div>
</div><!--end top_tier-->
<article class="second_tier pad_t pad_b_2">
	<div class="wrap pad_n_t">
		<div class="row">
			<div class="column main_content">
				<h2 class="h3 txt_electric">Music is our lifeline. The dance floor is our home. Bringing the two together to create lifelong memories is our passion.</h2>
				<div class="bigs_pad_r_2">
					<p class="h6 txt_bold">Kuhl Entertainment’s wedding DJs bring
						their top-of-the line equipment, skill, and
						artistry to their weddings every time.</p>
					<p>Whether serving dancers in a nightclub or the
						sophisticated clientele of an upscale lounge, a true
						artist knows that every moment matters.</p>
					<p>All of our DJs are musicians first.
						We mix your music together to create a seamless
						experience and we’ve been doing it for years.
					</p>
				</div>
			</div>
			<div class="column side_content txt_center smalls_pad_t">
			<hr class="bigs_hide half" style="display: inline-block">
				<h3 class="h6 txt_merlot">
					Our couples have <wbr> voted us the best<br> four years in a row
				</h3>
				<div class="bigs_space_neg_t_half">
					<a href="http://www.weddingwire.com/biz/kuhl-entertainment-madison/7b62810369738e39.html">

						<article class="award">
							<div class="award_head">
								<img class="award_logo" src="<?php echo get_template_directory_uri()?>/img/award_logo.png" alt="WeddingWire">
							</div>
							<div class="award_body award_body_brides" >
								<p class="visually_hidden">
									Bride's Choice Award
								</p>
							</div>
							<div class="award_foot">
								<p class="space_n_v txt_rev">2012 - 2013</p>
							</div>
						</article>
					
						<article class="award">
							<div class="award_head">
								<img class="award_logo" src="<?php echo get_template_directory_uri()?>/img/award_logo.png" alt="WeddingWire">
							</div>
							<div class="award_body award_body_couples" >
								<p class="visually_hidden">
									Couple's Choice Award
								</p>
							</div>
							<div class="award_foot">
								<p class="space_n_v txt_rev">2014-2015</p>
							</div>
						</article>
					</a>
				</div>
			</div>
			<div class="column whole">
				<div class="smalls_space_t_2 smalls_txt_center">
				<hr class="bigs_hide half i_bl">
					<h3 class="h4 txt_sans">
						<a href="/contact" class="link_bordered">
							Your guests deserve a party with class. <br> Contact Us Now.
						</a>
					</h3>
<!--					<a class="button h6" href="/contact">Contact Us Now</a>-->
				</div>
			</div>
		</div>
	</div>
</article>
<?php get_footer(); ?>