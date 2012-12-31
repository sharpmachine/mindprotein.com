<?php get_header(); ?>

<article id="bg-image">

<div class="caseStudiesOne">
	<div class="container">
		<div class="row">
			<div class="span12">
				<h2>Case Studies</h2>
				 Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
			</div>	
		</div>
	</div>
</div>

<div class="caseStudiesTwo">
	<div class="container">
		<div class="row">
			<div class="span3">
				<a class="btn btn-primary btn-large right-mar">
					<img src="<?php bloginfo('template_directory'); ?>/img/casestudiesAffiliateMarketingIcon.png"><br/>
					Affiliate Marketing
				</a>
				<img class="littleShadows" src="<?php bloginfo('template_directory'); ?>/img/coachingShadowS2.png">
			</div>
			<div class="span3">
				<a class="btn btn-primary btn-large right-pad">
					<img src="<?php bloginfo('template_directory'); ?>/img/casestudiesPublisherIcon.png"><br/>
					Publishing
				</a>
				<img class="littleShadows" src="<?php bloginfo('template_directory'); ?>/img/coachingShadowS2.png">
			</div>
			<div class="span3">
				<a class="btn btn-primary btn-large right-pad">
					<img src="<?php bloginfo('template_directory'); ?>/img/casestudiesInformationIcon.png"> <br/>
					Information
				</a>
				<img class="littleShadows" src="<?php bloginfo('template_directory'); ?>/img/coachingShadowS2.png">
			</div>
			<div class="span3">
				<a class="btn btn-primary btn-large">
					<img src="<?php bloginfo('template_directory'); ?>/img/casestudiesBusinessOwnersIcon.png"><br/>
					Business Owners
				</a>
				<img class="littleShadows" src="<?php bloginfo('template_directory'); ?>/img/coachingShadowS2.png">
			</div>
		</div>
	</div>
</div>
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
<!-- post -->

<div class="caseStudiesThree">
	<div class="container shadowContainer">
		<div class="row">
			<div class="span12">
				<div class="video">
					<div id="video3">
						<script type="text/javascript" src="http://s3.amazonaws.com/Fortunebuilders/jwmediaplayer/mediaplayer-57-licensed/swfobject.js"></script>

						<script type='text/javascript'>
						var so = new SWFObject('http://s3.amazonaws.com/Fortunebuilders/jwmediaplayer/mediaplayer-57-licensed/player.swf','mpl','425','237','9');
						  so.addParam('allowfullscreen','false');
						  so.addParam('allowscriptaccess','always');
						  so.addParam('wmode','opaque');
						  so.addVariable('file','<?php the_field("cs_video_url"); ?>');
						     so.addVariable('skin','http://s3.amazonaws.com/Fortunebuilders/jwmediaplayer/mediaplayer-57-licensed/glow.zip');
						  so.addVariable('autostart','true');
						  so.write('video3');
						</script>
					</div>
					<img src="<?php bloginfo('template_directory'); ?>/img/casestudiesVideoShadow.png" />
				</div>
				<h2><?php the_title(); ?>,</h2>
			  <h3><?php the_field('cs_business') ?></h3>
			  <div class="font-sub-heading"><?php the_field('cs_description') ?></div>
			  <div class="pad-text">
				  <img class="pull-left" src="<?php bloginfo('template_directory'); ?>/img/theGymnasticsCoach.png">
				  <?php the_content(); ?>
				  <span>
				  <img class="fullWidthShadow" src="<?php bloginfo('template_directory'); ?>/img/casestudiesPageShadow.png">
					</span>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="span6 mainWebSite">
				<img src="<?php bloginfo('template_directory');?>/img/theGymnasticsCoach_com.png" alt="">
				<span class="siteLinks">
					Main Web Site
				</span>
				<a href="http://thegymnasticscoach.com/">thegymnasticscoach.com</a>
			</div>
			<div class="span6 membershipTS">
				<img src="<?php bloginfo('template_directory');?>/img/twistarsCamp.png" alt="">
				<span class="siteLinks">
					Membership Training Site
				</span>
				<a href="http://twistarscamp.com/">twistarscamp.com</a>
			</div>
		</div>
		<div class="row">
			<div class="span6 membershipWS">
				<img src="<?php bloginfo('template_directory');?>/img/theGymansticCoachMembers.png" alt="">
				<span class="siteLinks">
					Membership Web Site
				</span>
				<a href="http://thegymnasticscoach.com/members/">thegymnasticscoach.com/members</a>
			</div>
			<div class="span6">
				
			</div>
		</div>
	</div>
</div>
<?php endwhile; ?>
<!-- post navigation -->
<?php else: ?>
<!-- no posts found -->
<?php endif; ?>

<?php get_template_part('client-testimonies'); ?>
</article>

<?php get_footer(); ?>
