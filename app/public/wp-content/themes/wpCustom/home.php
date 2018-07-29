<?php
/**
 * The template for default pages/posts
 * Template Name: Home
 * Contains our site content.
 *
 * @package WordPress
 * @subpackage Webflow
 * @since Webflow 1.0
 */
?>
<?php get_header(); ?>
<div class="bodywrapper">
<?php if(is_page('home')) : ?>
<body class="top-content">
<div class="banner">


    <div data-delay="6000" data-animation="cross" data-autoplay="1" data-disable-swipe="1" data-duration="750" data-infinite="1" class="slider w-slider">
      <div data-ix="hero-loader-on-load" class="hero-loadbar"></div>
      <div class="w-slider-mask">
        <div class="slide-2 w-slide">
          <div class="align-center">
            <div class="banner-block-wrapper">
              <h1 data-ix="fade-left-on-load-6" class="slider-heading small">GLOBAL</h1>
              <h1 data-ix="fade-left-on-load-6" class="heading-9">ADVISORS &amp; SPECIALISTS</h1>
            </div>
          </div>
          <div class="scroll-down-wrapper">
            <a href="#Down" data-ix="fade-left-on-load-5" class="link-block-2 w-inline-block">
              <div data-ix="navigation-line-on-hover" class="read-more white-more">
                <div>Scroll down</div>
                <div data-ix="navbar-line-initial" class="line-effect normal"></div>
              </div>
            </a>
          </div>
        </div>
        <div class="slide-3 w-slide">
          <div class="align-center2">
            <div class="banner-block-wrapper">
              <h1 data-ix="fade-left-on-load-6" class="slider-heading small">ALIGNED</h1>
              <h1 data-ix="fade-left-on-load-6" class="heading-9">STRATEGIC VISION</h1>
              <div data-ix="banner-block-on-load" class="banner-block"></div>
            </div>
          </div>
          <div class="scroll-down-wrapper">
            <a href="#Down" data-ix="fade-left-on-load-5" class="link-block-2 w-inline-block">
              <div data-ix="navigation-line-on-hover" class="read-more">
                <div class="text-block-5">Scroll down</div>
                <div data-ix="navbar-line-initial" class="line-effect blue"></div>
              </div>
            </a>
          </div>
        </div>
        <div class="slide-1 w-slide">
          <div class="scroll-down-wrapper">
            <a href="#Down" data-ix="fade-left-on-load-5" class="link-block-2 w-inline-block">
              <div data-ix="navigation-line-on-hover" class="read-more white-more">
                <div class="text-block-10">Scroll down</div>
                <div data-ix="navbar-line-initial" class="line-effect normal"></div>
              </div>
            </a>
          </div>
          <div class="align-center3">
            <div class="banner-block-wrapper">
              <h1 data-ix="fade-left-on-load-6" class="slider-heading small">SIMPLY</h1>
              <h1 data-ix="fade-left-on-load-6" class="heading-9">WE&#x27;RE YOUR CLIENT PARTNERS</h1>
              <div data-ix="banner-block-on-load" class="banner-block"></div>
            </div>
          </div>
        </div>
      </div>
      <div class="slide-nav w-slider-nav w-round"></div>
    </div>
  </div>
  <div id="Down" class="section">
    <div class="container-fluid">
      <div class="vertical-column-flex w-row">
        <div class="w-col w-col-5 w-col-stack">
          <div data-ix="fade-left-1">
            <div class="top-small-title">Fifty years of expertise</div>
            <h1 class="heading">The</h1>
            <h1 class="heading-2">backbone</h1>
            <div class="top-margin">
              <p class="paragraph">From aligning strategic vision to executing global re-platforming initiatives, ChalkDust specializes in end-to-end program management to transform your business from the inside out.</p>
            </div>
            <div class="top-margin"></div>
          </div>
        </div>
        <div class="w-col w-col-1 w-col-stack"></div>
        <div class="w-col w-col-6 w-col-stack"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/startup-photos-3.jpg" data-ix="fade-right-1" srcset="<?php echo esc_url( get_template_directory_uri() ); ?>/images/startup-photos-3-p-1080.jpeg 1080w, <?php echo esc_url( get_template_directory_uri() ); ?>/images/startup-photos-3.jpg 1300w" sizes="(max-width: 479px) 92vw, (max-width: 767px) 95vw, (max-width: 991px) 96vw, (max-width: 1300px) 100vw, 1300px" class="image-overflow"></div>
      </div>
      <div class="top-margin more">
        <div class="top-title">
          <div class="align-center">
            <div>
              <div class="top-small-title"> </div>
              <h1 class="heading-3">what we do</h1>
            </div>
          </div>
        </div>
      </div>
      <div>
        <div class="w-row">
          <div class="w-col w-col-4">
            <div data-ix="fade-up-1" class="features-wrapper">
              <div class="align-center">
                <h4 class="heading-4">The Advocate</h4>
                <p class="paragraph-2">ChalkDust Consulting champions the client’s message across teams, partners, and country affiliates globally, acting as a true client partner.</p>
              </div>
            </div>
          </div>
          <div class="w-col w-col-4">
            <div data-ix="fade-up-2" class="features-wrapper">
              <div class="align-center">
                <h4 class="heading-4">the connector</h4>
                <p class="paragraph-2">ChalkDust Consulting acts as traffic control for messages from partners, country associates and internal client members, ultimately aligning key communication from within.</p>
              </div>
            </div>
          </div>
          <div class="w-col w-col-4">
            <div data-ix="fade-up-3" class="features-wrapper">
              <div class="align-center">
                <h4 class="heading-4">the communicator</h4>
                <p class="paragraph-2">ChalkDust Consulting culls vital information from various parties and communicates back to executive client management.</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="section less-padding no-line">
    <div class="container-fluid">
      <div>
        <div class="vertical-column-flex w-row">
          <div class="w-col w-col-6 w-col-stack">
            <div>
              <h1 class="heading-3">capabilities</h1>
            </div>
          </div>
          <div class="w-col w-col-6 w-col-stack">
            <div class="align-right make-left">
              <a href="project-list.html" data-ix="button-full-on-hover" class="button w-inline-block">
                <div class="button-text">Request Access</div>
                <div class="button-overlay"></div>
              </a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div width:="100%" class="section project no-line">
    <div class="project-wrapper">
      <div data-ix="fade-up-1" class="w-dyn-list">
        <div class="w-dyn-items w-row">
          <div class="collection-item w-dyn-item w-col w-col-3">
            <a data-ix="project-overlay-on-hover" class="project-content w-inline-block">
              <div><img src="" class="image"></div>
              <div data-ix="button-initial-app" class="project-overlay">
                <div class="project-full">
                  <h1 data-ix="project-title-on-initial" class="project-title"></h1>
                  <div data-ix="project-title-on-initial" class="button-wrapper">
                    <div data-ix="button-full-on-hover" class="button button-white">
                      <div class="button-text">Request Access</div>
                      <div data-ix="button-initial-app" class="button-overlay overlay-white"></div>
                    </div>
                  </div>
                </div>
              </div>
            </a>
          </div>
        </div>
       
      </div>
    </div>
  </div>
  <div class="section-2">
    <div class="html-embed-3 w-embed w-iframe"><iframe style=" display: block;       /* iframes are inline by default */
    background: #fff;
    border: none;         /* Reset default border */
    height: 100vh;        /* Viewport-relative units */
    width: 100vw; " src="https://globe-ysl150.hashbase.io/globes/chalkglobe.html" scrolling="no" ;=""></iframe></div>
  </div>
  <div class="section blue">
    <div class="container-fluid">
      <div class="vertical-column-flex w-row">
        <div class="w-col w-col-5 w-col-stack">
          <div data-ix="fade-left-1">
            <div class="top-small-title white">GLOBAL</div>
            <h1 class="heading-white">ChalkDust Consulting supports the expansion and implementation of programs globally, from accelerated roll outs to localization, training and maintenance.</h1>
          </div>
        </div>
        <div class="column-6 w-col w-col-7 w-col-stack">
          <div class="image-overflow second w-clearfix">
            <a href="#" data-ix="fade-up-1" class="logo-client logo-1 w-inline-block">
              <div class="text-block-8"><strong>North America</strong></div>
              <div class="text-block-8 countries">Canada<br>United States</div>
            </a>
            <a href="#" data-ix="fade-up-1" class="logo-client logo-1 w-inline-block">
              <div class="text-block-8 countries"><strong>LATAM</strong></div>
              <div class="text-block-8 countries">Mexico<br>Brazil<br>Chile</div>
            </a>
            <a href="#" data-ix="fade-up-1" class="logo-client logo-5 w-inline-block">
              <div class="text-block-8 countries"><strong>APAC</strong>‍</div>
              <div class="w-row">
                <div class="w-col w-col-6">
                  <div class="text-block-8 countries">Australia<br>China<br>Hong Kong<br>Japan<br>Korea<br>Malaysia</div>
                </div>
                <div class="w-col w-col-6">
                  <div class="text-block-8 countries">New Zealand<br>Philippines<br>Singapore<br>Taiwan<br>Thailand<br>Vietnam</div>
                </div>
              </div>
            </a>
            <a href="#" data-ix="fade-up-2" class="logo-client logo-6 w-inline-block">
              <div class="text-block-8 countries"><strong>EMEA</strong></div>
              <div class="row w-row">
                <div class="w-col w-col-6">
                  <div class="text-block-8 countries">Austria<br>Belgium<br>Czech Republic<br>Denmark<br>France<br>Germany<br>Greece<br>Hungary<br>Israel<br>Italy<br>Netherlands<br>Norway<br><br><br></div>
                </div>
                <div class="w-col w-col-6">
                  <div class="text-block-8 countries">Poland<br>Romania<br>Russia<br>South Africa<br>Spain<br>Sweden<br>Switzerland<br>Turkey<br>United Arab Emirates<br>Portugal<br>Saudi Arabia<br><br><br></div>
                </div>
              </div>
            </a>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="section less-padding no-line"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/clickworld.svg" class="image-3">
    <div class="container-fluid">
      <div></div>
    </div>
  </div>
 <div class="section gray no-line">
    <div class="container-fluid">
      <div>
        <div class="top-title">
          <div class="align-center">
            <div>
              <div class="top-small-title"> </div>
              <h1 class="heading-3">Our founder</h1>
            </div>
          </div>
        </div>
        <div>
          <div class="w-row">
            <div data-ix="fade-up-1" class="w-col w-col-4 w-col-stack"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/Debbie-Kiederer-grey-HR.jpg.jpg" srcset="<?php echo esc_url( get_template_directory_uri() ); ?>/images/Debbie-Kiederer-grey-HR.jpg-p-500.jpeg 500w, <?php echo esc_url( get_template_directory_uri() ); ?>/images/Debbie-Kiederer-grey-HR.jpg-p-800.jpeg 800w, <?php echo esc_url( get_template_directory_uri() ); ?>/images/Debbie-Kiederer-grey-HR.jpg-p-1080.jpeg 1080w, <?php echo esc_url( get_template_directory_uri() ); ?>/images/Debbie-Kiederer-grey-HR.jpg.jpg 1235w" sizes="(max-width: 479px) 92vw, (max-width: 767px) 95vw, (max-width: 991px) 96vw, 31vw" class="image"></div>
            <div data-ix="fade-up-2" class="column-7 small w-col w-col-4 w-col-stack">
              <div data-ix="show-social-team-on-hover" class="team-wrapper">
                <div class="div-block-3"></div>
                <div class="team-content">
                  <h4 class="heading-white">debbie kiederer</h4>
                  <div class="top-small-title white smaller">Founder</div>
                  <div class="div-block-7">
                    <div data-ix="move-social-icon-on-team" class="social-wrapper-team"></div>
                  </div>
                </div>
              </div>
            </div>
            <div data-ix="fade-up-3" class="w-col w-col-4 w-col-stack">
              <div class="text-block-9">Debbie Kiederer is a veteran of the retail industry with more than two decades of experience positioning luxury and premium consumer brands in the digital space with strong global ecommerce strategy, implementation and program management expertise.<br><br>In 2001, Kiederer founded ChalkDust Consulting, a strategic online consulting practice and quickly developed a client list of Fortune 500 companies in the beauty, fashion, luxury consumer products, consumer electronics, media companies, not-for-profits and start-up industries.<br><br>She is also the founder of Vanishing Hanger®, a real-time online merchandising and social shopping technology platform, empowering brands but designed for consumers, set to pilot in 2018.<br><br>She is a member of Cosmetic Executive Woman, The International Women&#x27;s Leadership Association, Vistage and Entrepreneurs Organization (EO). She is a founding member of the Digital Innovation in Marketing Advisory Council at the Fox School at Temple University, the GSEA Board Chair for EO, and co-author of Beauty Pearls for Chemo Girls®, chosen as one of Amazon’s Editor’s Picks for 2014.<br><br></div>
            </div>
          </div>
        </div>
      </div>
     </div>

</body>


    
<?php else : ?>

<?php endif; ?>
<?php get_footer(); ?>
 