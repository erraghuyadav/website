<?php
/*
Template Name: About Me
*/
get_header(); ?>

	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

		<section id="page-header" style="background:url(<?php the_field('header_image'); ?>) no-repeat 25% bottom;">
			<div class="wrapper">
				<h1><?php the_title(); ?></h1>
				<h3><?php the_field('page_sub-title'); ?></h3>
				<img class="crown about" src="<?php bloginfo('url'); ?>/wp-content/uploads/2013/05/crown.png" alt="">
			</div><!-- END wrapper -->
		</section><!-- END #page-header -->

		<section id="main-content" class="clearfix">
			<div class="wrapper aboutme">

				<article class="col-2">
                  	<div class="about-intro">
                  		<h1>Well where do I start?</h1>
                        <p>When I was young my Mum had a saying <i>"With a smile like that Mark, you can take on the world!"</i>  So wherever I am, whoever I meet, the first thing you will always see from me is a big smile.  It costs nothing and hopefully it will make someone smile back and feel happy!</p>
                        <p>My name is Mark Hill and I would like to start by saying <i>I love, love, love my job</i>.  Doing hair and being able to make people feel fabulous is probably the greatest feeling on the world.</p>
                        <p>When I look back, I feel incredibly fortunate to have been surrounded by some extraordinary people.  From the girlfriend who recommended me for my first hairdressing job at just 15 years old to the movie stars in their Bel Air mansions; they have all helped and supported me throughout my career.</p>
                        <p>Early in my career, I started entering hairdressing competitions.  After a bit of a shaky start (I came 52nd out of 54 in my first comp!), I soon started to win medals.  Travelling the world with the British Hairdressing Team gave me the discipline, drive and determination I needed when I finally competed against some of the great hairdressing masters in the world renowned British Hairdressing Awards.</p>
                        <p>Anyway back to my Mum, my favourite person in the world who instilled in me huge self-confidence and truly believed anything is possible.  Without her support, I may never have won Northern Hairdresser of the year, Creative Hairdresser of the year, International Hairdresser of the year, British Hall of Fame and twice British Hairdresser of the year (the greatest title in the world of hairdressing).  <i>Thanks Mum x</i></p>
                        <p>From my first appearances on TV, catwalk shows and flying across the Atlantic to style some of the world's most glamorous women <i>my intention has always been, to be a 'celebrity's hairdresser' not a 'celebrity hairdresser'</i>.  I like to keep my own feet firmly on the ground and still enjoy creating hair which makes women everywhere look and feel better about themself.</p>
                        <p>I launched my first range of products about 13 years ago which has been an incredible journey for me as it has allowed me to create a range of the best hairdressing products that I have ever used!</p>
                        <p>I always wanted to be an architect when I was a kid, so locking myself away designing bottles, ingredients and language which relates to my customers continues to be a dream come true for me.  It helps to break down the barriers between the illusions of glamour and allows <i>real people to achieve real results</i>.</p>
                        <p>I work in the salon 3 days a week because I love to style hair; seeing my <i>clients faces beam</i> as they leave the salon with gorgeous hair is still my greatest pleasure (pop in and say Hi if you're in the area!).  For the rest of the week, I split my time between product development, celebrity clients and photo shoots.</p>
                        <p><i>My greatest achievement to date?</i> Being a good husband and father to the 3 women in my life; my wife Paula and my two beautiful daughters India-Rose and Honey-Rose xxx</p>
                        <p>Nice talking to you</p>
                        <p>Keep smiling</p>
						<img class="signature" src="<?php bloginfo( 'template_directory' ); ?>/_/img/signature.png" alt="">
                  	</div><!-- END about intro -->
					<h1>About Mark Hill</h1>
					<p>Mark Hill is one of the defining influences on British hairdressing. Based in Yorkshire, Mark is still the only hairdresser outside London to have won the title of ‘British Hairdresser of the Year’ twice and the only UK hairdresser to have ever won the prestigious <i>‘International Hairdresser of the Year’</i> accolade twice in succession, firmly establishing his global status as the <h4 class="quote-title" style="margin-top:25px;">Master of Sexy Wearable Hair</h4></p>
					<p>He creates beautiful and wearable styles that women across the world want to emulate and is applauded by the industry for his re-invention of glamour.</p>
					<p><i>Mark has an ex-girlfriend to thank for introducing him to hairdressing.  He was just 15 and looking for a part-time job and she worked in a salon and suggested he might like it too and Mark never looked back!</i></p>
					<p>Passionate about training, Mark moved from his local village salon in Hessle when he was 16 into a busy city-centre salon in Hull – even then he knew he needed to experience all aspects of hairdressing if he was to succeed.  His next move was to the salon he now owns in the beautiful village of Kirk Ella on the outskirts of Hull where he continued to train and practice his craft, sometimes until late into the night. This hard work paid off and he was named the youngest member of the British Hairdressing team when he was 17.  For the next few years, Mark travelled the world with the team competing in hundreds of hairdressing competitions and slowly <i>his reputation as one of the best grew within the industry</i>.  His model for all of his competitions is now his wife!</p>
					<p>Told he would never be able to win British Hairdresser of the Year or have his own hair cosmetics line, Mark set out to prove them wrong! With both the<i> hair cosmetics line</i> and <i>all of the top industry accolades</i> under his belt, Mark is now a hairdressing institution but staying true to his hairdressing roots is paramount, he still rolls up his sleeves in his beautiful salon with the rest of the Mark Hill team, cutting and styling three days a week, keeping him at the vanguard of both creative and technical advances. This technical know-how added to his creative vision, down to earth approach and boundless charm has earned Mark the ultimate respect of his fellow professionals.</p>

				</article><!-- END .col-2 -->

				<article class="col-2">
					<div class="about-intro">
						<a href="" title=""><img class="prod-img" src="<?php bloginfo( 'template_directory' ); ?>/_/img/markhill-award.jpg" alt="" /></a>
						<a class="btn-large" href="<?php bloginfo('url'); ?>/about-me/awards" title="View now">Mark's Awards</a>
					</div>
					
					<div class="about-intro">
						<a href="" title=""><img class="prod-img" src="<?php bloginfo( 'template_directory' ); ?>/_/img/staff.jpg" alt="" /></a>
						<a class="btn-large" href="<?php bloginfo('url'); ?>/about-me/the-team" title="View now">Meet the team</a>
					</div>
				
                	<p>An enviable celebrity client list means that Mark regularly styles for red carpet events such as <i>The Academy Awards</i> and is the <i>official hairstylist for the prestigious BAFTA Television Awards.</i> Mark has tweaked the tresses of some of the world's biggest super-stars such as;</p>
					<h4 class="quote-title" style="margin:25px 0 50px; text-align:center;">Kate Hudson, Michelle Pfeiffer, Tess Daly, Myleene Klass, Fearne Cotton and Holly Willoughby.</h4>
					<p>But you don't have to be movie star to be touched by the <i>Mark Hill magic</i>, he believes in creating glamorous, wearable styles for women everywhere and this ethos along with his boundless energy, enthusiasm and passion means he has the unique ability to make women feel truly special.</p>
					<p>Mark is in constant media demand as a style expert and his TV credits include <i>GMTV, BBC Style Challenge, Sky News, E! Entertainment and Good Morning America.</i> He maintains a constant presence in the media and is a regular in the glossies such as;</p>
					<h4 class="quote-title" style="margin:25px 0 50px; text-align:center;">Vogue, Tatler, Elle, Cosmopolitan and Grazia.</h4>
					<h1>The Salon</h1>
					<p>The Mark Hill Salon is one of the most <i>successful salons in the UK</i>. Based in the beautiful village of Kirk Ella in the East Riding of Yorkshire, the salon is the home of the Mark Hill Creative Team. It’s in the salon where the magic happens – with an enviable clientele including pop stars, movie stars and TV presenters.</p>

					<h1>Products</h1>
					<p>In addition to his successful salon business, Mark Hill also heads two of the most prominent hair ranges in the UK.  Personally created and financed by Mark, <i>Mark Hill Hair Cosmetics</i> and <i>Mark Hill Heat Stylers</i> are multi-award winning ranges and include both the No 1 selling Hairdryer on the high-street today and his unique ‘Raw’ range of Heat Stylers which has seen phenomenal year on year growth. </p>
					<h4 class="quote-title" style="margin:25px 0 50px; text-align:center;">Mark has been credited as defining a new genre of hair-care and has made creating beautiful hair at home a reality for women everywhere.</h4>

					<p>Since launching his signature range of Hair Cosmetics and Heat Stylers, the brand has carried on in Mark's footsteps and has won many major awards including <i>‘Cosmopolitan - Best Serum’, 'Pure Beauty - Best Pack Design’ and ‘New Woman - Best New Shampoo’,</i> the range has been recently reformulated and re-launched as <i>'The New Cool'</i>.</p>
					<p>Not only do they deliver outstanding results and smell gorgeous they are rapidly becoming a celebrity must-have. The Mark Hill Heat Stylers have been available on the high street now for over 6 years and is now accompanied by the fabulous “Raw Zebra Hairdryer”, which sold close to one million units in its first week on the shelves.</p>

					<h1>Awards</h1>
					<p>Mark has won just about every award the world of hairdressing has to offer! Voted <i>‘The Most Outstanding Hairdresser of his Generation’</i>, Mark received the most prestigious award of his career when he was named <i>‘The Hairdressers' Hairdresser’</i>. </p>
					<p>This is still his most treasured award to date.</p>
					<h3>Mark Hill Awards</h3>
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
						<li><span>Winner of 8 British Hairdressing Awards</span></li>
						<li><span>Winner of Paris Jon De on Ton</span></li>
						<li><span>Winner of 68 International Gold medal</span></li>
					</ul>

					<a href="<?php bloginfo('url'); ?>/about-me/awards" title="Awards - Find out more" class="btn-large">Find out more about Mark Hill's Awards</a>

				</article><!-- END .col-2 -->
			</div><!-- END wrapper -->
		</section><!-- END #main-content -->

	<?php endwhile; endif; ?>

<?php get_footer(); ?>
