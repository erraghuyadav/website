<?php
/*
Template Name: Your Hair
*/
get_header(); ?>

	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

	<section id="page-header" style="background:url(<?php the_field('header_image'); ?>) no-repeat 25% bottom;">
		<div class="wrapper">
			<h1><?php the_title(); ?></h1>
			<h3><?php the_field('page_sub-title'); ?></h3>
			<img class="crown yourhair" src="<?php bloginfo('url'); ?>/wp-content/uploads/2013/05/crown.png" alt="">
		</div><!-- END wrapper -->
	</section><!-- END #page-header -->

	<section id="main-content">
		<div class="wrapper clearfix">

			<div class="col-2 q-and-a-intro">
				<img class="white-frame" src="<?php bloginfo( 'template_directory' ); ?>/_/img/mark-shades.jpg" alt="">
				<p class="intro">I get asked questions all the time from both my salon and celebrity clients. I have collected the top 20 to help you make the most of your hair! <br><img class="signature" src="<?php bloginfo( 'template_directory' ); ?>/_/img/signature.png" alt=""></p>

				<article class="q-and-a">
					<h2 class="q"><span>q.</span>How do I get my hair to grow quickly?</h2>
					<p><span class="a">a.</span>A lot of people ask me this and I wish there was a miracle treatment I could offer.  You can't get your hair to grow any quicker, but there are things you can do to make sure it grows stronger and healthier.   The first step when  growing your hair is getting rid of all the damaged and unhealthy parts. You may need to go see your hairdresser and get them give you a quick trim. Over the next few months, I recommend that you keep getting the ends trimmed every 6-8 weeks to keep your hair strong and split ends free.  Use a conditioner regularly to keep as much moisture in your hair, and always protect your hair when styling by using a Heat Protection Spray.  They say you are what eat and its certainly true - if you eat lots of greasy foods, your hair will become greasy and lank.  Make sure you eat a varied diet with lots of fresh fruit and veg and drink plenty of water.</p>
				</article>

				<article class="q-and-a">
					<h2 class="q"><span>q.</span>My hair is so fine and I can never seem to get a style to last.  It looks great just after I've blow dried but within an hour, it's just flat and boring again.  Any suggestions?</h2>
					<p><span class="a">a.</span>This is one of the most frequently asked questions – you're not alone!  The secret to making your style last is a great blow dry.  Think of a blow dry like the foundation for a house – if the foundation isn't strong, the house will collapse.  Make sure you use the right shampoo and conditioner to start with. –Towel dry your hair and spray Big Blow directly onto the root area; don't worry you can never overload this product!  Use your hairdryer on a medium heat setting and dry your hair section by section using a radial brush.  As you dry, angle the section in the opposite direction to where you eventually want it to fall to build in as much bounce on the roots as possible.  When all of your hair is dry, pop a few velcro roller around the top section and spray with Fabulous Finish Hairspray.  Blast them with your hairdryer for a couple of minutes and then take the rollers out.  Comb through using your fingers or a wide tooth comb and spray again with Fabulous Finish.  Your hair will be so big and bouncy, you'll just love it!</p>
				</article>

				<article class="q-and-a">
					<h2 class="q"><span>q.</span>I really want my hair to be shiny.  I've tried all the products in the supermarket, but they don't give that really glossy look I'm after.  How do you get hair to shine?</h2>
					<p><span class="a">a.</span>You need to know why hair shines first.  Your hair is covered in cuticles – think of them a bit like mirrored tiles.  When in good condition, light bounces from them giving a reflective shine but if they are broken, then your hair will look dull and maybe even damaged. Use an intensive treatment to help smooth and repair the cuticles and promote a natural shine.  You'll notice a difference just after the first use.  If you want to boost the shine, make sure you always point your hairdryer down your hair from root to tip to keep the cuticles lying flat and smooth and always finish with a generous spritz of Bedazzled Shine Spray to give that final shot of shine…</p>
				</article>

				<article class="q-and-a">
					<h2 class="q"><span>q.</span>I'm considering going blonde for the summer. Is this a good idea or will it dry out my hair?</h2>
					<p><span class="a">a.</span>It's a good idea! It gives your hair a natural sun kissed look and compliments sun tanned skin.  And as the new generation of lighteners are kinder to hair, dryness shouldn't be an issue.Ask your stylist for warmer golden blonde tones weaved through the top section only, so it looks as if the sun has naturally lifted your hair.  Stay clear of cool ash-blonde shades.Once hair is lightened, it's essential to protect your colour from direct or intense sunshine. Using products with UV filters and SPF will help, but the ultimate protection is to wear a scarf or hat.  Oval faces can carry off most hats; round faces should go for styles with a high crown and a decent brim, while a hat with a wide brim will balance out a long face.</p>
				</article>

				<article class="q-and-a">
					<h2 class="q"><span>q.</span>I have very thick hair, and lots of my friends are jealous. But it's so hard to straighten, curl or anything else!  Am I best to get it cut short?</h2>
					<p><span class="a">a.</span>We all want what we can't get!  You can do allsorts with thick hair, so don't opt for the chop just yet.  If you visit a good stylist, they will recommend ways of cutting which will help thin your hair without loosing the length or overall style.  Once you have had a good cut, your hair will be much easier to manage.  When it comes to styling at home, always section your hair into smaller sections which are easier to manage.  Doing this, you will also find your style lasts much longer.</p>
				</article>

				<article class="q-and-a">
					<h2 class="q"><span>q.</span>I'd love to try one of those plaits I see the celebs wearing.  Where do I start?</h2>
					<p><span class="a">a.</span>Plaits, Braids and weaves, call them what you like, but they are definitely still a hot look for 2013.  Forget school girl plaits and go for something a little more intricate.  To recreate this celeb look, instead of the traditional 3 strands plaits, twist just 2 strands together, or weave 4 or more.  For a fish-tail plait, take your hair back into a pony tail, and section into 2.  Take a small piece of hair from one of the sections, and wrap over one its section, and underneath the other.  Then, take another piece of hair from the other section and do the same – over and under.  Keep doing this, picking up pieces of hair as you weave until you get to the bottom of the pony tail and secure with a covered band.  Don't worry if some pieces stick out from the weave – this keeps this weave edgy and on trend.</p>
				</article>

				<article class="q-and-a">
					<h2 class="q"><span>q.</span>I'm getting married in the summer and really excited about having my hair styled for the big day.  What wedding styles are on trend this year?</h2>
					<p><span class="a">a.</span>Congratulations – I hope you have a fantastic day! Your wedding is your special day, so you need to feel as comfortable as possible.  Don't think you have to wear your hair in a completely different style to what you would normally just because it is your wedding day.  Choose a style you are happy with and feel confident wearing.  The last thing you need on your wedding is that 'bad hair day' feeling!  Here are some of this years trends…</p>
					<p>Glamorous Waves - Waves never really go out of fashion, especially if they are soft and natural looking.  Don't go for anything too curly - you need your hair to look totally touchable, not tight and frizzy.  Just make sure your hair is in the best condition possible so your waves look healthy and shiny. </p>
					<p>Elegant updo - Remember the iconic image of Audrey Hepburn with her hair up?  That image never dates, and will forever be a classic.  Styles like this are harder to do as just one hair out of place and the overall look is ruined.  This is definitely one look to practice a couple of times before the big day to make sure it is perfect.</p>
					<p>Tousled hair - If you are getting married on a beach or want a more relaxed feel, you need a style which looks really natural and a little more casual.  Similar to the Glamorous Waves, go for really soft movement through your hair and accessorise with a simple flower.</p>
				</article>

				<article class="q-and-a">
					<h2 class="q"><span>q.</span>I can't believe I'm getting a few grey hairs!  Do I need to colour?</h2>
					<p><span class="a">a.</span>Colour is a great way to keep your hair looking great and disguising those first few grey hairs.  Ask your stylist to weave a few different shades through your hair to keep colour natural.  If the time comes when you have a lot of grey hair, you may have to opt for a full head tint.  Be careful not to go too dark, your skin tone also changes as you get older, and a dark colour can make you look ‘washed out'.  If you do have an all over colour, then add interest and make it look more natural by adding slices of a lighter or richer colour through the top section. </p>
				</article>



			</div><!-- END .col-2 -->


			<div class="col-2">
            	<h2 class="hair-questions">Send us your hair questions</h2>
            	<?php echo do_shortcode( '[contact-form-7 id="661" title="Hair Questions"]' ); ?>
            	
				<article class="q-and-a">
					<h2 class="q"><span>q.</span>What one top hair tip do you swear by?</h2>
					<p><span class="a">a.</span>It's really important to keep your hair healthy.  A healthy balanced diet, plenty of water and taking care of your hair by using conditioning treatments and having regular trims really shows.  Hair which is in good health is full of body, bounce and shine.  Remember your hair is the most important thing you wear every day, when your hair looks good you feel great.</p>
				</article>

				<article class="q-and-a">
					<h2 class="q"><span>q.</span>Can you tell me how to cut my fringe at home?</h2>
					<p><span class="a">a.</span>Cutting your own fringe always looks simple but it often ends up a real disaster. My advice is pop into a local, reputable salon and let them do what they're good at. Remember the fringe is the beginning of every haircut and if it's wrong you may well feel like you were when you were 4 in your school photos and nobody wants that look do they?!</p>
				</article>

				<article class="q-and-a">
					<h2 class="q"><span>q.</span>I sometimes have to go to functions with work and would love a different look.  But with no time to home and restyle, I'm a bit stuck for styles.  Is there a style you would recommend which looks good both in the office or out and about?</h2>
					<p><span class="a">a.</span>When making the dash from the office to a function, then there are a few tricks you can do quickly and easily.  Take a couple of Velcro rollers to work with you, pop them in the crown area of your hair, spray with a little hairspray and then wait for the spray to dry – speed it up by putting your head under the hand dryer in the toilet!  Remove the rollers and gently use your fingers to comb back into place.  Just by adding ¼ inch volume at the crown will lift your face shape and give oomph to your style.  Or why not change style completely and pop your hair into a chignon – just pull your hair into a side ponytail and twist until it coils up on itself.  Secure with pins and grips.  Don't worry if pieces fall out; you want it to look textured and sexy, and not like you're taking a ballet exam!</p>
				</article>

				<article class="q-and-a">
					<h2 class="q"><span>q.</span>I love my hair when my hairdresser has just blow dried it.  But why can't I get it to look like that at home?  What's the secret?</h2>
					<p><span class="a">a.</span>There's no secret when you think about what your hairdresser actually does!  .  When you shampoo at home, it is usually in the shower and rarely will anyone spend as much time massaging products into your hair and scalp.  Taking this time will prep your hair for styling.  Once you have prepped your hair, make sure you apply a styling product evenly through the rest of your hair – Va Va Voom Mousse for instance.  Then, dry your hair in small sections Use your hairdryer on a medium heat setting and dry your hair section by section using a radial brush.  As you dry, angle the section in the opposite direction to where you eventually want it to fall to build in body and bounce.  Once all of your hair is dry, you can use either your tongs, wand or straighteners to complete the look.  It's definitely worth taking a little time when styling to get that salon finish.</p>
				</article>

				<article class="q-and-a">
					<h2 class="q"><span>q.</span>I've been colouring my hair at home now since I was about 17.  I'd like to go back to my natural colour but I don't really know how to go about it.  Do you think it will suit me?</h2>
					<p><span class="a">a.</span>Without seeing your hair and colouring, it is difficult to do a consultation on line.  However, I would advise you to visit your local salon as taking hair back to its natural colour can be quite difficult.  Depending on your colour now, your stylist may have to strip out the colour before re-applying your natural shade.  It's a process I definitely wouldn't recommend you try at home.  Even if you are light and want to put a darker colour on, you may find your colour could go a little green and fade really quickly.  Your hairdresser will be able to recommend the best technique and colours to suit you.</p>
				</article>

				<article class="q-and-a">
					<h2 class="q"><span>q.</span>I have to shampoo my hair every day because it is greasy.  If I'm going on a night out, sometimes I have to shampoo it twice.  I'm worried that this is too much and I am damaging my hair.  I'd like to wash ever other day, but I hate that greasy root feeling.  Can you help me?</h2>
					<p><span class="a">a.</span>Don't worry about shampooing your hair every day.  Everyone is different and where as some like to shampoo every day, others can leave it a week or longer!  You don't say how long your hair is – if your hair is short you will be doing very little damage to your hair, but if your hair is longer, just make sure you pop a conditioner on the ends (not the roots) to keep moisture levels up.   When you shampoo, be very gentle with your roots as you might be over stimulating the glands which just sit underneath your scalp if you are too vigorous.  You can also try a dry shampoo – Quick fix is great as it cleanses, refreshes, and re-energizes your style instantly without leaving a white residue.  It is definitely worth trying as you might be able to cut down your shampooing to every other day…</p>
				</article>

				<article class="q-and-a">
					<h2 class="q"><span>q.</span>I wear glasses and always find it difficult to find a style that really suites me.  Is there anything you can suggest?</h2>
					<p><span class="a">a.</span>Make sure you take your glasses with you when you visit your hairdresser.  I know it sounds silly, but it can be frustrating for us if we finish a style and then the client pops her glasses out of her bag!  This way you can ensure that your haircut is going to complement your glasses.  As a general rule, when you wear glasses, you don't want too much hair falling onto your face, as this will make you look like all hair and glasses.  You need to balance your style, so by taking your hair away from your face around the temple area, will give a much better overall look.  If you have a fringe, you need to keep it well maintained. Fringes teamed with frames can make for a fabulous style; just make sure to keep the length above your glasses for a well kept look.</p>
				</article>

				<article class="q-and-a">
					<h2 class="q"><span>q.</span>Despite the cooler weather, I am plagued with frizz.  What can I do?</h2>
					<p><span class="a">a.</span>No matter where I go, Frizz is a universal problem!  If it is cold and damp, or hot and humid, you can guarantee someone will be suffering with Frizz. There are two ways to deal with frizzy hair.  The first is by checking the moisture levels.  If your hair tends to be dry, the excess moisture in the air will be instantly sucked up making your hair frizzy and out of style.  Keeping your hair moisturized and well-conditioned all year round is a must when you suffer from frizz, so always use a conditioner after you shampoo and once a week treat your hair to an intensive treatment. The second is to create an effective humidity barrier on the hair, to help keep the moisture in and maintain shine and condition to prevent frizz.  Use an Anti-Humidity Spray and spray over your finished look to lock down your style and keep your hair looking great no matter what the weather.</p>
				</article>

				<article class="q-and-a">
					<h2 class="q"><span>q.</span>I'm pregnant and my hair has never felt better!  Some people say it won't last, so do you have any advice?</h2>
					<p><span class="a">a.</span>Congratulations! It's great to hear you are loving your hair.  I'll explain why your hair is feeling like this. Normally, your hair switches between an active growing phase and a resting phase.  During pregnancy because your hormones have better things to do than look after your hair, it will probably enter into a resting phase.  Because you lose far less hair in this resting phase, your hair will feel thicker and fuller than ever before.  Many women think this is a wonderful thing as they finally have the hair they have always dreamed of!  However, as your hormone levels return back to normal after the delivery of your baby your hair will return to its normal growth pattern.  This means you will probably lose the hair you would have normally lost in just a couple of weeks.  Don't worry, as you lose the excess hair, new hair will be growing again.  Remember to book an appointment at the salon a couple of weeks before your due date.  When baby is here, for a few weeks, you probably won't have the time or need to go to the salon.  Getting your hair cut into a great shape which is easy to look after will help enormously.</p>
				</article>

				<article class="q-and-a">
					<h2 class="q"><span>q.</span>How do I use a Magic Wand – I would love soft waves.</h2>
					<p><span class="a">a.</span>On clean dry hair, split your hair into about 6 or 8 sections.  Take one section, spray with Work it Girl Shine Protect and Control Spray and wrap spirally around the barrel of your Sexy Waves and Curls Magic Wand.  Hold for a few seconds and release.  Do this through the rest of your hair.  Try to wind the hair around the wand going back, away from your face, and to save getting tangled up in the power cable, always hold the wand still and wind your hair around it.   When all of your hair is waved, comb through using your fingers and a little Serum.  Voila! Beautiful soft waves!</p>
				</article>

			</div><!-- END .col-2 -->

		</div><!-- END wrapper -->
	</section><!-- END #main-content -->
    
    <script type="text/javascript">
		$(window).load(function (){
			$(".q-and-a").append('<div class="click-reveal"><img src="<?php bloginfo( 'template_directory' ); ?>/_/img/click-to-reveal.png" alt="Click to reveal"></div>');
			$(".q-and-a").prepend('<div class="click-close"><img src="<?php bloginfo( 'template_directory' ); ?>/_/img/click-to-close.png" alt="Click to close"></div>')
			$(".click-close").hide();
		// END window.load
		});  
    </script>

	<?php endwhile; endif; ?>

<?php get_footer(); ?>
