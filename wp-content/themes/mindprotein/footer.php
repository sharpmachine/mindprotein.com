    
		<footer>
			<div class="container">
				<div class="row footer-top">
					<div class="span5">
						<?php wp_nav_menu( array( 'theme_location' => 'footer', 'container' => false, 'menu_class' => 'nav-footer' ) ); ?>
					</div>
					<div class="span3 pull-right">
						<a href="mailto:support@mindprotein.com">support@mindprotein.com</a> | 877-251-1586
					</div>
				</div>
				<div class="row footer-bottom">
					<div class="span4">
						&copy; Copyright <?php echo date ('Y'); ?>. <a href="<?php echo home_url( '/' ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?>.</a>
					</div>
					<div class="span3 pull-right">
						960 Grand Ave. San Diego, CA 97006
					</div>
				</div>
			</div>
		</footer>

    <!-- Le javascript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="<?php bloginfo('template_directory'); ?>/js/bootstrap-transition.js"></script>
    <script src="<?php bloginfo('template_directory'); ?>/js/bootstrap-alert.js"></script>
    <script src="<?php bloginfo('template_directory'); ?>/js/bootstrap-modal.js"></script>
    <script src="<?php bloginfo('template_directory'); ?>/js/bootstrap-dropdown.js"></script>
    <script src="<?php bloginfo('template_directory'); ?>/js/bootstrap-scrollspy.js"></script>
    <script src="<?php bloginfo('template_directory'); ?>/js/bootstrap-tab.js"></script>
    <script src="<?php bloginfo('template_directory'); ?>/js/bootstrap-tooltip.js"></script>
    <script src="<?php bloginfo('template_directory'); ?>/js/bootstrap-popover.js"></script>
    <script src="<?php bloginfo('template_directory'); ?>/js/bootstrap-button.js"></script>
    <script src="<?php bloginfo('template_directory'); ?>/js/bootstrap-collapse.js"></script>
    <script src="<?php bloginfo('template_directory'); ?>/js/bootstrap-carousel.js"></script>
    <script src="<?php bloginfo('template_directory'); ?>/js/bootstrap-typeahead.js"></script>
    <script src="<?php bloginfo('template_directory'); ?>/js/slider.js"></script>
    <script src="<?php bloginfo('template_directory'); ?>/js/tweet.js"></script>

	<!-- scripts concatenated and minified via ant build script-->
	<script src="<?php bloginfo ('template_directory'); ?>/js/plugins.js"></script>
	<script src="<?php bloginfo ('template_directory'); ?>/js/script.js"></script>

	<!-- Remove these before deploying to production -->
	<script src="<?php bloginfo ('template_directory'); ?>/js/hashgrid.js" type="text/javascript"></script>

	<script type="text/javascript">
		(function($){
			$.fn.fblikecount = function(options){
				var defaults = {
					baseUrl: 'http://graph.facebook.com/?ids='
				};
				var options = $.extend(defaults, options);
				var count = 0;
				return this.each(function(){
					var $this = $(this);
					$this.hide();
					var objLink = $(this).attr('title');
					if(objLink.indexOf('http') === 0){
						$.getJSON(defaults.baseUrl + objLink + '&callback=?', function(json){
							if(json[objLink] && json[objLink].shares){
								$this.html(json[objLink].shares);
								$this.show();
							}
						});				
					}
				});
			}
		})(jQuery);
	</script>

	<script type="text/javascript">
		jQuery(document).ready(function($) {
			$('span.likebox').fblikecount();
		});
	</script>	

<?php wp_footer(); ?>
	</body>
</html>