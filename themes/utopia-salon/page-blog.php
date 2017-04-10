<?php
/*
Template Name: Blog List
*/

/*
 * @package WordPress
 * @subpackage Utopia_Salon
 * @since Utopia_Salon 1.0
*/
get_header();
?>


<section class="row content blog">
	<div class="columns small-12">

		<h1>Blog</h1><br>

		<article>

			<?php // Display blog posts on any page @ http://m0n.co/l
			$temp = $wp_query; $wp_query= null;
			$wp_query = new WP_Query(); $wp_query->query('showposts=5' . '&paged='.$paged);
			while ($wp_query->have_posts()) : $wp_query->the_post(); ?>

			<h4><a href="<?php the_permalink(); ?>" title="Read more"><?php the_title(); ?></a></h4>
			<?php the_excerpt(); ?>
			<br>

			<?php endwhile; ?>

			<?php if ($paged > 1) { ?>

			<nav id="nav-posts" class="row">
				<div class="columns small-6 prev"><?php next_posts_link('&laquo; Older Posts'); ?></div>
				<div class="columns small-6 next text-right"><?php previous_posts_link('Newer Posts &raquo;'); ?></div>
			</nav>

			<?php } else { ?>

			<nav id="nav-posts" class="row">
				<div class="columns small-6 prev"><?php next_posts_link('&laquo; Older Posts'); ?></div>
			</nav>

			<?php } ?>

			<?php wp_reset_postdata(); ?>

		</article>

	</div>
</section>

<?php get_footer(); ?>