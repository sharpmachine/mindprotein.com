<?php 
/*
	Template Name: Blog2
*/
get_header(); ?>

<h3>Recent Articles</h3>
<ul>
<?php
$temp = $wp_query;
$wp_query= null;
$wp_query = new WP_Query();
$wp_query->query('showposts=5'.'&paged='.$paged);
?>
<?php 
						$featured_query = new WP_Query('showposts=1&orderby=comment_count');
						while ($featured_query->have_posts()) : $featured_query->the_post();
						$do_not_duplicate[] = $post->ID 
						 ?>
	<li><a href="<?php the_permalink() ?>" rel="bookmark"><?php the_title(); ?></a></li>
<?php endwhile; ?>

					<?php while (have_posts()) : the_post();
					if (in_array ($post->ID, $do_not_duplicate)) continue;
					update_post_caches($post);
					 ?>
					 <li><a href="<?php the_permalink() ?>" rel="bookmark"><?php the_title(); ?></a></li>
<?php endwhile; ?>
</ul>



<?php if(function_exists('wp_paginate')) {
						    wp_paginate();
						} ?>
<?php $wp_query = null; $wp_query = $temp;?>
<?php get_footer(); ?>