<?php

get_header(); 


get_sidebar();

?>


<?php if(have_posts()): global $post; debug($post);?>


	<?php while(have_posts()):the_post(); ?>
		<div class="contain">
			<div class="welcome_block">
				<h2><?php the_title(); ?></h2>
		    	<?php the_excerpt(); ?>
		      
		        <div class="clear"></div>
		    </div> 
		</div>
		<div class="clear"></div>

	<?php endwhile; ?>
<?php else: ?>

<div class="contain">
			<div class="welcome_block">
				<h2>Not Found</h2>
		    	<p>Sorry,The page you are looking is not avaliable.</p>
		      
		        <div class="clear"></div>
		    </div> 
		</div>
		<div class="clear"></div>
<?php endif; wp_reset_query(); ?>


<?php
get_footer();
?>