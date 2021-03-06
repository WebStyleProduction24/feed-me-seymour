<?php get_header(); ?>
<?php	
	$options = get_option("widget_sideFeature");
 	$numberOf = $options['number'];
	$category = $options['category'];
	$category = "&cat=" . $category;
	$showposts = "posts_per_page=" . $numberOf . $category ;
	$featuredPosts = new WP_Query();
    $featuredPosts->query($showposts);
	while ($featuredPosts->have_posts()) : $featuredPosts->the_post(); 
		$notin[] = $post->ID;
	endwhile;
	
	$posts = theme_option('number_posts');
    if(empty($posts)) $posts = 9;
    $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
	if (is_active_widget('widget_myFeature')) {
        $args = array(
           'post__not_in'=>$notin,
           'posts_per_page'=>$posts,
           'paged'=>$paged
           );
    } else {
        $args = array(
           'posts_per_page'=>$posts,
           'paged'=>$paged
           );
    }  
	$i = 1;
	query_posts($args); 
	?>
	<div id="threecol"><div id="threecol2">
	<?php while (have_posts()) : the_post(); ?>
		<div class="flex-post">
		<div class="rubric">Раздел: <?php the_category( ' / ', 'multiple'); ?></div>
		<div class="date_post">Опубликовано <?php  the_time('d.m.Y в H:i','Опубликовано: '); ?></div>
		</div>
		<?php $classes = 'threepost threepost'; if($i==7) { $i = 4; } $classes .= $i; $i++; ?>
		<div <?php post_class($classes); ?> id="post-<?php the_ID(); ?>">
			<h2><a href="<?php the_permalink() ?>" title="<?php printf(__("Permanent Link to %s", "feed-me-seymour"), the_title_attribute('echo=0')); ?>"><?php the_title(); ?></a></h2>
			<div class="storycontent">
				<?php 
                if(function_exists('has_post_thumbnail') && has_post_thumbnail()) { 
                    echo '<a href="'.get_permalink().'">';
                    the_post_thumbnail('thumbnail', array('class'=>'alignleft'));
                    echo '</a>';
                } else { 
                    echo resize(get_option('thumbnail_size_w'),get_option('thumbnail_size_h')); 
                }
                ?>
				<?php the_excerpt(); ?>
				<div class="flex-post">
				<div class="author_post">Автор публикации: <?php echo get_the_author(); ?></div>
				<p class="contread"><a href="<?php the_permalink(); ?>"><?php _e("Read More &raquo;", "feed-me-seymour"); ?></a></p>
				</div>
			 </div>
		 </div>
	<?php endwhile; ?>
		</div>
	</div>
    <div class="navigation">
        <div class="alignright"><?php next_posts_link(__('Следующая страница &raquo;', "feed-me-seymour")) ?></div>
		<div class="alignleft"><?php previous_posts_link(__('&laquo; Предыдущая страница ', "feed-me-seymour")) ?></div>
    </div>  
<?php get_footer(); ?>
