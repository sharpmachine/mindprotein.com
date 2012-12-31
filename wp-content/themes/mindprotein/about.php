<?php
/*
Template Name: About
*/
?>

<?php get_header(); ?>

<article>

<div class="aboutone">
	<div class="container">
		<div class="row">
			<div class="span12">
				<h1>About MindProtein</h1>
				<div>Our mission is to provide essential knowledge and information, empowering entrepreneurial success.</div>
			</div>
		</div>
	</div>
</div>

<div class="abouttwo">
	<div class="container">
		<div class="row pad48">
			<div class="span6">
			<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
				<?php the_content(); ?>
			<?php endwhile; endif; ?>
			</div>
			<div class="span6 darkbox"></div>
		</div>
		<div class="row">
			<div class="span12 dashedborder">
				<h2>Meet the MindProtein Team</h2>
			</div>
		</div>
		<div class="row">
			<div class="span12 meetteam">
				
			</div>
		</div>
		<div class="row">
			<div class="span12 blankspace">
				
			</div>
		</div>
	</div>
</div>
<?php get_template_part('client-testimonies'); ?>
</article>

<?php get_footer(); ?>
