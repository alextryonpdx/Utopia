<?php
/*
 * @package WordPress
 * @subpackage Utopia_Salon
 * @since Utopia_Salon 1.0
*/
get_header();
?>

<section class="row content blog">
	<div class="columns small-12">

<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>

<?php if ( is_front_page() ) { ?>
<h2><?php the_title(); ?></h2>
<?php } else { ?>
<h1><span class="post-date">Posted <? echo the_date(); ?></span><?php the_title(); ?></h1><br>
<?php }

the_content();
the_tags( '<div class="tags">Tags: ', ', ', '</div>' );
comments_template();


endwhile; ?>

	</div>
</section>

<?php get_footer(); ?>