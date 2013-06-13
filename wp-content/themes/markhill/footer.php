<?php ?>
		<footer id="footer" class="source-org">
			<div class="wrapper">
            
            	<?php /*?><div class="col-1">
                	<img class="footer-img" src="<?php bloginfo( 'template_directory' ); ?>/_/img/VIP.png" alt="Mark Hill VIP">
                	<p>Become a Mark Hill VIP to receive exclusive tips, back-stage gossip and competitions - for<br> your eyes only!</p>
                    <a class="btn-large" href="<?php bloginfo('url'); ?>/vip">Sign up now</a>
                </div><?php */?>
                
                <div class="col-1 footer-nav">
                	<?php wp_nav_menu( array('menu' => 'primary') ); ?>
                </div>
                
                <div class="col-1 be-social">    	
                      <a href="https://twitter.com/#!/markhillhair" class="footer-twitter">Mark Hill on Twitter</a>
                      <a href="http://www.facebook.com/Markhillhair" class="footer-facebook">Mark Hill on Facebook</a>
                      <a href="http://pinterest.com/markhillhair/" class="footer-pinterest">Mark Hill on Pinterest</a>
                      <a href="http://www.youtube.com/MarkHillHair" class="footer-youtube">Mark Hill on Youtube</a>                    
                      <!--<a href="http://www.youtube.com/MarkHillHair" class="googleplus">Mark Hill on Google+</a>-->
                </div>
                
                <div class="col-1">
                    <a class="locations" href="<?php bloginfo('url'); ?>/products"><img class="footer-img" src="<?php bloginfo( 'template_directory' ); ?>/_/img/markhill-locations.png" alt="Shop till you drop"></a>
                	<p>My Products are available in the above stores or you can <a class="buy-online" href="<?php bloginfo('url'); ?>/products">buy online</a> in the UK &amp; US.</p>
                </div>
                
            
				<p class="copyright"><small>Mark Hill Hair Cosmetics Limited, Ferry Road, Howden, East Yorkshire, UK, DN14 7UW<br>&copy; <?php echo date("Y"); echo " "; bloginfo('name'); ?>. All Rights Reserved. <a href="<?php bloginfo('url'); ?>/terms">Terms & Conditions</a> | <a href="<?php bloginfo('url'); ?>/privacy">Privacy Policy</a></small></p>
			</div>
		</footer>


	<?php wp_footer(); ?>


<script src="<?php bloginfo( 'template_directory' ); ?>/_/js/jquery.fancybox-1.3.4.pack.js" type="text/javascript"></script>
<script src="<?php bloginfo('template_directory'); ?>/_/js/functions.js"></script>


<?php if (is_page_template('page-productpage.php')) { ?>
<!-- Facebook comments on Product Pages -->
<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/en_GB/all.js#xfbml=1";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>

<!-- Twitter script -->
<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+'://platform.twitter.com/widgets.js';fjs.parentNode.insertBefore(js,fjs);}}(document, 'script', 'twitter-wjs');</script>

<!-- Pinterest Script -->
<script type="text/javascript">
(function(d){
  var f = d.getElementsByTagName('SCRIPT')[0], p = d.createElement('SCRIPT');
  p.type = 'text/javascript';
  p.async = true;
  p.src = '//assets.pinterest.com/js/pinit.js';
  f.parentNode.insertBefore(p, f);
}(document));
</script>

<!-- Google+ Script -->
<script type="text/javascript">
  window.___gcfg = {lang: 'en-GB'};

  (function() {
    var po = document.createElement('script'); po.type = 'text/javascript'; po.async = true;
    po.src = 'https://apis.google.com/js/plusone.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(po, s);
  })();
</script>

<?php } ?>

<?php if (is_single()) { ?>
<!-- Facebook comments on Product Pages -->
<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/en_GB/all.js#xfbml=1";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>

<!-- Twitter script -->
<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+'://platform.twitter.com/widgets.js';fjs.parentNode.insertBefore(js,fjs);}}(document, 'script', 'twitter-wjs');</script>

<!-- Pinterest Script -->
<script type="text/javascript">
(function(d){
  var f = d.getElementsByTagName('SCRIPT')[0], p = d.createElement('SCRIPT');
  p.type = 'text/javascript';
  p.async = true;
  p.src = '//assets.pinterest.com/js/pinit.js';
  f.parentNode.insertBefore(p, f);
}(document));
</script>

<!-- Google+ Script -->
<script type="text/javascript">
  window.___gcfg = {lang: 'en-GB'};

  (function() {
    var po = document.createElement('script'); po.type = 'text/javascript'; po.async = true;
    po.src = 'https://apis.google.com/js/plusone.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(po, s);
  })();
</script>

<?php } ?>

<!-- 	 
<script>

  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-XXXXXX-XX']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();

</script>
-->
	
</body>

</html>
