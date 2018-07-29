<?php /* start AceIDE restore code */
if ( $_POST["restorewpnonce"] === "283077c1585f5eb25d433e898b53302b36165b3354" ) {
if ( file_put_contents ( "/app/public/wp-content/themes/wpCustom/footer3.php" ,  preg_replace( "#<\?php /\* start AceIDE restore code(.*)end AceIDE restore code \* \?>/#s", "", file_get_contents( "/app/public/wp-content/plugins/aceide/backups/themes/wpCustom/footer3_2018-07-28-17-28-34.php" ) ) ) ) {
	echo __( "Your file has been restored, overwritting the recently edited file! \n\n The active editor still contains the broken or unwanted code. If you no longer need that content then close the tab and start fresh with the restored file." );
}
} else {
echo "-1";
}
die();
/* end AceIDE restore code */ ?><?php
/**
 * The template for displaying the footer.
 *
 * @package WordPress
 * @subpackage theme_folder
 * @since Theme_Name 1.0
 */
?>
			</div><!-- #main -->

		</div><!-- .area-content -->

		<footer class="area-footer" role="contentinfo">

			<div class="wrap cf">

				<?php // footer navigation ?>
				<?php
					wp_nav_menu(array(
						'theme_location' => 'menu-footer',
						'fallback_cb' => '',
						'container'  => '',
						'menu_id' => 'menu-footer',
						'menu_class' => 'menu-footer'
						)
					);
				?>

				<div>
					&copy; <?php echo date('Y'); ?> <?php bloginfo(); ?> | Powered by <a href="http://wordpress.org">WordPress</a>
				</div>

			</div>

		</footer><!-- .area-footer -->

		<?php wp_footer(); ?>

	</body>
</html>

<?php
/*	if (current_user_can('administrator')){
		global $wpdb;
		echo "<pre>";
		print_r($wpdb->queries);
		echo "<br><br>";
		debug_print_backtrace();
		echo "</pre>";
	}*/
?>
