<!-- begin sidebar -->
<div id="sidebar">

	
<div id="header">	
		<a href="<?php bloginfo('home'); ?>/"><img src="<?php bloginfo('template_directory'); ?>/images/logo.png" alt="<?php bloginfo('name'); ?>" /></a>
		
</div>

<div class="menu">

<ul>
		<?php wp_list_pages('title_li='); ?>
</ul>

</div>

<div id="subscribe">


	<p><a href="<?php bloginfo_rss('rss2_url') ?>"><?php _e('Image RSS'); ?></a></p>
<!--	<p><a href="<?php bloginfo_rss('comments_rss2_url') ?>"><?php _e('Comments RSS'); ?></a></p> -->

	<form id="searchform2" method="get" action="<?php bloginfo('home'); ?>">
		
			<input type="text"  onfocus="doClear(this)" value="<?php _e('Search'); ?>" name="s" id="s" size="25" /><br><br><input type="submit" name="submit"  value="<?php _e('Go'); ?>" />
			
	</form>	

</div>


</div>


	<div id="credit">
		<!-- Please leave these links intact -->
		<p><a href="http://www.wpcosmos.com/">WordPress Themes</a> | <a href="http://wordpress.org/">WordPress</a></p>
	</div>

</div><!-- end sidebar -->