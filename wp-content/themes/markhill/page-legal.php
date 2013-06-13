<?php
/*
Template Name: Legal Stuff
*/
get_header(); ?>

	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
			
		<section id="page-header" class="breadcrumb-holder">
			  <div class="wrapper">
                	<?php if ( function_exists('yoast_breadcrumb') ) {
						yoast_breadcrumb('<p id="breadcrumbs">','</p>');
					} ?>
			  </div>
		</section><!-- END #page-header -->
        
        <section id="main-content" class="clearfix legal">
        	<div class="wrapper">
            	<h1 class="title-post"><?php the_title(); ?></h1>  
          
                
                <div class="col-3">
                	<?php the_field('page_content'); ?>       
                </div>
              
                <div class="col-1 gossip-holder">
                	<h2 class="gossip">Salon Gossip.</h2>
                    <?php get_sidebar('twitter'); ?>
				
    			</div> <!-- END .col-3 -->
			</div><!-- END .wrapper -->
        </section><!-- END #main-content -->

		<?php endwhile; endif; ?>

<?php get_footer(); ?>
