<?php get_header(); ?>

	<section id="page-header" style="background:url('<?php bloginfo( 'template_directory' ); ?>/_/img/markhill-model5.jpg') no-repeat 25% bottom;">
          <div class="wrapper">
              <h1>Whoops!</h1>
              <h3><?php _e('Error 404 - Page Not Found'); ?></h3>
              <img class="crown 404" src="<?php bloginfo('url'); ?>/wp-content/uploads/2013/05/crown.png" alt="">
          </div><!-- END wrapper -->
      </section><!-- END #page-header -->

	<section id="main-content" class="clearfix">
			<div class="wrapper 404">
				<div class="col-1">
					<h3>It appears what you were looking for has moved or doesn't exist.</h3>
					<a href="/" class="btn-large">Go to Homepage</a>
				</div>
    		</div>
     </section>

<?php get_footer(); ?>

