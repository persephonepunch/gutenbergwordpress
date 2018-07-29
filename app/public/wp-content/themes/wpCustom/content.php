<?php
/**
 * The default template for displaying content. Used for both single and index/archive/search.
 *
 * @package WordPress
 * @subpackage theme_folder
 * @since Theme_Name 1.0
 */
?>
<section class="blog-content">
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

	<?php if (is_single()) : ?>
		<h3 class="blog-title" ><?php the_title(); ?></h3>
	<?php else: ?>
		<h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
	<?php endif // is_single() ?>

	<p class = "blog-content">
		<span>Written by: <?php the_author_posts_link() ?>, on</span>

		<time datetime="<?php the_time('o-m-d') ?>" pubdate><?php the_time('M j, Y') ?>,</time>

		<?php if (has_category()): ?>
			<span>categorised under: <?php the_category(', ') ?>,</span>
		<?php endif; // has_category(); ?>

		<?php if ( comments_open()) : ?>
			<span>
				<?php
					comments_popup_link( __('0 Comments', 'theme_text_domain'), __('1 Comment', 'theme_text_domain'), __('% Comments', 'theme_text_domain'));
				?>
			</span>
		<?php endif; // comments_open() ?>
	</p>

	<?php if (!is_single()): ?>
		<p class="paragraph-3">
			<?php echo theme_fn_prefix_custom_excerpt(40); ?>
			<a href="<?php the_permalink() ?>">read more</a>
		</p>
	<?php else: ?>
	<p class="paragraph-3">	<?php the_content(); ?></p>

		<?php if (has_tag()): ?>
		<div>
			Tags: <?php the_tags(' <span>', ', ', '</span>'); ?>
		</div>

		
		<?php endif; // has_tag() ?>
	<?php endif // is_single() ?>
	</section>

</article><!-- .post -->