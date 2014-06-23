<?php 
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme and one
 * of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query,
 * e.g., it puts together the home page when no home.php file exists.
 *
 * @link http://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage Twenty_Fourteen
 * @since Twenty Fourteen 1.0
 */
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title><?php bloginfo( 'name' ); ?></title>
<link href="<?php bloginfo('stylesheet_directory'); ?>/css/style.css" rel="stylesheet" type="text/css" />
<link href="<?php bloginfo('stylesheet_directory'); ?>/css/demo.css" rel="stylesheet" type="text/css" />
<link href='http://fonts.googleapis.com/css?family=Oswald' rel='stylesheet' type='text/css'>


<script src="<?php bloginfo('stylesheet_directory'); ?>/js/jquery.js" type="text/javascript"></script>
<script src="<?php bloginfo('stylesheet_directory'); ?>/js/jquery.carouFredSel-6.2.0-packed.js" type="text/javascript"></script>
<script type="text/javascript">
			$(function() {
				var $imgs = $('#images .carousel'),
					$capt = $('#captions .carousel'),
					$timr = $('#timer');

				$imgs.carouFredSel({
					circular: false,
					scroll: {
						easing: 'quadratic',
						duration: 2,
						timeoutDuration: 3000,
						onBefore: function( data ) {
							$capt.trigger( 'slideTo', [ '.' + data.items.visible.first().attr( 'alt' ) ] );
							$timr.stop().animate({
								opacity: 0
							}, data.scroll.duration);
						},
						onAfter: function() {
							$timr.stop().animate({
								opacity: 1
							}, 150);
						}
					},
					auto: {
						progress: '#timer'
					},
					pagination: {
						container: '.pager',
						anchorBuilder: function( i ) {
							return '<a class="p' + i + '" href="#"></a>';
						}
					}
				});
				$capt.carouFredSel({
					circular: false,
					auto: false,
					scroll: {
						easing: 'quadratic',
						duration: 2
					}
				});
			});
		</script>

<!--[if IE 7]>
	<link rel="stylesheet" href="<?php bloginfo('stylesheet_directory'); ?>/css/ie6.css" type="text/css" media="all" />	
	<![endif]-->
 	
 <!--photo gallery-->   
<!-- <script src="http://code.jquery.com/jquery-1.8.2.min.js" type="text/javascript"></script>-->
		<script src="<?php bloginfo('stylesheet_directory'); ?>/jquery.carouFredSel-6.1.0-packed.js" type="text/javascript"></script>
		<script type="text/javascript">
			$(function() {

				$('#carousel').carouFredSel({
					width: 644,
					items: 3,
					scroll: 1,
					auto: {
						duration: 1250,
						timeoutDuration: 2500
					},
					prev: '#prev',
					next: '#next',
					pagination: '#pager'
				});
	
			});
		</script>
		<style type="text/css">
			

			#carousel img {
				width: 201px;
				height: 127px;
				margin: 0 5px;
				float: left;
			}
		/*	#prev, #next {
				background:url(images/slider-img/carousel_control.png) no-repeat 0 0;
				text-indent: -999px;
				display: block;
				overflow: hidden;
				width: 15px;
				height: 21px;
				position: absolute;
				top: 65px;
			}*/
			#prev {
				background-position: 0 0;
				position: absolute;
				background:url(images/slider-img/prev1.png) no-repeat 0 0;
				display:block;
				width:30px;
				height:30px;
				top:57px;
				left: -1px;
			}
			#prev:hover {
				left: 0;
			}			
			/*#next {
				background-position: -18px 0;
				right: 30px;
			}*/
			#next {
				background-position: 0 0;
				position: absolute;
				background:url(images/slider-img/next1.png) no-repeat 0 0;
				display:block;
				width:30px;
				height:30px;
				top:57px;
				right: -1px;
			}
			#next:hover {
				right: 0;
			}				
			#pager {
				text-align: center;
				margin: 0 auto;
				padding-top: 20px;
			}
			#pager a {
				/*background: transparent url(images/slider-img/carousel_control.png) no-repeat -2px -32px;*/
				text-decoration: none;
				text-indent: -999px;
				display: inline-block;
				overflow: hidden;
				width: 8px;
				height: 8px;
				margin: 0 5px 0 0;
			}
			#pager a.selected {
				/*background: transparent url(images/slider-img/carousel_control.png) no-repeat -12px -32px;*/
				text-decoration: underline;				
			}

			#donate-spacer {
				height: 100%;
			}
			#donate {
				border-top: 1px solid #999;
				width: 750px;
				padding: 50px 75px;
				margin: 0 auto;
				overflow: hidden;
			}
			#donate p, #donate form {
				margin: 0;
				float: left;
			}
			#donate p {
				width: 650px;
			}
			#donate form {
				width: 100px;
			}
		</style>
  <!--photo gallery end-->  
 
<!--Booklet start-->   
  <script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.10.1/jquery-ui.min.js" type="text/javascript"></script>  
    <script src="<?php bloginfo('stylesheet_directory'); ?>/js/booklet/jquery.easing.1.3.js" type="text/javascript"></script>
    <script src="<?php bloginfo('stylesheet_directory'); ?>/js/booklet/jquery.booklet.latest.js" type="text/javascript"></script>
    <link href="<?php bloginfo('stylesheet_directory'); ?>/js/booklet/jquery.booklet.latest.css" type="text/css" rel="stylesheet" media="screen, projection, tv" />
    <script type="text/javascript">
	    $(function () {		
	        $("#mybook").booklet();
	    });
    </script>
<!--Booklet end-->
</head>

<body>
<div class="header">
	<div class="wrapper">
    	<div class="Biz-logo"><a href="index.html"><img src="<?php bloginfo('stylesheet_directory'); ?>/images/logo.png" width="138" height="138" /></a></div>
        <div class="slogan">
        	<h1><a href="index.html"><img src="<?php bloginfo('stylesheet_directory'); ?>/images/slogan.png" width="670"  /></a><br/>
        	<span>Dekoccha-4, Bhaktapur, Nepal</span></h1>
        </div>
        <div class="call">
        	<img src="<?php bloginfo('stylesheet_directory'); ?>/images/callbtm.png" width="162" height="48" />
        </div>
        <div class="clear"></div>
        <div class="misc">
        	<div class="book"><img src="<?php bloginfo('stylesheet_directory'); ?>/images/book.png" width="148" height="66" /></div>
    		<div class="man"><img src="<?php bloginfo('stylesheet_directory'); ?>/images/man.png" width="156" height="92" /></div>
            <div class="cloud"><img src="<?php bloginfo('stylesheet_directory'); ?>/images/cloud.png" width="688" height="41" /></div>
        </div>
        <div class="clear"></div>
        <div class="navslider">
       		<div class="navbar">
            	<ul>
            		<li class="education"><a href="#">Education is Power</a></li>
            		<?php wp_nav_menu(array('theme_location'=>'primary-menu')); ?>
                 <!-- <li class="education"><a href="#">Education is Power</a></li>
                  <li><a href="index.html">HOME</a></li>
                  <li><a href="aboutus.html">ABOUT US</a>
                  	<ul>
						<li><a href="#">item1</a></li>                                            
						<li><a href="#">item2</a></li>                                            
						<li><a href="#">item3</a></li>                    
                    </ul>
                  
                  </li>
                  
                  <li><a href="#">MANAGEMENT TEAM</a>
                      	<ul>
						<li><a href="#">item1</a></li>                                            
						<li><a href="#">item2</a></li>                                            
						<li><a href="#">item3</a></li>                    
                    </ul>
                  </li>
                  <li><a href="#">GALLERY</a></li>
                   <li><a href="#">NOTICES</a>
                    <ul>
						<li><a href="marksheet.html">marksheet</a></li>                  
                    </ul> 
                  
                  </li>
                  <li><a href="contactus.html">CONTACT US</a></li>-->
           	  </ul>
        	</div>
            <div class="subnav">
            	<ul>
                	<li><a href="#">Mission Statement</a></li>                    
                	<li><a href="#">School Curriculum</a></li>                    
                	<li><a href="#">Homework Policies</a></li>                    
                	<li><a href="#">Complaint Procedure</a></li>
                	<li><a href="#">Libery</a></li>                    
                	<li><a href="#">Parent Corner</a></li>                    
                	<li><a href="#">Newsletter</a></li>
                   	<li><a href="#">Calender</a></li>
                  	<li><a href="#">Downloads</a></li>
                   	<li><a href="#">Work with us</a></li>
                </ul>
            </div>
            <div class="slider"><!--<img src="images/slider_img.jpg" width="672" height="284" />-->
            <div id="wrapper">
			<div id="images">
				<div class="carousel">
					<img src="<?php bloginfo('stylesheet_directory'); ?>/images/slider-img/slider_img.jpg" alt="lodding" width="672" height="284" />
					<img src="<?php bloginfo('stylesheet_directory'); ?>/images/slider-img/slider_img1.jpg" alt="lodding" width="672" height="284" />
					<img src="<?php bloginfo('stylesheet_directory'); ?>/images/slider-img/slider_img2.jpg" alt="lodding" width="672" height="284" />
			
				</div>
			</div>
			<div id="timer"></div>
			<div id="captions">
				<div class="carousel">
					<!--<div class="cod">Call Of Duty
						<div class="pager"></div>
					</div>-->
					<!--<div class="gta">Grand Theft Auto
						<div class="pager"></div>
					</div>-->
					<!--<div class="mgs">Metal Gear Solid
						<div class="pager"></div>
					</div>-->
				</div>
			</div>
		</div>
            <img src="<?php bloginfo('stylesheet_directory'); ?><?php bloginfo('stylesheet_directory'); ?>/images/shadow.png" width="556" height="12" class="shadow" />
            </div>
            <div class="clear"></div>
        </div>
    </div>
</div>
<div class="maincontain">
    <div class="wrapper">