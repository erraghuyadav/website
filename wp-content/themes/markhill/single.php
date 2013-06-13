<?php get_header(); ?>

	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
	
		<section id="page-header" class="breadcrumb-holder">
			  <div class="wrapper">
					<?php if ( function_exists('yoast_breadcrumb') ) { yoast_breadcrumb('<p id="breadcrumbs">','</p>');} ?>
			  </div>
		</section><!-- END #page-header -->
		
		<section id="main-content" class="clearfix">
        	<div class="wrapper">
            	<h1 class="title-post"><?php the_title(); ?></h1>      
				<article class="entry-content">	
                    <img src="<?php the_field('post_main_image'); ?>" alt="">
					<?php the_content(); ?>					
					<?php wp_link_pages(array('before' => 'Pages: ', 'next_or_number' => 'number')); ?>
					<?php the_tags( 'Tags: ', ', ', ''); ?>
					<h4 class="quote-title"><?php posted_on(); ?></h4>
					<div class="post-social">
                        <span><a href="https://twitter.com/share" class="twitter-share-button" data-via="markhillhair">Tweet</a></span>
                        <span><div class="fb-like" data-href="<?php the_permalink(); ?>" data-send="false" data-layout="button_count" data-width="50" data-show-faces="false"></div></span>
                        <span><a href="//pinterest.com/pin/create/button/?url=<?php the_permalink(); ?>&media=<?php the_field('post_main_image'); ?>&description=<?php the_title(); ?>" data-pin-do="buttonPin" data-pin-config="beside"><img src="//assets.pinterest.com/images/pidgets/pin_it_button.png" /></a></span>
                        <span><div class="g-plusone" data-size="medium"></div></span>
					</div>
					
					<?php /*?><?php comments_template(); ?><?php */?>
					<?php post_navigation(); ?>
				</article>
				
				<?php get_sidebar(); ?>	
		
			</div><!-- END .wrapper -->
		 </section><!-- END #main-content -->

	<?php endwhile; endif; ?>
	
<?php get_footer(); ?>