<?php

get_header();


global $post; 


get_template_part('loop');


get_sidebar('home');

//get_search_form(); 

get_footer();

?>


<form action="<?php echo site_url();?>" method="get">
	<input type="search" name="s" value="<?php echo esc_html($_GET['s']);?>" >
	<input type="button" value="GO">
</form>

