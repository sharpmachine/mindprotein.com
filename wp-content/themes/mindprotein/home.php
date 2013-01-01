<?php get_header(); ?>

<div class="section-one">
	<div class="container">
		<div class="row" >
			<div class="span12" id="mcts1">
		       	<?php if(get_field('hero_unit_banners','option')): ?>
					<?php while (has_sub_field('hero_unit_banners','option')): ?>
						<div class="each">	
							<img src="<?php the_sub_field('hero_banner_image','option') ?>" alt="">
							<div class="slider-content">
								<?php the_sub_field('hero_caption','option') ?>
							</div><!-- .content -->
						 </div><!-- .each -->
			      	<?php endwhile; ?>
				<?php endif; ?>
			</div><!-- #mcts1 -->
		</div>
	</div>
</div>

<div class="second-section">
	<div class="container">
		<div class="row">
			<div class="span4 pad">
				<img src="<?php bloginfo('template_directory'); ?>/img/about-us.png">
				<h2>About Us</h2>
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
				<div class="btn-group">
					<a href="<?php bloginfo('url'); ?>/about" class="btn btn-primary btn-small">More</a>
					<a href="<?php bloginfo('url'); ?>/about" class="btn btn-primary btn-small">></a>
				</div>
			</div>
			<div class="span4 pad">
				<img src="<?php bloginfo('template_directory'); ?>/img/community.png">
				<h2>Community</h2>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
				<div class="btn-group">
					<a href="<?php bloginfo('url'); ?>/community" class="btn btn-primary btn-small">More</a>
					<a href="<?php bloginfo('url'); ?>/community" class="btn btn-primary btn-small">></a>
				</div>
			</div>
			<div class="span4">
				<img src="<?php bloginfo('template_directory'); ?>/img/coaching.png">
				<h2>Coaching</h2>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
				<div class="btn-group">
					<a href="<?php bloginfo('url'); ?>/coaching" class="btn btn-primary btn-small">More</a>
					<a href="<?php bloginfo('url'); ?>/coaching" class="btn btn-primary btn-small">></a>
				</div>
			</div>
		</div>
	</div>
</div>

<div class="third-section">
	<div class="container">
		<div class="row third-first">
			<div class="span5">
				<h2>Case Studies</h2>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enicom ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat</p>
				
				<div class="btn-group">
					<a href="<?php bloginfo('url'); ?>/case-studies" class="btn btn-primary btn-medium">View All Case Studies</a>
					<a href="<?php bloginfo('url'); ?>/case-studies" class="btn btn-primary btn-medium">></a>
				</div>
				<div class="btn-group">
					<a href="<?php bloginfo('url'); ?>/case-studies" class="btn btn-primary btn-medium">Discuss Case Studies</a>
					<a href="<?php bloginfo('url'); ?>/case-studies" class="btn btn-primary btn-medium">></a>
				</div>
			</div>
			
			<div class="span7">
				<div class="video-container">
					<div id="video-player">
						<div id="video">
							<script type="text/javascript" src="http://s3.amazonaws.com/Fortunebuilders/jwmediaplayer/mediaplayer-57-licensed/swfobject.js"></script>

							<script type='text/javascript'>
							var so = new SWFObject('http://s3.amazonaws.com/Fortunebuilders/jwmediaplayer/mediaplayer-57-licensed/player.swf','mpl','460','255','9');
							  so.addParam('allowfullscreen','false');
							  so.addParam('allowscriptaccess','always');
							  so.addParam('wmode','opaque');
							  so.addVariable('file','<?php the_field("video_url", "option"); ?>');
							     so.addVariable('skin','http://s3.amazonaws.com/Fortunebuilders/jwmediaplayer/mediaplayer-57-licensed/glow.zip');
							  so.addVariable('autostart','false');
							  so.write('video');
							</script>

						</div>
					</div>
					<div class="video-thumbs">
						<a href="<?php bloginfo('url'); ?>/case-studies">
							<img src="<?php bloginfo('template_directory'); ?>/img/video-thumb1.jpg" alt="Thumbnail" width="135" height="75">
						</a>
						<a href="<?php bloginfo('url'); ?>/case-studies">
							<img src="<?php bloginfo('template_directory'); ?>/img/video-thumb2.jpg" alt="Thumbnail" width="135" height="75">
						</a>
						<a href="<?php bloginfo('url'); ?>/case-studies">
							<img src="<?php bloginfo('template_directory'); ?>/img/video-thumb3.jpg" alt="Thumbnail" width="135" height="75">
						</a>
					</div>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="span1">
				<img src="<?php bloginfo('template_directory'); ?>/img/twitter-icon.png">
			</div>
			<div class="span11">
				<div id="tweet"></div>
			</div>
		</div>
	</div>
</div>

<div class="fourth-section">
	<div class="container">
		<div class="row">
			<div class="span12">
				<div class="row">
					<div class="span9">
							
							<?php $featured_query = new WP_Query('showposts=1');
								while ($featured_query->have_posts()) : $featured_query->the_post();
								$do_not_duplicate[] = $post->ID 
								 ?>
						<div class="post-block">
							<div class="row">
								<div class="span9 space9">
									<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
									<div>By <span><?php the_author_posts_link(); ?></span>, <?php the_date(); ?></div>
								</div>
							</div>
							<div class="row lastest-post">
								<div class="span3 post-thumb">
									<?php the_post_thumbnail(array(270, 230)); ?>
								</div>
								<div class="span4">
									<?php the_excerpt(); ?>
								</div>
								<div class="span2 socialMedia">
									<?php if( function_exists( do_sociable() ) ){ do_sociable(); } ?>
								</div>
							</div>
						</div><!-- .post-block -->
						<?php endwhile; ?>
						
						<div class="row small-articles">
							<?php query_posts('showposts=5'); ?>
							<?php while (have_posts()) : the_post();
							if (in_array ($post->ID, $do_not_duplicate)) continue;
							update_post_caches($post);
							 ?>
							 <div class="small-article">
								<div class="small-post-thumb">	
									<?php the_post_thumbnail(array(100, 85)); ?>
								</div>
								<div class="small-article-title">
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
							<?php endwhile; ?>
						</div>
					</div>

					<div class="span3 side-bar">
						<?php get_sidebar(); ?>
					</div>

				</div>
			</div>
		</div>
	</div>
</div>

<?php get_footer(); ?>
