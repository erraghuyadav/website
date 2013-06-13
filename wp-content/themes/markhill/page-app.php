<?php
/*
Template Name: App
*/
get_header(); ?>

	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

		<?php /*?><section id="page-header" style="background:url(<?php the_field('header_image'); ?>) no-repeat 25% bottom;">
			<div class="wrapper">
				<h1><?php the_title(); ?></h1>
				<h3><?php the_field('page_sub-title'); ?></h3>
				<img class="crown app" src="<?php bloginfo('url'); ?>/wp-content/uploads/2013/05/crown.png" alt="">
			</div><!-- END wrapper -->
		</section><!-- END #page-header --><?php */?>

		<section id="main-content" class="clearfix">
			<div class="wrapper app">
            
            	<div id="app-container">
                	<iframe src="http://facemark.elasticbeanstalk.com/new.html" width="1024px" height="670px" scrolling="no"></iframe> 
                </div>
                        
                       <?php /*?> <img src="<?php bloginfo('template_directory'); ?>/_/img/loader2.gif" alt=""><?php */?>
			</div><!-- END wrapper -->
		</section><!-- END #main-content -->

	<?php endwhile; endif; ?>

<?php get_footer(); ?>
