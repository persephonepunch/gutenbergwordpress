<?php
/**
 * The template for default pages/posts

 * Contains our site content.
 *
 * @package WordPress
 * @subpackage Webflow
 * @since Webflow 1.0
 */
?>
<?php get_header(); ?>
<div class="bodywrapper">


<body class="top-content">
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
                <nav class="dropdown-list w-dropdown-list"><a href="project-list.html" class="dropdown-link w-dropdown-link">Our Work</a></nav>
              </div>
            </div>
          </div>
          <a href="contact.html" data-ix="navigation-line-on-hover" class="navigation-link w-inline-block w--current">
            <div class="nav-line-wrapper">
              <div class="text-block">Contact</div>
              <div data-ix="navbar-line-initial" class="line-effect"></div>
            </div>
          </a>
        </nav>
      </div>
    </nav>
  </div>
  <div class="half-part-wrapper full">
    <div class="half-part with-image full w-hidden-medium w-hidden-small w-hidden-tiny"></div>
    <div class="half-part full">
      <div class="container-center">
        <div class="top-title less">
          <div data-ix="fade-up-1-on-load" class="top-small-title white">Let&#x27;s make something great</div>
          <h2 data-ix="fade-up-2-on-load" class="contacta">Stay in touch</h2>
        </div>
        <div class="w-container"><a href="mailto:design@chalkdustconsulting.com" class="contactb">design@chalkdustconsulting.com </a></div>
        <div>
          <div class="form-block w-form">
            <form id="email-form" name="email-form" data-name="Email Form" data-ix="fade-up-4-on-load">
              <div class="w-row">
                <div class="column w-col w-col-6"></div>
                <div class="column-2 w-col w-col-6"></div>
              </div>
            </form>
            <div class="success-message w-form-done">
              <div>Thank you! Your submission has been received!</div>
            </div>
            <div class="error-message w-form-fail">
              <div>Oops! Something went wrong while submitting the form.</div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

<?php get_footer(); ?>