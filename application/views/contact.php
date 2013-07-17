<!-- product -->

<div class="product_pg">
  <h1>Contact US</h1>
  <form id="contactForm">
    <input type="hidden" name="submit_feedback" value="submit" />
    <div class="contact_pg">
      <div class="cnt_lft">
        <table  border="5">
          <tr>
            <th class="cont_txt1 " scope="row">Your Name</th>
            <td><input class="cont_txt2" type="text"/ name="name"><br />
              <span class="err" style='color:#FF0000;' id="name_err"></span></td>
          </tr>
          <tr>
            <th class="cont_txt1 " scope="row">Company Name</th>
            <td><input class="cont_txt2" type="text"/ name="company"><br />
              <span class="err" style='color:#FF0000;' id="company_err"></span></td>
          </tr>
          <tr>
            <th class="cont_txt1 " scope="row">Phone Number</th>
            <td><input class="cont_txt2" type="text"/ name="phone"><br />
              <span class="err" style='color:#FF0000;' id="phone_err"></span></td>
          </tr>
          <tr>
            <th class="cont_txt1 " scope="row">Email Address*</th>
            <td><input class="cont_txt2" type="text"/ id="email" name="email">
              <br />
              <span class="err" style='color:#FF0000;' id="email_err"></span></td>
          </tr>
        </table>
        <input id="productname" name="pname" type="hidden" value="<? if(isset($product_name)) { echo $product_name; }?>"> 
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
        	
        	<div id="img_container" class="img_container">
          <!-- product drop down -->
				<div class="dd_menu">
					<div class="dropdown"> <a id="account" class="account" > <span> <? if(isset($product_name)) { echo $product_name; } else { echo 'select product';} ?></span> </a>
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
          <p id="pname"><? if(isset($product_name)) { echo $product_name; } else { echo 'Product Name'; }?></p>      
               <? if(isset($product_name)) { ?>
                <img id="pimage" src="<?=base_url('assets/images/icon_S').'/'.$product_image.'.png';?>" alt="" title="" width="260px" height="260px"/>
                <?} else {?> 
                 <img id="pimage" src="<?=base_url('assets/images/icon_S/default.png');?>" alt="" title="" width="260px" height="260px"/>
                <? }?>
          </div>
        </div>
        <table>
          <tr>
            <td class="cont_txt3">How can we help you?</td>
          </tr>
          <tr>
            <td><textarea class="cont_txt4" name="message"></textarea><br />
              <span class="err" style='color:#FF0000;' id="message_err"></span></td>
          </tr>
          <tr>
            <table>
              <tr>
                <td><?=$captcha['image'];?><input type="text" id="txtInput" name="captcha"/><br />
              <span class="err" style='color:#FF0000;' id="captcha_err"></span></td>
              </tr>
            </table>
          </tr>
          <tr>
            <td><input id="contact_submit" class="sss_send_btn" type="button" value=""/></td>
          </tr>
        </table>
        <p class="err" style='color:#72C34A;' id="msg_disp"></p>
  </div>
  </form>    
  <div class="contnt_rit">
    <iframe width="477" height="315" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.co.in/maps?f=q&amp;source=s_q&amp;hl=en&amp;geocode=&amp;q=Anabond+Adhesives+%26+Sealants,+Phase+II,+Tharamani,+Chennai,+Tamil+Nadu&amp;aq=0&amp;oq=Anabond+Adhesives+%26+Sealants+&amp;sll=12.978621,80.249773&amp;sspn=0.004595,0.008256&amp;ie=UTF8&amp;hq=Anabond+Adhesives+%26+Sealants,&amp;hnear=Phase+II,+Tharamani,+Chennai,+Tamil+Nadu&amp;t=m&amp;ll=12.97861,80.249784&amp;spn=0.006586,0.011072&amp;z=16&amp;iwloc=A&amp;output=embed"></iframe>
    <br />
    <small><a href="https://maps.google.co.in/maps?f=q&amp;source=embed&amp;hl=en&amp;geocode=&amp;q=Anabond+Adhesives+%26+Sealants,+Phase+II,+Tharamani,+Chennai,+Tamil+Nadu&amp;aq=0&amp;oq=Anabond+Adhesives+%26+Sealants+&amp;sll=12.978621,80.249773&amp;sspn=0.004595,0.008256&amp;ie=UTF8&amp;hq=Anabond+Adhesives+%26+Sealants,&amp;hnear=Phase+II,+Tharamani,+Chennai,+Tamil+Nadu&amp;t=m&amp;ll=12.97861,80.249784&amp;spn=0.006586,0.011072&amp;z=16&amp;iwloc=A" style="color:#0000FF;text-align:left" target="_blank">View Larger Map</a></small> 
    </div>
</div>
<div class="clearall"></div>
<script src="<?=base_url('assets/js/contact.js');?>"></script>