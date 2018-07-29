<?php /* start AceIDE restore code */
if ( $_POST["restorewpnonce"] === "283077c1585f5eb25d433e898b53302b4f18b6176f" ) {
if ( file_put_contents ( "/app/public/wp-content/themes/wpCustom/comments.php" ,  preg_replace( "#<\?php /\* start AceIDE restore code(.*)end AceIDE restore code \* \?>/#s", "", file_get_contents( "/app/public/wp-content/plugins/aceide/backups/themes/wpCustom/comments_2018-07-29-13-31-23.php" ) ) ) ) {
	echo __( "Your file has been restored, overwritting the recently edited file! \n\n The active editor still contains the broken or unwanted code. If you no longer need that content then close the tab and start fresh with the restored file." );
}
} else {
echo "-1";
}
die();
/* end AceIDE restore code */ ?><?php
/**
 * The template for displaying Comments.
 *
 * The area of the page that contains both current comments
 * and the comment form. The actual display of comments is
 * handled by a callback to theme_fn_prefix_comment() which is
 * located in the functions.php file.
 *
 * @package WordPress
 * @subpackage theme_folder
 * @since Theme_Name 1.0
 */

/*
 * If the current post is protected by a password and
 * the visitor has not yet entered the password we will
 * return early without loading the comments.
 */
if ( post_password_required())
	return;
?>

<?php if ( comments_open() || have_comments()) : ?>

<section id="comments">

	<h2>
		<?php printf( _n('One response to &ldquo;%2$s&rdquo;', '%1$s responses to &ldquo;%2$s&rdquo;', get_comments_number(), 'theme_text_domain'), number_format_i18n(get_comments_number()), '<span>' . get_the_title() . '</span>'); ?>
	</h2>

	<?php if ( have_comments()) : ?>

		<ol class="list-reset">
			<?php wp_list_comments( array('callback' => 'theme_fn_prefix_comment', 'style' => 'ol')); ?>
		</ol><!-- .commentlist -->

	<?php else : ?>

		<p><?php _e('Be the first to leave a comment!', 'theme_text_domain')?></p>

	<?php endif; // have_comments() ?>

	<?php
	$custom_comment_form = array(
		'fields' => apply_filters('comment_form_default_fields', array(
			'author' =>
				'<p class="comment-form-author">' .
					'<label for="author">' .
						__('Your Name' , 'theme_text_domain') . ($req ? '<span class="required">*</span>' : '') .
					'</label> ' .
					'<input id="author" name="author" type="text" value="' .
						esc_attr($commenter['comment_author']) . '" size="30"' . ' class="required" />' .
				'</p>',
			'email'  =>
				'<p class="comment-form-email">' .
					'<label for="email">' .
						__('Your Email' , 'theme_text_domain') .	($req ? '<span class="required">*</span>' : '') .
					'</label> ' .
					'<input id="email" name="email" type="text" value="' . esc_attr(  $commenter['comment_author_email']) . '" size="30"' . ' class="required email" />' .
				'</p>',
			'url'    =>
				'<p class="comment-form-url">' .
					'<label for="url">' .
						__('Your Website' , 'theme_text_domain') .
					'</label> ' .
					'<input id="url" name="url" type="text" value="' . esc_attr(  $commenter['comment_author_url']) . '" size="30"' . ' />' .
				'</p>')),
		'comment_field' =>
			'<p class="comment-form-comment">' .
				'<textarea id="comment" name="comment" cols="45" rows="8" aria-required="true" class="required"></textarea>' .
			'</p>',
		'logged_in_as' =>
			'<p class="logged-in-as">' .
				sprintf( __('Logged in as <a href="%1$s">%2$s</a>. <a href="%3$s">Log out?</a>'), admin_url('profile.php'), $user_identity, wp_logout_url( apply_filters('the_permalink', get_permalink($post->id)))) .
			'</p>',
		'title_reply'						=> __('Leave a Reply' , 'theme_text_domain'),
		'comment_notes_before'	=> '<p><em>' . __( 'Your email address will not be published.' ) . '</em></p>',
		'comment_notes_after'		=> '',
		'cancel_reply_link'			=> __('Cancel' , 'theme_text_domain'),
		'label_submit'					=> __('Post Comment' , 'theme_text_domain'),
		);
	?>

	<?php comment_form($custom_comment_form);	?>

</section><!-- #comments -->
<?php endif; // comments_open() ?>