<?php
/**
 * The template for displaying comments
 *
 * The area of the page that contains both current comments
 * and the comment form.
 *
 * @package WordPress
 * @subpackage Twenty_Fifteen
 * @since Twenty Fifteen 1.0
 */

/*
 * If the current post is protected by a password and
 * the visitor has not yet entered the password we will
 * return early without loading the comments.
 */
if ( post_password_required() ) {
	return;
}
?>

<div id="comments" class="comments-area">

	<?php if ( have_comments() ) : ?>
		<h4 class="comments-title">
			<?php
				printf( _nx( 'One comment on &ldquo;%2$s&rdquo;', '%1$s comments on &ldquo;%2$s&rdquo;', get_comments_number(), 'comments title', 'twentyfifteen' ),
					number_format_i18n( get_comments_number() ), get_the_title() );
			?>
		</h4>

		<?php twentyfifteen_comment_nav(); ?>

		<ol class="comment-list">
			<?php
				wp_list_comments( array(
					//'style'       => 'ol',
					'short_ping'  => true,
					//'avatar_size' => 56,
				) );
			?>
		</ol><!-- .comment-list -->

		<?php twentyfifteen_comment_nav(); ?>

	<?php endif; // have_comments() ?>

	<?php
		// If comments are closed and there are comments, let's leave a little note, shall we?
		if ( ! comments_open() && get_comments_number() && post_type_supports( get_post_type(), 'comments' ) ) :
	?>
		<p class="no-comments"><?php _e( 'Comments are closed.', 'twentyfifteen' ); ?></p>
	<?php endif; ?>

	<?php 
		$comment_args = array( 'fields' => apply_filters( 'comment_form_default_fields', array(
            'author' => '' .
                '<label for="author">' . __( 'Your Name:' ) . '</label> ' .
                ( $req ? '<span class="required">*</span>' : '' ) .
                '<input id="author" name="author" type="text" value="' .
                esc_attr( $commenter['comment_author'] ) . '" size="30" required' . $aria_req . ' />' .
                '<!-- #form-section-author .form-section -->',
            'email'  => '' .
                '<label for="email">' . __( 'Your Email:' ) . '</label> ' .
                ( $req ? '<span class="required">*</span>' : '' ) .
                '<input id="email" name="email" type="email" value="' . esc_attr(  $commenter['comment_author_email'] ) . '" size="30" required' . $aria_req . ' />' .
	            '<!-- #form-section-email .form-section -->',
            'url'    => '' ) ),
            'comment_field' => '' .
                '<label for="comment">' . __( 'Comment:' ) . '</label>' .
                '<textarea id="comment" name="comment" cols="45" rows="8" required aria-required="true"></textarea>' .
                '<!-- #form-section-comment .form-section -->',
            'comment_notes_after' => '',
            'class_submit' => 'button'
        );
        comment_form($comment_args);


//	comment_form(); ?>

</div><!-- .comments-area -->
