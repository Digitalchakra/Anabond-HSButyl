<!-- product -->

<div class="product_pg">
  <h1>Contact US</h1>
  <form id="contactForm">
    <input type="hidden" name="submit_feedback" value=1/>
    <div class="contact_pg">
      <div class="cnt_lft">
        <table  border="5">
          <tr>
            <th class="cont_txt1 " scope="row">Your Name</th>
            <td><input class="cont_txt2" type="text"/ name="name"></td>
          </tr>
          <tr>
            <th class="cont_txt1 " scope="row">Company Name</th>
            <td><input class="cont_txt2" type="text"/ name="company"></td>
          </tr>
          <tr>
            <th class="cont_txt1 " scope="row">Phone Number*</th>
            <td><input class="cont_txt2" type="text"/ name="phone"></td>
          </tr>
          <tr>
            <th class="cont_txt1 " scope="row">Email Address*</th>
            <td><input class="cont_txt2" type="text"/ id="email" name="email">
              <br />
              <span id="email_err"></span></td>
          </tr>
        </table>
        <? if(isset($msg)) { echo "<p style='color:#72C34A;'>".$msg."</p>"; } ?>
      </div>
      <div class="cnt_rit ">
        <div class="connt_lft">
          <p><span>Anabond HS Butyl Private Limited</span><br />
            Type II, 36, Dr.VSI Industrial Estate<br />
            Thiruvanmiyur, Chennai,<br />
            Tamilnadu, India<br />
            Pin: 600041<br />
          </p>
          <p><span class="phone_img"> TelePhone Number: +91-44-2346 0041/42/43</span><br />
            <span class="fax_img">Fax Number: +91-44-2346 0048</span><br />
            <span class="mail_img"> <a href="mailto:marketing@anabodhsbutyl.com">marketing@anabodhsbutyl.com</a></span> </p>
        </div>
      </div>
    </div>
</div>
<div class="clearall"></div>
<div id="contact" class="contact ">

<div class="contact_lft">
      	<div class="contact_container">
        	
        	<div class="img_container">
          <!-- product drop down -->
				<div class="dd_menu">
					<div class="dropdown"> <a id="account" class="account" > <span>select market segment</span> </a>
						<div id="submenu" class="submenu" style="display: none; ">
						<ul class="root">
							<? foreach($product as $row) 
							{
							?>
							<li > <a imgname="<?=$row['image'];?>" pid="<?=$row['id'];?>" class= "market" ><?=$row['name'];?></a> </li>
						<? } ?>
					  </ul>
					  </div>
				  </div>
				 </div>
          <!-- product drop down -->
          <p id="pname">name</p>      
          <input id="productname" name="pname" type="hidden" value="">      
          <img id="pimage" src="<?=base_url('assets/images/0361-new.png');?>" alt="" title="" width="260px" height="260px"/>
          </div>
        </div>
        <table>
          <tr>
            <td class="cont_txt3">How can we help you?</td>
          </tr>
          <tr>
            <td><textarea class="cont_txt4" name="message"></textarea></td>
          </tr>
          <tr>
            <table>
              <tr>
                <td><?=$captcha['image'];?><input type="text" id="txtInput" name="captcha"/></td>
              </tr>
            </table>
          </tr>
          <tr>
            <td><input id="contact_submit" class="sss_send_btn" type="button" value=""/></td>
          </tr>
        </table>
  </div>
  </form>    
  <div class="contnt_rit">
    <iframe width="477" height="315" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.co.in/maps?f=q&amp;source=s_q&amp;hl=en&amp;geocode=&amp;q=Anabond+Adhesives+%26+Sealants,+Phase+II,+Tharamani,+Chennai,+Tamil+Nadu&amp;aq=0&amp;oq=Anabond+Adhesives+%26+Sealants+&amp;sll=12.978621,80.249773&amp;sspn=0.004595,0.008256&amp;ie=UTF8&amp;hq=Anabond+Adhesives+%26+Sealants,&amp;hnear=Phase+II,+Tharamani,+Chennai,+Tamil+Nadu&amp;t=m&amp;ll=12.97861,80.249784&amp;spn=0.006586,0.011072&amp;z=16&amp;iwloc=A&amp;output=embed"></iframe>
    <br />
    <small><a href="https://maps.google.co.in/maps?f=q&amp;source=embed&amp;hl=en&amp;geocode=&amp;q=Anabond+Adhesives+%26+Sealants,+Phase+II,+Tharamani,+Chennai,+Tamil+Nadu&amp;aq=0&amp;oq=Anabond+Adhesives+%26+Sealants+&amp;sll=12.978621,80.249773&amp;sspn=0.004595,0.008256&amp;ie=UTF8&amp;hq=Anabond+Adhesives+%26+Sealants,&amp;hnear=Phase+II,+Tharamani,+Chennai,+Tamil+Nadu&amp;t=m&amp;ll=12.97861,80.249784&amp;spn=0.006586,0.011072&amp;z=16&amp;iwloc=A" style="color:#0000FF;text-align:left" target="_blank">View Larger Map</a></small> 
    </div>
</div>
<div class="clearall"></div>

<script>
		$(document).ready(function()
		{
			$('#email').keydown(function()
			{
				 var email = $('#email').val();
				 if(email.length >1)
				 {
					var filter = /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;
					if (!filter.test(email)) {
					 $('#email_err').html('Please provide a valid email address.');
					}
					else
					{
						$('#email_err').html('');
					}
				}
				else
					{
						$('#email_err').html('');
					}
				});
				
				$('#contact_submit').click(function()
				{
					$.ajax({
					url:baseurl+"contact",
					data: $('#contactForm').serialize(),
					dataType:"JSON",
					type:"POST",
					success: function(result)
					{
					},
					error: function()
					{
						
					}
					});
					
					});
		});
    </script>