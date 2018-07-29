<?php /* start AceIDE restore code */
if ( $_POST["restorewpnonce"] === "283077c1585f5eb25d433e898b53302b4f18b6176f" ) {
if ( file_put_contents ( "/app/public/wp-content/themes/wpCustom/category.php" ,  preg_replace( "#<\?php /\* start AceIDE restore code(.*)end AceIDE restore code \* \?>/#s", "", file_get_contents( "/app/public/wp-content/plugins/aceide/backups/themes/wpCustom/category_2018-07-29-13-21-48.php" ) ) ) ) {
	echo __( "Your file has been restored, overwritting the recently edited file! \n\n The active editor still contains the broken or unwanted code. If you no longer need that content then close the tab and start fresh with the restored file." );
}
} else {
echo "-1";
}
die();
/* end AceIDE restore code */ ?><?php
/**
 * The template for displaying Category pages.
 *
 * Used to display archive-type pages for posts in a category.
 *
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage theme_folder
 * @since Theme_Name 1.0
 */

get_header(); ?>

<section class="blog-content">

<?php if ( have_posts()) : ?>
	<?php printf( __('Category Archives: %s', 'theme_text_domain'), '<span>' . single_cat_title('', false) . '</span>'); ?>

	<?php if ( category_description()) : // Show an optional category description ?>
		<div><h1 class="Heading-4"><?php echo category_description(); ?></h1></div>
	<?php endif; ?>

	<?php	while ( have_posts()) : the_post(); ?>

			<div class="blog-content"><?php	get_template_part('content', get_post_format()); ?></div>

	<?php endwhile; ?>

	<?php get_template_part('partials/pagination');?>

<?php else : ?>
<div class="blog-content"><?php get_template_part('content', 'none'); ?></div>
<?php endif; // have_posts() ?>

<?php get_sidebar(); ?>
</section>
<?php get_footer(); ?>