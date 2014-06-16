<?php

get_header();


global $post; 

debug($post);

get_template_part('loop');


get_sidebar();

get_search_form(); 

get_footer('home');

?>


<form action="<?php echo site_url();?>" method="get">
	<input type="search" name="s" value="<?php echo esc_html($_GET['s']);?>" >
	<input type="button" value="GO">
</form>

