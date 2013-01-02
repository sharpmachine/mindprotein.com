<div class="client-testimonies">
	<div class="container">
		<div class="row">
			<div class="span12">
				<h2>Client Testimonials</h2>
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco.</p>
			</div>
	
			<?php query_posts('post_type=client_testimonies&showposts=3&orderby=menu_order'); ?>
			<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
				<div class="span4 testimonial">
					<img src="<?php the_field('client_headshot') ?>" alt="">
					<h3><?php the_title(); ?></h3>
					<div class="subTitle"><?php the_field('company'); ?></div>
					<!-- <div class="left-quote"></div> -->
					<!-- <div class="testimony"> -->
						<blockquote><?php the_field('testimony') ?></blockquote>
					<!-- </div> -->
					<!-- <div class="right-quote"></div> -->
					
				</div>
			<?php endwhile; else: ?>
			<p>No testimonies at this time.</p>
			<?php endif; ?>
		</div>
	</div>
</div>