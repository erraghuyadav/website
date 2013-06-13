<?php
/*
Template Name: The Team
*/
get_header(); ?>

	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
			
		<section id="page-header" style="background:url(<?php the_field('header_image'); ?>) no-repeat 25% bottom;">
			  <div class="wrapper">
			  		<h1><?php the_title(); ?></h1>
                    <img class="crown team" src="<?php bloginfo('url'); ?>/wp-content/uploads/2013/05/crown.png" alt="">
			  </div>
		</section><!-- END #page-header -->
        
        <section id="main-content" class="clearfix">
        	<div class="wrapper">
                
                <div class="team-member">
					<img class="team-member-img" src="<?php bloginfo( 'template_directory' ); ?>/_/img/staff-jules.jpg" alt="Jules Holland">
					<h3>Jules Holland <span>Creative Director</span></h3>
					<p>What can you say about the man who has it all?  He's charming, witty, good looking and a demon with a pair of scissors.  He also wrote this all by himself!</p>
					<p class="additional-points">North Eastern Hairdresser of the Year 2011.<br>Director of the British Artistic Team of the Year 2002.</p>
				</div>
				
				<div class="team-member">
					<img class="team-member-img" src="<?php bloginfo( 'template_directory' ); ?>/_/img/staff-jarrad.jpg" alt="Jarrad Englestown">
					<h3>Jarrad Englestown <span>Senior Stylist </span></h3>
					<p>Jarrad loves keeping busy from dawn until dusk.  If he's not working, he's talking about hair!  Jarrad is a top dad who loves his little boy even more than hairdressing!  A truly awesome hairdresser.</p>
					<p class="additional-points">BAFTA accredited stylist.<br>Photo shoots for publications including Fabulous and the Observer.<br>Celebrity clients including Abby Clancy.</p>
				</div>
				
				<div class="team-member">
					<img class="team-member-img" src="<?php bloginfo( 'template_directory' ); ?>/_/img/staff-penny.jpg" alt="Penny Oliver ">
					<h3>Penny Oliver <span>Leading Stylist</span></h3>
					<p>Extremely creative, Penny has a wonderful approach to her work – she's always happy and never lets her clients down. Hairdresser by day, dog trainer and pole dancer by night.</p>
					<p class="additional-points">BAFTA accredited stylist. <br>Photo shoots for publications including Now and You and celebrity clients including Sheridan Smith.</p>
				</div>
				
				<div class="team-member">
					<img class="team-member-img" src="<?php bloginfo( 'template_directory' ); ?>/_/img/staff-lizzie.jpg" alt="Lizzie Andrews">
					<h3>Lizzie Andrews <span>Leading Stylist</span></h3>
					<p>A lean mean styling machine, clients love Lizzie and Lizzie loves her clients.  Watch out for some pretty bad jokes though!  She also makes a mean coffee mocha!</p>
					<p class="additional-points">BAFTA accredited stylist.<br>Photo shoots for publications including Blizz and TV Times and celebrity clients including Ruth Jones.</p>
				</div>
                
                <div class="team-member">
					<img class="team-member-img" src="<?php bloginfo( 'template_directory' ); ?>/_/img/staff-neil.jpg" alt="Neil">
					<h3>Neil <span>Commercial Manager</span></h3>
					<p>If you like spreadsheets, then you'll love Neil. He'll show you his spreadsheet at the drop of a hat.  He's also been known to venture into the warehouse occasionally, and can often be seen in the corner of the coffee room with his high vis on. </p>
					<p class="additional-points"></p>
				</div>
                
                <div class="team-member">
					<img class="team-member-img" src="<?php bloginfo( 'template_directory' ); ?>/_/img/staff-gill.jpg" alt="Gill">
					<h3>Gill <span>PA</span></h3>
					<p>The Queen of Google, you only have to ask and she will find it.  However, ask her to find something in her office, and you don't stand a chance.  Loves, lives and works for chocolate. </p>
					<p class="additional-points"></p>
				</div>
                
			</div>
        </section><!-- END #main-content -->

		<?php endwhile; endif; ?>

<?php get_footer(); ?>
