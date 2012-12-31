<?php get_header(); ?>

		<section id="page">

			<div>
				<div class="container">
					<div class="row">
						<div class="span9">
							<?php get_template_part( 'loop', 'page' ); ?>
						</div>
						<div class="span3">
							<?php get_sidebar(); ?>
						</div>
					</div>
				</div>
			</div>

			
			
		</section><!-- #page -->


<?php get_footer(); ?>
