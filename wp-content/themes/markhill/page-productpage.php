<?php
/*
Template Name: Product Page
*/
get_header(); ?>

	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
			
		<section id="page-header" class="breadcrumb-holder">
			  <div class="wrapper">
					<?php if ( function_exists('yoast_breadcrumb') ) { yoast_breadcrumb('<p id="breadcrumbs">','</p>');} ?>
			  </div>
		</section><!-- END #page-header -->
        
        <section id="main-content" class="productpage clearfix">
        	<div class="wrapper tagline-holder">
            	  <h3 class="tagline"><?php the_field('tag_line'); ?></h3>
                  <div class="product-social">
                  	<span><a href="https://twitter.com/share" class="twitter-share-button" data-via="markhillhair">Tweet</a></span>
                    <span><div class="fb-like" data-href="<?php the_permalink(); ?>" data-send="false" data-layout="button_count" data-width="50" data-show-faces="false"></div></span>
                    <span><a href="//pinterest.com/pin/create/button/?url=<?php the_permalink(); ?>&media=<?php the_field('main_product_image'); ?>&description=<?php the_title(); ?>" data-pin-do="buttonPin" data-pin-config="beside"><img src="//assets.pinterest.com/images/pidgets/pin_it_button.png" /></a></span>
                    <span><div class="g-plusone" data-size="medium"></div></span>
				  </div>
			</div>
			
			<div id="product-main">
				<div class="wrapper clearfix">
					
                    <div class="product-model" style="background-image:url('<?php the_field('model_image'); ?>');"></div>
                    
                    <div class="product-image">
						<a rel="gallery" href="<?php the_field('main_product_image'); ?>"><img src="<?php the_field('main_product_image'); ?>" alt="<?php the_title(); ?>"></a>
					</div>
                    
                    <div class="additional-images">
                        <a rel="gallery" href="<?php the_field('gallery_image_1'); ?>"></a>
                        <a rel="gallery" href="<?php the_field('gallery_image_2'); ?>"></a>
                    </div>
                    
                    
					<div class="product-buybox">
						<p class="price"><span class="rrp">RRP:</span> &pound;<?php the_field('product_price_UK'); ?> <span class="dollars">(&#36;<?php the_field('product_price_USA'); ?>)</span></p>
						<ul>
							<li><?php the_field('bullet_point_1'); ?></li>
							<li><?php the_field('bullet_point_2'); ?></li>
							<li><?php the_field('bullet_point_3'); ?></li>
							<li><?php the_field('bullet_point_4'); ?></li>
						</ul>
						<div class="buy-boots">
                        	<img src="<?php bloginfo( 'template_directory' ); ?>/_/img/markhill-boots.png" alt="Boots UK">
							<a href="<?php the_field('boots_link'); ?>" class="btn-large">Buy now <img src="<?php bloginfo( 'template_directory' ); ?>/_/img/uk.png" alt=""></a>
						</div>
						<div class="buy-walgreens">
                        	<img src="<?php bloginfo( 'template_directory' ); ?>/_/img/markhill-walgreens.png" alt="Walgreens USA">
							<a href="<?php the_field('walgreens_link'); ?>" class="btn-large">Buy now <img src="<?php bloginfo( 'template_directory' ); ?>/_/img/usa.png" alt=""></a>
						</div>
					</div>
					
				</div>
			</div><!-- END .product-main -->
			
			<div class="wrapper">
				<div class="product-extra">
					<h1 class="title-productpage"><?php the_title(); ?></h1>  
					<?php the_field('product_description'); ?>
					<div class="fb-comments" data-href="<?php the_permalink(); ?>" data-width="641" data-num-posts="5"></div>
				</div>
				<div class="product-video">
					<iframe width="100%" height="300" src="http://www.youtube.com/embed/<?php the_field('product_video'); ?>" frameborder="0" allowfullscreen></iframe>
				</div>
				<div class="product-tips">
					<h4 class="quote-title">Mark's TOP Tip</h4>
					<?php the_field('marks_top_tip'); ?>
				</div>
			</div>

        </section><!-- END #main-content -->

		<?php endwhile; endif; ?>
        

<?php get_footer(); ?>
