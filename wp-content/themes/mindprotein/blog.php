<?php 
/*
	Template Name: Blog
*/
get_header(); ?>

<article>
	
<div class="blog-one">
	<div class="container">
		<div class="row">
			<div class="span6">
				<img src="<?php bloginfo('template_directory');?>/img/trendingRightNow.png" />
				<h2>Business Development 101: Hiring Development</h2>
				<div class="author-date">
					By <span>Ralph Plumb</span>, October 1, 2012
				</div>
				<div class="social-media">
					
				</div>
				<div class="blog-content">
					Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud. 
					<span>Read More >></span>
				</div>
			</div>
			<div class="span3 discussions">
				<h3>Populare Community Discussions</h3>
				<div class="discuss-list">
					<ol>
						<li>Development 101: Hiring a Designer</li>
						<li>Development 101: Hiring a Designer</li>
						<li>Development 101: Hiring a Designer</li>
						<li>Development 101: Hiring a Designer</li>
						<li>Development 101: Hiring a Designer</li>
						<li>Development 101: Hiring a Designer</li>
					</ol>
					<a class="btn btn-primary btn-medium">Join the Discussion |></a>
				</div>
			</div>
			<div class="span3">
				<?php get_sidebar(); ?>
			</div>
		</div>
	</div>
</div>

<div class="blog-two">
	<div class="container">
		<div class="row">
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
				<div class="span12">
					<img src="<?php bloginfo('template_directory');?>/img/blogShadow.png" />
				</div>
			</div>
	</div>
</div>

</article>



<section id="page" class="span8">

	<?php get_template_part( 'loop', 'page' ); ?>
	<?php rewind_posts(); ?>
	<?php get_template_part( 'loop', 'blog' ); ?>	
		
</section><!-- #page -->
 

<?php get_footer(); ?>
