<?php 
/*
	Template Name: Blog
*/
get_header(); ?>

<div class="entireBlog">
	<div class="container">
		<div class="row">
			<div class="span9" id="rightShadow">
				<div class="row sticky-post">
					<?php $featured_query = new WP_Query('showposts=1&orderby=comment_count');
						while ($featured_query->have_posts()) : $featured_query->the_post();
						$do_not_duplicate[] = $post->ID 
						 ?>
							<div class="span6 trendingRN">
								<div class="trending-thumb">
									<h4>Trending Right Now</h4>
									<?php the_post_thumbnail('trending'); ?>
								</div>
								
								<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
								<div class="author-date">By <span><?php the_author_posts_link(); ?></span>, <?php echo get_the_date(); ?></div>
								
								<div class="blog-content">
									<div class="social-media">
										<?php if( function_exists( do_sociable() ) ){ do_sociable(); } ?>
									</div>
									<?php the_excerpt(); ?>
								</div>
							</div><!-- .sticky-post -->
						 <?php endwhile; ?>
						<div class="span3 pcd hidden-tablet hidden-phone">
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
								<div class="btn-group">
									<a class="btn btn-primary btn-large">Join the Discussion</a>
									<a class="btn btn-primary btn-large">></a>
								</div>
							</div>
						</div><!-- .pcd -->
					</div>
					
					<div class="blog-posts">
					<?php query_posts('showposts=-1'); ?>
					<?php while (have_posts()) : the_post();
					if (in_array ($post->ID, $do_not_duplicate)) continue;
					update_post_caches($post);
					 ?>
						<div class="post-block">
							<div class="row">
								<div class="span9 post-block-title">
									<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
									<div>By <span><?php the_author_posts_link(); ?></span>, <?php echo get_the_date(); ?></div>
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
					</div>
			</div>
				<?php get_sidebar(); ?>
		</div>
	</div>
</div>

<?php get_footer(); ?>