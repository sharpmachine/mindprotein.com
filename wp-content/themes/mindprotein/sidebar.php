<div id="sidebar" class="span3">

	<ul class="unstyled">

		<?php if ( ! dynamic_sidebar( 'primary-widget-area' ) ) : ?>

			<li id="search" class="widget-container widget_search">
				<?php get_template_part('searchform'); ?>
			</li>

		<?php endif; // end primary widget area ?>
	</ul>
	
	<hr class="style-two">
	
	<ul class="list6 clearfix">
		<li class="css3 clearfix">
			<a href="/feed" target="_blank">
				<img src="http://wphub.terranmarketing.netdna-cdn.com/wp-content/themes/wphub/resources/images/theme/icons/rss-icon.jpg" alt="rss"/>
		616 <?php diww_fb_sub_value('wphubcom'); ?> </a>
			<small>Subscribers</small>
		</li>
		<li class="css3 alt clearfix">
			<a href="http://twitter.com/wphub" target="_blank">
				<img src="http://wphub.terranmarketing.netdna-cdn.com/wp-content/themes/wphub/resources/images/theme/icons/twitter-icon.jpg" alt="twitter"/>
		2648 <?php diww_twitter_followers ('wphub'); ?> </a>
			<small>Followers</small>
		</li>
		<li class="css3 clearfix">
			<a href="http://www.facebook.com/wphubcom" target="_blank">
				<img src="http://wphub.terranmarketing.netdna-cdn.com/wp-content/themes/wphub/resources/images/theme/icons/facebook-icon.jpg" alt="facebook"/>
		1089 <?php diww_fb_fan_count ('133757063302440'); ?></a>
			<small>Fans</small>
		</li>
		<li class="css3 alt clearfix">
			<a href="http://plus.google.com/b/100314060360968565545/" target="_blank">
				<img src="http://wphub.terranmarketing.netdna-cdn.com/wp-content/themes/wphub/resources/images/theme/icons/google-icon.jpg" alt="google"/>
		136</a>
			<small>Public +1's</small>
		</li>
	</ul>

		<div class="sign-up ">
			
			<hr class="style-two">
			<h3>Sign Up for Our Newsletter</h3>
			<div>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</div>
			<form class="navbar-form">
			  <p><input type="text" class="span3" placeholder="your name"></p>
			  <p><input type="text" class="span3" placeholder="e-mail address"></p>
			  <p><button type="submit" class="btn btn-primary btn-medium pull-right">Submit</button></p>
			</form>
		</div>

</div><!-- #primary .widget-area -->

</div><!-- #sidebar -->