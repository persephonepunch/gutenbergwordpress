<?php /* start AceIDE restore code */
if ( $_POST["restorewpnonce"] === "283077c1585f5eb25d433e898b53302b4f18b6176f" ) {
if ( file_put_contents ( "/app/public/wp-content/themes/wpCustom/archive.php" ,  preg_replace( "#<\?php /\* start AceIDE restore code(.*)end AceIDE restore code \* \?>/#s", "", file_get_contents( "/app/public/wp-content/plugins/aceide/backups/themes/wpCustom/archive_2018-07-29-13-21-07.php" ) ) ) ) {
	echo __( "Your file has been restored, overwritting the recently edited file! \n\n The active editor still contains the broken or unwanted code. If you no longer need that content then close the tab and start fresh with the restored file." );
}
} else {
echo "-1";
}
die();
/* end AceIDE restore code */ ?><?php
/**
 * The template for displaying Archive pages.
 *
 * Used to display archive-type pages if nothing more specific matches a query.
 * For example, puts together date-based pages if no date.php file exists.
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
	<h1>
		<?php
			if ( is_day()) :
				printf( __('Daily Archives: %s', 'theme_text_domain'), '<span>' . get_the_date() . '</span>');
			elseif ( is_month()) :
				printf( __('Monthly Archives: %s', 'theme_text_domain'), '<span>' . get_the_date( _x('F Y', 'monthly archives date format', 'theme_text_domain')) . '</span>');
			elseif ( is_year()) :
				printf( __('Yearly Archives: %s', 'theme_text_domain'), '<span>' . get_the_date( _x('Y', 'yearly archives date format', 'theme_text_domain')) . '</span>');
			else :
				_e('Archives', 'theme_text_domain');
			endif;
		?>
	</h1>

	<?php	while ( have_posts()) : the_post(); ?>

	<div class="blog-content">	<?php	get_template_part('content', get_post_format()); ?></div>

	<?php endwhile; ?>

	<?php get_template_part('partials/pagination'); ?>

<?php else : ?>
	<?php get_template_part('content', 'none'); ?>
<?php endif; // have_posts() ?>

<?php get_sidebar(); ?>
</section>

<?php get_footer(); ?>