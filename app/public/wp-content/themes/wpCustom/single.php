<?php
/**
 * The Template for displaying all single posts.
 *
 * @package WordPress
 * @subpackage theme_folder
 * @since Theme Na,e 1.0
 */

get_header(); ?>
<section class="blog-content">
<?php while ( have_posts()) : the_post(); ?>

	<?php get_template_part('content', get_post_type()); ?>

	<?php get_template_part('partials/pagination'); ?>

	<?php comments_template('', true); ?>
</section>
<?php endwhile; ?>
<section class="blog-content">
<?php get_sidebar(); ?>
</section>
<?php get_footer(); ?>
