<?php get_header(); ?>
			
            
        <section id="page-header" style="background:url('<?php bloginfo('url'); ?>/wp-content/uploads/2013/05/woman9.jpg') no-repeat 25% bottom;">
			<div class="wrapper">
				<h1>Gossip</h1>
				<h3>What's HOT and what's NOT</h3>
				<img class="crown news" src="<?php bloginfo('url'); ?>/wp-content/uploads/2013/05/crown.png" alt="">
			</div><!-- END wrapper -->
		</section><!-- END #page-header -->
        
        
		<section id="main-content" class="clearfix">
			<div class="wrapper news">
		
        		<div class="col-3">
                  <?php query_posts("posts_per_page=6") ?>
				  <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
                  
                  <article>
                      <h2 class="title-post"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
                      <a class="post-image" href="<?php the_permalink(); ?>" style="background-image:url('<?php the_field('post_main_image'); ?>');"></a>
                      <div class="entry">
                          <?php the_excerpt(); ?>
                      </div>
                      <footer class="postmetadata">
                      	  <h4 class="quote-title"><?php posted_on(); ?></h4>
                          <p><?php the_tags('Tags: ', ', ', '<br />'); ?>
                          	<?php _e('Posted in','html5reset'); ?> <?php the_category(', ') ?> </p>
                          <?php /*?><?php comments_popup_link('No Comments &#187;', '1 Comment &#187;', '% Comments &#187;'); ?><?php */?>
                      </footer>
                  </article>
                  
                  <?php endwhile; ?>
                      <?php post_navigation(); ?>
                  <?php else : ?>
          
                  	  <h2><?php _e('Nothing Found','html5reset'); ?></h2>
          
                  <?php endif; ?>
              </div><!-- END .col-3 -->
              <?php get_sidebar(); ?>
              
           </div><!-- END .wrapper -->
        </section><!-- END #main-content -->
        
<?php get_footer(); ?>
