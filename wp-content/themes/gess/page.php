<?php

get_header(); 


get_sidebar();

?>

<?php if(have_posts()): ?>
	<?php while(have_posts()):the_post(); ?>
		<div class="contain">
			<div class="welcome_block">
		    	<?php the_excerpt(); ?>
		      
		        <div class="clear"></div>
		    </div> 
		</div>
		<div class="clear"></div>

	<?php endwhile; ?>
<?php endif; ?>

<?php
get_footer();
?>