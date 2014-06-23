<?php
function theme_url($url='')
{
	return  get_template_directory_uri() .'/'.rtrim($url, '/') ;
}


function asdfasdf_asdfadsf($title)
{
	return "<strong><br> social login</strong>". $title;
}

add_action('wp_footer', 'asdfasdf_asdfadsf');
add_filter('the_content','asdfasdf_asdfadsf');



function debug($d)
{
	echo "<pre>";
	print_r($d);
	echo "<pre>";
}



class Dnesh{

	function init()
	{
		add_action('after_setup_theme', array($this,'dinesh_theme_init'));
	}

	function dinesh_theme_init()
	{
		add_theme_support( 'post-thumbnails');		

        register_nav_menus( 
            array(
                'main_menu' => 'Main Menu',
                'footer_menu' => 'Footer Menu'
                ) 
        );	
	}

}

$d = new Dnesh;
$d->init();



add_action('template_redirect', 'cn_custom_meeting_template');

function cn_include_wordpress_template($t) 
{
    global $wp_query;
    if ($wp_query->is_404) {
        $wp_query->is_404 = false;
        $wp_query->is_archive = true;
    }
    header("HTTP/1.1 200 OK");
    include($t);
    exit;
}

function cn_custom_meeting_template() 
{
	$current_url = $_SERVER['REQUEST_URI'];

	$segments = explode('/', $current_url);

	$cn	= array_search('popular', $segments); 	

    $template='';

	$id	= (int)$cn + 1;	
    if(!isset($segments[$id]))
    {
        $id-=1;
    }

	if(!substr($segments[$id], 0, strrpos($segments[$id], '?')))
	{
		$slug = $segments[$id];
	}
	else
	{
		$slug = substr($segments[$id], 0, strrpos($segments[$id], '?'));
	}


    if ($segments[$cn]=='popular' AND $slug =='') 
    {
    	$template = 'template/popular.php';
    }


    if ($slug=='post') 
    {
    	   $template = 'template/post.php';
    }

    if ($slug=='page') 
    {
    	$template = 'template/page.php';
    }


    if($template)
    {
    	cn_include_wordpress_template($template);
	}
}


register_sidebar(
array(
'name'=>'Sidebar Home',
'id' => 'sidebar_home',
'before_widget' => '<div class="group block-widget  %2$s" id="%1$s">',
'after_widget' => '</div></div>',
'before_title' => '<h3>',
'after_title' => '</h3><div class="block-content">',
)
);


register_sidebar(
array(
'name'=>'Sidebar page',
'id' => 'sidebar_page',
'before_widget' => '<div class="group block-widget  %2$s" id="%1$s">',
'after_widget' => '</div></div>',
'before_title' => '<h3>',
'after_title' => '</h3><div class="block-content">',
)
);



register_sidebar(
array(
'name'=>'Sidebar footer',
'id' => 'sidebar_footer',
'before_widget' => '',
'after_widget' => '',
'before_title' => '',
'after_title' => '',
)
);



?>