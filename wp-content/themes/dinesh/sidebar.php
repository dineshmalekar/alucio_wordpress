<?php if(is_home() || is_front_page()):?>
<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('sidebar_home') ) : ?><?php endif; ?>
<?php endif;?>

<?php if(is_page()  || is_single()):?>
<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('sidebar_page') ): ?><?php endif; ?>
<?php endif;?>