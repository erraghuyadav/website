<?php
/*
	Single Post Template: Barometer Post
	Description: This post template is for adding a barometer to your blog.
*/
 ?>

<?php get_header(); ?>

	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

		<section id="page-header" class="breadcrumb-holder">
			  <div class="wrapper">
					<?php if ( function_exists('yoast_breadcrumb') ) { yoast_breadcrumb('<p id="breadcrumbs">','</p>');} ?>
			</div><!-- END wrapper -->
		</section><!-- END page header -->

		<section id="main-content" class="clearfix">
			<div class="wrapper barometer">
				<article class="barometer-content">
					<div class="barometer-main">
						<div class="barometer-left">
							<div id="barometer-title">
								<img class="arrow-end" src="<?php bloginfo( 'template_directory' ); ?>/_/img/arrow-end.png" alt="" />
								<h2>What's<br/><span>hot</span><br /></h2>
								<h2>&amp; what's<br/><span>not</span></h2>
								<img class="arrow-end" src="<?php bloginfo( 'template_directory' ); ?>/_/img/arrow-end02.png" alt="" />
							</div>
						</div><!-- END barometer left -->

						<div class="barometer-right">
							<div id="barometer">
								<h3>WHAT'S HOT...</h3>
								<div class="barometer-section" id="section01">
									<div class="section-text">
										<h4><?php the_field('barometer_title01'); ?></h4>
										<div class="barometer-copy"><?php the_field('barometer_copy01'); ?></div>
									</div><!-- END section text -->
									<div class="section-img">
										<img src="<?php the_field('barometer_image01'); ?>" alt="" title="" />
									</div><!-- END section img -->
								</div><!-- END section01 -->

								<div class="barometer-section" id="section02">
									<div class="section-text">
										<h4><?php the_field('barometer_title02'); ?></h4>
										<div class="barometer-copy"><?php the_field('barometer_copy02'); ?></div>
									</div><!-- END section text -->
									<div class="section-img">
										<img src="<?php the_field('barometer_image02'); ?>" alt="" title="" />
									</div><!-- END section img -->
								</div><!-- END section02 -->

								<div class="barometer-section" id="section03">
									<div class="section-text">
										<h4><?php the_field('barometer_title03'); ?></h4>
										<div class="barometer-copy"><?php the_field('barometer_copy03'); ?></div>
									</div><!-- END section text -->
									<div class="section-img">
										<img src="<?php the_field('barometer_image03'); ?>" alt="" title="" />
									</div><!-- END section img -->
								</div><!-- END section03 -->


								<h3>WHAT'S NOT...</h3>
								<div class="barometer-section" id="section04">
									<div class="section-text">
										<h4><?php the_field('barometer_title04'); ?></h4>
										<div class="barometer-copy"><?php the_field('barometer_copy04'); ?></div>
									</div><!-- END section text -->
									<div class="section-img">
										<img src="<?php the_field('barometer_image04'); ?>" alt="" title="" />
									</div><!-- END section img -->
								</div><!-- END section04 -->

								<div class="barometer-section" id="section05">
									<div class="section-text">
										<h4><?php the_field('barometer_title05'); ?></h4>
										<div class="barometer-copy"><?php the_field('barometer_copy05'); ?></div>
									</div><!-- END section text -->
									<div class="section-img">
										<img src="<?php the_field('barometer_image05'); ?>" alt="" title="" />
									</div><!-- END section img -->
								</div><!-- END section05 -->

								<div class="barometer-section" id="section06">
									<div class="section-text">
										<h4><?php the_field('barometer_title06'); ?></h4>
										<div class="barometer-copy"><?php the_field('barometer_copy06'); ?></div>
									</div><!-- END section text -->
									<div class="section-img">
										<img src="<?php the_field('barometer_image06'); ?>" alt="" title="" />
									</div><!-- END section img -->
								</div><!-- END section06 -->
								<a href="#header" id="backtotop">Back to top</a>
							</div><!-- END barometer -->
						</div><!-- END barometer right -->
					</div><!-- END barometer main -->

					<div class="barometer-bottom">
						<h4 class="quote-title"><?php posted_on(); ?></h4>
						<div class="post-social">
							<span><a href="https://twitter.com/share" class="twitter-share-button" data-via="markhillhair">Tweet</a></span>
							<span><div class="fb-like" data-href="<?php the_permalink(); ?>" data-send="false" data-layout="button_count" data-width="50" data-show-faces="false"></div></span>
							<span><a href="//pinterest.com/pin/create/button/?url=<?php the_permalink(); ?>&media=<?php the_field('post_main_image'); ?>&description=<?php the_title(); ?>" data-pin-do="buttonPin" data-pin-config="beside"><img src="//assets.pinterest.com/images/pidgets/pin_it_button.png" /></a></span>
							<span><div class="g-plusone" data-size="medium"></div></span>
						</div><!-- END post social -->
					</div><!-- END barometer bottom -->

					<?php wp_link_pages(array('before' => 'Pages: ', 'next_or_number' => 'number')); ?>

					<?php /*?><?php comments_template(); ?><?php */?>
					<?php post_navigation(); ?>
				</article>

			<?php get_sidebar(); ?>

			</div><!-- END wrapper barometer -->
		</section><!-- END #main-content -->

	<?php endwhile; endif; ?>

<?php get_footer(); ?>