<?php /* start AceIDE restore code */
if ( $_POST["restorewpnonce"] === "283077c1585f5eb25d433e898b53302b36165b3354" ) {
if ( file_put_contents ( "/app/public/wp-content/themes/wpCustom/footer.php" ,  preg_replace( "#<\?php /\* start AceIDE restore code(.*)end AceIDE restore code \* \?>/#s", "", file_get_contents( "/app/public/wp-content/plugins/aceide/backups/themes/wpCustom/footer_2018-07-28-17-31-27.php" ) ) ) ) {
	echo __( "Your file has been restored, overwritting the recently edited file! \n\n The active editor still contains the broken or unwanted code. If you no longer need that content then close the tab and start fresh with the restored file." );
}
} else {
echo "-1";
}
die();
/* end AceIDE restore code */ ?><?php
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
  <div data-ix="fade-up-1" class="footer">
    <div class="footer-wrapper">
      <div class="w-row">
        <div class="w-col w-col-2 w-col-stack">
          <div><a href="index.html" class="w-inline-block w--current"></a></div>
        </div>
        <div class="w-col w-col-2 w-col-stack">
          <div>
            <p class="copyright"> <a href="#" class="link"></a></p>
          </div>
        </div>
        <div class="w-col w-col-2 w-col-stack"></div>
        <div class="w-col w-col-2 w-col-stack">
          <div>
            <ul class="w-list-unstyled">
              <li><a href="https://www.chalkdustportfolio.com/port/home/" class="link-footer w--current">Home</a></li>
              <li><a href="https://www.chalkdustportfolio.com/port/services-new/" class="link-footer">Services</a></li>
              <li><a href="https://www.chalkdustportfolio.com/port/blog/" class="link-footer">Project</a></li>
              <li><a href="https://www.chalkdustportfolio.com/port/contact/" class="link-footer">Contact</a></li>
            </ul>
          </div>
        </div>
        <div class="w-col w-col-1 w-col-stack"></div>
        <div class="w-col w-col-3 w-col-stack">
          <div>
            <p class="paragraph-4"><a href="mailto:design@chalkdustconsulting.com?subject=ChalkDust Consulting">design@chalkdustconsulting.com</a>  </p>
            
          </div>
        </div>
      </div>
    </div>
  </div>
  
  
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
          <a href="https://www.chalkdustportfolio.com/port/home/" data-ix="navigation-line-on-hover" class="navigation-link w-inline-block w--current">
            <div class="nav-line-wrapper">
              <div class="text-block">Home</div>
              <div data-ix="navbar-line-initial" class="line-effect"></div>
            </div>
          </a>
          <a href="https://www.chalkdustportfolio.com/port/services-new/" data-ix="navigation-line-on-hover" class="navigation-link w-inline-block">
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
                <nav class="dropdown-list w-dropdown-list"><a href="https://www.chalkdustportfolio.com/port/blog/" class="dropdown-link w-dropdown-link">Our Work</a></nav>
              </div>
            </div>
          </div>
          <a href="https://www.chalkdustportfolio.com/port/contact/" data-ix="navigation-line-on-hover" class="navigation-link w-inline-block">
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
  <?php wp_footer(); ?>
</body>
<script>'undefined'=== typeof _trfq || (window._trfq = []);'undefined'=== typeof _trfd && (window._trfd=[]),_trfd.push({'tccl.baseHost':'secureserver.net'}),_trfd.push({'ap':'cpsh'},{'server':'a2plcpnl0412'}) // Monitoring performance to make your website faster. If you want to opt-out, please contact web hosting support.</script><script src='https://img1.wsimg.com/tcc/tcc_l.combined.1.0.6.min.js'></script><script>'undefined'=== typeof _trfq || (window._trfq = []);'undefined'=== typeof _trfd && (window._trfd=[]),_trfd.push({'tccl.baseHost':'secureserver.net'}),_trfd.push({'ap':'cpsh'},{'server':'a2plcpnl0412'}) // Monitoring performance to make your website faster. If you want to opt-out, please contact web hosting support.</script><script src='https://img1.wsimg.com/tcc/tcc_l.combined.1.0.6.min.js'></script><script>'undefined'=== typeof _trfq || (window._trfq = []);'undefined'=== typeof _trfd && (window._trfd=[]),_trfd.push({'tccl.baseHost':'secureserver.net'}),_trfd.push({'ap':'cpsh'},{'server':'a2plcpnl0412'}) // Monitoring performance to make your website faster. If you want to opt-out, please contact web hosting support.</script><script src='https://img1.wsimg.com/tcc/tcc_l.combined.1.0.6.min.js'></script><script>'undefined'=== typeof _trfq || (window._trfq = []);'undefined'=== typeof _trfd && (window._trfd=[]),_trfd.push({'tccl.baseHost':'secureserver.net'}),_trfd.push({'ap':'cpsh'},{'server':'a2plcpnl0412'}) // Monitoring performance to make your website faster. If you want to opt-out, please contact web hosting support.</script><script src='https://img1.wsimg.com/tcc/tcc_l.combined.1.0.6.min.js'></script></html>