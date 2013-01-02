<?php get_header(); ?>

	<section id="page">

		<div class="singlePost">
			<div class="container">
				<div class="row">
					<div class="span9 rightShadow">
						<?php get_template_part( 'loop', 'single' ); ?>
					</div>
					<?php get_sidebar(); ?>
				</div>
			</div>
		</div>

	</section><!-- #page -->


<?php get_footer(); ?>
