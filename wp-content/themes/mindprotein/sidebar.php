<div id="sidebar" class="span3">

	<ul class="unstyled">

			<li id="search" class="widget-container widget_search hidden-tablet">
				<?php get_template_part('searchform'); ?>
			</li>

	<hr class="style-two hidden-tablet">
	
	<ul class="list6 clearfix">
		<li class="css3 clearfix">
			<a href="/feed" target="_blank">
				<img src="<?php bloginfo('template_directory'); ?>/img/feed-sb.jpeg" alt="rss"/>
		 <?php echo stcounter('feedburner') ?> </a>
			<small>Subscribers</small>
		</li>
		<li class="css3 alt clearfix">
			<a href="http://twitter.com/mindprotein" target="_blank">
				<img src="<?php bloginfo('template_directory'); ?>/img/twitter-sb.jpeg" alt="twitter"/>
		 <?php echo stcounter('twitter') ?> </a>
			<small>Followers</small>
		</li>
		<li class="css3 clearfix">
			<a href="http://www.facebook.com/mindprotein" target="_blank">
				<img src="<?php bloginfo('template_directory'); ?>/img/facebook-sb.jpeg" alt="facebook"/>
		<?php echo stcounter('facebook') ?> </a>
			<small>Fans</small>
		</li>
		<li class="css3 alt clearfix">
			<a href="https://plus.google.com/111012532066471691073/posts" target="_blank">
				<img src="<?php bloginfo('template_directory'); ?>/img/gplus-sb.jpeg" alt="google"/>
		<?php // Initiate the class
			$social = new socialCounter('http://mindprotein.com/');

			// Display all the stats for the URL
			echo $social->getPlusOne(); ?></a>
			<small>Public +1's</small>
		</li>
	</ul>

	<hr class="style-two hidden-tablet">

	
		<?php wp_reset_query(); ?>
		<?php if (is_front_page()): ?>
			<?php dynamic_sidebar( 'primary-widget-area' ); ?> 
		<?php endif; ?>

		
		<?php wp_reset_query(); ?>
		<?php if ( ! is_front_page() ): ?>
		<div class="articleCategories widget_execphp">
			<?php dynamic_sidebar( 'secondary-widget-area' ); ?>
		</div> 
		<?php endif; ?>
		

		<?php if(is_single()): ?>
			<?php dynamic_sidebar( 'blog-post-widget-area' ); ?> 
		<?php endif; ?>

</ul>
</div><!-- #primary .widget-area -->

</div><!-- #sidebar -->