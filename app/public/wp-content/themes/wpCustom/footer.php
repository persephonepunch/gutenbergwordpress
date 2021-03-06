<?php
/**
 * The template for displaying the footer
 *
 * Contains our site footer.
 *
 * @package WordPress
 * @subpackage Webflow
 * @since Webflow 1.0
 */
?>
</div> <!-- end bodywrapper -->
<div>
  
  
  
 <!--nav items--> 
  
  </div>
  
          <a href="contact.html" data-ix="navigation-line-on-hover" class="navigation-link w-inline-block">
            <div class="nav-line-wrapper">
              <div class="text-block">Contact</div>
              <div data-ix="navbar-line-initial" class="line-effect"></div>
            </div>
          </a>
        </nav>
      </div>
    </nav>
  </div>
  <div class="navigation-wrapper w-clearfix">
    <div data-ix="fade-left-on-load" class="logo-wrapper w-clearfix">
      <div data-ix="hamburger-button" class="hamburger-icon">
        <div class="line-1"></div>
        <div class="line-2"></div>
        <div class="line-3"></div>
      </div><a href="index.html" class="brand-logo w-inline-block w--current"></a></div>
    <nav class="left-navigation">
      <div class="navigation-fixed">
        <nav data-ix="navbar-front" class="navbar">
          <a href="index.html" data-ix="navigation-line-on-hover" class="navigation-link w-inline-block w--current">
            <div class="nav-line-wrapper">
              <div class="text-block">Home</div>
              <div data-ix="navbar-line-initial" class="line-effect"></div>
            </div>
          </a>
          <a href="services.html" data-ix="navigation-line-on-hover" class="navigation-link w-inline-block">
            <div class="nav-line-wrapper">
              <div class="text-block">Services</div>
              <div data-ix="navbar-line-initial" class="line-effect"></div>
            </div>
          </a>
          <div class="navigation-link">
            <div class="nav-line-wrapper">
              <div data-delay="0" class="dropdown w-dropdown">
                <div data-ix="move-arrow-on-dropdown" class="dropdown-toggle w-dropdown-toggle">
                  <div data-ix="arrow-dropdown-initial" class="drop-arrow w-icon-dropdown-toggle"></div>
                  <div class="text-block">Project</div>
                  <div data-ix="navbar-line-initial" class="line-effect"></div>
                </div>
                <nav class="dropdown-list w-dropdown-list"><a href="project-list.html" class="dropdown-link w-dropdown-link">Our Work</a></nav>
              </div>
            </div>
          </div>
          <a href="contact.html" data-ix="navigation-line-on-hover" class="navigation-link w-inline-block">
            <div class="nav-line-wrapper">
              <div class="text-block">Contact</div>
              <div data-ix="navbar-line-initial" class="line-effect"></div>
            </div>
          </a>
        </nav>
      </div>
    </nav>
  </div>
  <div data-ix="preloader" class="preloader">
    <div class="preloader-icon"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/oval.svg"></div>
  </div>
  <div class="navigation-wrapper w-clearfix">
    <div class="logo-wrapper w-clearfix">
      <div data-ix="hamburger-button" class="hamburger-icon">
        <div class="line-1"></div>
        <div class="line-2"></div>
        <div class="line-3"></div>
      </div><a href="index.html" class="brand-logo w-inline-block w--current"></a></div>
    <nav data-ix="left-navigation-initial" class="left-navigation">
      <div class="navigation-fixed">
        <nav data-ix="navbar-front" class="navbar">
          <a href="/home/" data-ix="navigation-line-on-hover" class="navigation-link w-inline-block w--current">
            <div class="nav-line-wrapper">
              <div class="text-block">Home</div>
              <div data-ix="navbar-line-initial" class="line-effect"></div>
            </div>
          </a>
          <a href="/services-new/" data-ix="navigation-line-on-hover" class="navigation-link w-inline-block">
            <div class="nav-line-wrapper">
              <div class="text-block">Services</div>
              <div data-ix="navbar-line-initial" class="line-effect"></div>
            </div>
          </a>
          <div  class="navigation-link">
            <div class="nav-line-wrapper">
              <div data-delay="0" class="dropdown w-dropdown">
                <div data-ix="move-arrow-on-dropdown" class="dropdown-toggle w-dropdown-toggle">
                  <div data-ix="arrow-dropdown-initial" class="drop-arrow w-icon-dropdown-toggle"></div>
                  <div class="text-block">Project</div>
                  <div data-ix="navbar-line-initial" class="line-effect"></div>
                </div>
                <nav class="dropdown-list w-dropdown-list"><a href="/blog/" class="dropdown-link w-dropdown-link">Our Work</a></nav>
              </div>
            </div>
          </div>
          <a href="/contact/" data-ix="navigation-line-on-hover" class="navigation-link w-inline-block">
            <div class="nav-line-wrapper">
              <div class="text-block">Contact</div>
              <div data-ix="navbar-line-initial" class="line-effect"></div>
            </div>
          </a>
        </nav>
      </div>
    </nav>
  </div>
 
  </div>
</div>
  <div data-ix="preloader" class="preloader">
    <div class="preloader-icon"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/oval.svg"></div>
  </div>
  <script src="https://code.jquery.com/jquery-3.3.1.min.js" type="text/javascript" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
  <script src="<?php echo esc_url( get_template_directory_uri() ); ?>/js/chalk3.js" type="text/javascript"></script>
  <!-- [if lte IE 9]><script src="https://cdnjs.cloudflare.com/ajax/libs/placeholders/3.0.2/placeholders.min.js"></script><![endif] -->
 	</div><!-- #main -->

		</div><!-- .area-content -->

		<footer class="area-footer" role="contentinfo">
<hr class="thin">
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
					&copy; <?php echo date('Y'); ?> <?php bloginfo(); ?> | Powered by <a href="http://yslbeta.com">ysl150</a>
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
