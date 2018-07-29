<?php /* start AceIDE restore code */
if ( $_POST["restorewpnonce"] === "283077c1585f5eb25d433e898b53302bcf4bf6bbde" ) {
if ( file_put_contents ( "/app/public/wp-content/themes/wpCustom/single.php" ,  preg_replace( "#<\?php /\* start AceIDE restore code(.*)end AceIDE restore code \* \?>/#s", "", file_get_contents( "/app/public/wp-content/plugins/aceide/backups/themes/wpCustom/single_2018-07-29-11-11-58.php" ) ) ) ) {
	echo __( "Your file has been restored, overwritting the recently edited file! \n\n The active editor still contains the broken or unwanted code. If you no longer need that content then close the tab and start fresh with the restored file." );
}
} else {
echo "-1";
}
die();
/* end AceIDE restore code */ ?><?php
/**
 * The Template for displaying all single posts.
 *
 * @package WordPress
 * @subpackage theme_folder
 * @since Theme Na,e 1.0
 */

get_header(); ?>
<section class="blog-content">
<?php while ( have_posts()) : the_post(); ?>

	<?php get_template_part('content', get_post_type()); ?>

	<?php get_template_part('partials/pagination'); ?>

	<?php comments_template('', true); ?>

<?php endwhile; ?>

<?php get_sidebar(); ?>
</section>
<?php get_footer(); ?>
