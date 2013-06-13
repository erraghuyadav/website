<?php get_header(); ?>
 	<section id="page-header" class="breadcrumb-holder">
            <div class="wrapper">
                  <?php if ( function_exists('yoast_breadcrumb') ) { yoast_breadcrumb('<p id="breadcrumbs">','</p>');} ?>
            </div>
      </section><!-- END #page-header -->
 
 
 	<section id="main-content" class="clearfix">
			<div class="wrapper news">
		
        		<div class="col-3">

		<?php if (have_posts()) : ?>

 			<?php $post = $posts[0]; // Hack. Set $post so that the_date() works. ?>

			<?php /* If this is a category archive */ if (is_category()) { ?>
				<h2 class="title-post underlined">Archive for the &#8216;<?php single_cat_title(); ?>&#8217; Category</h2>

			<?php /* If this is a tag archive */ } elseif( is_tag() ) { ?>
				<h2 class="title-post underlined">Posts Tagged &#8216;<?php single_tag_title(); ?>&#8217;</h2>

			<?php /* If this is a daily archive */ } elseif (is_day()) { ?>
				<h2 class="title-post underlined">Archive for <?php the_time('F jS, Y'); ?></h2>

			<?php /* If this is a monthly archive */ } elseif (is_month()) { ?>
				<h2 class="title-post underlined">Archive for <?php the_time('F, Y'); ?></h2>

			<?php /* If this is a yearly archive */ } elseif (is_year()) { ?>
				<h2 class="title-post pagetitle underlined">Archive for <?php the_time('Y'); ?></h2>

			<?php /* If this is an author archive */ } elseif (is_author()) { ?>
				<h2 class="title-post pagetitle underlined">Author Archive</h2>

			<?php /* If this is a paged archive  */ } elseif (isset($_GET['paged']) && !empty($_GET['paged'])) { ?>
				<h2 class="title-post pagetitle underlined">Blog Archives</h2>
			
			<?php } ?>


			<?php while (have_posts()) : the_post(); ?>
			
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