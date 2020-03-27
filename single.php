<?php get_header(); ?>
	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
		<div <?php post_class('posts'); ?> id="post-<?php the_ID(); ?>">
		<div class="flex-post border-bottom">
		<div class="rubric">Раздел: <?php the_category( ' / ', 'multiple'); ?></div>
		<div class="single_tags"> <?php the_tags(__('<p class="tags">Метки: ', "feed-me-seymour"), ', ', '</p>'); ?> </div>
		<div class="date_post">Опубликовано <?php  the_time('d.m.Y в H:i','Опубликовано: '); ?></div>
		</div>
		
			<h1><?php the_title(); ?></h1>
			<div class="entry">
				<?php the_content(); ?>
				
				
			</div>
       		<?php wp_link_pages(array('before' => '<p><strong>'.__('Pages', "feed-me-seymour").'</strong> ', 'after' => '</p>', 'next_or_number' => 'number')); ?>
		</div>
		<div class="author_post">Автор публикации: <?php echo get_the_author(); ?></div>
		<?php comments_template(); ?>
	<?php endwhile; else: ?>
	<p><?php _e("Sorry, no posts matched your criteria.", "feed-me-seymour"); ?></p>
<?php endif; ?>
<?php get_footer(); ?>