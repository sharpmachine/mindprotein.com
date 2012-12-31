<?php 
/*
	Template Name: Blog2
*/
get_header(); ?>

<div class="entireBlog">
	<div class="container">
		<div class="row">
			<div class="span9" id="rightShadow">
					<div class="row sticky-post">

						<div class="span6 trendingRN">
							<img src="<?php bloginfo('template_directory');?>/img/trendingRightNow.png" />
							<h2>Business Development 101: Hiring Development</h2>
							<div class="author-date">
								By <span class="author">Ralph Plumb</span>, October 1, 2012
							</div>
							<div class="socialMedia">
								Social Media Icons
							</div>
							<div class="blog-content">
								Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud. 
								<span class="author">Read More >></span>
							</div>
						</div><!-- .sticky-post -->

						<div class="span3 pcd">
							<h3>Popular Community Discussions</h3>
							<div class="graySpace"></div>
							<div class="discuss-list">
								<ol>
									<li><span>Development 101: Hiring a Designer</span></li>
									<li><span>Development 101: Hiring a Designer</span></li>
									<li><span>Development 101: Hiring a Designer</span></li>
									<li><span>Development 101: Hiring a Designer</span></li>
									<li><span>Development 101: Hiring a Designer</span></li>
								</ol>
								<a class="btn btn-primary btn-large">Join the Discussion | ></a>
							</div>
						</div><!-- .pcd -->
				
					</div>
					<div class="row blogTwo">

						<div class="span9">
							<h2>Startups Shouldn’t Ignore Social Media</h2>
							<div class="author-date">
								By <span>Ralph Plumb</span>, October 1, 2012</div>
						</div>

					</div>
					<div class="row">
						
						<div class="span3">
							<img src="<?php bloginfo('template_directory');?>/img/blogPicture.png">
						</div>
						<div class="span4 blog-content">
							Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud.
							<span>Read more >></span>
						</div>
						<div class="span2">
							Social
						</div>

					</div>
					<div class="row">

						<div class="span9">
							<img src="<?php bloginfo('template_directory');?>/img/blogShadow.png" />
						</div>

					</div>
			</div>
			<div class="span3" id="side-bar">
				
				<?php get_sidebar(); ?>

			</div>
		</div>
	</div>
</div>

<?php get_footer(); ?>