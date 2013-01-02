<?php
/**
 * The loop that displays a single post.
 *
 * The loop displays the posts and the post content.  See
 * http://codex.wordpress.org/The_Loop to understand it and
 * http://codex.wordpress.org/Template_Tags to understand
 * the tags used in it.
 *
 * This can be overridden in child themes with loop-single.php.
 *
 */
?>

<!-- Facebook Like JavaScript SDK -->
<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/en_US/all.js#xfbml=1";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>
<!-- End Facebook Like JavaScript SDK -->

<div class="loopOne">

	<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>

	<div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
		<h1 class="entry-title"><?php the_title(); ?></h1>
		<div class="entry-meta">
			<?php smm_posted_on(); ?>
		</div><!-- .entry-meta -->
		<div class="span3 pull-right">
			<div class="socialMedia">
				<div class="shareThis">Share This Story</div>
				<div class="facebook">
					<div class="fb-like" data-href="<?php the_permalink(); ?>" data-send="false" data-width="100%" data-show-faces="false"></div>
				</div>
					<?php if( function_exists( do_sociable() ) ){ do_sociable(); } ?>
			</div>
			<?php the_post_thumbnail(array(270, 230)); ?>
		</div>

		<div class="entry-content">
			<?php the_content(); ?>
			<?php wp_link_pages( array( 'before' => '<div class="page-link">' . __( 'Pages:', 'smm' ), 'after' => '</div>' ) ); ?>
		</div><!-- .entry-content -->

		<div id="entry-author-info">
			<div id="author-description">
				<h2>Ralph Plumb, Founder, MindProtein.com</h2>
				<img src="<?php bloginfo('template_directory');?>/img/ralphPlumb.png" />
				Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. 
				<div id="author-link">
					Connect with Ralph: 
					<a href="https://www.facebook.com/MindProtein"><img src="<?php bloginfo('template_directory');?>/img/facebookIcon.png" /></a>
					<a href="https://twitter.com/mindprotein"><img src="<?php bloginfo('template_directory');?>/img/twitterIcon.png" /></a>
					<a href="http://us.linkedin.com/company/mindprotein.com"><img src="<?php bloginfo('template_directory');?>/img/linkedinIcon.png" /></a>
				</div><!-- #author-link	-->
			</div><!-- #author-description -->
			<div class="clearfix"></div>
		</div><!-- #entry-author-info -->

	</div><!-- #post-## -->
							 <div class="clearfix"></div>
							<?php comments_template( '', true ); ?>

			<?php endwhile; // end of the loop. ?>

</div>
