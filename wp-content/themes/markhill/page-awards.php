<?php
/*
Template Name: Awards
*/
get_header(); ?>

	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

		<section id="page-header" style="background:url(<?php the_field('header_image'); ?>) no-repeat 25% bottom;">
			<div class="wrapper">
				<h1><?php the_title(); ?></h1>
				<h3><?php the_field('page_sub-title'); ?></h3>
				<img class="crown award" src="<?php bloginfo('url'); ?>/wp-content/uploads/2013/05/crown.png" alt="">
			</div><!-- END wrapper -->
		</section><!-- END #page-header -->

		<section id="main-content" class="clearfix">
			<div class="wrapper awards">

				<article class="col-2">
					<h1>Mark Hill Awards</h1>
					<p>Mark has won just about every award the world of hairdressing has to offer! Voted ‘The Most Outstanding Hairdresser of his Generation’, Mark received the most prestigious award of his career when he was named ‘The Hairdressers' Hairdresser’.  This is still his most treasured award to date.</p>

					<ul class="awards-ul">
						<li><span>2 x British hairdresser of the Year</span></li>
						<li><span>2 x International hairdresser of the Year</span></li>
						<li><span>2 x Creative hairdresser of the Year</span></li>
						<li><span>3 x Winner of Northern</span></li>
						<li><span>Hairdresser of the Year</span></li>
						<li><span>Voted the most outstanding</span></li>
						<li><span>Hairdresser of his generation</span></li>
						<li><span>World Master Supreme (New York)</span></li>
						<li><span>Voted the Hairdressers'</span></li>
						<li><span>Hairdresser of the year</span></li>
						<li><span>Winner of numerous British Hairdressing Awards</span></li>
						<li><span>Winner of Paris Jon De on Ton</span></li>
						<li><span>Winner of 68 International Gold medals</span></li>
					</ul>

					<h4 class="awards-title" style="margin:25px 0 50px; text-align:center;">Hairdressers Hall of Fame</h4>
					<p>Hairdressers who have won the same category at the British Hairdressing awards 3 times are inducted into the British Hairdressing Awards Hall of Fame.</p>
					<p><i>Mark Hill was the youngest every hairdresser to be inducted into the Hall of Fame in 1997.</i></p>

					<h4 class="awards-title" style="margin:25px 0 50px; text-align:center;">Winner of 68 International Gold medals</h4>
					<p>During his time working with the British Team, Mark Hill travelled extensively through Europe and won 68 International Gold Medals both <i>individually</i> and as a <i>team</i>.</p>

					<h4 class="awards-title" style="margin:25px 0 50px; text-align:center;">Voted the most outstanding Hairdresser<br />of his Generation</h4>
					<p>The unique <i>Gilbert Pearce Award</i> was awarded to Mark in recognition of his hairdressing skills.</p>
					<p>Mark Hill was presented with the award in 1995.</p>

					<h4 class="awards-title" style="margin:25px 0 50px; text-align:center;">Voted the Hairdressers' Hairdresser of the year</h4>
					<p><i>The Fellowship of British Hairdressers</i> voted Mark their ‘Hairdressers’ Hairdresser of the Year in recognition of all of his achievements both here and internationally</p>
					<p>Mark Hill won this award in 2000.</p>


					<h4 class="awards-title" style="margin:25px 0 50px; text-align:center;">Special Recognition Award</h4>
					<p>The British Guild of Hairdressers presented this award to Mark in recognition of promoting <i>British Hairdressing both in the UK and Internationally.</i></p>
					<p>Mark Hill was presented with this award in 2003.</p>

					<h4 class="awards-title" style="margin:25px 0 50px; text-align:center;">Winner AIPP Awards</h4>
					<p>Submitting a collection of images along with an impressive press pack including magazine cuttings, TV appearances and interviews, Mark was voted to have the <i>best Press Pack</i> by the Association International Presse Professionnelle in Paris.</p>
					<p>Mark Hill won this award in 2001.</p>

				</article>

				<article class="col-2">
                	<iframe src="http://www.youtube.com/embed/YyaLFt-cDiI" height="360" width="100%" allowfullscreen="" frameborder="0"></iframe>
					<h4 class="awards-title" style="margin:25px 0 50px; text-align:center;">British Hairdresser of the Year</h4>
					<p>The most coveted award in the Hairdressing Industry</p>
					<p><i>This is not an award you can enter. </i>To be eligible to win, you have to have won a regional or creative category 3 times and then by nominated by industry peers.  On nomination, you submit a collection of images along with your full PR profile to be judged by a panel made up from other hairdressers, product manufacturers and beauty journalists.   At the award ceremony itself, you have to present 3 models and it is only after then the winner is decided.</p>
					<p>Mark Hill won the title of British Hairdresser of the Year in 2000 and 2003.</p>

					<h4 class="awards-title" style="margin:25px 0 50px; text-align:center;">International hairdresser of the Year</h4>
					<p>The Canadian Hairdresser Mirror Awards is one of the most prestigious Award ceremonies open to hairdressers from all around the world.</p>
					<p><i>The International Stylist category is by nomination only. </i> Nominated by an editor, art director or board of directors, entrants must send a collection of images including Multicultural, Mens, Long Hair, Avant Garde, and Classic.  The winner is decided by a panel of international judges including hairdressers and journalists.</p>
					<p>Mark Hill won the title of International Hairdresser of the Year in 2001 and 2002.</p>

					<h4 class="awards-title" style="margin:25px 0 50px; text-align:center;">Creative hairdresser of the Year</h4>
					<p>Creative, or Avante Garde Hairdresser of the Year, allows the hairdresser to really show their skills in creating <i>ground-breaking styles.</i></p>
					<p>Mark Hill won the title of Creative Hairdresser of the Year in 1998 and 1999.</p>

					<h4 class="awards-title" style="margin:25px 0 50px; text-align:center;">Northern Hairdresser of the Year</h4>
					<p>Voted for by a panel of industry peers and beauty journalists, the winner of this category represents their local area for the following 12 months. <i>You can only win a maximum of 3 times</i> which then gains induction into the British Hairdressing Awards Hall of Fame.</p>
					<p>Mark Hill won the title of Northern Hairdresser of the Year in 1993, 1994 and 1997.</p>

					<h4 class="awards-title" style="margin:25px 0 50px; text-align:center;">Winner of numerous British Hairdressing Awards</h4>
					<p>Mark and his team have won an <i>amazing</i> collection of other British Hairdressing Awards - These include;</p>
					<ul class="awards-ul">
						<li><span>Twice winners of Artistic Team of the Year</span></li>
						<li><span>Seven times winners of Northern Hairdresser of the Year</span></li>
						<li><span>Junior of the Year</span></li>
					</ul>

					<h4 class="awards-title" style="margin:25px 0 50px; text-align:center;">World Master of the Craft (New York)</h4>
					<p>The award recognises those who have achieved excellence in the hair fashion industry and are respected worldwide as leaders, entrepreneurs and <i>masters of their craft.</i></p>
					<p>Mark Hill won the award in 1997.</p>

					<h4 class="awards-title" style="margin:25px 0 50px; text-align:center;">Winner of Paris Jon De on Ton</h4>
				</article>
			</div><!-- END wrapper -->
		</section><!-- END #main-content -->

	<?php endwhile; endif; ?>

<?php get_footer(); ?>
