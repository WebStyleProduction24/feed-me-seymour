<!-- begin second sidebar -->
<div id="secondsidebar">
	<?php 	/* Widgetized sidebar, if you have the plugin installed. */
        if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar("Sidebar Two") ) : ?>
        <div class="side-widget">
		   <h2><?php _e('Calendar', "feed-me-seymour"); ?></h2>
            <ul>
             <li>   <?php get_calendar(); ?></li>
            </ul>
        </div>
    <?php endif; ?>
</div>
<!-- end second sidebar -->