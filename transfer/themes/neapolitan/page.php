<?php get_header(); ?>


<div id="content">
	<div id="content-inner">

<div id="main">

<?php if (have_posts()) : ?>
		
	<?php while (have_posts()) : the_post(); ?>
			
	<div class="post" id="post-<?php the_ID(); ?>">
	
	<div class="postmetadata">
		
	<div class="responses"><?php comments_popup_link(__('0 RESPONSES'), __('1 RESPONSE'), __('% RESPONSES')); ?> <img style="vertical-align:-5px;" alt="comments" src="<?php bloginfo('template_directory'); ?>/images/comment.gif" height="16" width="16" /> </div>	
		
		<b><?php echo strtoupper(get_the_time('F jS, Y')); ?><br />
		
	 By <?php echo strtoupper(get_the_author()); ?></b>
	 
	 
		</div> 
	
		<div class="entry">
		
		<h2><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title(); ?>"><?php the_title(); ?></a></h2>


				<?php the_content(__('Read more &raquo;')); ?>
		</div>
	
	
		

		
		<?php comments_template(); ?>
		
		
		</div>
		
		


	<?php endwhile; ?>

	
	
	<div id="navigation">
			<div class="fleft"><?php next_posts_link('&laquo; Older') ?></div>
					<div class="fright"> <?php previous_posts_link('Newer &raquo;') ?></div>
	</div>
			
	

	<?php else : ?>
	
	<div class="post">
	<div class="entry">
		<h2>Not Found</h2>
		<p>Sorry, you are looking for something that isn't here.</p>
	</div>
	</div>	
		
	<?php endif; ?>
	
	

	
	</div> <!-- eof main -->

<?php get_sidebar(); ?>

<?php get_footer(); ?>


