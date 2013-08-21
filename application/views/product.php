<link rel="stylesheet" href="<?=base_url('assets/css/font-awesome.min.css');?>">
<!--<link rel="stylesheet" href="http://code.jquery.com/ui/1.10.3/themes/smoothness/jquery-ui.css" /> -->


<? $page = $this->uri->segment(1); $mid = $this->uri->segment(3);?>

<!-- product -->
<div class="product_pg">
<!-- product icon -->
	<div class="icon_conainer">
		
		<? if($page =="market"){ ?>
  	<div class="icon_box_bg" onclick="window.location.href = '<?=base_url('market/index/1');?>';">
    <div class="icon_box_p <? if($mid==1) { echo ' market_hover';}?>">   
      <div class="icon_box1">      
      </div>
      <p>Construction</p>    
    </div>
    </div>
  	<div class="icon_box_bg" onclick="window.location.href = '<?=base_url('market/index/2');?>';">
    <div class="icon_box_p <? if($mid==2) { echo ' market_hover';}?>">   
      <div class="icon_box2">      
      </div>
      <p>Automobile</p>    
    </div>
    </div>
  	<div class="icon_box_bg">
    <div class="icon_box_p">    
      <div class="icon_box3">      
      </div>
      <p>Windmill</p>    
    </div>
    </div>
  	<div class="icon_box_bg">
    <div class="icon_box_p">    
      <div class="icon_box4">      
      </div>
      <p>Aerospace</p>    
    </div>
    </div>
    
  	<div class="icon_box_bg">
    <div class="icon_box_p">    
      <div class="icon_box5">      
      </div>
      <p>Electrical Industries</p>    
    </div>
      </div>
  	<div class="icon_box_bg">
    <div class="icon_box_p">    
      <div class="icon_box6">      
      </div>
      <p>Silos</p>    
    </div>
    </div>
    
  </div>
  
<? } ?>
<div class="clearall"></div>

<!-- end product icon -->
  <h1><?=$product_head['name']?></h1>
  <p class="pg2_cnt1">HS Butyl are pleased to announce a new butyl tape to their comprehensive range of butyl tapes.Our new 0800 product has been designed for use within the Vehicle Construction Sector.HS Butyl are pleased to announce a new butyl tape to their comprehensive range of butyl tapes. </p>
  <br /><br /><br />
  <div class="clearall"></div>
  <div class="scroll">
  	<div class="srl_left">
    	<!--		dropdown menu  -->
			<div class="dd_menu_product">
        <div class="dropdown">
			<a id="account" class="account" >
				<span>
					<?
					if(isset($selectedID) && ($selectedID))
					echo $product_first['name'];
					else
					echo 'Select Product';
					?>
				</span>
			</a>
        	<div id="submenu" class="submenu" style="display: none; ">
            <ul class="root_producr">
            	<? foreach($product as $row) 
							{
							?>
               <li > <a href="<?=base_url('product/index').'/'.$row['id'];?>"><?=$row['name'];?></a> </li>
						<? } ?>
          </ul>
          </div>
      </div>
     </div>
      
<!--		dropdown menu end  --> 
    </div>
  	<div class="srl_rit">
		<form action="<?=base_url('contact');?>" method="POST">
			<input type="hidden" name="product_name" value="<?=$product_first['name'];?>" />
			<input type="hidden" name="product_image" value="<?=$product_first['image'];?>" />
			<input class="pg2_enq"  type="submit" value="" />
		</form>
            
        <p class="phone">Or &nbsp;Call:  +91-44-2346 0041/42/43</p>
    </div>
  </div><div class="clearall"></div>
  <div class="pg2_container">
    <div class="pg2_cnt_lft">
		 <div class="center_box">
        <p><b><?=$product_first['name'];?></b></p>
        <div class="center_bx1"> <img src="<?=base_url('assets/images/icon_L').'/'.$product_first['image'].'.png';?>" alt="" title=""/> </div>
      </div>
      
      <div class="product_container2">
        <div class="pro_lft">
          <p>MAKE AN ENQUIRY</p>
          <form id="contactForm">
		<input type="hidden" name="submit_feedback" value="submit" />
		<span style="display:none" id="phone_err"> </span>
		<span style="display:none" id="company_err"> </span>
          <input name="name" class="textbx" type="text" value="Name" onblur="if (this.value == '') {this.value = 'Name';}" onfocus="if (this.value == 'Name') {this.value = '';}" />
          <br />
              <span class="err" id="name_err"></span>
          <input id="email" name="email" class="textbx or_top_margin" type="text" value="Enter Email or Phone Number" onblur="if (this.value == '') {this.value = 'Enter Email or Phone Number';}" onfocus="if (this.value == 'Enter Email or Phone Number') {this.value = '';}"/>
          <br />
              <span class="err" id="email_err"></span>
          
          <textarea name="message" value="Post Enquiry Here" onblur="if (this.value == '') {this.value = 'Post Enquiry Here';}" onfocus="if (this.value == 'Post Enquiry Here') {this.value = '';}"></textarea>
          <br />
              <span class="err" id="message_err"></span>
          <input id="productname" name="pname" type="hidden" value="<?=$product_first['name'];?>"> 
          <div class="captcha_img" id="captcha_img"></div><span class="cap_get" id="getcaptcha">&nbsp;</span>
          <div class="clearall"></div>
          <input class="captcha_txt" type="text" id="txtInput" name="captcha"/>
          <br />
             <span class="err" style='color:#FF0000; display:block; clear:both; font-size:13px!important;' id="captcha_err"></span>
          <input class="sss_post_btn" type="button" id="contact_submit" value="" />
          </form>
          <span class="err" style='color:#72C34A;  font-size:13px;' id="msg_disp"></span>
        </div>
      </div>
    </div>
    <div class="pg2_cnt_rit">
<!--     <div class="center_box">
        <p><b><?=$product_first['name'];?></b></p>
        <div class="center_bx1"> <img src="<?=base_url('assets/images/icon_L').'/'.$product_first['image'].'.png';?>" alt="" title=""/> </div>
      </div>-->
      <div class="rit_box">
        <ul>
          <li>Good adhesion to a wide range of substrates</li>
          <li>Good UV resistance</li>
          <li>The softer composition makes this product highly conformable</li>
          <li>Remains flexible throughout its service life</li>
          <li>Easy and accurate to use with little waste and no mess</li>
          <li>High tack</li>
        </ul>
        <div class="clearall"></div>
        <p class="sss_t1">Potential Applications:</p>
        <div class="clearall"></div>
        <div> <span class="img1" href="#"></span>
          <p>Automobile</p>
        </div>
        <div class="clearall"></div>
        <!-- <div> <span class="img2" href="#"></span>
          <p>Construction</p>
        </div> -->
        <div class="clearall"></div>

      </div>
      <div class="clearall"></div>
      <div class="tabbed_menu sss_relative">        
        <div id="tabs" class="container">
		  <ul class="tabs">
			<li><a href="#tab1">Product Description</a></li>
			<!--<li><a href="#tab2">Technical Information</a></li>-->
			<li><a>Technical Information</a></li>
		<!--	<li class="dwnld"><a href="#tab3"><span class="icon_dld"></span>Download</a></li>-->
		  </ul>
		  <div class="tab_container">
			<div id="tab1" class="tab_content">
			  <p class="bulll">0303 is a general purpose butyl tape.</p>
			  <p class="bulll">Product uses</p>
			  <p class="bulll">For use as an air, dust or water seal for compression joints and seams.</p>
			  <p class="bulll">For Water sealing applications in vechicle construction.</p>
			</div>
			<!--<div id="tab2" class="tab_content">
			  <p class="bulll">0303 is a general purpose butyl tape.</p>
			  <p class="bulll">Product uses</p>
			</div>-->
<!--			<div id="tab3" class="tab_content">
				<a class="dwld_btn">Download PDF</a>
			</div>-->
		  </div>
		  <!--<span class="sss_download"></span>-->
		</div>
      </div>
      
    </div>
    <div class="clearall"></div>
  </div>
  <div class="clearall"></div>
</div>
<br/>
<br/>
<br/>
<br/>
<br/>
	 <script src="http://code.jquery.com/ui/1.10.3/jquery-ui.js"></script>
    <script src="<?=base_url('assets/js/product.js');?>"></script>