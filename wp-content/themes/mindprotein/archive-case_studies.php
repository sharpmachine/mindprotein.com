<?php get_header(); ?>

<article id="bg-image">

<div class="caseStudiesOne">
	<div class="container">
		<div class="row">
			<div class="span12">
				<?php query_posts('page_id=186'); ?>
				<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
					<?php the_content(); ?>
				<?php endwhile; endif; ?>
				<?php wp_reset_query(); ?>
			</div>	
		</div>
	</div>
</div>
<div class="caseStudiesTwo">
	<div class="container">
		<div class="row">
			<div class="span3 buttons">
				<a class="btn btn-primary btn-large right-mar">
					<img src="<?php bloginfo('template_directory'); ?>/img/casestudiesAffiliateMarketingIcon.png"><br/>
					Affiliate Marketing
				</a>
			</div>
			<div class="span3 buttons">
				<a class="btn btn-primary btn-large right-pad">
					<img src="<?php bloginfo('template_directory'); ?>/img/casestudiesPublisherIcon.png"><br/>
					Publishing
				</a>
			</div>
			<div class="span3 buttons">
				<a class="btn btn-primary btn-large right-pad">
					<img src="<?php bloginfo('template_directory'); ?>/img/casestudiesInformationIcon.png"> <br/>
					Information
				</a>
			</div>
			<div class="span3 buttons">
				<a class="btn btn-primary btn-large">
					<img src="<?php bloginfo('template_directory'); ?>/img/casestudiesBusinessOwnersIcon.png"><br/>
					Business Owners
				</a>
			</div>
		</div>
	</div>
</div>
<?php query_posts('orderby=menu_order&post_type=case_studies'); ?>
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

<div class="caseStudiesThree">
	<div class="container shadowContainer">
		<div class="row">
			<div class="span12">
				<div class="video">
					<div class="video-wrapper">

						<div class="video-contain">
							<div id="<?php echo the_ID(); ?>">
							
								<script type="text/javascript" src="http://s3.amazonaws.com/Fortunebuilders/jwmediaplayer/mediaplayer-57-licensed/swfobject.js"></script>

								<script type='text/javascript'>
								var so = new SWFObject('http://s3.amazonaws.com/Fortunebuilders/jwmediaplayer/mediaplayer-57-licensed/player.swf','mpl','405','225','9');
								  so.addParam('allowfullscreen','false');
								  so.addParam('allowscriptaccess','always');
								  so.addParam('wmode','opaque');
								  so.addVariable('file','<?php the_field("cs_video_url"); ?>');
								     so.addVariable('skin','http://s3.amazonaws.com/Fortunebuilders/jwmediaplayer/mediaplayer-57-licensed/glow.zip');
								  so.addVariable('autostart','false');
									  so.write('<?php echo the_ID(); ?>');
									</script>
									<!-- <img src="<?php bloginfo('template_directory'); ?>/img/casestudiesVideoShadow.png" /> -->
								</div>
								
						</div><!-- .video-contain -->
					</div><!-- .video-wrapper -->
					
				</div>
				<h2><?php the_title(); ?>,</h2>
			  <h3><?php the_field('cs_business') ?></h3>
			  <div class="font-sub-heading"><?php the_field('cs_description') ?></div>
			  <div class="pad-text">
				  <img class="pull-left" src="<?php the_field('cs_company_logo'); ?>" width="180">
				  <?php the_content(); ?>
				  	<span>
				  		<img class="fullWidthShadow" src="<?php bloginfo('template_directory'); ?>/img/casestudiesPageShadow.png">
					</span>
				</div>
			</div>
		</div>
		<div class="row website-roundup">
		
		<?php if(get_field('cs_websites')): ?>
			<?php while (has_sub_field('cs_websites')): ?>
				<div class="span6 websites">
					<img src="<?php the_sub_field('cs_website_screenshot') ?>" alt="<?php the_sub_field('cs_website_title') ?>" width="158" height="100">
					<div class="site-details">
						<div class="siteLinks"><?php the_sub_field('cs_website_title') ?></div>
						<a href="http://<?php the_sub_field('cs_website_url') ?>"><?php the_sub_field('cs_website_url') ?></a>
					</div><!-- .site-details -->
				</div><!-- .websites -->
		<?php endwhile; ?> 
		<?php endif; ?>
			
		</div>
	</div>
</div>

<?php endwhile; endif; ?>

<?php get_template_part('client-testimonies'); ?>
</article>

<?php get_footer(); ?>
