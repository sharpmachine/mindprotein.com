<section id="sidebar">
	
		<ul class="unstyled">

		<?php
		/* When we call the dynamic_sidebar() function, it'll spit out
			* the widgets for that widget area. If it instead returns false,
			* then the sidebar simply doesn't exist, so we'll hard-code in
			* some default sidebar stuff just in case.
			*/
			if ( ! dynamic_sidebar( 'primary-widget-area' ) ) : ?>

			<li id="search" class="widget-container widget_search">
				<?php get_template_part('searchform'); ?>
			</li>

		<?php endif; // end primary widget area ?>
		</ul>

		<div class="sign-up ">
			<hr class="style-two">
			<hr class="style-two">
			<h3>Sign Up for Our Newsletter</h3>
			<div>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</div>
			<form class="navbar-form">
			  <p><input type="text" class="span3" placeholder="your name"></p>
			  <p><input type="text" class="span3" placeholder="e-mail address"></p>
			  <p><button type="submit" class="btn btn-primary btn-medium pull-right">Submit</button></p>
			</form>
		</div>

</div><!-- #primary .widget-area -->



	<?php
	// A second sidebar for widgets, just because.
		if ( is_active_sidebar( 'secondary-widget-area' ) ) : ?>

	<div id="secondary" class="widget-area" role="complementary">
		<ul class="xoxo">
			<?php dynamic_sidebar( 'secondary-widget-area' ); ?>
		</ul>
	</div><!-- #secondary .widget-area -->

	<?php endif; ?>


</section><!-- #sidebar -->