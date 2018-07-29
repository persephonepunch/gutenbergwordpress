<?php
/**
 * The template for displaying the header
 *
 * Displays all of the head element and everything up until the "site-content" div.
 *
 * @package WordPress
 * @subpackage Template
 * @since Template 1.0
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js">

<head>
  <meta charset="<?php bloginfo( 'charset' ); ?>">
  <title><?php bloginfo( 'name' ); wp_title(); ?></title>
  <meta name="description" content="<?php bloginfo ( 'description' ); ?>">
	<meta name="viewport" content="width=device-width">
	<meta name="google-site-verification" content="faTSmt6uUtV11Q20xyn9PO25xdwt7mK-BwSu6csaSwU" />
	<meta name="robots" content="noindex">
    <meta name="googlebot" content="noindex">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
	<!--[if lt IE 9]>
	<script src="<?php echo esc_url( get_template_directory_uri() ); ?>/js/html5.js"></script>
	<![endif]-->









  <meta charset="utf-8">
  <title>ChalkDust Consulting</title>
  <meta content="ChalkDust Consulting" name="description">
  <meta content="ChalkDust Consulting" property="og:title">
  <meta content="ChalkDust Consulting" property="og:description">
  <meta content="summary" name="twitter:card">
  <meta content="width=device-width, initial-scale=1" name="viewport">
  <link href="<?php echo esc_url( get_template_directory_uri() ); ?>/css/normalize.css" rel="stylesheet" type="text/css">
  <link href="<?php echo esc_url( get_template_directory_uri() ); ?>/css/components.css" rel="stylesheet" type="text/css">
  <link href="<?php echo esc_url( get_template_directory_uri() ); ?>/css/chalk3.css" rel="stylesheet" type="text/css">
  <script src="https://ajax.googleapis.com/ajax/libs/webfont/1.4.7/webfont.js" type="text/javascript"></script>
  <script type="<?php echo esc_url( get_template_directory_uri() ); ?>/text/javascript">WebFont.load({  google: {    families: ["Poppins:200,200italic,300,300italic,regular,italic,500,500italic,600,600italic,700,700italic,800,800italic,900,900italic","Lora:regular,italic,700,700italic"]  }});</script>
  <script src="https://use.typekit.net/sjh5uey.js" type="text/javascript"></script>
  <link rel="stylesheet" href="https://use.typekit.net/ots6ast.css">
  <script type="<?php echo esc_url( get_template_directory_uri() ); ?>/text/javascript">try{Typekit.load();}catch(e){}</script>
  <!-- [if lt IE 9]><script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.min.js" type="text/javascript"></script><![endif] -->
  <script type="text/javascript">!function(o,c){var n=c.documentElement,t=" w-mod-";n.className+=t+"js",("ontouchstart"in o||o.DocumentTouch&&c instanceof DocumentTouch)&&(n.className+=t+"touch")}(window,document);</script>
  <link href="<?php echo esc_url( get_template_directory_uri() ); ?>/images/00cico.png" rel="shortcut icon" type="image/x-icon">
  <link href="<?php echo esc_url( get_template_directory_uri() ); ?>/images/Artboard-1.png" rel="apple-touch-icon">
  <style type="<?php echo esc_url( get_template_directory_uri() ); ?>/text/css">
.top-content
  {
    -webkit-font-smoothing: antialiased;
    -moz-osx-font-smoothing: grayscale;
}
</style>
</head>

<?php wp_head(); ?>

<body <?php body_class(); ?>>