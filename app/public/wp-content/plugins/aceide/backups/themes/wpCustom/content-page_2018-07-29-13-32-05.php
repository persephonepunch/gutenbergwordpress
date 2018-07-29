<?php /* start AceIDE restore code */
if ( $_POST["restorewpnonce"] === "283077c1585f5eb25d433e898b53302b4f18b6176f" ) {
if ( file_put_contents ( "/app/public/wp-content/themes/wpCustom/content-page.php" ,  preg_replace( "#<\?php /\* start AceIDE restore code(.*)end AceIDE restore code \* \?>/#s", "", file_get_contents( "/app/public/wp-content/plugins/aceide/backups/themes/wpCustom/content-page_2018-07-29-13-32-05.php" ) ) ) ) {
	echo __( "Your file has been restored, overwritting the recently edited file! \n\n The active editor still contains the broken or unwanted code. If you no longer need that content then close the tab and start fresh with the restored file." );
}
} else {
echo "-1";
}
die();
/* end AceIDE restore code */ ?><?php
/**
 * The template used for displaying page content in page.php
 *
 * @package WordPress
 * @subpackage theme_folder
 * @since Theme_Name 1.0
 */
?>

<section id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

	<h1><?php the_title(); ?></h1>

	<?php the_content(); ?>

</section><!-- .post -->