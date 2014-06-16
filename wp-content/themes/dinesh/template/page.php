<?php
get_header();

$args = array('post_type'=>'page', 'order_by', 'title',  'sort'=>'DESC' ,);

$post = get_posts($args);

wp_query();

global $wpdb;

$wpdb->query('sql')

$wpdb->insert(table, data);

get_footer();
?>