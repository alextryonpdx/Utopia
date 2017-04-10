<?
add_filter( 'show_admin_bar', '__return_false' );

// REMOVE WP EMOJI
remove_action('wp_head', 'print_emoji_detection_script', 7);
remove_action('wp_print_styles', 'print_emoji_styles');

remove_action( 'admin_print_scripts', 'print_emoji_detection_script' );
remove_action( 'admin_print_styles', 'print_emoji_styles' );

remove_action('wp_head', 'wp_generator');

function new_excerpt_more( $more ) {
	return '...&nbsp; <strong><a class="read-more" href="' . get_permalink( get_the_ID() ) . '">' . __( 'Read More >>', 'your-text-domain' ) . '</a></strong>';
}
add_filter( 'excerpt_more', 'new_excerpt_more' );


function load_jquery_cdn() {
	wp_deregister_script('jquery-core');
	wp_register_script( 'jquery-core', 'https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js', array(), null, false );
}
add_action( 'wp_enqueue_scripts', 'load_jquery_cdn' );


function twentyfifteen_comment_nav() {
	// Are there comments to navigate through?
	if ( get_comment_pages_count() > 1 && get_option( 'page_comments' ) ) :
	?>
	<nav class="navigation comment-navigation" role="navigation">
		<h2 class="screen-reader-text"><?php _e( 'Comment navigation', 'twentyfifteen' ); ?></h2>
		<div class="nav-links">
			<?php
				if ( $prev_link = get_previous_comments_link( __( 'Older Comments', 'twentyfifteen' ) ) ) :
					printf( '<div class="nav-previous">%s</div>', $prev_link );
				endif;

				if ( $next_link = get_next_comments_link( __( 'Newer Comments', 'twentyfifteen' ) ) ) :
					printf( '<div class="nav-next">%s</div>', $next_link );
				endif;
			?>
		</div><!-- .nav-links -->
	</nav><!-- .comment-navigation -->
	<?php
	endif;
}



?>