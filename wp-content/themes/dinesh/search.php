Search 

<?php

global  $wp_query;

echo $wp_query->post_count;
?>



<form action="<?php echo site_url();?>" method="get">
	<input type="search" name="s" value="<?php echo esc_html($_GET['s']);?>" >
	<input type="button" value="GO">
</form>



<?php
get_template_part('loop')
?>
