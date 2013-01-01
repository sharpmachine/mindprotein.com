<div id="sidebar" class="span3">

	<ul class="unstyled">

			<li id="search" class="widget-container widget_search">
				<?php get_template_part('searchform'); ?>
			</li>

	<hr class="style-two">
	
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

	<hr class="style-two">
	<?php if ( ! dynamic_sidebar( 'primary-widget-area' ) ) : ?>
	<?php endif; // end primary widget area ?>
</ul>

<h3>Todays Top Articles</h3>
<?php query_posts('sortby=comment_count&showposts=2'); ?>
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
<div class="tiny-article">
	<div class="tiny-post-thumb">	
		<?php the_post_thumbnail(array(69, 38)); ?>
	</div>
	<div class="tiny-article-title">
		<h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
		<div class="sm-counter">
		 <?php $permalink = get_post_permalink(); ?>
			<span class="likes"><?php echo get_tweets($permalink); ?></span>
			<span class="retweets">
				<?php echo get_likes($permalink); ?>
			</span>
		</div>
	</div>
</div>
<?php endwhile; endif; ?>
</div><!-- #primary .widget-area -->

</div><!-- #sidebar -->