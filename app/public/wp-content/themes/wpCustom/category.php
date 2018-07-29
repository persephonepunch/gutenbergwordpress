<?php
/**
 * The template for displaying Category pages.
 *
 * Used to display archive-type pages for posts in a category.
 *
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage theme_folder
 * @since Theme_Name 1.0
 */

get_header(); ?>

<section class="blog-content">

<?php if ( have_posts()) : ?>
	<?php printf( __('Category Archives: %s', 'theme_text_domain'), '<span>' . single_cat_title('', false) . '</span>'); ?>

	<?php if ( category_description()) : // Show an optional category description ?>
		<div><h1 class="Heading-4"><?php echo category_description(); ?></h1></div>
	<?php endif; ?>

	<?php	while ( have_posts()) : the_post(); ?>

			<div class="blog-content"><?php	get_template_part('content', get_post_format()); ?></div>

	<?php endwhile; ?>

<div class="blog-content">	<?php get_template_part('partials/pagination');?></div>

<?php else : ?>
<div class="blog-content"><?php get_template_part('content', 'none'); ?></div>
<?php endif; // have_posts() ?>

	<div class="blog-content"><?php get_sidebar(); ?></div>
</section>
<?php get_footer(); ?>