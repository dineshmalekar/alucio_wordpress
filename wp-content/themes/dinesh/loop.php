LOOP
<?php
if(have_posts()):

	while ( have_posts() ) : the_post();

	the_post_thumbnail('large');
	echo "<Br><Br><Br>";

	printf('<a href="%s">%s</a>', get_the_permalink(), get_the_title()); 
	echo "<Br><Br><Br>";
	echo get_the_title().'hell----';
	echo "<Br><Br><Br>";

	echo get_post_type();
	echo "<Br><Br><Br>";

	debug(get_the_category());

	echo "<Br><Br><Br>";

	debug(get_the_tag_list());

	echo "<Br><Br><Br>";
	the_content();
	echo "<Br><Br><Br>";

	endwhile;

else:

echo  "no post";

endif;
?>