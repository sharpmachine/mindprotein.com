<?php get_header(); ?>

<section id="page">

<div class="searchPage">
	<div class="container">
		<div class="row">
			<div class="span9">

				<?php if ( have_posts() ) : ?>
				<h1 class="page-title"><?php printf( __( 'Search Results for: %s', 'smm' ), '<span>' . get_search_query() . '</span>' ); ?></h1>
				<?php get_template_part( 'loop', 'search' ); ?>
				<?php else : ?>
				<div id="post-0" class="post no-results not-found">
					<h2 class="entry-title"><?php _e( 'Nothing Found', 'smm' ); ?></h2>
					<div class="entry-content">
						<p><?php _e( 'Sorry, but nothing matched your search criteria. Please try again with some different keywords.', 'smm' ); ?></p>
						<?php get_search_form(); ?>
					</div><!-- .entry-content -->
				</div><!-- #post-0 -->
				<?php endif; ?>
				
			</div>
			<div class="span3">
				<?php get_sidebar(); ?>
			</div>
		</div>
	</div>
</div>



</section><!-- #page -->


<?php get_footer(); ?>
