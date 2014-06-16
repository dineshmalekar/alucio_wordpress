
<?php
get_header();

$args = array('post_type'=>'page', '');


global $post;
print_r($post);
die;
$post = get_posts($args);


debug($post);

get_footer();
?>