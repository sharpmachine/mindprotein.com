<?php get_header(); ?>

<section id="page">

	<div>
		<div class="container">
			<div class="row">
				<div class="span8 hidden-tablet hidden-phone">
					<?php get_template_part( 'loop', 'page' ); ?>
				</div>
				<div class="span12 visible-tablet visible-phone content-page">
					<?php get_template_part( 'loop', 'page' ); ?>
				</div>
				<div class="span3 content-page">
					<?php get_sidebar(); ?>
				</div>
			</div>
		</div>
	</div>
	
</section><!-- #page -->


<?php get_footer(); ?>
