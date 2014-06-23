</div>
</div>
<div class="footer">
	<div class="wrapper">
    	<div class="footer_link">
        	<h2>What They say</h2>
            <P>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It haLorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the </P>
            <em>Mr.Ram Kayastha - parent</em>
        </div>
        <div class="contact">
        	<h2>Contact Us</h2>
            <p>Genuine Higher Secondary School</p>
            <p>Bhaktapur, Nepal</p><br/><br/>
            <p>Phone :01-4254668</p>
            <p>Mobile :9841225689, 984966584</p>
            <p>Email : LoremHigher@gmail.com</p>
        </div>
        <div class="socialmedia">
        	<h2>Follow us on</h2>
        	<a href="#"><img src="<?php bloginfo('stylesheet_directory'); ?>/images/facebook.png" width="30" height="30" /></a>
            <a href="#"><img src="<?php bloginfo('stylesheet_directory'); ?>/images/twitter.png" width="30" height="30" /></a>
        </div>
        <div class="visit_count">
        	<h2>Visitors Count</h2>
        	<img src="<?php bloginfo('stylesheet_directory'); ?>/images/img3.jpg" width="180" height="154"/>
           
        </div>
        <div class="clear"></div>
        
    </div>
    <div class="footer_bottom">
    	<div class="separator">&nbsp;</div>
    	<div class="wrapper">
            <p>Copy Right Genuine Secondary School, 2013</p>
        </div>
    </div>
</div>
<!--accordin menu-->
   
    <script src="<?php bloginfo('stylesheet_directory'); ?>/js/vendor/json2.js"></script>
    <script src="<?php bloginfo('stylesheet_directory'); ?>/js/src/jquery.collapse.js"></script>
    <script src="<?php bloginfo('stylesheet_directory'); ?>/js/src/jquery.collapse_storage.js"></script>
    <script src="<?php bloginfo('stylesheet_directory'); ?>/js/src/jquery.collapse_cookie_storage.js"></script>
    <script>
        $("#css3-animated-example").collapse({
          accordion: true,
          persist: true,
          open: function() {
            this.addClass("open");
            this.css({ height: this.children().outerHeight() });
          },
          close: function() {
            this.css({ height: "0px" });
            this.removeClass("open");
          }
        });
      </script>
<!--according menu end-->
</body>
</html>
