LOOP
<?php
if(have_posts()):

	while ( have_posts() ) : the_post();


the_date('Y');
the_date('d');
the_title().'<br>';
the_title().'<br>';

	the_post_thumbnail('thumbnail');
	echo '<a href="'.get_the_permalink().'">'. get_the_title().'/</a>';
	the_content();

	endwhile;

else:

echo  "no post";

endif;
?>