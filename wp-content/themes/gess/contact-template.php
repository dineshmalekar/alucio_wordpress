<?php
/*
Template Name: Contac Page
*/
get_header(); 


get_sidebar();

?>
<div class="contactus_block">
				<div class="form ">
						<h2>Send us a message</h2><br/>
						<p>Required fields are marked <span>*</span></p>
						<form action="" method="post">
							<table  border="0" cellpadding="5" cellspacing="5" width="500">
                                <tr>
                                <td><label>Name<span>*</span></label><br/>
                                <input type="text" class="text"  value="" name="" size="70"  />
                                </td>
                                </tr>
                                <tr>
                                <td><label>Email<span>*</span></label><br/>
                                <input type="password" value="" class="password " name="" size="70"  />
                                </td>
                                </tr>
                                <tr>
                                <td><label>Message Subject<span>*</span></label><br/>
                                <input type="text" class="text  " name="" size="70" />
                                </td>						   
                                </tr>
                                
                                <tr>
                                <td><label>Comment<span>*</span></label><br/>
                                <textarea rows="5" cols="54" name="" ></textarea>
                                </td>
                                </tr>
                                
                                <tr>
                                <td><label>Word Verification<span>*</span></label>
                                <div class="captcha"><img src="images/captcha.jpg"  height="40" /></div>
                                </td>
                                <tr>
                                <td><input type="text" class="text  " size="70" name=""   /></td></br>
                                </tr>
                                <tr>
                                <td><input type="submit" class="submit" value="submit" name="" />
                                <input name="reset" type="reset" class="submit" value="reset" name=""  />
                                </td>
                                
                                </tr>
					    	</table>
						</form>
					</div>
				<div class="address">
  
						<h3>Contact Address</h3>
						<p>School:<span>Genuine Higher Secondary School</span></p>
						<p>Phone no:<span>01-4254668</span></p>
						<p>Mobile no:<span>9841225689</span><span style="margin-left:8px;">/984966584</span></p>
						<p>Email:<span>LoremHigher@gmail.com</span></p>
					</div>
                    <div class="map">
         		    	<iframe width="425" height="350" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com.np/maps?f=q&amp;source=s_q&amp;hl=ne&amp;geocode=&amp;q=genuine+secondary+school+Bhaktapur&amp;sll=27.679652,85.436339&amp;sspn=0.020446,0.027595&amp;ie=UTF8&amp;hq=genuine+secondary+school&amp;hnear=%E0%A4%AD%E0%A4%95%E0%A5%8D%E0%A4%A4%E0%A4%AA%E0%A5%81%E0%A4%B0,+%E0%A4%AC%E0%A4%BE%E0%A4%97%E0%A4%AE%E0%A4%A4%E0%A5%80,+%E0%A4%AE%E0%A4%A7%E0%A5%8D%E0%A4%AF%E0%A4%AE%E0%A4%BE%E0%A4%9E%E0%A5%8D%E0%A4%9A%E0%A4%B2&amp;ll=27.679652,85.436339&amp;spn=0.008147,0.015217&amp;t=m&amp;output=embed"></iframe>
                    </div>
                <div class="clear"></div>
            </div> 

<?php
get_footer();
?>