<?php
/**
 * The template for displaying comments
 *
 * This is the template that displays the area of the page that contains both the current comments
 * and the comment form.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package kinsley
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

<div id="comments" class="post-comments">

<?php
	// You can start editing here -- including this comment!
	if ( have_comments() ) :
?>

<!-- comments -->
<section class="knsl-mb-30">
	<div class="row">
		<div class="col-lg-12">
			<h3 class="knsl-mb-40"><?php comments_number( esc_html__( 'No comments found', 'kinsley' ), esc_html__( '1 Comment', 'kinsley' ), esc_html__( '% Comments', 'kinsley' ) ); ?></h3>
		</div>

		<div class="col-lg-12">

			<!-- comments -->
			<ul class="knsl-comments-list">
				<?php
				wp_list_comments( array(
					'style'	  => 'ul',
					'avatar_size' => '80',
					'callback' => 'kinsley_comment'
				) );
				?>
			</ul>

			<?php
			the_comments_navigation( array(
				'screen_reader_text' => ' ',
				'prev_text' => esc_html__( 'Older comments', 'kinsley' ),
				'next_text' => esc_html__( 'Newer comments', 'kinsley' )
			) );

			// If comments are closed and there are comments, let's leave a little note, shall we?
			if ( ! comments_open() ) :
				?>
				<p class="no-comments"><?php esc_html_e( 'Comments are closed.', 'kinsley' ); ?></p>
				<?php
			endif; ?>

		</div>
	</div>
</section>
<!-- comments end -->
<?php endif; // Check for have_comments(). ?>

<section class="form-comment knsl-scroll-animation<?php if ( comments_open() ) : ?> form-comment-open<?php endif; ?>">
		<?php
			$req = get_option( 'require_name_email' );
			$aria_req = ( $req ? " aria-required='true'" : '' );

			$comment_args = array(
				'title_reply' => esc_html__( 'Write a comment', 'kinsley' ),
				'title_reply_to' => esc_html__( 'Write a comment to %s', 'kinsley' ),
				'cancel_reply_link' => esc_html__( 'Cancel Reply', 'kinsley' ),
				'title_reply_before' => '<div class="comment-reply-title" id="reply-title"><h3 class="knsl-mb-40">',
				'title_reply_after' => '</h3></div>',
				'label_submit' => esc_html__( 'Submit', 'kinsley' ),
				'comment_field' => '<div class="form-comment-group"><textarea placeholder="' . esc_attr__( 'Comment', 'kinsley' ).'" id="comment" name="comment" aria-required="true" rows="6"></textarea></div>',
				'must_log_in' => '<p class="must-log-in">' . esc_html__( 'You must be ', 'kinsley' ) . '<a href="' . esc_url( wp_login_url( apply_filters( 'the_permalink', get_permalink( ) ) ) ) . '">' . esc_html__( 'logged in', 'kinsley' ) . '</a>' . esc_html__( ' to post a comment.', 'kinsley' ) . '</p>',
				'logged_in_as' => '<p class="logged-in-as">' . esc_html__( 'Logged in as ', 'kinsley' ) . '<a href="' . esc_url( admin_url( 'profile.php' ) ) . '">' . esc_html( $user_identity ) . '</a>' . esc_html__( '. ', 'kinsley' ) . '<a href="' . esc_url( wp_logout_url( apply_filters( 'the_permalink', get_permalink( ) ) ) ) . '" title="' . esc_attr__( 'Log out of this account', 'kinsley' ) . '">' . esc_html__( 'Log out?', 'kinsley' ) . '</a></p>',
				'comment_notes_before' => '',
				'comment_notes_after' => '',
				'fields' => apply_filters( 'comment_form_default_fields', array(
					'author' => '<div class="form-comment-group"><input id="author" name="author" type="text" placeholder="' . esc_attr__( 'Name', 'kinsley' ) . '" value="" ' . $aria_req . ' /></div>',
					'email' => '<div class="form-comment-group"><input id="email" name="email" type="text" placeholder="' . esc_attr__( 'Email', 'kinsley' ) . '" value="" ' . $aria_req . ' /></div>',
				)),
				'class_submit' => 'knsl-btn',
				'submit_field' => '<div class="form-comment-submit">%1$s %2$s</div>',
				'submit_button' => '<button type="submit" name="%1$s" id="%2$s" class="%3$s">%4$s</button>'
			);

			comment_form( $comment_args );
		?>
</section>

</div><!-- #comments -->
