<div class="sidebar">

           <?php $post = get_post(10);?>
            <?php while($post): ?>
        	<div class="chairman_block">
            	<h2><?php $post->post_title; ?></h2>
                <?php $post->post_content; ?>
                <?php get_the_post_thumbnail($post->ID); ?>
                <div class="clear"></div>
                <div class="readmore floatleft"><a href="<?php get_the_permalink($post->ID); ?>">Rad more</a></div>
           	</div>
           <?php endwhile; ?>



            <div class="news_block">
            	<h2>News & Notices</h2>
                <div class="calender">
                  <div class="cal_img">
                  	<span>Fri<br/> 05<br/> Apr</span>
                  </div>
                    <p>Geniune Secondary School Informeniune Secondary School Information Session May 7, 2013</p>
                    <div class="clear"></div>
                    <a href="#" class="floatright">Read more</a>
                </div>
                <div class="calender nomargin_bottom">
                  <div class="cal_img">
                  	<span>Fri<br/> 05<br/> Apr</span>
                  </div>
                    <p>Geniune Secondary School Informeniune Secondary School Information Session May 7, 2013</p>
                    <div class="clear"></div>
                    <a href="#" class="floatright">Read more</a>
                </div>
            </div>
            <div class="google_add">
            	<h2>Google Add</h2>
                <img src="<?php bloginfo('stylesheet_directory'); ?>/images/google_add.jpg" width="275" height="153" />
            </div>
            <div class="search_block">
                <h2>Search Result</h2>
                <input type="text" value="" />       
                <input type="text" value="" />
                <input type="text" value="" />
                <input type="submit" value="ok" class="submit floatright" />
            </div>
            <div class="Branch_block">
            	<h2>Our Branch</h2>
                <img src="<?php bloginfo('stylesheet_directory'); ?>/images/img2.jpg" width="141" height="95" />
                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley .</p>
                
          
                <a href="#" class="floatright">Read more</a>
            </div>
            <div class="clear"></div>
        </div>