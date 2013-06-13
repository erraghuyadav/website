<?php
/*
Template Name: Home
*/
get_header(); ?>

	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
			
		<section id="banners">
			  <?php putRevSlider("homepage") ?>
		</section><!-- END #banners -->
        
        <section id="main-content" class="clearfix">
        	<div class="wrapper">
                
                <article class="col-1 home-col">
                	<img class="polaroid" src="<?php bloginfo( 'template_directory' ); ?>/_/img/mark-polaroid.png" alt="">
                	<h2>Welcome.</h2>
                    <p>Your hair is the <i>most important</i> accessory you wear every day. If you look gorgeous, you feel gorgeous. Each one of my products has been designed with your needs in mind by myself and my award winning salon team so you can create the hair you have always wanted.</p>
                    <h4 class="quote-title">Master of Sexy Wearable Hair</h4>
                    <p>We use all these products every day in the salon, catwalk shows, photographic shoots and on all of our celebrity clients, so we know they <i>will work</i> for you too!</p>
                    <p>Our expertise in your hands. Have fun with your hair, look <i>gorgeous</i> and feel <i>fabulous</i>.</p>
					<a class="btn-large" href="/markhill/about-me">About me</a>
                </article>
                
                <?php query_posts("post_per_page=1"); the_post(); ?>
                
                <article class="col-1 home-col">
                	<h2>What's hot.</h2>
					<a class="news-image-small" href="<?php the_permalink(); ?>" style="background-image:url('<?php the_field('post_main_image'); ?>');"></a>
                    <h3 class="news-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
                    <?php the_excerpt(); ?>            
					<a class="btn-large" href="<?php the_permalink(); ?>">Read more</a>
                </article>
                
                <?php wp_reset_query(); ?>
                
                <article class="col-1 home-col the-app">
                	<h2>New Hair, New You.</h2>
                    <a href="/markhill/the-app"><img src="<?php bloginfo( 'template_directory' ); ?>/_/img/markhill-app-small.png" alt=""></a>
                    <!--<p>Get the inspiration for your next look - by trying some of your favourite celeb's!</p>-->
					<a class="btn-large" href="/markhill/the-app">Try the App</a>
                </article>
                
                <article class="col-1 gossip-holder">
                	<h2 class="gossip">Salon Gossip.</h2>
                    <?php get_sidebar('twitter'); ?>
                </article>
                
			</div>
        </section>

		<?php endwhile; endif; ?>

<?php get_footer(); ?>
