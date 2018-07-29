<?php
/**
 * The template for displaying 404 pages (Not Found).
 *
 * @package WordPress
 * @subpackage theme_folder
 * @since Theme_Name 1.0
 */

get_header(); ?>
<section class="blog-content">

<h1 class="blog-content"><?php _e('This is somewhat embarrassing, isn&rsquo;t it?', 'theme_text_domain'); ?></h1>
<p><?php _e('It seems we can&rsquo;t find what you&rsquo;re looking for. Perhaps searching can help.', 'theme_text_domain'); ?></p>
<?php get_search_form(); ?>

<?php get_sidebar(); ?>
</section>
<?php get_footer(); ?>