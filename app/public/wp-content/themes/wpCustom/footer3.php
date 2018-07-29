<?php
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
