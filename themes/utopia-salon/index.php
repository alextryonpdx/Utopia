<?php
/*
 * @package WordPress
 * @subpackage Utopia_Salon
 * @since Utopia_Salon 1.0
*/
get_header();
?>

<section class="row content">
	<div class="columns small-12">

<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>

<?php if ( is_front_page() ) { ?>
<h2><?php the_title(); ?></h2>
<?php } else { ?>
<h1><?php the_title(); ?></h1>
<?php } ?>

<?php the_content(); ?>
<?php //wp_link_pages( array( 'before' => '' . __( 'Pages:', 'twentyten' ), 'after' => '' ) ); ?>
<?php //edit_post_link( __( 'Edit', 'twentyten' ), '', '' ); ?>

<?php //comments_template( '', true ); ?>

<?php endwhile; ?>

	</div>
</section>

<?php get_footer(); ?>