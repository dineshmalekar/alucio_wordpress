<div class="contain">

    <?php query_posts('category_name=welcometoourschool&posts_per_page=1'); ?>
            <?php while(have_posts()):the_post(); ?>

            <div class="welcome_block">
                <h2><?php the_title(); ?></h2>
                <?php the_excerpt(); ?>
                <div class="readmore floatright"><a href="<?php the_permalink(); ?>">Read more</a></div>
                <div class="clear"></div>
            </div>
           <?php endwhile; ?>




        	
            <div class="photo_gallery">
            	<h2>Photo Gallery</h2>
                <div class="gallery_box">
               <!-- <div class="prev"></div>
                	<ul>
                    	<li><img src="<?php bloginfo('stylesheet_directory'); ?>/images/1.jpg" width="166" height="100" /></li>
                        <li><img src="<?php bloginfo('stylesheet_directory'); ?>/images/2.jpg" width="176" height="100" /></li>
                        <li class="last"><img src="<?php bloginfo('stylesheet_directory'); ?>/images/3.jpg" width="176" height="100"s /></li>
                    </ul>
                    <div class="next"></div>
                    <div class="clear"></div>-->
                    
                    
                 
				<div id="carousel">
                    <img src="<?php bloginfo('stylesheet_directory'); ?>/images/gallery/1.jpg" />
                    <img src="<?php bloginfo('stylesheet_directory'); ?>/images/gallery/2.jpg" />
                    <img src="<?php bloginfo('stylesheet_directory'); ?>/images/gallery/3.jpg" />
                    <img src="<?php bloginfo('stylesheet_directory'); ?>/images/gallery/4.jpg" />
                    <img src="<?php bloginfo('stylesheet_directory'); ?>/images/slider-img/2.jpg" />
                    <img src="<?php bloginfo('stylesheet_directory'); ?>/images/slider-img/3.jpg" />
			   </div>
                <a id="prev" href="#"></a>
                <a id="next" href="#"></a>
			<div id="pager"></div>
		    </div>  
            </div>
            <div class="student_view">
            	<h2>Students View</h2>
                <div class="view_box">
                	<div class="students_details first_st">
                    	<img src="<?php bloginfo('stylesheet_directory'); ?>/images/img1.jpg" width="173" height="107" />
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting.
                         <a href="#" class="floatright">Read more</a></p>
                        <div class="clear"></div>
                        <em>Ayush Sakya<br/>
                            class 10
                        </em>
                    </div>
                    <div class="students_details">
                    	<img src="<?php bloginfo('stylesheet_directory'); ?>/images/img1.jpg" width="173" height="107" />
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting.
                         <a href="#" class="floatright">Read more</a></p>
                        <div class="clear"></div>
                        <em>Ayush Sakya<br/>
                            class 10
                        </em>
                    </div>
                    <div class="students_details nomargin_right">
                    	<img src="<?php bloginfo('stylesheet_directory'); ?>/images/img1.jpg" width="173" height="107" />
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting.
                         <a href="#" class="floatright">Read more</a></p>
                        <div class="clear"></div>
                        <em>Ayush Sakya<br/>
                            class 10
                        </em>
                    </div>
                </div>
            </div>
            <div class="Booklet">
            	<!--<img src="<?php bloginfo('stylesheet_directory'); ?>/images/booklet.jpg" width="644" height="346" />-->
                <div id="mybook">
	        <div title="first page">
	            <h3>Page 1</h3>
	        </div>
	        <div title="second page">
	            <h3>Page 2</h3>
	        </div>
	        <div title="third page">
	            <h3>Page 3</h3>
	        </div>
	        <div title="fourth page">
	            <h3>Page 4</h3>
	        </div>
	        <div title="fifth page">
	            <h3>Page 5</h3>
	        </div>
	        <div title="sixth page">
	            <h3>Page 6</h3>
	        </div>
	        <div title="seventh page">
	            <h3>Page 7</h3>
	        </div>
	        <div title="eighth page">
	            <h3>Page 8</h3>
	        </div>
	    </div>
            </div>
            <div class="download">
             <!-- BEGIN Showing and hiding with CSS -->
      <h2>Download</h2>
      <div id="css3-animated-example">
        <h3>Hello</h3>
        <div>
          <div class="content">
            <p>This example simply sets a class attribute to the details and let's an
            external stylesheet toggle the collapsed state.</p>
            <p><a href="#">Download</a></p>
          </div>
        </div>
        <h3>Friend</h3>
        <div>
          <div class="content">
            <p>This example simply sets a class attribute to the details and let's an
            external stylesheet toggle the collapsed state.</p>
            <p>Hello Sir.</p>
          </div>
        </div>
        <h3>Foe</h3>
        <div>
          <div class="content">
            <p>This example simply sets a class attribute to the details and let's an
            external stylesheet toggle the collapsed state.</p>
          </div>
        </div>
      </div>
      
      <!-- END Showing and hiding with CSS -->
            </div>
             <div class="clear"></div> 
        </div>
        <div class="clear"></div>