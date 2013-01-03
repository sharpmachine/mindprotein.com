    
		<footer>
			<div class="container">
				<div class="row footer-top">
					<div class="span7 footer-menu">
						<?php wp_nav_menu( array( 'theme_location' => 'footer', 'container' => false, 'menu_class' => 'nav-footer' ) ); ?>
					</div>
					<div class="span5 contact-deets pull-right">
						<a href="mailto:support@mindprotein.com">support@mindprotein.com</a> | 877-251-1586
					</div>
				</div>
				<div class="row footer-bottom">
					<div class="span6 copyright">
						&copy; Copyright <?php echo date ('Y'); ?>. <a href="<?php echo home_url( '/' ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?>.</a>
					</div>
					<div class="span6 addy pull-right">
						960 Grand Ave. San Diego, CA 97006
					</div>
				</div>
			</div>
		</footer>

    <!-- Le javascript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
	<script src="<?php bloginfo ('template_directory'); ?>/js/plugins-ck.js"></script>
	<script src="<?php bloginfo ('template_directory'); ?>/js/script-ck.js"></script>

<?php wp_footer(); ?>
	</body>
</html>