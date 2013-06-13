<?php
/*
Template Name: Contact 
*/
get_header(); ?>

	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

		<section id="page-header" style="background:url(<?php the_field('header_image'); ?>) no-repeat 25% bottom;">
			<div class="wrapper">
				<h1><?php the_title(); ?></h1>
				<h3><?php the_field('page_sub-title'); ?></h3>
				<img class="crown contact" src="<?php bloginfo('url'); ?>/wp-content/uploads/2013/05/crown.png" alt="">
			</div><!-- END wrapper -->
		</section><!-- END #page-header -->

		<section id="main-content" class="clearfix">
			<div class="wrapper aboutme">

				<article class="col-2">
                	<h1>Talk to us</h1>
                    <p>We'd love to hear from you! If you have any comments or queries please don't hesitate to contact us using the form.</p>
                    <h1 class="title-divider">For press enquiries</h1>
                    <ul>
                    	<li><a href="mailto:&#111;&#108;&#105;&#118;&#105;&#097;&#064;&#107;&#105;&#108;&#112;&#097;&#116;&#114;&#105;&#099;&#107;&#112;&#114;&#046;&#099;&#111;&#109;">&#111;&#108;&#105;&#118;&#105;&#097;&#064;&#107;&#105;&#108;&#112;&#097;&#116;&#114;&#105;&#099;&#107;&#112;&#114;&#046;&#099;&#111;&#109;</a></li>
                    	<li><strong>Kilpatric PR</strong></li>
                    	<li>12 Rickett Street</li>
                    	<li>London</li>
                    	<li>SW6 1RU</li>
                    	<li>Tel: 0207 381 6226</li>
                    </ul>
                  	
                    
                    
				</article><!-- END .col-2 -->

				<article class="col-2">
                	<?php echo do_shortcode( '[contact-form-7 id="contact-main" title="Contact form 1"]' ); ?>
				</article><!-- END .col-2 -->
                
			</div><!-- END wrapper -->
		</section><!-- END #main-content -->

	<?php endwhile; endif; ?> 

<?php get_footer(); ?>
