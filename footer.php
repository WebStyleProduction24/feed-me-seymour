	</div>
    <?php
		$loc = theme_option('sidebar_location');
		if($loc==2 || $loc==4) {
			get_sidebar(); // calling the First Sidebar
		}
		if(theme_option('sidebar_width2')!=0 && $loc!=3) get_sidebar( "second" ); // calling the Second Sidebar
	?>
</div>
<!-- begin footer -->
<div id="footer">
   <?php 
	$link = '<a href="'.get_bloginfo('url').'">'.get_bloginfo('name').'</a>';
	printf(__('Copyright &copy; %1$d %2$s. All Rights Reserved.', "feed-me-seymour"), date('Y'), $link);
	echo " ";
	#printf(__('Created by %1$s.', "feed-me-seymour"), '<span class="red">'.THEME_NAME.'</span>'); ?> 
</div>
<?php wp_footer(); ?>
<script type="text/javascript" src="<?php echo THEME_URL; ?>/js/effects.js"></script> 
<script type="text/javascript">
/* <![CDATA[ */
jQuery(function(){
	jQuery("ul.cats").superfish({ 
		delay:       600,
		speed:       250 
	});	});
/* ]]> */
</script>
<!-- end footer -->
<!-- <?php echo THEME_NAME; ?> theme designed by Themes by bavotasan.com, http://themes.bavotasan.com -->
<?php if(theme_option('google_analytics')) { echo stripslashes(theme_option('google_analytics')); } ?>
</body>
</html>
