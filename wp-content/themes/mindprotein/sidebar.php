<div id="sidebar" class="span3">

	<ul class="unstyled">

		

			<li id="search" class="widget-container widget_search">
				<?php get_template_part('searchform'); ?>
			</li>

		
	
	<hr class="style-two">
	
	<ul class="list6 clearfix">
		<li class="css3 clearfix">
			<a href="/feed" target="_blank">
				<img src="http://wphub.terranmarketing.netdna-cdn.com/wp-content/themes/wphub/resources/images/theme/icons/rss-icon.jpg" alt="rss"/>
		 <?php echo stcounter('feedburner') ?> </a>
			<small>Subscribers</small>
		</li>
		<li class="css3 alt clearfix">
			<a href="http://twitter.com/mindprotein" target="_blank">
				<img src="http://wphub.terranmarketing.netdna-cdn.com/wp-content/themes/wphub/resources/images/theme/icons/twitter-icon.jpg" alt="twitter"/>
		 <?php echo stcounter('twitter') ?> </a>
			<small>Followers</small>
		</li>
		<li class="css3 clearfix">
			<a href="http://www.facebook.com/mindprotein" target="_blank">
				<img src="http://wphub.terranmarketing.netdna-cdn.com/wp-content/themes/wphub/resources/images/theme/icons/facebook-icon.jpg" alt="facebook"/>
		<?php echo stcounter('facebook') ?> </a>
			<small>Fans</small>
		</li>
		<li class="css3 alt clearfix">
			<a href="https://plus.google.com/111012532066471691073/posts" target="_blank">
				<img src="http://wphub.terranmarketing.netdna-cdn.com/wp-content/themes/wphub/resources/images/theme/icons/google-icon.jpg" alt="google"/>
		<?php // Initiate the class
			$social = new socialCounter('http://mindprotein.com/');

			// Display all the stats for the URL
			echo $social->getPlusOne(); ?></a>
			<small>Public +1's</small>
		</li>
	</ul>

	<hr class="style-two">
	<?php if ( ! dynamic_sidebar( 'primary-widget-area' ) ) : ?>
	<?php endif; // end primary widget area ?>
</ul>

</div><!-- #primary .widget-area -->

</div><!-- #sidebar -->