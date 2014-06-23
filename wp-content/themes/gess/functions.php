<?php 

/*if(STYLESHEETPATH == TEMPLATEPATH)
{
	define('OF_FILEPATH',TEMPLATEPATH);
	define('OF_DIRECTORY',get_bloginfo('template_directory'));

}
else
{
	define('OF_FILEPATH',STYLESHEETPATH);
	define('OF_DIRECTORY',get_bloginfo('stylesheet_directory'));

}

require_once(OF_FILEPATH.'/admin/admin-functions.php');
require_once(OF_FILEPATH.'/admin/admin-interface.php');

require_once(OF_FILEPATH.'/admin/themes-options.php');
require_once(OF_FILEPATH.'/admin/themes-functions.php');*/

add_theme_support('post-thumbnails');

add_action('init','register_my_menus');

function register_my_menus(){
	register_nav_menus(array('primary-menu'=>__('Primary Menu')));
}

function debug($d)
{
	echo "<pre>";
	print_r($d);
	echo "</pre>";
}

?>