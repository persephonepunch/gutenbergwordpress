<?php /* start AceIDE restore code */
if ( $_POST["restorewpnonce"] === "283077c1585f5eb25d433e898b53302bcf4bf6bbde" ) {
if ( file_put_contents ( "/app/public/wp-content/themes/wpCustom/page.php" ,  preg_replace( "#<\?php /\* start AceIDE restore code(.*)end AceIDE restore code \* \?>/#s", "", file_get_contents( "/app/public/wp-content/plugins/aceide/backups/themes/wpCustom/page_2018-07-29-11-10-41.php" ) ) ) ) {
	echo __( "Your file has been restored, overwritting the recently edited file! \n\n The active editor still contains the broken or unwanted code. If you no longer need that content then close the tab and start fresh with the restored file." );
}
} else {
echo "-1";
}
die();
/* end AceIDE restore code */ ?><?php
/**
 * The template for displaying all pages.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * @package WordPress
 * @subpackage theme_folder
 * @since Theme_Name 1.0
 */

get_header(); ?>

<body class="top-content">
  <div class="sub-banner">
    <div class="headermain">
      <div data-ix="fade-up-1-on-load" class="top-small-title">Core Capabilities</div>
      <h1 data-ix="fade-up-2-on-load" class="heading-7">our work</h1>
    </div>
  </div>
  <div class="navigation-wrapper w-clearfix">
    <div data-ix="fade-left-on-load" class="logo-wrapper w-clearfix">
      <div data-ix="hamburger-button" class="hamburger-icon">
        <div class="line-1"></div>
        <div class="line-2"></div>
        <div class="line-3"></div>
      </div><a href="index.html" class="brand-logo w-inline-block"></a></div>
    <nav data-ix="left-navigation-initial" class="left-navigation">
      <div class="navigation-fixed">
        <nav data-ix="navbar-front" class="navbar">
          <a href="index.html" data-ix="navigation-line-on-hover" class="navigation-link w-inline-block">
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
          <div data-ix="navigation-line-on-hover" class="navigation-link">
            <div class="nav-line-wrapper">
              <div data-delay="0" class="dropdown w-dropdown">
                <div data-ix="move-arrow-on-dropdown" class="dropdown-toggle w-dropdown-toggle">
                  <div data-ix="arrow-dropdown-initial" class="drop-arrow w-icon-dropdown-toggle"></div>
                  <div class="text-block">Project</div>
                  <div data-ix="navbar-line-initial" class="line-effect"></div>
                </div>
                <nav class="dropdown-list w-dropdown-list"><a href="project-list.html" class="dropdown-link w-dropdown-link w--current">Our Work</a></nav>
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
  <section class="blog-content">
    <div class="container-fluid">
     
     <div class="project-wrapper">

	<?php while (have_posts()) : the_post(); ?>
		<?php get_template_part('content', get_post_type()) ?>
	<?php endwhile; ?>
  </div>
	
 </div>
  </div>
	
	
	

<?php get_sidebar(); ?>






<?php get_footer(); ?>
