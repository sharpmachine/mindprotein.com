<?php get_header(); ?>

<article>

	<div class="section-one">
		<div class="container">
			<div class="row" >
				<div class="span12" id="mcts1">
			       	<?php if(get_field('hero_unit_banners','option')): ?>
						<?php while (has_sub_field('hero_unit_banners','option')): ?>
							<div class="each">	
								<img src="<?php the_sub_field('hero_banner_image','option') ?>" alt="">
								<div class="content">
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
					Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
					<div>
						<a class="btn btn-primary btn-small">
							More | >
						</a>
					</div>
				</div>
				<div class="span4 pad">
					<img src="<?php bloginfo('template_directory'); ?>/img/community.png">
					<h2>Community</h2>
						Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
					<div>
						<a class="btn btn-primary btn-small">
							More | >
						</a>
					</div>
				</div>
				<div class="span4">
					<img src="<?php bloginfo('template_directory'); ?>/img/coaching.png">
					<h2>Coaching</h2>
						Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
					<div>
						<a class="btn btn-primary btn-small">
							More | >
						</a>
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
						Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enicom ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
					<div>
						<a class="btn btn-primary btn-medium">
							View All Case Studies >
						</a>
						<a class="btn btn-primary btn-medium">
							Discuss Case Studies | >
						</a>
					</div>
				</div>
				<div class="span7">
					<div class="video-container">
						
					</div>
				</div>
			</div>
			<div class="row">
				<div class="span1">
					<img src="<?php bloginfo('template_directory'); ?>/img/twitter-icon.png">
				</div>
				<div class="span11">
					Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. 
					<span>bit.ly/dfiauhsdf78</span>
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
							<div class="row">
								<div class="span9 space9">
									<h2>Business Developement 101: Hiring a Designer</h2>
									<div>By <span>Ralph Plumb</span>, October 1, 2012</div>
								</div>
							</div>
							<div class="row margin22">
								<div class="span3">
									<img src="<?php bloginfo('template_directory'); ?>/img/finger-typing-lg.png">
								</div>
								<div class="span4">
									Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea com- modo consequat. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. 
									<span>Read more >></span>
								</div>
								<div class="span2">
									Social
								</div>
							</div>
							<div class="row bottom-border spacing-articles">
								<div class="span1">	
									<img src="<?php bloginfo('template_directory'); ?>/img/finger-typing-sm2.png">
								</div>
								<div class="span3">
									<h3>Why Startups Shouldn’t Ignore Social Media</h3>
									<div>Like / Tweet</div>
								</div>
								<div class="span1">
								</div>
								<div class="span1">
									<img src="<?php bloginfo('template_directory'); ?>/img/finger-typing-sm2.png">
								</div>
								<div class="span3">
									<h3>Why Startups Shouldn’t Ignore Social Media</h3>
									<div>Like / Tweet</div>
								</div>
							</div>
							<div class="row spacing-articles">
								<div class="span1">	
									<img src="<?php bloginfo('template_directory'); ?>/img/finger-typing-sm2.png">
								</div>
								<div class="span3">
									<h3>Why Startups Shouldn’t Ignore Social Media</h3>
									<div>Like / Tweet</div>
								</div>
								<div class="span1">
								</div>
								<div class="span1">
									<img src="<?php bloginfo('template_directory'); ?>/img/finger-typing-sm2.png">
								</div>
								<div class="span3">
									<h3>Why Startups Shouldn’t Ignore Social Media</h3>
									<div>Like / Tweet</div>
								</div>
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

</article>


<?php get_footer(); ?>
